<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Services\SousCategorieServices;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;



class ReservationController extends Controller
{

    public function __construct(protected SousCategorieServices $sousCategorieServices){

    }
    public function session(Request $request)
    {

        $sous =$this->sousCategorieServices->findFail($request);

        if (!$sous) {
            abort(404, 'Sous Categorie not found');
        }

        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        $totalprice = $sous->price;
        $two0 = "00";
        $total = "$totalprice$two0";
        $session = Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'USD',
                        'product_data' => [
                            "name" => $sous->name,
                        ],
                        'unit_amount' => $total,
                    ],
                    'quantity' => 1,
                ],

            ],
            'mode' => 'payment',

            'success_url' => route('successsous', ['sous_id' => $sous->id]),
            //  'cancel_url' => route(''),
        ]);

        if ($session) {

            return redirect()->away($session->url);
        }

    }
    public function successsous(Request $request,$sous_id)
    {
        $sousId = $request->route('sous_id');

        $reservationId = $this->save($sousId);

        if ($reservationId) {
            return "Thanks for your order. You have just completed your payment. The seller will reach out to you as soon as possible.";
        }
    }
    protected  function save($sousId){
     
       return  $this->sousCategorieServices->reservesous($sousId);
    }
}