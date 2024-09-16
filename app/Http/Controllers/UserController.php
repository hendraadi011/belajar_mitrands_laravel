<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function index()
    {

        $users = User::query()
            // ->select('name')
            ->latest()
            ->get();

        return view('users.index', [
            'users' => $users
        ]);
    }

    public function create()
    {

        return view('users.create');
    }
}
