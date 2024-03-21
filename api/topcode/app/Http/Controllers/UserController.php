<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Aquí puedes cargar la vista del CRUD de usuarios
        return view('users.index');
    }
}