<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {

        $aaa=\DB::table('users')->get();
        return view('users.index',compact('aaa'));
    }

    public function show($id)
    {
        $user=User::findOrFail($id);
        return view('users.users',compact('user'));
    }
}
