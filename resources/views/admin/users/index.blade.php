@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h3>User Management</h3>
                        <div class="ml-auto">
                        <!-- Modal -->
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUserLoginAccountModal">
                            New Personnel
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="addUserLoginAccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Add New Personnel</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('admin.users.store') }}">
                                        @csrf
                                        <div class="row">
                                            <label for="niss" class="col-md-4 col-form-label text-md-right">{{ __('NISS #') }}</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class='input-group' id='niss'>
                                                        <input type='text' class="form-control" name="niss"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fa fa-hashtag"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class='input-group' id='firstname'>
                                                        <input type='text' class="form-control" name="firstname"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class='input-group' id='lastname'>
                                                        <input type='text' class="form-control" name="lastname"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fa fa-user-o"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="alias" class="col-md-4 col-form-label text-md-right">{{ __('Alias') }}</label>
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
                                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class='input-group' id='dob'>
                                                        <select name="gender" class="custom-select">
                                                            <option value="">-- Choose One --</option>
                                                            @foreach($genders as $gender)
                                                                <option value="{{$gender->abbr}}">{{$gender->name}}</option>
                                                            @endforeach
                                                        </select> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class='input-group' id='dob'>
                                                        <input type='date' class="form-control" name="dob"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Personal E-Mail') }}</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class='input-group' id='email'>
                                                        <input type='text' class="form-control" name="email"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ __('Personal Mobile') }}</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class='input-group' id='telephone'>
                                                        <input type='text' class="form-control" name="telephone"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Nationality') }}</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class='input-group' id='dob'>
                                                        <select name="nationality" class="custom-select">
                                                            <option value="">-- Choose One --</option>
                                                            @foreach($nationalities as $nationality)
                                                                <option value="{{$nationality->id}}">{{$nationality->name}}</option>
                                                            @endforeach
                                                        </select> 
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
                            <th scope="col">Full Name</th>
                            <th scope="col">Alias</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Nationality</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                            <th scope="row">{{$user->fullnames}}</th>
                            <td>{{$user->alias}}</td>
                            <td>
                                @foreach($genders as $gender)
                                    {{$user->gender == $gender->abbr ? $gender->name : ''}}
                                @endforeach()
                            </td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->telephone}}</td>
                            <td>
                                @foreach($nationalities as $nationality)
                                    {{$user->nationality == $nationality->id ? $nationality->name : ''}}
                                @endforeach()
                            </td>
                            <td>
                                @can('edit-user')
                                <a href=" {{ route('admin.users.show', $user->id)}}"><button type="button" class="btn btn-outline-primary btn-sm">Update details</button></a>
                                @endcan
                                @can('delete-user')
                                <a href=" {{ route('admin.users.destroy', $user->id)}}"><button type="button" class="btn btn-outline-danger btn-sm">Delete</button></a>
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