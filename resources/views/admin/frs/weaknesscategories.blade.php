@extends('layouts.frs-master')
@section('content')
<div class="col-lg-8">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
             {{ session('status') }}
        </div>
    @endif
    <!-- Modal -->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#addWeaknessesCategory">
        Add Weakness Category
    </button>
    <!-- Modal -->
    <div class="modal fade" id="addWeaknessesCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Add new weaknesses category to Field Report</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{ route('admin.frs.weaknessescategories.store')}}">
                    @csrf
                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                        <div class="col-md-8">
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
                        <label class="col-md-4 col-form-label text-md-right">{{ __('Descriptions') }}</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                <div class='input-group'>
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
@if(!empty($categories))
<table class="table table-bordered table-sm">
    <thead class="thead-light">
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Descriptions</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
        <td>{{$category->name}}</td>
        <td>{{$category->description}}</td>
            <td>
                @can('edit-user')
                <!-- Modal -->
                <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#editWeaknessesCategory{{$category->id}}">
                    Edit
                </button>
                <!-- Modal -->
                <div class="modal fade" id="editWeaknessesCategory{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Edit weakness category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <form method="POST" action="{{ route('admin.frs.weaknessescategories.update',$category->id)}}">
                            {{method_field('PUT')}}
                            @csrf
                            <div class="row">
                                <label class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <div class='input-group'>
                                            <input type='text' class="form-control" name="name" value="{{$category->name}}"/>
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-4 col-form-label text-md-right">{{ __('Descriptions') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <div class='input-group'>
                                            <textarea rows="3" class="form-control" name="description">
                                                {{$category->description}}
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