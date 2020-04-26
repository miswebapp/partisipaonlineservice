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
    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#addNewActivity">
        Add New Activity
    </button>
    <!-- Modal -->
    <div class="modal fade" id="addNewActivity" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Add new activity</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{ route('admin.frs.activities.store')}}">
                @csrf
                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Activity Name') }}</label>
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
                        <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Activity Category') }}</label>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class='input-group' id='category'>
                                    <select class="custom-select" name="category_id">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
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
                        <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Location Level') }}</label>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class='input-group' id='location'>
                                    <select class="custom-select" name="location_id">
                                        @foreach($levels as $level)
                                        <option value="{{$level->id}}">{{$level->level}}</option>
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
                        <label  class="col-md-4 text-md-right">{{ __('Capacity Required') }}</label>
                        <div class="col-md-8">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input class="custom-control-input" id="require_capacity1" type="radio" name="require_capacity" value="1"> 
                                    <label class="custom-control-label" for="require_capacity1"> Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input class="custom-control-input" id="require_capacity2" type="radio" name="require_capacity" value="0"> 
                                    <label class="custom-control-label" for="require_capacity2"> No</label>
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-4 text-md-right">{{ __('Monitoring Tools') }}</label>
                        <div class="col-md-8">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input class="custom-control-input" id="require_monitoring1" type="radio" name="require_monitoring" value="1"> 
                                    <label class="custom-control-label" for="require_monitoring1"> Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input class="custom-control-input" id="require_monitoring2" type="radio" name="require_monitoring" value="0"> 
                                    <label class="custom-control-label" for="require_monitoring2"> No</label>
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-4 text-md-right">{{ __('Cycle Required') }}</label>
                        <div class="col-md-8">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input class="custom-control-input" id="require_cycle1" type="radio" name="require_cycle" value="1"> 
                                    <label class="custom-control-label" for="require_cycle1"> Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input class="custom-control-input" id="require_cycle2" type="radio" name="require_cycle" value="0"> 
                                    <label class="custom-control-label" for="require_cycle2"> No</label>
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-4 text-md-right">{{ __('Phase Required') }}</label>
                        <div class="col-md-8">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input class="custom-control-input" id="require_phase1" type="radio" name="require_phase" value="1"> 
                                    <label class="custom-control-label" for="require_phase1"> Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input class="custom-control-input" id="require_phase2" type="radio" name="require_phase" value="0"> 
                                    <label class="custom-control-label" for="require_phase2"> No</label>
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
@if(!empty($activities))
<table class="table table-bordered table-sm">
    <thead class="thead-light">
      <tr>
        <th scope="col">Activity</th>
        <th scope="col">Category</th>
        <th scope="col">Location</th>
        <th scope="col">Capacity</th>
        <th scope="col">Monitoring</th>
        <th scope="col">Cycle</th>
        <th scope="col">Phase</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach($activities as $activity)
        <tr>
        <td>{{$activity->name}}</td>
        <td>{{$activity->category->name}}</td>
        <td>{{$activity->location->level}}</td>
        <td>{{$activity->require_capacity == 1 ? 'Yes' : 'No'}}</td>
        <td>{{$activity->require_monitoring == 1 ? 'Yes' : 'No'}}</td>
        <td>{{$activity->require_cycle == 1 ? 'Yes' : 'No'}}</td>
        <td>{{$activity->require_phase == 1 ? 'Yes' : 'No'}}</td>
            <td>
                @can('edit-user')
                <!-- Modal -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#editActivity_{{$activity->id}}">
                    Edit
                </button>
                <!-- Modal -->
                <div class="modal fade" id="editActivity_{{$activity->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Activity</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <form method="POST" action="{{ route('admin.frs.activities.update',$activity->id)}}">
                            {{method_field('PUT')}}
                            @csrf
                                <div class="row">
                                    <label for="name_{{$activity->id}}" class="col-md-4 col-form-label text-md-right">{{ __('Activity Name') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <div class='input-group' id='name_{{$activity->id}}'>
                                                <input type='text' class="form-control" name="name" value="{{$activity->name}}"/>
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="category_{{$activity->id}}" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class='input-group' id='category_{{$activity->id}}'>
                                                <select class="custom-select" name="category_id">
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}" {{$activity->category_id == $category->id ? 'selected':''}}>{{$category->name}}</option>
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
                                    <label for="location_{{$activity->id}}" class="col-md-4 col-form-label text-md-right">{{ __('Level') }}</label>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class='input-group' id='location_{{$activity->id}}'>
                                                <select class="custom-select" name="location_id">
                                                    @foreach($levels as $location)
                                                        <option value="{{$location->id}}" {{$activity->location_id == $location->id ? 'selected':''}}>{{$location->level}}</option>
                                                    @endforeach
                                                </select>                                                
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-compose"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row from-group">
                                    <label class="col-md-4 text-md-right">{{ __('Capacity Required') }}</label>
                                        <div class="col-md-8">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input class="custom-control-input" id="require_capacity1_{{$activity->id}}" type="radio" name="require_capacity" value="1" {{$activity->require_capacity == 1 ? 'checked':''}}> 
                                                    <label class="custom-control-label" for="require_capacity1_{{$activity->id}}"> Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input class="custom-control-input" id="require_capacity2_{{$activity->id}}" type="radio" name="require_capacity" value="0" {{$activity->require_capacity == 0 ? 'checked':''}}> 
                                                    <label class="custom-control-label" for="require_capacity2_{{$activity->id}}"> No</label>
                                                </div>
                                        </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-md-4 text-md-right">{{ __('Monitoring Required') }}</label>
                                        <div class="col-md-8">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input class="custom-control-input" id="require_monitoring1_{{$activity->id}}" type="radio" name="require_monitoring" value="1" {{$activity->require_monitoring == 1 ? 'checked':''}}> 
                                                    <label class="custom-control-label" for="require_monitoring1_{{$activity->id}}"> Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input class="custom-control-input" id="require_monitoring2_{{$activity->id}}" type="radio" name="require_monitoring" value="0" {{$activity->require_monitoring == 0 ? 'checked':''}}> 
                                                    <label class="custom-control-label" for="require_monitoring2_{{$activity->id}}"> No</label>
                                                </div>
                                        </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-4 text-md-right">{{ __('Cycle Required') }}</label>
                                        <div class="col-md-8">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input class="custom-control-input" id="require_cycle1_{{$activity->id}}" type="radio" name="require_cycle" value="1" {{$activity->require_cycle == 1 ? 'checked':''}}> 
                                                    <label class="custom-control-label" for="require_cycle1_{{$activity->id}}"> Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input class="custom-control-input" id="require_cycle2_{{$activity->id}}" type="radio" name="require_cycle" value="0" {{$activity->require_cycle == 0 ? 'checked':''}}> 
                                                    <label class="custom-control-label" for="require_cycle2_{{$activity->id}}"> No</label>
                                                </div>
                                        </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-4 text-md-right">{{ __('Phase Required') }}</label>
                                            <div class="col-md-8">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input class="custom-control-input" id="require_phase1_{{$activity->id}}" type="radio" name="require_phase" value="1" {{$activity->require_phase == 1 ? 'checked':''}}> 
                                                    <label class="custom-control-label" for="require_phase1_{{$activity->id}}"> Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input class="custom-control-input" id="require_phase2_{{$activity->id}}" type="radio" name="require_phase" value="0" {{$activity->require_phase == 0 ? 'checked':''}}> 
                                                    <label class="custom-control-label" for="require_phase2_{{$activity->id}}"> No</label>
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

    {{-- <div class="col-lg-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>

                <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the card's
                content.
                </p>

                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
            </div>

            <div class="card card-primary card-outline">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>

                <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the card's
                content.
                </p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
            </div><!-- /.card -->
    </div>
        
    <div class="col-lg-6">
            <div class="card">
            <div class="card-header">
                <h5 class="m-0">Featured</h5>
            </div>
            <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>

            <div class="card card-primary card-outline">
            <div class="card-header">
                <h5 class="m-0">Featured</h5>
            </div>
            <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
    </div> --}}
@endsection