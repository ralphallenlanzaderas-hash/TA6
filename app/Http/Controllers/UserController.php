<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Retrieve all records using the Eloquent model
        $users = User::all();

        return view('users.index', compact('users'));
    }
}