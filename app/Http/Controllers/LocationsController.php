<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Response;

class LocationsController extends Controller
{
    public function index()
    {
        $locations = Location::all();

        return response()->json($locations, Response::HTTP_OK);
    }
}
