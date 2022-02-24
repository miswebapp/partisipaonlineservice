@extends('layouts.frs-master')
@section('content')
{{-- Categroy --}}
<div class="col-lg-3">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
             {{ session('status') }}
        </div>
    @endif
    <!-- Modal -->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#addNewCategory">
        Add Category
    </button>
    <!-- Modal -->
    <div class="modal fade" id="addNewCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Add new category to Field Report</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{ route('admin.frs.category.store')}}">
                    @csrf
                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Category Name') }}</label>
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
                        <div class="col-md-8">
                            <div class="form-group">
                                <div class='input-group' id='description'>
                                    <textarea rows="3" class="form-control" name="description"></textarea>
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
    @if(!empty($categories))
    <table class="table table-bordered table-sm">
    <thead class="thead-light">
      <tr>
        <th scope="col">Category Name</th>
        {{-- <th scope="col">Des</th> --}}
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
        <td>{{$category->name}}</td>
        {{-- <td>{{$category->description}}</td> --}}
        <td>
                @can('edit-user')
                <!-- Modal -->
                <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#editCategory{{$category->id}}">
                    Edit
                </button>
                <!-- Modal -->
                <div class="modal fade" id="editCategory{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <form method="POST" action="{{ route('admin.frs.category.update',$category->id)}}">
                            {{method_field('PUT')}}
                            @csrf
                                <div class="row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Category Name') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <div class='input-group' id='name_{{$category->id}}'>
                                                <input type='text' class="form-control" name="name" value="{{$category->name}}"/>
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descriptions') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <div class='input-group' id='description_{{$category->id}}'>
                                                
                                                <textarea rows="3" class="form-control" name="description">{{$category->description}}</textarea>
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
{{-- Phase --}}
<div class="col-lg-3">
    @if (session('status3'))
        <div class="alert alert-success" role="alert">
             {{ session('status3') }}
        </div>
    @endif
    <!-- Modal -->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#addNewPhase">
        Add Phase
    </button>
    <!-- Modal -->
    <div class="modal fade" id="addNewCycle" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Add new phase to Field Report</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{ route('admin.frs.phase.store')}}">
                    @csrf
                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Phase Name') }}</label>
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
                        <div class="col-md-8">
                            <div class="form-group">
                                <div class='input-group' id='description'>
                                    <textarea rows="3" class="form-control" name="description"></textarea>
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
    @if(!empty($phases))
    <table class="table table-bordered table-sm">
    <thead class="thead-light">
      <tr>
        <th scope="col">Phase Name</th>
        {{-- <th scope="col">Descriptions</th> --}}
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach($phases as $phase)
        <tr>
        <td>{{$phase->name}}</td>
        {{-- <td>{{$phase->description}}</td> --}}
            <td>
                @can('edit-user')
                <!-- Modal -->
                <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#editPhase{{$phase->id}}">
                    Edit
                </button>
                <!-- Modal -->
                <div class="modal fade" id="editPhase{{$phase->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Project Activity</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <form method="POST" action="{{ route('admin.frs.phase.update',$phase->id)}}">
                            {{method_field('PUT')}}
                            @csrf
                                <div class="row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Project Activity Name') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <div class='input-group' id='name_{{$phase->id}}'>
                                                <input type='text' class="form-control" name="name" value="{{$phase->name}}"/>
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descriptions') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <div class='input-group' id='description_{{$phase->id}}'>
                                                <textarea rows="3" class="form-control" name="description">{{$phase->description}}</textarea>
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

{{-- Cycle --}}

<div class="col-lg-6">
    @if (session('status2'))
        <div class="alert alert-success" role="alert">
             {{ session('status2') }}
        </div>
    @endif
    <!-- Modal -->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#addNewCycle">
        Add Cycle
    </button>
    <!-- Modal -->
    <div class="modal fade" id="addNewCycle" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Add new cycle to Field Report</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{ route('admin.frs.cycle.store')}}">
                    @csrf
                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Cycle Name') }}</label>
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
                        <div class="col-md-8">
                            <div class="form-group">
                                <div class='input-group' id='description'>
                                    <textarea rows="3" class="form-control" name="description"></textarea>
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
    @if(!empty($cycles))
    <table class="table table-bordered table-sm">
    <thead class="thead-light">
      <tr>
        <th scope="col">Cycle Name</th>
        <th scope="col">Descriptions</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach($cycles as $cycle)
        <tr>
        <td>{{$cycle->name}}</td>
        <td>{{$cycle->description}}</td>
            <td>
                @can('edit-user')
                <!-- Modal -->
                <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#editCycle{{$cycle->id}}">
                    Edit
                </button>
                <!-- Modal -->
                <div class="modal fade" id="editCycle{{$cycle->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Project Activity</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <form method="POST" action="{{ route('admin.frs.cycle.update',$cycle->id)}}">
                            {{method_field('PUT')}}
                            @csrf
                                <div class="row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Cycle Name') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <div class='input-group' id='name_{{$cycle->id}}'>
                                                <input type='text' class="form-control" name="name" value="{{$cycle->name}}"/>
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descriptions') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <div class='input-group' id='description_{{$cycle->id}}'>
                                                <textarea rows="3" class="form-control" name="description">{{$cycle->description}}</textarea>
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