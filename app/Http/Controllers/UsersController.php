<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users, Response::HTTP_OK);
    }

    public function create(Request $request)
    {
        $user = User::create($request->all());
        if ($user) {
            $httpStatusCode = Response::HTTP_CREATED;
        } else {
            $httpStatusCode = Response::HTTP_PRECONDITION_FAILED;
        }
        return response()->json($user, $httpStatusCode);
    }

    public function read($userId)
    {
        $user = User::findOrFail($userId);

        if($user) {
            $httpStatusCode = Response::HTTP_OK;
        }else {
            $httpStatusCode = Response::HTTP_NOT_FOUND;
        }

        return response()->json($user, $httpStatusCode);
    }
}
