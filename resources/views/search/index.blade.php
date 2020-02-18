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
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary pull-right">Submit</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection