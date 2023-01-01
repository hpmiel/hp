<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    // /user
    public function index()
    {
        $listOfUser = User::all();
        return view('user.list', [
            'users' => $listOfUser
        ]);
    }

    // /user/create
    public function create()
    {
        $groups = Group::all();

        return view('user.create', [
            'groups' => $groups
        ]);
    }

    // /user/create [ POST ]
    // test
    public function store(Request $request)
    {
//        if ($password !== $repassword) {
//            return 'error password not same';
//        }

        $user = new User();
        $user->fill($request->all());
        $user->password = Hash::make($request->get('password'));

        if($user->save())
        {
            // alert success
            return redirect('/user');
        }
        else{
            // alert danger
            return redirect()->back();
        }


    }

    // /user/200/edit
    public function edit($id)
    {
    }

    // /user/200/edit [ POST ]
    public function update(Request $request, $id)
    {
    }


    // /user/200/delete
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user');
    }
}
