@extends('layouts.frs-master')
@section('content')
    @push('head')
    <!-- Scripts -->
    <script src="{{ asset('js/select/customselect.js')}}"></script>
    @endpush
    <div class="col-lg-8">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
            @endif
            <!-- Modal -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#assignFrsUsers">
                Add Users
            </button>
            <!-- Modal -->
            <div class="modal fade" id="assignFrsUsers" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add Field Report System Users</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="{{ route('admin.usermodules.store')}}">
                            @csrf
                            <input type="hidden" name="location" value="frs">
                            <div class="row">
                                <label class="col-md-4 col-form-label text-md-right">{{ __('Available Users') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <div class='input-group'>
                                            <select class="multiitems" name="users[]" multiple>
                                            <option value="0" disabled>-- Select Available Staff --</option>
                                            @foreach($allusers as $user)
                                                <option value="{{$user->id}}">{{$user->fullnames}}</option>
                                            @endforeach
                                            </select>
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
        <table class="table table-bordered table-sm">
            <thead class="thead-light">
              <tr>
                <th scope="col">Full Name</th>
                <th scope="col">Email</th>
                <th scope="col">Team Name</th>
                <th scope="col">Role Name</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
            @if(!empty($frsusers))
            @if($frsusers->exists())
            @foreach($frsusers->member as $frsuser)
            
                <tr>
                    <td>{{$frsuser->fullnames}}</td>
                    <td>{{$frsuser->employment['employee_email']}}</td>
                    <td>{{$frsuser->frsteam()->first() == null ? '' : $frsuser->frsteam()->first()->alias}}</td>
                    <td>{{$frsuser->frsteamrole()->first() == null ? '' : $frsuser->frsteamrole()->first()->name}}</td>
                    <td>
                        {{-- @can('edit-user')
                        <a href="#"><button type="button" class="btn btn-outline-primary btn-sm">Update details</button></a>
                        @endcan --}}
                        @can('delete-user')
                        {{-- <a href="{{route('admin.usermodules.destroy',$frsuser->id)}}"><button type="button" class="btn btn-outline-danger btn-sm">Remove</button></a> --}}
                        <form method="POST" action="{{route('admin.usermodules.destroy',$frsuser->id)}}">
                            
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="hidden" name="location" value="frs">
                            <button type="submit" class="btn btn-outline-danger btn-sm">Remove</button>
                        </form>
                        {{-- <a href="posts/2" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?"></a> --}}
                        @endcan
                    </td>
                </tr>
            @endforeach
            @endif
            @endif
            </tbody>
        </table>

    </div>

@endsection