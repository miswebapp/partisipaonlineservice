@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h3>User Account Management</h3>
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
                            <th scope="col">Name</th>
                            <th scope="col">Login Email</th>
                            <th scope="col">Account Status</th>
                            <th scope="col">UserDetails ID</th>
                            <th scope="col">Account Roles</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($accounts as $account)
                            <tr>
                            <th scope="row">{{$account->name}}</th>
                            <td>{{$account->email}}</td>
                            <td>{{$account->status}}</td>
                            <td>{{$account->user_id}}</td>
                            <td>
                                @foreach ($account->roles as $role)
                                    {{$role->name . " | "}}
                                @endforeach
                            </td>

                            <td>
                                @can('edit-user')
                                    <!-- Modal -->
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#editUserLoginAccountModal{{$account->id}}">
                                        Edit
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="editUserLoginAccountModal{{$account->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Edit User Login Account</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="{{ route('admin.account.update',$account->id) }}">
                                                    {{method_field('PUT')}}
                                                    <input type="hidden" name="user_id" value={{$account->id}}>
                                                    @csrf
                                                    <div class="row">
                                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class='input-group' id='name'>
                                                                    <input type='text' class="form-control" name="name" value={{$account->name}} />
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class='input-group' id='email'>
                                                                    <input type='email' class="form-control" name="email" value={{$account->email}}  />
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <label for="roles" class="col-md-4 col-form-label text-md-right">{{ __('Roles') }}</label>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <div class='input-group' id='roles'>
                                                                    @foreach( $roles as $role )
                                                                    <div class="form-check">
                                                                        <input type="checkbox" name="roles[]" value="{{$role->id}}" 
                                                                        @if($account->roles->pluck('id')->contains($role->id)) checked 
                                                                        @endif>
                                                                        <label>{{$role->name}}</label>
                                                                    </div>
                                                                    @endforeach 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </form>
                                                
                                            </div>
                                            <div class="modal-footer">
                                            </div>
                                        </div>
                                        </div>
                                    </div>   
                                @endcan
                                @can('delete-user')
                                <a href=" {{ route('admin.users.destroy', $account->id)}}"><button type="button" class="btn btn-outline-danger btn-sm">Delete</button></a>
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