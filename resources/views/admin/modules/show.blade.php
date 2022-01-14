@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                    <h4>Module: {{$module->name}}</h4>
                        <div class="ml-auto">
                            <!-- Modal -->
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#editAppModule">
                                    Add User
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="editAppModule" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Add User to Module</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{ route('admin.usermodules.store') }}" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" value="{{$module->id}}" name="module_id">
                                                <div class="row">    
                                                    <label class="col-md-4 col-form-label text-md-right">{{ __('Roles: Users') }}</label>
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <div class='input-group'>
                                                                <select class="multiitems" name="users[]" multiple style="width:300px">
                                                                    <option value="0" disabled>-- Select User --</option>
                                                                    @foreach($users as $user)
                                                                        <option value="{{$user->id}}">{{$user->fullnames}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                       </div>
                                                    </div>
                                                </div> 
                                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
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
                            <th scope="col">Email</th>
                            <th scope="col">Position</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($usermodules as $usermodule)
                                <tr>
                                    <td>{{$usermodule->user->fullnames}}</td>
                                    <td>{{$usermodule->user->employment['employee_email']}}</td>
                                    <td>{{$usermodule->user->employment["position"][0]["name"]}}</td>
                                    <td>
                                        @can('delete-user')
                                        <form method="POST" action="{{ route('admin.usermodules.destroy',$usermodule->id )}}" enctype="multipart/form-data">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" value="{{$module->id}}" name="module_id">
                                            <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                        </form>
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