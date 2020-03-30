@extends('layouts.frs-master')
@section('content')
<div class="col-lg-12">
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
                        <div class="col-md-4">
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
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class='input-group' id='description'>
                                    <input type='text' class="form-control" name="description"/>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
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
        <th scope="col">Descriptions</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      

        <tr>
        <td></td>
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

    </tbody>
</table>
</div>
@endsection