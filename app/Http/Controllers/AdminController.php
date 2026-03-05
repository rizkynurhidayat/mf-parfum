<?php

namespace App\Http\Controllers;
// tambahkan ini import model 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function view()
    {
        $user = Auth::user();
        return view('admin', ["username" => $user['name']]);
    }

    public function users(){
        $user = Auth::user();
        $users = User::all();
        return view('users.index', [
            "name" => $user['name'],
            "users" => $users
        ]);
    }



}
