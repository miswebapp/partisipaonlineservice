@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h3>System Modules Management</h3>
                        <div class="ml-auto">
                            <a href="{{ route('admin.modules.create') }}" class="btn btn-outline-primary">New Module</a>
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
                            <th scope="col">Alias</th>
                            <th scope="col">Controller Namespace</th>
                            <th scope="col">Model Namespace</th>
                            <th scope="col">View Namespace</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($modules as $module)
                            <tr>
                            <td>{{$module->name}}</td>
                            <td>{{$module->alias}}</td>
                            <td>{{$module->controller_namespace}}</td>
                            <td>{{$module->model_namespace}}</td>
                            <td>{{$module->view_namespace}}</td>
                            <td>
                                @can('edit-user')
                                <a href=" {{ route('admin.roles.edit', $module->id)}}"><button type="button" class="btn btn-outline-primary btn-sm">Edit</button></a>
                                @endcan
                                @can('delete-user')
                                <a href=" {{ route('admin.roles.destroy', $module->id)}}"><button type="button" class="btn btn-outline-danger btn-sm">Delete</button></a>
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