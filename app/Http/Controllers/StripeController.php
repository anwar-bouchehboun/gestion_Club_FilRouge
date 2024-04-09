<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Reservation;
use App\Services\EventServices;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Illuminate\Support\Facades\Auth;

class StripeController extends Controller
{
    public function __construct(
        protected EventServices $eventServices
    ) {
    }
    public function session(Request $request)
    {
        try {
            if (Auth::user()->role == 'client') {

                $event = $this->eventServices->find($request);
                if (!$event) {
                    abort(404, 'Event not found');
                }

                \Stripe\Stripe::setApiKey(config('stripe.sk'));
                $totalprice = $event->prix;
                $two0 = "00";
                $total = "$totalprice$two0";
                // dd($total);
                $session = Session::create([
                    'line_items' => [
                        [
                            'price_data' => [
                                'currency' => 'USD',
                                'product_data' => [
                                    "name" => $event->name,
                                ],
                                'unit_amount' => $total,
                            ],
                            'quantity' => 1,
                        ],

                    ],
                    'mode' => 'payment',
                    'success_url' => route('success', ['event_id' => $event->id]),
                    //   'cancel_url' => back(),
                ]);


                if ($session) {
                    return redirect()->away($session->url);

                }
            }
        } catch (\Throwable $th) {
            throw $th;
        }

    }
    public function success(Request $request, $event_id)
    {
        $eventId = $request->route('event_id');

        $reservationId = $this->save($eventId);

        if ($reservationId) {
            return view('client.finpayment');
        }
    }

    protected function save($eventId)
    {
        return $this->eventServices->reserveevent($eventId);
    }
}