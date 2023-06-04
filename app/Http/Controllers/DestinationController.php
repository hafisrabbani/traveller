<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Destination;
use App\Models\PhotoDestination;
use App\Models\Rating;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function detail($id)
    {
        $photos = PhotoDestination::where('destination_id', $id)->get();
        $destination = Destination::find($id);
        return view('page.destinationDetail', ['destination' => $destination, 'photos' => $photos, 'id' => $id]);
    }

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
        return view('page.destination', ['destinations' => $destinations, 'rating' => $rating]);
    }

    public function commentCreate(Request $request)
    {
        Comment::create([
            'name' => $request->name,
            'comment' => $request->comment,
            'destination_id' => $request->destination_id
        ]);

        return back()->with('success', 'Comment sended!');
    }

    public function ratingCreate(Request $request)
    {
        Rating::create([
            'rating' => $request->rating,
            'destination_id' => $request->destination_id
        ]);

        return back()->with('success', 'rating recorded!');
    }
}
