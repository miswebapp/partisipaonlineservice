@extends('layouts.frs-master')
@section('content')
    <div class="col-lg-12">
            <!-- Modal -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#assignFrsUsers">
                Add / Remove Users
            </button>
            <!-- Modal -->
            <div class="modal fade" id="assignFrsUsers" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add / Remove Field Report System Users</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST">
                            @csrf
                            <div class="row">
                                <label for="niss" class="col-md-4 col-form-label text-md-right">{{ __('Staff') }}</label>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class='input-group' id='frsusers'>
                                            
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
            @foreach($frsusers->member as $frsuser)
                <tr>
                <td>{{$frsuser->fullnames}}</td>
                <td>{{$frsuser->email}}</td>
                <td></td>
                <td></td>
                <td>
                    @can('edit-user')
                    <a href="#"><button type="button" class="btn btn-outline-primary btn-sm">Update details</button></a>
                    @endcan
                    @can('delete-user')
                    <a href="#"><button type="button" class="btn btn-outline-danger btn-sm">Delete</button></a>
                    @endcan
                </td>
                
                </tr>
            @endforeach
            @endif
            </tbody>
        </table>
    </div>

@endsection