<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Buyer;
use App\Models\Property;
use App\Models\Seller;
use App\Models\Visit;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $sellers = Seller::all();
        $buyers = Buyer::all();
        $visits = Visit::all();
        $agents = Agent::all();
        return view('home')
            ->with('sellers',$sellers)
            ->with('buyers',$buyers)
            ->with('agents',$agents)
            ->with('visits',$visits);
    }
}
