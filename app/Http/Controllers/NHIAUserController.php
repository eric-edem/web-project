<?php

namespace App\Http\Controllers;

use App\NHIAUser;
use Illuminate\Http\Request;

class NHIAUserController extends Controller
{
    public function index(){
        $users = NHIAUser::all();
        $routeVar = ["name" => "nhia", "label" => "National Health Insurance Authority"];
        return view('nhia.index', compact('users', 'routeVar'));
    }

    public function show(){
        $routeVar = ["name" => "nhia", "label" => "National Health Insurance Authority"];
        $user = NHIAUser::all();
        return view('nhia.index', compact('user','routeVar'));
    }

    public function create(){
        $routeVar = ["name" => "nhia", "label" => "National Health Insurance Authority"];
        return view('nhia.create', compact('routeVar'));
    }

    public function edit(){
        $user = NHIAUser::all();
        $routeVar = ["name" => "nhia", "label" => "National Health Insurance Authority"];
        return view('nhia.index', compact('user', 'routeVar'));
    }

    public function store(){
//        $this->validate()
        $user = new NHIAUser();
        $user->first_name = \request('first_name');
        $user->last_name = \request('last_name');
        $user->date_of_birth = \request('date_of_birth');
        $user->ethnicity = \request('ethnicity');
        $user->ssn = \request('ssn');
        $user->save();
        return redirect('/nhia');
    }
}
