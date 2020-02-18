<?php

namespace App\Http\Controllers;

use App\ECUsers;
use Illuminate\Http\Request;

class ECController extends Controller
{
    public function index(){
        $users = ECUsers::all();
        $routeVar = ["name" => "ec", "label" => "Electoral Commission"];
        return view('ec.index', compact('users', 'routeVar'));
    }

    public function show(){
        $routeVar = ["name" => "ec", "label" => "Electoral Commission"];
        $user = ECUsers::all();
        return view('ec.index', compact('user','routeVar'));
    }

    public function create(){
        $routeVar = ["name" => "ec", "label" => "Electoral Commission"];
        return view('ec.create', compact('routeVar'));
    }

    public function edit(){
        $user = ECUsers::all();
        $routeVar = ["name" => "ec", "label" => "Electoral Commission"];
        return view('ec.index', compact('user', 'routeVar'));
    }

    public function store(){
//        $this->validate()
        $user = new ECUsers();
        $user->first_name = \request('first_name');
        $user->last_name = \request('last_name');
        $user->date_of_birth = \request('date_of_birth');
        $user->ethnicity = \request('ethnicity');
        $user->ssn = \request('ssn');
        $user->save();
        return redirect('/ec');
    }
}
