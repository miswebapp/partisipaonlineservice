@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center mb-4">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">Personnel Profile details</div>
                <div class="card-body">
                    @if (session('status_profile'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status_profile') }}
                        </div>
                    @endif
                    <table class="table table-borderless table-sm">
                            <tr><th class="col-form-label">Full Name</th><td>{{$user->first()->fullnames}}</td></tr>
                            <tr><th class="col-form-label">First Name</th><td>{{$user->first()->firstname}}</td></tr>
                            <tr><th class="col-form-label">Last Name</th><td>{{$user->first()->lastname}}</td></tr>
                            <tr><th>Alias</th><td>{{$user->first()->alias}}</td></tr>
                            <tr><th>Date of Birth</th><td>{{$user->first()->dob}}</td></tr>
                            <tr><th>Personal Email</th><td>{{$user->first()->email}}</td></tr>
                            <tr><th>Personal Telephone</th><td>{{$user->first()->telephone}}</td></tr>
                            <tr><th>Gender</th>
                                <td>
                                    @foreach($genders as $gender)
                                        {{$user->first()->gender == $gender->abbr ? $gender->name : ''}}
                                    @endforeach()
                                </td>
                            </tr>
                            <tr><th>Nationality</th>
                                <td>
                                    @foreach($nationalities as $nationality)
                                        {{$user->first()->nationality == $nationality->id ? $nationality->name : ''}}
                                    @endforeach()
                                </td>
                            </tr>
                    </table>
                    
                    <!-- Modal -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editUserDetailsModal">
                        Edit Personnel Profile
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="editUserDetailsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Edit Personnel Profile Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('admin.users.update',$user->first()->id)}}">
                                    {{method_field('PUT')}}
                                    @csrf
                                    <div class="row">
                                        <label for="niss" class="col-md-4 col-form-label text-md-right">{{ __('NISS #') }}</label>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class='input-group' id='niss'>
                                                    <input type='text' class="form-control" name="niss" value="{{$user->first()->niss}}"/>
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
                                                    <input type='text' class="form-control" name="firstname" value="{{$user->first()->firstname}}"/>
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
                                                    <input type='text' class="form-control" name="lastname" value="{{$user->first()->lastname}}"/>
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
                                                    <input type='text' class="form-control" name="alias" value="{{$user->first()->alias}}"/>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class='input-group' id='gender'>
                                                    <select name="gender" class="custom-select">
                                                        @foreach($genders as $gender)
                                                            <option value="{{$gender->abbr}}" {{$user->first()->gender == $gender->abbr ? 'selected' : ''}}>{{$gender->name}}</option>
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
                                                <input type='date' class="form-control" name="dob" value="{{$user->first()->dob}}"/>
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
                                                    <input type='text' class="form-control" name="email" value="{{$user->first()->email}}"/>
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
                                                    <input type='text' class="form-control" name="telephone" value="{{$user->first()->telephone}}"/>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="nationality" class="col-md-4 col-form-label text-md-right">{{ __('Nationality') }}</label>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class='input-group' id='nationality'>
                                                    <select name="nationality" class="custom-select">
                                                        @foreach($nationalities as $nationality)
                                                            <option value="{{$nationality->id}}" {{$user->first()->nationality == $nationality->id ? 'selected' : ''}}>{{$nationality->name}}</option>
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

        <div class="col-md-6">
            <div class="card">
            <div class="card-header">Personnel Login Account</div>
                <div class="card-body">
                    @if (session('status_account'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status_account') }}
                        </div>
                    @endif
                    @if($user->first()->account()->exists())
                        <table class="table table-borderless table-sm">
                            <tr><th>Account Name</th><td>{{$user->first()->account->name}}</td></tr>
                            <tr><th>Account Email</th><td>{{$user->first()->account->email}}</td></tr>
                        </table>
                        <!-- Modal -->
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editUserLoginAccountModal">
                            Edit Login Account
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="editUserLoginAccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Edit Personnel Login Account</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('admin.account.update',$user->first()->account->id) }}">
                                        {{method_field('PUT')}}
                                        @csrf
                                        <input type="hidden" name="user_id" value={{$user->first()->id}}>
                                        
                                        <div class="row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Account Name') }}</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class='input-group' id='name'>
                                                        <input type='text' class="form-control" name="name" value="{{$user->first()->account->name}}"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fa fa-user-o"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Account Email') }}</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class='input-group' id='email'>
                                                        <input type='text' class="form-control" name="email" value="{{$user->first()->account->email}}"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
                                                        </div>
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
                    @else
                        <!-- Modal -->
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUserLoginAccountModal">
                            Setup Login Account
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="addUserLoginAccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Add Personnel Login Account</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('admin.account.store') }}">
                                        @csrf
                                        <input type="hidden" name="user_id" value={{$user->first()->id}}>
                                        <div class="row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Account Name') }}</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class='input-group' id='name'>
                                                        <input type='text' class="form-control" name="name"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fa fa-user-o"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Account Email') }}</label>
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
                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
                    @endif                
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">Personnel Employment Details</div>
                <div class="card-body">
                    @if (session('status_employment'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status_employment') }}
                        </div>
                    @endif
                    @if($user->first()->employment()->exists())
                        <table class="table table-borderless table-sm">
                            <tr><th>Position Code</th><td>{{$user->first()->position->first()->code}}</td></tr>
                            <tr><th>Position Name</th><td>{{$user->first()->position->first()->name}}</td></tr>
                            <tr><th>Department Name</th><td>{{$user->first()->department->first()->name}}</td></tr>
                            <tr><th>E-Mail</th><td>{{$user->first()->employment->employee_email}}</td></tr>
                            <tr><th>Telephone</th><td>{{$user->first()->employment->employee_telephone}}</td></tr>
                            <tr><th>Start Date</th><td>{{$user->first()->employment->employee_startdate}}</td></tr>
                            <tr><th>End Date</th><td>{{$user->first()->employment->employee_enddate}}</td></tr>
                        </table>
                        <!-- Modal -->
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUserEmploymentModal">
                            Edit Employment
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="addUserEmploymentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Edit Personnel Employment Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('admin.employment.update',$user->first()->employment->id) }}">
                                        {{method_field('PUT')}}
                                        <input type="hidden" name="user_id" value={{$user->first()->id}}>
                                        @csrf
                                        <div class="row">
                                            <label for="employee_email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Addrress') }}</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class='input-group' id='employee_email'>
                                                    <input type='text' class="form-control" name="employee_email" value="{{$user->first()->employment->employee_email}}"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="employee_telephone" class="col-md-4 col-form-label text-md-right">{{ __('Telephone') }}</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class='input-group' id='employee_telephone'>
                                                        <input type='text' class="form-control" name="employee_telephone" value="{{$user->first()->employment->employee_telephone}}"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <label for="employee_position" class="col-md-4 col-form-label text-md-right">{{ __('Position') }}</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class='input-group' id='employee_position'>
                                                        <select class="form-control" id="employee_position" name="employee_position" >
                                                            @foreach($positions as $position)
                                                                <option value="{{$position->id}}" {{$user->first()->employment->position_id == $position->id ? 'selected' : ''}}>{{$position->code}} - {{$position->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="employee_department" class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class='input-group' id='employee_department'>
                                                        <select class="form-control" id="employee_department" name="employee_department" >
                                                            @foreach($departments as $department)
                                                                <option value="{{$department->id}}" {{$user->first()->employment->department_id == $department->id ? 'selectd' : ''}}>{{$department->code}} - {{$department->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="employee_startdate" class="col-md-4 col-form-label text-md-right">{{ __('Start Date') }}</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class='input-group' id='employee_startdate'>
                                                        <input type='date' class="form-control" name="employee_startdate" value="{{$user->first()->employment->employee_startdate}}"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                        
                                        <div class="row">
                                            <label for="employee_enddate" class="col-md-4 col-form-label text-md-right">{{ __('End Date') }}</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class='input-group' id='employee_enddate'>
                                                        <input type='date' class="form-control" name="employee_enddate" value="{{$user->first()->employment->employee_enddate}}"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                </div>
                            </div>
                            </div>
                        </div>
                    @else
                        <!-- Modal -->
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUserEmploymentModal">
                            Setup Employment
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="addUserEmploymentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Add Personnel Employment Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('admin.employment.store') }}">
                                        @csrf
                                        <input type="hidden" name="user_id" value={{$user->first()->id}}>
                                        <div class="row">
                                            <label for="employee_email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Addrress') }}</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class='input-group' id='employee_email'>
                                                        <input type='text' class="form-control" name="employee_email"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="employee_telephone" class="col-md-4 col-form-label text-md-right">{{ __('Telephone') }}</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class='input-group' id='employee_telephone'>
                                                        <input type='text' class="form-control" name="employee_telephone"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <label for="employee_position" class="col-md-4 col-form-label text-md-right">{{ __('Position') }}</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class='input-group' id='employee_position'>
                                                        <select class="form-control" id="employee_position" name="employee_position" >
                                                            @foreach($positions as $position)
                                                                <option value="{{$position->id}}">{{$position->code}} - {{$position->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="employee_department" class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class='input-group' id='employee_department'>
                                                        <select class="form-control" id="employee_department" name="employee_department" >
                                                            @foreach($departments as $department)
                                                                <option value="{{$department->id}}">{{$department->code}} - {{$department->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="employee_startdate" class="col-md-4 col-form-label text-md-right">{{ __('Start Date') }}</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class='input-group' id='employee_startdate'>
                                                        <input type='date' class="form-control" name="employee_startdate"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                        
                                        <div class="row">
                                            <label for="employee_enddate" class="col-md-4 col-form-label text-md-right">{{ __('End Date') }}</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class='input-group' id='employee_enddate'>
                                                        <input type='date' class="form-control" name="employee_enddate"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                                                                
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                </div>
                            </div>
                            </div>
                        </div>
                    @endif                
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">Personnel Application Module</div>
                <div class="card-body">
                    @if (session('status_user_module'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status_user_module') }}
                        </div>
                    @endif
                    
                    @if($user->first()->modules()->exists())
                        <table class="table table-borderless table-sm">
                            <tr><th>Modules</th><th>User roles</th></tr>
                            @foreach($user->first()->modules as $usermodule)
                                <tr><td>{{$usermodule->name}}</td><td>-</td></tr>
                            @endforeach
                        </table>
                        <!-- Modal -->
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editUserModule">
                            Edit Module Assignment
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="editUserModule" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Setup Personnel's Application Module</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('admin.usermodules.store') }}">
                                        @csrf
                                        <div class="form-group row">
                                            <input type="hidden" name="user_id" value={{$user->first()->id}}>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Application Module') }}</label>
                                            <div class="col-md-6">
                                                @foreach( $modules as $module )
                                                <div class="form-check">
                                                    <input type="checkbox" name="modules[]" value="{{$module->id}}" 
                                                    @if($user->first()->modules->pluck('id')->contains($module->id)) checked 
                                                    @endif>
                                                    <label>{{$module->name}}</label>
                                                </div>
                                                @endforeach 
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
                    @else
                        <!-- Modal -->
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUserTeamModal">
                            Setup Module Assignment
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="addUserTeamModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Setup Personnel's Application Module</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('admin.usermodules.store') }}">
                                        @csrf
                                        <div class="form-group row">
                                            <input type="hidden" name="user_id" value={{$user->first()->id}}>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Application Module') }}</label>
                                            <div class="col-md-6">
                                                @foreach( $modules as $module )
                                                <div class="form-check">
                                                    <input type="checkbox" name="modules[]" value="{{$module->id}}" 
                                                    @if($user->first()->modules->pluck('id')->contains($module->id)) checked 
                                                    @endif>
                                                    <label>{{$module->name}}</label>
                                                </div>
                                                @endforeach 
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
                    @endif                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection