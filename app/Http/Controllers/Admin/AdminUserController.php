<?php

namespace App\Http\Controllers\Admin;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Interface\AuthInterface;
use App\Http\Controllers\Controller;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class AdminUserController extends Controller
{
    public function __construct(protected AuthInterface $authInterface)
    {

    }
    public function index()
    {
        // $users = $this->authInterface->all();
        // $user = $this->authInterface->all();
        // dd($users);
        return view('admin.user.user', );
    }


    public function search(Request $request)
    {
        $user = $this->authInterface->all($request);
        // dd(response()->json($user));
        return response()->json($user);
    }
    public function destroy($id)
    {
        try{
            $userDelete =$this->authInterface->destroy($id);
            return response()->json($userDelete);
        }   catch (\Throwable $th) {
            return view('error.404');
        }


    }
}