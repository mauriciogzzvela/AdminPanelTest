@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/update/{{ $user->id }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" placeholder="name" value="{{ $user->name }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Email</label>
                            <div class="col-md-6">
                              <input id="email" type="email" class="form-control" name="email" placeholder="email" value="{{ $user->email }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Rol</label>

                            <div class="col-md-6">
                                <select class="form-control" id="idrol" name="idrol" required autofocus>
                                  @if ($user->idrol === 1)
                                  <option value="1" selected>Administrador</option>
                                  <option value="2">Staff</option>
                                  <option value="3">Customer Service</option>
                                  @elseif ($user->idrol === 2)
                                  <option value="1">Administrador</option>
                                  <option value="2" selected>Staff</option>
                                  <option value="3">Customer Service</option>
                                  @elseif ($user->idrol === 3)
                                  <option value="1">Administrador</option>
                                  <option value="2">Staff</option>
                                  <option value="3" selected>Customer Service</option>
                                  @endif
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update User
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
