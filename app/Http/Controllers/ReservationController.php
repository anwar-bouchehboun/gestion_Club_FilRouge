<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use App\Models\Souscategorie;
use Illuminate\Support\Facades\Auth;
use App\Services\SousCategorieServices;



class ReservationController extends Controller
{

    public function __construct(protected SousCategorieServices $sousCategorieServices)
    {

    }
    public function session(Request $request)
    {
        try {
            if (Auth::user()->role == 'client') {
                $sous = $this->sousCategorieServices->findFail($request);

                if ($sous === 0) {
                    return redirect()->back()->with([
                        'message' => 'vous aves create compte pour   Club ',
                        'success' => false,
                    ]);
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
        } catch (\Throwable $th) {
            throw $th;
        }


    }
    public function successsous(Request $request)
    {
        $sousId = $request->route('sous_id');

        $reservationId = $this->save($sousId);
         $sous=$this->sousCategorieServices->SouscaegoriePayer($sousId);
        // dd($sous->id);
    if ($reservationId) {
            return redirect()->route('show.reseve',$sous->id)->with([
                'message' => 'choisir SousCategorie succès',
                'success' => true,
            ]);
     }
    }
    protected function save($sousId)
    {

        return $this->sousCategorieServices->reservesous($sousId);
    }
}