@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h3>Roles Management</h3>
                        <div class="ml-auto">
                            <a href="{{ route('admin.roles.create') }}" class="btn btn-outline-primary">New Role</a>
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
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Total Members</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $role)
                            <tr>
                            <td>{{$role->name}}</td>
                            <td>{{$role->details}}</td>
                            <td>{{$role->account()->count()}}</td>
                            <td>
                                @can('edit-user')
                                <a href=" {{ route('admin.roles.edit', $role->id)}}"><button type="button" class="btn btn-outline-primary btn-sm">Edit</button></a>
                                @endcan
                                @can('delete-user')
                                <a href=" {{ route('admin.roles.destroy', $role->id)}}"><button type="button" class="btn btn-outline-danger btn-sm">Delete</button></a>
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