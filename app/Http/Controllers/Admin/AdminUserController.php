<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class AdminUserController extends Controller
{
    public function index(){


        return view('admin.user.user');
    }
}