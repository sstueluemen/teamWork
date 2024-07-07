<?php

namespace App\Http\Controllers;

use App\Models\InOutTable;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController
{
    public function index(){

        $users = User::all();

        return view('welcome',compact('users'));
    }

    public function store(Request $request){

        $store = new InOutTable();
        $store->user_id = $request->user_id;
        $store->in = $request->in ?? null;
        $store->go_pause = $request->go_pause ?? null;
        $store->back_pause = $request->back_pause ?? null;
        $store->out = $request->out ?? null;
        $store->save();

        return view('welcome');
    }

    public function update(){

        $data = InOutTable::where('id',1)->first();

        $users = User::all();

        foreach ($users as $key => $user){

            if ($data->user_id == $user->id)
                $data->user_id = $user->name;
        }


        return view('update',compact('data'));
    }

    public function storeUpdate(Request $request){




    }
}
