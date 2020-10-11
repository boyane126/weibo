<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //创建用户
    public function create()
    {
        return view('users.create');
    }
}
