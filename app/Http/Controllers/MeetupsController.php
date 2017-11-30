<?php

namespace App\Http\Controllers;

use App\Meetup;
use App\User;
use Illuminate\Http\Response;

class MeetupsController extends Controller
{
    public function index()
    {
        $meetups = Meetup::all();

        return response()->json($meetups, Response::HTTP_OK);
    }

    public function read($meetupId)
    {
        $meetup = Meetup::findOrFail($meetupId);

        if ($meetup) {
            $httpStatusCode = Response::HTTP_OK;
        } else {
            $httpStatusCode = Response::HTTP_NOT_FOUND;
        }

        return response()->json($meetup, $httpStatusCode);
    }

    public function users($meetupId)
    {
        $users = Meetup::whereHas('users')->where('id', '=', $meetupId)->get();

        if($users) {
            $httpStatusCode = Response::HTTP_OK;
        }else {
            $httpStatusCode = Response::HTTP_NOT_FOUND;
        }

        return response()->json($users, $httpStatusCode);
    }
}
