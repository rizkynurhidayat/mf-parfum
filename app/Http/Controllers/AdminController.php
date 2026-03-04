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


}
