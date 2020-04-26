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
    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#addWeaknesses">
        Add Weakness
    </button>
    <!-- Modal -->
    <div class="modal fade" id="addWeaknesses" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Add new weaknesses tool to Field Report</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{ route('admin.frs.weaknesses.store')}}">
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
                        <label class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class='input-group'>
                                    <select class="custom-select" name="category_id">
                                        <option value="" selected>--Select Category--</option>
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
@if(!empty($weaknesses))
<table class="table table-bordered table-sm">
    <thead class="thead-light">
      <tr>
        <th scope="col">Weakness</th>
        <th scope="col">Category</th>
        <th scope="col">Descriptions</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach($weaknesses as $weakness)
        <tr>
        <td>{{$weakness->name}}</td>
        <td>{{$weakness->category->name}}</td>
        <td>{{$weakness->description}}</td>
            <td>
                @can('edit-user')
                <!-- Modal -->
                <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#editWeaknesses{{$weakness->id}}">
                    Edit
                </button>
                <!-- Modal -->
                <div class="modal fade" id="editWeaknesses{{$weakness->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Edit weakness tool</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <form method="POST" action="{{ route('admin.frs.weaknesses.update',$weakness->id)}}">
                            {{method_field('PUT')}}
                            @csrf
                            <div class="row">
                                <label class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <div class='input-group'>
                                            <input type='text' class="form-control" name="name" value="{{$weakness->name}}"/>
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="category_id_{{$weakness->id}}" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class='input-group' id="category_id_{{$weakness->id}}">
                                            <select class="custom-select" name="category_id">
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}" {{$weakness->category_id == $category->id ? 'selected':''}}>{{$category->name}}</option>
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
                                <label class="col-md-4 col-form-label text-md-right">{{ __('Descriptions') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <div class='input-group'>
                                            <textarea rows="3" class="form-control" name="description">
                                                {{$weakness->description}}
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