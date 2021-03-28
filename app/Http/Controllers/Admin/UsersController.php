<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('dashboard.users.index')
        ->withUsers($users);
    }

    public function show($id)
    {
        return User::findOrFail($id);
    }
}
