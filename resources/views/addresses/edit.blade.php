@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Address</div>

                @if($user)
                @foreach($user as $row)
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/updateaddress/{{ $row->id }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="userid" value="{{ $row->userid}}">

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">User</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" placeholder="name" value="{{ $row->name }}" readonly required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="street" class="col-md-4 control-label">Street</label>

                            <div class="col-md-6">
                                <input id="street" type="text" class="form-control" name="street" value="{{ $row->street }}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="number" class="col-md-4 control-label">Number</label>

                            <div class="col-md-6">
                                <input id="number" type="text" class="form-control" name="number" value="{{ $row->number }}" required autofocus>

                            </div>
                        </div>


                        <div class="form-group">
                            <label for="neighborhood" class="col-md-4 control-label">Neighborhood</label>

                            <div class="col-md-6">
                                <input id="neighborhood" type="text" class="form-control" name="neighborhood" value="{{ $row->neighborhood }}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="zipcode" class="col-md-4 control-label">Zipcode</label>

                            <div class="col-md-6">
                                <input id="zipcode" type="text" class="form-control" name="zipcode" value="{{ $row->zipcode }}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="state" class="col-md-4 control-label">State</label>

                            <div class="col-md-6">
                                <input id="state" type="text" class="form-control" name="state" value="{{ $row->state }}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="country" class="col-md-4 control-label">Country</label>

                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control" name="country" value="{{ $row->country }}" required autofocus>

                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Address
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
