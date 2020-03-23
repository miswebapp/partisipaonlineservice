@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-64">
            <div class="card">
                <div class="card-header">User Account & Roles Details</div>
                <div class="card-body">
                    @if (session('status_account'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status_account') }}
                        </div>
                    @endif
                    <table class="table table-borderless table-sm">
                    <tr><th>Account Name</th><td>{{$account->first()->name}}</td></tr>
                    <tr><th>Account Email</th><td>{{$account->first()->email}}</td></tr>
                        <tr><th>Account Roles</th><td>
                            @foreach($account->first()->roles as $role)               
                                {{$role->name . " | "}}
                            @endforeach
                        </td></tr>
                        
                    </table>
                        <!-- Modal -->
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editUserAccountRoleModal">
                            Edit
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="editUserAccountRoleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Edit User Login Account & Role</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('admin.account.update',$account->first()->id) }}">
                                        {{method_field('PUT')}}
                                        @csrf
                                        <div class="form-group row">
                                            <input type="hidden" name="user_id" value={{$account->first()->id}}>
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$account->first()->name}}" required autocomplete="name" autofocus>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$account->first()->email}}" required autocomplete="email">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Roles') }}</label>
                                            <div class="col-md-6">
                                                @foreach( $roles as $role )
                                                <div class="form-check">
                                                    <input type="checkbox" name="roles[]" value="{{$role->id}}" 
                                                    @if($account->first()->roles->pluck('id')->contains($role->id)) checked 
                                                    @endif>
                                                    <label>{{$role->name}}</label>
                                                </div>
                                                @endforeach 
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection