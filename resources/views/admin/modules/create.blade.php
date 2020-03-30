@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Module</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.modules.store') }}">
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
                                        <input id="view_namespace" type="text" class="form-control @error('view_namespace') is-invalid @enderror" name="view_namespace" value="{{ old('view_namespace') }}" required autocomplete="view_namespace" autofocus>
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
                                        <input id="route_name" type="text" class="form-control @error('route_name') is-invalid @enderror" name="route_name" value="{{ old('route_name') }}" required autocomplete="route_name" autofocus>
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
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
