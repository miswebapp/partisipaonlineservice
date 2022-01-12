@extends('layouts.frs-master')
@section('content')
<div class="col-lg-8">
    @if (session('status_success'))
        <div class="alert alert-success" role="alert">
                {{ session('status_success') }}
        </div>
    @endif
    @if (session('status_error'))
        <div class="alert alert-danger" role="alert">
                {{ session('status_error') }}
        </div>
    @endif
    
    <!-- Modal -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#assignFrsUsers">
                Add Members
            </button>
            <!-- Modal -->
            <div class="modal fade" id="assignFrsUsers" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add Team Members</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="{{ route('admin.frs.userteam.store')}}">
                            @csrf
                            <input type="hidden" name="team_id" value="{{ $frsteammembers->first()->id }}">
                            <input type="hidden" name="actions" value="assign_team_member">
                            <div class="row">    
                                <label class="col-md-4 col-form-label text-md-right">{{ __('Available Users') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <div class='input-group'>
                                            <select class="multiitems" name="users[]" multiple>
                                                <option value="0" disabled>-- Select Available Staff --</option>
                                                @foreach($moduleusers->first()->member as $user)
                                                    @if(!$user->frsteam()->exists())
                                                    <option value="{{$user->id}}">{{$user->fullnames}}</option>
                                                    @endif()
                                                @endforeach
                                            </select>
                                        </div>
                                   </div>
                                </div>
                            </div>     
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
                </div>
            </div> 
            <!-- Modal -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#assignCoordUser">
                Assign Coordinator
            </button>
            <!-- Modal -->
            <div class="modal fade" id="assignCoordUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Assign team coordinator</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="{{ route('admin.frs.userteam.store')}}">
                            @csrf
                            <input type="hidden" name="team_id" value="{{ $frsteammembers->first()->id }}">
                            <input type="hidden" name="actions" value="assign_team_coordinator">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Available Users</label>
                                            <select class="form-control" heigh="50px" name="user">
                                                @foreach($frsteammembers->first()->member as $frsuser)
                                                    <option value="{{$frsuser->id}}">{{$frsuser->fullnames}}</option>
                                                 @endforeach
                                            </select>
                                   </div>
                                </div>
                            </div>       
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
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
                <th scope="col">Member name</th>
                <th scope="col">Email</th>
                <th scope="col">Roles</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
               
            @foreach($frsteammembers->first()->member as $frsuser)
                {{-- {{dd($frsteammembers->first()->memberrole())}} --}}
                <tr>
                    <td>{{$frsuser->fullnames}}</td>
                    <td>{{$frsuser->email}}</td>
                    
                    <td> {{--{{dd($frsuser->frsteamrole)}} --}}</td> 
                    
                    <td>
                        @can('delete-user')
                        {{-- <a href="{{route('admin.usermodules.destroy',$frsuser->id)}}"><button type="button" class="btn btn-outline-danger btn-sm">Remove</button></a> --}}
                        <form method="POST" action="{{route('admin.frs.userteam.destroy',$frsteammembers->first()->id)}}">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="hidden" name="user_id" value="{{$frsuser->id}}">
                            <button type="submit" class="btn btn-outline-danger btn-sm">Remove</button>
                        </form>
                        {{-- <a href="posts/2" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?"></a> --}}
                        @endcan
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>

    </div>

@endsection