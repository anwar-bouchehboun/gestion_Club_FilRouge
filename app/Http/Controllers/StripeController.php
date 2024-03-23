<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Checkout\Session;

class StripeController extends Controller
{
    public function session(Request $request)
    {
        // dd($request->get('price'));
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        $totalprice = $request->get('price');
        $two0 = "00";
        $total = "$totalprice$two0";
        // dd($total);
        $session = Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'USD',
                        'product_data' => [
                            "name" => 'Event ',
                        ],
                        'unit_amount' => $total,
                    ],
                     'quantity'   => 1,
                ],

            ],
            'mode' => 'payment',
            'success_url' => route('success'),
            //  'cancel_url' => route(''),
        ]);

        return redirect()->away($session->url);
    }
    public function success()
    {
        return "Thanks for you order You have just completed your payment. The seeler will reach out to you as soon as possible";
    }
}
