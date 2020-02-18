@extends('layout.master')
@section('navitems')
    <li class="nav-item">
        <a class="nav-link" href="/ec/create">
            <i class="material-icons">add</i>
            <p class="d-lg-none d-md-block">
                Add Immigrant
            </p>
        </a>
    </li>
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Electoral Commission</h4>
                            <p class="card-category"> A list of all registered Voters</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Date of Birth</th>
                                    <th>Ethnicity</th>
                                    <th>SSN</th>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->first_name. " ". $user->last_name}}</td>
                                            <td>{{\Carbon\Carbon::parse($user->date_of_birth)->toDateString()}}</td>
                                            <td>{{$user->ethnicity}}</td>
                                            <td class="text-primary">{{$user->ssn}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection