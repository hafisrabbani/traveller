<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Rating;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        for ($i = 1; $i <= 6; $i++) {
            if (Rating::where('destination_id', "$i")->get()->count() > 0) {
                $rating[$i] = number_format(Rating::where('destination_id', "$i")->sum('rating') / Rating::where('destination_id', "$i")->get()->count());
            } else {
                $rating[$i] = 0;
            }
        }

        $destinations = Destination::all();
        return view('page.home', ['destinations' => $destinations, 'rating' => $rating]);
    }
}
