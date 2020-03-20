@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center mb-4">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">Profile details</div>
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
                            <tr><th>Email</th><td>{{$user->first()->email}}</td></tr>
                            <tr><th>Telephone</th><td>{{$user->first()->telephone}}</td></tr>
                            <tr><th>Gender</th><td>{{$user->first()->gender}}</td></tr>
                            <tr><th>Nationality</th><td>{{$user->first()->nationality}}</td></tr>
                            {{-- <tr><th>Roles</th><td> --}}
                                {{-- @foreach( $user->first()->roles as $role ) 
                                {{$role->name."\n" }} 
                                @endforeach --}}
                            {{-- </td></tr> --}}
                    </table>
                    
                    <!-- Modal -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editUserDetailsModal">
                        Edit
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="editUserDetailsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">User Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" name="fullname" class="form-control" value="{{$user->first()->fullnames}}">
                                    <label>First Name</label>
                                    <input type="text" name="firstname" class="form-control" value="{{$user->first()->firstname}}">
                                    <label>Last Name</label>
                                    <input type="text" name="lastname" class="form-control" value="{{$user->first()->lastname}}">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" value="{{$user->first()->email}}">
                                    <label>Telephone</label>
                                    <input type="text" name="firstname" class="form-control" value="{{$user->first()->telephone}}">
                                    <label>Gender</label>
                                    <select class="form-control">
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                    </select>
                                    <label>Nationality</label>
                                    <input type="text" name="nationality" class="form-control" value="{{$user->first()->nationality}}">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
            <div class="card-header">Login Account</div>
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
                            Edit
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="editUserLoginAccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Edit User Login Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('admin.account.update',$user->first()->account->id) }}">
                                        {{method_field('PUT')}}
                                        @csrf
                                        <div class="form-group row">
                                            <input type="hidden" name="user_id" value={{$user->first()->id}}>
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->first()->account->name}}" required autocomplete="name" autofocus>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->first()->account->email}}" required autocomplete="email">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
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
                            Add
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="addUserLoginAccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Add User Login</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('admin.account.store') }}">
                                        @csrf
                                        <div class="form-group row">
                                            <input type="hidden" name="user_id" value={{$user->first()->id}}>
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->first()->fullnames }}" required autocomplete="name" autofocus>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
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
            <div class="card-header">Employment Details</div>
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
                        <a href="#"><button type="button" class="btn btn-primary">Edit</button></a>
                    @else
                        <!-- Modal -->
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUserEmploymentModal">
                            Add
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="addUserEmploymentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Add User Login</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('admin.employment.store') }}">
                                        @csrf
                                        <input type="hidden" name="user_id" value={{$user->first()->id}}>
                                        <div class="form-group row">
                                            <label for="employee_email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Addrress') }}</label>
                                            <div class="col-md-6">
                                                <input id="employee_email" type="text" class="form-control @error('employee_email') is-invalid @enderror" name="employee_email" value="{{ old('employee_email') }}" required autocomplete="employee_email" autofocus>
                                                @error('employee_email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="employee_telephone" class="col-md-4 col-form-label text-md-right">{{ __('Telephone') }}</label>
                                            <div class="col-md-6">
                                                <input id="employee_telephone" type="text" class="form-control @error('employee_telephone') is-invalid @enderror" name="employee_telephone" value="{{ old('employee_telephone') }}" required autocomplete="employee_telephone">
                                                @error('employee_telephone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="employee_position" class="col-md-4 col-form-label text-md-right">{{ __('Position') }}</label>
                                            <div class="col-md-6">
                                                <select class="form-control" id="employee_position" name="employee_position" >
                                                    @foreach($positions as $position)
                                                        <option value="{{$position->id}}">{{$position->code}} - {{$position->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('employee_position')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="employee_department" class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>
                                            <div class="col-md-6">
                                                <select class="form-control" id="employee_department" name="employee_department" >
                                                    @foreach($departments as $department)
                                                        <option value="{{$department->id}}">{{$department->code}} - {{$department->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('employee_department')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        
                                        <div class="form-group row">
                                            <label for="employee_startdate" class="col-md-4 col-form-label text-md-right">{{ __('Start Date') }}</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class='input-group date' id='employee_startdate'>
                                                        <input type='date' class="form-control" name="employee_startdate"/>
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="employee_enddate" class="col-md-4 col-form-label text-md-right">{{ __('End Date') }}</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class='input-group date' id='employee_enddate'>
                                                        <input type='date' class="form-control" name="employee_enddate"/>
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
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
            <div class="card-header">Team Details</div>
                <div class="card-body">
                    @if (session('status_team'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status_team') }}
                        </div>
                    @endif
                    @if($user->first()->team()->exists())
                        <table class="table table-borderless table-sm">
                            <tr><th>Team Code</th><td>{{$user->position->name}}</td></tr>
                            <tr><th>Team</th><td>{{$user->position->name}}</td></tr>
                            <tr><th>Description</th><td>LES</td></tr>
                        </table>
                        <a href="#"><button class="btn btn-primary btn-sm">Edit</button></a>
                    @else
                        <!-- Modal -->
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUserTeamModal">
                            Add
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="addUserTeamModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Add User Login</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('admin.teams.store') }}">
                                        @csrf
                                        <div class="form-group row">
                                            <input type="hidden" name="user_id" value={{$user->first()->id}}>
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->first()->fullnames }}" required autocomplete="name" autofocus>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
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
</div>
@endsection