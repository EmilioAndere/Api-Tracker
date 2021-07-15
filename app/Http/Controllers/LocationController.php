<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function getLocations() {
        $locations = Location::all();
        echo $locations;
    }

    public function saveLocation($lat,$lng,$img,$title,$text) {
        $location = new Location();


        $location->lat = $lat;
        $location->lng = $lng;
        $location->title = $title;
        $location->image = base64_decode($img);
        $location->description = $text;

        $location->save();
    }   
}
