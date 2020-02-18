<?php

namespace App\Http\Controllers;

use App\DVLAUsers;
use Illuminate\Http\Request;

class DVLAController extends Controller
{

    public function index(){
        $users = DVLAUsers::all();
        $routeVar = ["name" => "dvla", "label" => "Driver Vehicle and License Authority"];
        return view('dvla.index', compact('users', 'routeVar'));
    }

    public function show(){
        $routeVar = ["name" => "dvla", "label" => "Driver Vehicle and License Authority"];
        return view('dvla.edit', compact('routeVar'));
    }

    public function edit(){
        $routeVar = ["name" => "dvla", "label" => "Driver Vehicle and License Authority"];
        return view('dvla.edit',  compact('routeVar'));
    }

    public function create(){
        $routeVar = ["name" => "dvla", "label" => "Driver Vehicle and License Authority"];
        return view('dvla.create',  compact('routeVar'));
    }

    public function store(){
//        $this->validate()
        $user = new DVLAUsers();
        $user->first_name = \request('first_name');
        $user->last_name = \request('last_name');
        $user->date_of_birth = \request('date_of_birth');
        $user->ethnicity = \request('ethnicity');
        $user->ssn = \request('ssn');
        $user->save();
        return redirect('/dvla');
    }
}
