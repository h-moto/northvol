<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;

class OfferController extends Controller
{

    public function index(Offer $offer)
    {
        return view('offer/index')->with(['offers' => $offer ->get()]);
    }

}
//return $post->get();