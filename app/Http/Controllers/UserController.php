<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // /user
    public function index()
    {

         $users = User::all();
         return view('user.list');
    }

    // /user/create
    public function create()
    {
        //
    }

    // /user/create [ POST]
    public function store(Request $request)
    {

    }

    // /user/200/edit
    public function edit($id)
    {

    }
    // /user/200/edit [ POST]
    public function update(Request $request, $id)
    {

    }

    // /user/200/delete
    public function destroy($id)
    {

    }
}
