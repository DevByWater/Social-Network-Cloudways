<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users= [
            '0'=>[
                'first_name' => 'Ellis',
                'last_name' => 'G',
                'location' => 'America'
            ],
            '1'=>[
                'first_name'=>'Kim',
                'last_name'=>'Jung Il',
                'location'=>'North Korea'
            ]
        ];
        return view('admin.users.index', compact('users'));
    }
    public function create()
    {
        return view('admin.users.create');
    }
    public function store(Request $request)
    {
        return $request->all();
    }
}
