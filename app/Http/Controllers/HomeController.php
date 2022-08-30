<?php

namespace App\Http\Controllers;

use App\Models\tenants\Note;
use App\Models\User;

class HomeController extends Controller
{
    public function home()
    {
        return User::all();
    }

    public function tentAnt()
    {
        User::all();
        return Note::all();
    }
}
