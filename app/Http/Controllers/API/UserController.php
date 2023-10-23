<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index(): Response
    {
        if (Auth::check()) {
            $user = Auth::user();
            return Response(['data' => $user], 200);
        }
        return Response(['data' => 'Unauthorized'], 401);
    }
}
