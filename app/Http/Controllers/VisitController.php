<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Property;
use App\Models\Visit;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $visits = Visit::all();
        return view('admin.visits.index')->with('visits', $visits);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $buyers = Buyer::all();
        $properties = Property::all();
        return view('admin.visits.create')
            ->with('buyers', $buyers)
            ->with('properties', $properties);
    }

   
}
