<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Event;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use App\Services\EventServices;
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
                if ($event === 0) {
                    return redirect()->back()->with([
                        'message' => 'vous aves create compte pour   Club ',
                        'success' => false,
                    ]);
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
    public function success(Request $request)
    {
        $eventId = $request->route('event_id');

        $reservationId = $this->save($eventId);

        $culb= $this->eventServices->Event_club($eventId);

        if ($reservationId) {
            return redirect()->route('categorie',$culb->club_id)->with([
                'message' => 'Reservation succès',
                'success' => true,
            ]);
        }
    }

    protected function save($eventId)
    {
      return  $this->eventServices->reserveevent($eventId);


    }
}