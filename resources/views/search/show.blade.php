@extends('layout.master')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Search Citizen</h4>
                    </div>
                    <div class="card-body">
                        <form action="/" method="POST">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Name</label>
                                        <input type="text" name="name" value="{{$name}}" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary pull-right">Submit</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Ghana Immigration Service Results</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @if(count($GISUsers) > 0)
                                    <table class="table">
                                        <thead class=" text-primary">
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Date of Birth</th>
                                        <th>Ethnicity</th>
                                        <th>SSN</th>
                                        </thead>
                                        <tbody>
                                        @foreach($GISUsers as $user)
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
                                @else
                                    No results found in this Database for search param {{$name}}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Driver Vehicle and License Authority Results</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @if(count($DVLAUsers) > 0)
                                    <table class="table">
                                        <thead class=" text-primary">
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Date of Birth</th>
                                        <th>Ethnicity</th>
                                        <th>SSN</th>
                                        </thead>
                                        <tbody>
                                        @foreach($DVLAUsers as $user)
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
                                @else
                                    No results found in this Database for search param {{$name}}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">National Health Insurance Authority Results</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @if(count($NHIAUsers) > 0)
                                    <table class="table">
                                        <thead class=" text-primary">
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Date of Birth</th>
                                        <th>Ethnicity</th>
                                        <th>SSN</th>
                                        </thead>
                                        <tbody>
                                        @foreach($NHIAUsers as $user)
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
                                @else
                                    No results found in this Database for search param {{$name}}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Electoral Commission Results</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                               @if(count($ECUsers) > 0)
                                    <table class="table">
                                        <thead class=" text-primary">
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Date of Birth</th>
                                        <th>Ethnicity</th>
                                        <th>SSN</th>
                                        </thead>
                                        <tbody>
                                        @foreach($ECUsers as $user)
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
                               @else
                                    No results found in this Database for search param {{$name}}
                               @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection