<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    //Open home page
    public function index()
    {
        return view('listings.index');
    }
}