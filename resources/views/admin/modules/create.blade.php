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
                        <div class="form-group row">
                            <label for="alias" class="col-md-4 col-form-label text-md-right">Module Alias</label>
                            <div class="col-md-6">
                                <input id="alias" type="text" class="form-control @error('alias') is-invalid @enderror" name="alias" value="{{ old('alias') }}" required autocomplete="alias" autofocus>
                                @error('alias')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Module Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="controller_namespace" class="col-md-4 col-form-label text-md-right">Controller Namespace</label>

                            <div class="col-md-6">
                                <input id="controller_namespace" type="text" class="form-control @error('controller_namespace') is-invalid @enderror" name="controller_namespace" value="{{ old('controller_namespace') }}" required autocomplete="controller_namespace" autofocus>
                                @error('controller_namespace')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="model_namespace" class="col-md-4 col-form-label text-md-right">Model Namespace</label>

                            <div class="col-md-6">
                                <input id="model_namespace" type="text" class="form-control @error('model_namespace') is-invalid @enderror" name="model_namespace" value="{{ old('model_namespace') }}" required autocomplete="model_namespace" autofocus>
                                @error('model_namespace')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="view_namespace" class="col-md-4 col-form-label text-md-right">View Namespace</label>

                            <div class="col-md-6">
                                <input id="view_namespace" type="text" class="form-control @error('view_namespace') is-invalid @enderror" name="view_namespace" value="{{ old('view_namespace') }}" required autocomplete="name" autofocus>
                                @error('view_namespace')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Description</label>
                            <div class="col-md-6">
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description">
                                </textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
