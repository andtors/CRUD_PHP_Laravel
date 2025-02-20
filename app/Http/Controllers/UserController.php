<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\UserPhp;

class UserController extends Controller
{

    public function homePage(Request $request){

        $users = UserPhp::all();

        return view('home', ['users' => $users]);
    }

    public function createPage(Request $request){

        return view('create');
    }

    public function editPage(Request $request){

        $user = UserPhp::find(request('id'));

        return view('edit', ['user' => $user]);
    }

    public function createUser(Request $request){

        UserPhp::create($request->all());

        return redirect()->route('user.home');

    }

    public function editUser(Request $request){
    
        DB::table('user_phps')
            ->where('id', $request->id)
            ->update([
                'name' => $request->name, 
                'email' => $request->email, 
                'cellphone' => $request->cellphone
            ]);

        return redirect()->route('user.home');

    }

    public function deleteUser(Request $request){

        DB::table('user_phps')
            ->where('id', $request->id)
            ->delete();

        return redirect()->route('user.home');
    }

}
