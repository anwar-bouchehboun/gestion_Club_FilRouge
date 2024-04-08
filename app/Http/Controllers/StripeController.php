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

        $event = $this->eventServices->find($request);
        if (!$event) {
            abort(404, 'Event not found');
        }
        // dd($event);
        //    $data=$this->eventServices->reserveevent($request);
        // dd($data->reservable->prix);
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
            'success_url' => route('success'),
            //  'cancel_url' => route(''),
        ]);

        if ($session) {
        $this->save($event->id);
            return redirect()->away($session->url);
        }

    }
    public function success()
    {
        return "Thanks for you order You have just completed your payment. The seeler will reach out to you as soon as possible";
    }
    protected  function save($eventId){
      return  $this->eventServices->reserveevent($eventId);
    }
}