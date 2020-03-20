@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h3>User Management</h3>
                        <div class="ml-auto">
                            <a href="{{ route('admin.users.create') }}" class="btn btn-outline-primary">New User</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-bordered table-sm">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">Full Name</th>
                            <th scope="col">Alias</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Nationality</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                            <th scope="row">{{$user->fullnames}}</th>
                            <td>{{$user->alias}}</td>
                            <td>{{$user->gender}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->telephone}}</td>
                            <td>{{$user->nationality}}</td>
                            <td>
                                @can('edit-user')
                                <a href=" {{ route('admin.users.show', $user->id)}}"><button type="button" class="btn btn-outline-primary btn-sm">Update details</button></a>
                                @endcan
                                @can('delete-user')
                                <a href=" {{ route('admin.users.destroy', $user->id)}}"><button type="button" class="btn btn-outline-danger btn-sm">Delete</button></a>
                                @endcan
                            </td>
                            
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection