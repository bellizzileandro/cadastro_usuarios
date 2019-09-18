<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;


class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $current = Carbon::now(new \DateTimeZone('America/Sao_Paulo'));
        $currentHour = $current->hour;
        $currentMinute = $current->minute;

        if($currentHour < 12) {
            $greeting = "bom dia";
        } else if($currentHour == 12) {
            if($currentMinute > 0) {
                $greeting = "boa tarde";
            } else {
                $greeting = "bom dia";
            }
        } else if( $currentHour <= 18) {
            if($currentMinute > 0) {
                $greeting = "boa tarde";
            } else {
                $greeting = "boa noite";
            }
        } else {
            $greeting = "boa noite";
        }

        return view('welcome', compact('greeting'));
    }

    /**
     * Show the application login
     * 
     * @return \Illuminate\Contract\Support\Renderable
     */
    public function start() {
        return view('auth.login');
    }

    
}
