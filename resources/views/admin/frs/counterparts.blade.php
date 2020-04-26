@extends('layouts.frs-master')
@section('content')
<div class="col-lg-10">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
             {{ session('status') }}
        </div>
    @endif
    <!-- Modal -->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#addNewCounterpart">
        Add Counterpart
    </button>
    <!-- Modal -->
    <div class="modal fade" id="addNewCounterpart" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Add new counterpart to Field Report</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{ route('admin.frs.counterparts.store')}}">
                    @csrf
                    <input type="hidden" value="1" name="status">
                    <div class="row">
                        <label class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class='input-group'>
                                    <input type='text' class="form-control" name="name"/>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <label class="col-md-4 text-md-right">{{ __('Gender') }}</label>
                        <div class="col-md-8">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input class="form-check-input" id="gender1" type="radio" name="gender" value="M"> 
                                    <label class="form-check-label" for="gender1"> Male</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input class="form-check-input" id="gender2" type="radio" name="gender" value="F"> 
                                    <label class="form-check-label" for="gender2"> Female</label>
                                </div>

                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-4 col-form-label text-md-right">{{ __('Locate in') }}</label>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class='input-group'>
                                    <select class="custom-select" name="municipal_id">
                                        <option value="" selected>--Select Municipal--</option>
                                        @foreach($municipals as $municipal)
                                            <option value="{{$municipal->id}}">{{$municipal->name}}</option>
                                        @endforeach
                                    </select>                                                 
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-compose"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-4 col-form-label text-md-right">{{ __('Position') }}</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                <div class='input-group'>
                                    <select class="custom-select" name="position_id">
                                        <option value="" selected>--Select Position--</option>
                                        @foreach($positions as $position)
                                            <option value="{{$position->id}}">{{$position->name}}</option>
                                        @endforeach
                                    </select>                                                 
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-compose"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-4 col-form-label text-md-right">{{ __('Institution') }}</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                <div class='input-group'>
                                    <select class="custom-select" name="institution_id">
                                        <option value="" selected>--Select Institution--</option>
                                        @foreach($institutions as $institution)
                                            <option value="{{$institution->id}}">{{$institution->name}}</option>
                                        @endforeach
                                    </select>                                                 
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
@if(!empty($counterparts))
<table class="table table-bordered table-sm">
    <thead class="thead-light">
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Position</th>
        <th scope="col">Located</th>
        <th scope="col">Institution</th>
        <th scope="col">Status</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach($counterparts as $counterpart)
        
        <tr>
        <td>{{$counterpart->name}}</td>
        <td>{{$counterpart->position->name}}</td>
        <td>{{$counterpart->municipal->name}}</td>
        <td>{{$counterpart->institution->alias}}</td>
        <td>{{$counterpart->status == 1 ? 'Active':'In Active'}}</td>
            <td>
                @can('edit-user')
                <!-- Modal -->
                <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#editCounterpart_{{$counterpart->id}}">
                    Edit
                </button>
                <!-- Modal -->
                <div class="modal fade" id="editCounterpart_{{$counterpart->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Edit counterpart </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <form method="POST" action="{{ route('admin.frs.counterparts.update',$counterpart->id)}}">
                                {{method_field('PUT')}}
                                @csrf
                                <div class="row">
                                    <label class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <div class='input-group'>
                                                <input type='text' class="form-control" name="name" value="{{$counterpart->name}}"/>
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-md-4 text-md-right">{{ __('Gender') }}</label>
                                    <div class="col-md-8">

                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input class="custom-control-input" type="radio" name="gender" value="M" {{$counterpart->gender == 'M' ? 'checked':''}}> 
                                                <label class="custom-control-label"> Male</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input class="custom-control-input" type="radio" name="gender" value="F" {{$counterpart->gender == 'F' ? 'checked':''}}> 
                                                <label class="custom-control-label"> Female</label>
                                            </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-4 col-form-label text-md-right">{{ __('Municipal') }}</label>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class='input-group'>
                                                <select class="custom-select" name="municipal_id">
                                                    @foreach($municipals as $municipal)
                                                        <option value="{{$municipal->id}}" {{$counterpart->municipal_id == $municipal->id ? 'selected':''}}>{{$municipal->name}}</option>
                                                    @endforeach
                                                </select>                                                 
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-compose"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-4 col-form-label text-md-right">{{ __('Position') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <div class='input-group'>
                                                <select class="custom-select" name="position_id">
                                                    @foreach($positions as $position)
                                                        <option value="{{$position->id}}" {{$counterpart->position_id == $position->id ? 'selected':''}}>{{$position->name}}</option>
                                                    @endforeach
                                                </select>                                                 
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-compose"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-4 col-form-label text-md-right">{{ __('Institution') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <div class='input-group'>
                                                <select class="custom-select" name="institution_id">
                                                    @foreach($institutions as $institution)
                                                        <option value="{{$institution->id}}" {{$counterpart->institution_id == $institution->id ? 'selected':''}}>{{$institution->name}}</option>
                                                    @endforeach
                                                </select>                                                 
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-compose"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-md-4 text-md-right">{{ __('Status') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input class="custom-control-input" type="radio" name="status" value="1" {{$counterpart->status == 1 ? 'checked':''}}> 
                                                <label class="custom-control-label"> Active</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input class="custom-control-input" type="radio" name="status" value="0" {{$counterpart->status == 0 ? 'checked':''}}> 
                                                <label class="custom-control-label"> Inactive</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                    </div>
                </div>  
                @endcan
                @can('edit-user')
                @endcan
                @can('delete-user')
                <a href="#"><button type="button" class="btn btn-outline-danger btn-sm">Delete</button></a>
                @endcan
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endif
</div>
@endsection