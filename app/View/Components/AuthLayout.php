<?php

namespace App\View\Components;
use Closure;
use Illuminate\View\Component;
use Illuminate\View\View;

class AuthLayout extends Component
{
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.auth');
    }
}