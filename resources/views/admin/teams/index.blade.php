@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h3>Team Management</h3>
                        <div class="ml-auto">
                            <a href="{{ route('admin.teams.create') }}" class="btn btn-outline-primary">New Team</a>
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
                            <th scope="col">Code</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($teams as $team)
                            <tr>
                            <th scope="row">{{$team->code}}</th>
                            <td>{{$team->name}}</td>
                            <td>{{$team->details}}</td>
                            <td>
                                @can('edit-user')
                                <!-- Modal -->
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#editTeamModel{{$team->id}}">
                                        Edit
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="editTeamModel{{$team->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Edit Team</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="{{ route('admin.teams.update',$team->id) }}">
                                                    {{method_field('PUT')}}
                                                    @csrf
                                                    <div class="form-group row">
                                                        
                                                        <label for="code" class="col-md-4 col-form-label text-md-right">{{ __('Code') }}</label>
                                                        <div class="col-md-6">
                                                            <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{$team->code}}" required autocomplete="name" autofocus>
                                                            @error('code')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                                        <div class="col-md-6">
                                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$team->name}}" required autocomplete="name">
                                                            @error('name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="details" class="col-md-4 col-form-label text-md-right">{{ __('Details') }}</label>
                                                        <div class="col-md-6">
                                                            <textarea row="10" name="details" class="form-control @error('details') is-invalid @enderror">{{$team->details}}</textarea>
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
                                <a href=" {{ route('admin.users.destroy', $team->id)}}"><button type="button" class="btn btn-outline-danger btn-sm">Delete</button></a>
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