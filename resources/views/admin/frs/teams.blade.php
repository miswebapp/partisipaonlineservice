@extends('layouts.frs-master')
@section('content')
<div class="col-lg-12">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
             {{ session('status') }}
        </div>
    @endif
    <!-- Modal -->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#assignFrsUsers">
        Add Field Teams
    </button>
    <!-- Modal -->
    <div class="modal fade" id="assignFrsUsers" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Add Field Teams</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin.frs.teams.store')}}">
                    @csrf
                    <div class="row">
                        <label for="alias" class="col-md-4 col-form-label text-md-right">{{ __('Team Alias') }}</label>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class='input-group' id='alias'>
                                    <input type='text' class="form-control" name="alias"/>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Team Name') }}</label>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class='input-group' id='name'>
                                    <input type='text' class="form-control" name="name"/>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descriptions') }}</label>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class='input-group' id='description'>
                                    
                                    <textarea rows="3" class="form-control" name="description">
                                    </textarea>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-compose"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
        </div>
    </div>    
<table class="table table-bordered table-sm">
    <thead class="thead-light">
      <tr>
        <th scope="col">Team Alias</th>
        <th scope="col">Team Name</th>
        <th scope="col">Total Members</th>
        <th scope="col">Descriptions</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      
        @if($frsteams)
        @foreach($frsteams as $team)
        <tr>
        <td>{{$team->alias}}</td>
        <td>{{$team->name}}</td>
        <td>{{$team->member->count()}}</td>
        <td>{{$team->description}}</td>
        <td>
            @can('edit-user')
            <a href="#"><button type="button" class="btn btn-outline-info btn-sm">Edit</button></a>

            @endcan
            @can('edit-user')
                        <!-- Modal -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#assignTeamMember_{{$team->id}}">
                Add Member
            </button>
            <!-- Modal -->
            <div class="modal fade" id="assignTeamMember_{{$team->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add FST Team Member</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="{{ route('admin.frs.teams.store')}}">
                            @csrf
                            <input type="hidden" name="act" value="sync_team_member">
                            <input type="hidden" name="team_id" value="{{$team->id}}">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Available Users</label>
                                            <select class="multiple_users form-control" heigh="50px" name="users[]" multiple="multiple">
                                            @foreach($allusers as $user)
                                                <option value="{{$user->id}}">{{$user->fullnames}}</option>
                                            @endforeach
                                            </select>
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
            <a href="#"><button type="button" class="btn btn-outline-danger btn-sm">Delete</button></a>
            @endcan
        </td>
        
        </tr>
        @endforeach()
        @endif()
    </tbody>
</table>
</div>
@endsection