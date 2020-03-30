@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h3>System Modules Management</h3>
                        <div class="ml-auto">
                            <!-- Modal -->
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#editAppModule">
                                    Setup New Module
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="editAppModule" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Setup New Application Module</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{ route('admin.modules.store') }}">
                                                {{method_field('PUT')}}
                                                @csrf
                                                <div class="row">
                                                    <label for="alias" class="col-md-4 col-form-label text-md-right">{{ __('Alias') }}</label>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class='input-group' id='alias'>
                                                            <input id="alias" type="text" class="form-control @error('alias') is-invalid @enderror" name="alias" value="{{ old('alias') }}" required autocomplete="alias" autofocus>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="fa fa-hashtag"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class='input-group' id='name'>
                                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="fa fa-hashtag"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                        
                                                <div class="row">
                                                    <label for="controller_namespace" class="col-md-4 col-form-label text-md-right">{{ __('Controller Namespace') }}</label>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class='input-group' id='controller_namespace'>
                                                                <input id="controller_namespace" type="text" class="form-control @error('controller_namespace') is-invalid @enderror" name="controller_namespace" value="{{ old('controller_namespace') }}" required autocomplete="controller_namespace" autofocus>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="fa fa-hashtag"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="model_namespace" class="col-md-4 col-form-label text-md-right">{{ __('Model Namespace') }}</label>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class='input-group' id='model_namespace'>
                                                                <input id="model_namespace" type="text" class="form-control @error('model_namespace') is-invalid @enderror" name="model_namespace" value="{{ old('model_namespace') }}" required autocomplete="model_namespace" autofocus>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="fa fa-hashtag"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                        
                                                <div class="row">
                                                    <label for="view_namespace" class="col-md-4 col-form-label text-md-right">{{ __('View Namespace') }}</label>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class='input-group' id='view_namespace'>
                                                                <input id="view_namespace" type="text"class="form-control @error('view_namespace') is-invalid @enderror" name="view_namespace" value="{{ old('view_namespace') }}" required autocomplete="view_namespace" autofocus>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="fa fa-hashtag"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <label for="route_name" class="col-md-4 col-form-label text-md-right">{{ __('Route Name') }}</label>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class='input-group' id='route_name'>
                                                                <input id="route_name" type="text"class="form-control @error('route_name') is-invalid @enderror" name="route_name" value="{{ old('route_name') }}" required autocomplete="route_name" autofocus>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="fa fa-hashtag"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class='input-group' id='description'>
                                                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="fa fa-hashtag"></i></span>
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
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-bordered table-sm">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Alias</th>
                            <th scope="col">Controller Namespace</th>
                            <th scope="col">Model Namespace</th>
                            <th scope="col">View Namespace</th>
                            <th scope="col">Route Name</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($modules as $module)
                            <tr>
                            <td>{{$module->name}}</td>
                            <td>{{$module->alias}}</td>
                            <td>{{$module->controller_namespace}}</td>
                            <td>{{$module->model_namespace}}</td>
                            <td>{{$module->view_namespace}}</td>
                            <td>{{$module->route_name}}</td>
                            <td>
                                @can('edit-user')
                                <!-- Modal -->
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#editAppModule">
                                    Edit Module
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="editAppModule" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Application Module</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{ route('admin.modules.update',$module->id) }}">
                                                {{method_field('PUT')}}
                                                @csrf
                                                <div class="row">
                                                    <label for="alias" class="col-md-4 col-form-label text-md-right">{{ __('Alias') }}</label>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class='input-group' id='alias'>
                                                            <input id="alias" type="text" value="{{$module->alias}}" class="form-control @error('alias') is-invalid @enderror" name="alias" value="{{ old('alias') }}" required autocomplete="alias" autofocus>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="fa fa-hashtag"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class='input-group' id='name'>
                                                                <input id="name" type="text" value="{{$module->name}}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="fa fa-hashtag"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                        
                                                <div class="row">
                                                    <label for="controller_namespace" class="col-md-4 col-form-label text-md-right">{{ __('Controller Namespace') }}</label>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class='input-group' id='controller_namespace'>
                                                                <input id="controller_namespace" value="{{$module->controller_namespace}}" type="text" class="form-control @error('controller_namespace') is-invalid @enderror" name="controller_namespace" value="{{ old('controller_namespace') }}" required autocomplete="controller_namespace" autofocus>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="fa fa-hashtag"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="model_namespace" class="col-md-4 col-form-label text-md-right">{{ __('Model Namespace') }}</label>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class='input-group' id='model_namespace'>
                                                                <input id="model_namespace" type="text" value="{{$module->model_namespace}}" class="form-control @error('model_namespace') is-invalid @enderror" name="model_namespace" value="{{ old('model_namespace') }}" required autocomplete="model_namespace" autofocus>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="fa fa-hashtag"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                        
                                                <div class="row">
                                                    <label for="view_namespace" class="col-md-4 col-form-label text-md-right">{{ __('View Namespace') }}</label>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class='input-group' id='view_namespace'>
                                                                <input id="view_namespace" type="text" value="{{$module->view_namespace}}" class="form-control @error('view_namespace') is-invalid @enderror" name="view_namespace" value="{{ old('view_namespace') }}" required autocomplete="view_namespace" autofocus>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="fa fa-hashtag"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="route_name" class="col-md-4 col-form-label text-md-right">{{ __('Route Name') }}</label>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class='input-group' id='route_name'>
                                                                <input id="route_name" type="text" value="{{$module->route_name}}" class="form-control @error('route_name') is-invalid @enderror" name="route_name" value="{{ old('route_name') }}" required autocomplete="route_name" autofocus>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="fa fa-hashtag"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class='input-group' id='description'>
                                                                <input id="description" type="text" value="{{$module->description}}" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="fa fa-hashtag"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                @endcan
                                @can('delete-user')
                                <a href=" {{ route('admin.roles.destroy', $module->id)}}"><button type="button" class="btn btn-outline-danger btn-sm">Delete</button></a>
                                @endcan
                            </td>
                            
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection