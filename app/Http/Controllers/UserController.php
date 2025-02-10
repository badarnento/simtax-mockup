<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user');
    }

    public function getUsers()
    {
        $users = User::select(['id', 'name', 'email', 'created_at'])->get();
        $users->transform(function ($user) {
            $user->created_at = Carbon::parse($user->created_at)->format('d-m-Y');
            return $user;
        });
        
        return response()->json(['data' => $users]);
    }
}
