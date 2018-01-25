@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                @if (auth()->user()->idrol == 1)
                <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#users">Users</a></li>
                  <li><a data-toggle="tab" href="#addresses">Adresses</a></li>
                </ul>

                <div class="tab-content">
                  <div id="users" class="tab-pane fade in active">
                    <div class="table-responsive">
                      <br>
                      <a href="/users/create" class="btn btn-info">Create User</a>
                      <br>
                      <br>
                      @if($data)
                      <table class="table">
                        <thead>
                          <tr>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Rol</td>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $row)
                        <tr>
                          <td>{{ $row->name }}</td>
                          <td>{{ $row->email }}</td>
                          @if ($row->idrol === 1)
                          <td>Admin</td>
                          @elseif ($row->idrol === 2)
                          <td>Staff</td>
                          @elseif ($row->idrol === 3)
                          <td>Customer Service</td>
                          @endif
                          <td>
                            <a href="{{ route('edit', $row->id) }}" class="btn btn-info">Edit</a>
                            <form action="{{ route('delete', $row->id) }}" method="post">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                    @endif
                   </div>
                  </div>

                  <div id="addresses" class="tab-pane fade">
                    <div class="table-responsive">
                      <br>
                      <a href="{{ route('addressescreate') }}" class="btn btn-info">Create Address</a>
                      <br>
                      <br>
                      @if($address)
                      <table class="table">
                        <thead>
                          <tr>
                            <td>Name</td>
                            <td>Street</td>
                            <td>Number</td>
                            <td>Neighborhood</td>
                            <td>ZipCode</td>
                            <td>State</td>
                            <td>Country</td>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($address as $row)
                        <tr>
                          <td>{{ $row->name }}</td>
                          <td>{{ $row->street }}</td>
                          <td>{{ $row->number }}</td>
                          <td>{{ $row->neighborhood }}</td>
                          <td>{{ $row->zipcode }}</td>
                          <td>{{ $row->state }}</td>
                          <td>{{ $row->country }}</td>
                          <td>
                            <a href="{{ route('addressesedit', $row->id) }}" class="btn btn-info">Edit</a>
                            <form action="{{ route('addressesdelete', $row->id) }}" method="post">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                    @endif
                   </div>
                  </div>
                </div>
                @endif


                @if (auth()->user()->idrol == 2)
                <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#users">Users</a></li>
                  <li><a data-toggle="tab" href="#addresses">Adresses</a></li>
                </ul>

                <div class="tab-content">
                  <div id="users" class="tab-pane fade in active">
                    <div class="table-responsive">
                      <br>
                      <br>
                      <br>
                      @if($data)
                      <table class="table">
                        <thead>
                          <tr>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Rol</td>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $row)
                        <tr>
                          <td>{{ $row->name }}</td>
                          <td>{{ $row->email }}</td>
                          @if ($row->idrol === 1)
                          <td>Admin</td>
                          @elseif ($row->idrol === 2)
                          <td>Staff</td>
                          @elseif ($row->idrol === 3)
                          <td>Customer Service</td>
                          @endif
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                    @endif
                   </div>
                  </div>

                  <div id="addresses" class="tab-pane fade">
                    <div class="table-responsive">
                      <br>
                      <a href="{{ route('addressescreate') }}" class="btn btn-info">Create Address</a>
                      <br>
                      <br>
                      @if($address)
                      <table class="table">
                        <thead>
                          <tr>
                            <td>Name</td>
                            <td>Street</td>
                            <td>Number</td>
                            <td>Neighborhood</td>
                            <td>ZipCode</td>
                            <td>State</td>
                            <td>Country</td>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($address as $row)
                        <tr>
                          <td>{{ $row->name }}</td>
                          <td>{{ $row->street }}</td>
                          <td>{{ $row->number }}</td>
                          <td>{{ $row->neighborhood }}</td>
                          <td>{{ $row->zipcode }}</td>
                          <td>{{ $row->state }}</td>
                          <td>{{ $row->country }}</td>
                          <td>
                            <a href="{{ route('addressesedit', $row->id) }}" class="btn btn-info">Edit</a>
                            <form action="{{ route('addressesdelete', $row->id) }}" method="post">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                    @endif
                   </div>
                  </div>
                </div>
                @endif

                @if (auth()->user()->idrol == 3)
                <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#addresses">Adresses</a></li>
                </ul>

                <div class="tab-content">
                  <div id="addresses" class="tab-pane fade in active">
                    <div class="table-responsive">
                      <br>
                      <br>
                      <br>
                      @if($address)
                      <table class="table">
                        <thead>
                          <tr>
                            <td>Name</td>
                            <td>Street</td>
                            <td>Number</td>
                            <td>Neighborhood</td>
                            <td>ZipCode</td>
                            <td>State</td>
                            <td>Country</td>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($address as $row)
                        <tr>
                          <td>{{ $row->name }}</td>
                          <td>{{ $row->street }}</td>
                          <td>{{ $row->number }}</td>
                          <td>{{ $row->neighborhood }}</td>
                          <td>{{ $row->zipcode }}</td>
                          <td>{{ $row->state }}</td>
                          <td>{{ $row->country }}</td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                    @endif
                   </div>
                  </div>
                </div>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
