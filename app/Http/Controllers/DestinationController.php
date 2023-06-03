<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\PhotoDestination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index($id)
    {
        $photos = PhotoDestination::where('destination_id', $id)->get();
        $destination = Destination::find($id);
        return view('page.destinationDetail', ['destination' => $destination, 'photos' => $photos]);
    }
}
