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
    <button type="button" class="btn btn-primary mb-2 btn-sm" data-toggle="modal" data-target="#addNewProgram">
        New Report
    </button>
    <!-- Modal -->
    <div class="modal fade" id="addNewProgram" tabindex="-1" role="document" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Submit new field report</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{ route('module.frs.submissions.store')}}">
                    @csrf
                    <div class="row">
                        <label for="report_date" class="col-md-2 col-form-label text-md-right">{{ __('Date') }}</label>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class='input-group'>
                                    <input type='date' id="report_date" class="form-control form-control-sm" name="report_date"/>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label for="program" class="col-md-2 col-form-label text-md-right">{{ __('Program') }}</label>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class='input-group'>
                                    <select class="custom-select custom-select-sm dynamic" name="program_id" data-dependent="activity">
                                        <option value="0">--Select Program--</option>
                                        @foreach($programs as $program)
                                            <option value="{{$program->id}}">{{$program->alias}}</option>
                                        @endforeach
                                    </select>                                                 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label for="activity" class="col-md-2 col-form-label text-md-right">{{ __('Activity') }}</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                <div class='input-group'>
                                    <select class="custom-select custom-select-sm" name="activity_id" id="activity">
                                        <option value="0">--Select Activity--</option>
                                    </select>                                                 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Hidden fields -->
                    <div class="row" id="project-activity-field">
                        <label for="project" class="col-md-2 col-form-label text-md-right">{{ __('Project') }}</label>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class='input-group'>
                                    <select class="custom-select custom-select-sm" name="project_id" id="project">
                                        <option value="0">Projects</option>
                                        @foreach($projects as $project)
                                            <option value="{{$project->id}}">{{$project->name}}</option>
                                        @endforeach
                                    </select>                                                 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class='input-group'>
                                    <select class="custom-select custom-select-sm" name="project_activity_id" id="project_activity">
                                        <option value="0">Activiy</option>
                                        @foreach($projectActivities as $activity)
                                            <option value="{{$activity->id}}">{{$activity->name}}</option>
                                        @endforeach
                                    </select>                                                 
                                </div>
                            </div>
                        </div>
                    </div>
 
                    <div class="row" id="monitoring-tools-field">
                        <label for="monitoring_tool" class="col-md-2 col-form-label text-md-right">{{ __('Monitoring') }}</label>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class='input-group'>
                                    <select class="custom-select custom-select-sm" name="monitoring_tool_id" id="monitoring_tool">
                                        <option value="0">Monitoring</option>
                                        @foreach($monitorings as $tool)
                                            <option value="{{$tool->id}}">{{$tool->name}}</option>
                                        @endforeach
                                    </select>                                                 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class='input-group'>
                                    <select class="custom-select custom-select-sm" name="monitoring_rating_id" id="monitoring_rating">
                                        <option value="0">Rating</option>
                                        @foreach($ratings as $rating)
                                            <option value="{{$rating->id}}">{{$rating->name}}</option>
                                        @endforeach
                                    </select>                                                 
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- End hidden fields -->
                    <div class="row">
                        <label class="col-md-2 col-form-label text-md-right">{{ __('Location') }}</label>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class='input-group'>
                                    <select class="custom-select custom-select-sm dynamic" name="municipal_id" id="municipal" data-dependent="posto">
                                        <option value="" selected>Municipal</option>
                                        @foreach($municipals as $municipal)
                                            <option value="{{$municipal->id}}">{{$municipal->name}}</option>
                                        @endforeach
                                    </select>                                                 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class='input-group'>
                                    <select class="custom-select custom-select-sm dynamic" name="posto_id" id="posto" data-dependent="suco">
                                        <option value="0">Posto</option>
                                    </select>                                                 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class='input-group'>
                                    <select class="custom-select custom-select-sm " name="suco_id" id="suco">
                                        <option value="0" selected>Suco</option>
                                    </select>                                                 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">    
                        <label class="col-md-2 col-form-label text-md-right">{{ __('Staff') }}</label>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class='input-group'>
                                    <select class="multiitems" name="users[]" multiple>
                                        <option value="0" disabled>-- Select Partisipa Staff --</option>
                                        @foreach($moduleusers->first()->member as $user)
                                            <option value="{{$user->id}}">{{$user->fullnames}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>   
                    <div class="row">    
                        <label class="col-md-2 col-form-label text-md-right">{{ __('Weakness') }}</label>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class='input-group'>
                                    <select class="multiitems" name="wekanesses[]" multiple>
                                        <option value="0" disabled>-- Select Weakness Observed --</option>
                                        @foreach($weaknesses as $wekaness)
                                            <option value="{{$wekaness->id}}">{{$wekaness->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                           </div>
                        </div>
                    </div> 
                    <div class="row">    
                        <label class="col-md-2 col-form-label text-md-right">{{ __('Obs.') }}</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                <div class='input-group'>
                                    <textarea class="form-control form-control-sm" name="observation" id="user-message" rows="5" placeholder="Enter your observation. (max 1000 characters)"></textarea>
                                </div>
                           </div>
                        </div>
                    </div> 
                    <div class="row">    
                        <label class="col-md-2 col-form-label text-md-right">{{ __('Recomend') }}</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                <textarea class="form-control form-control-sm" name="recommendation" rows="5" placeholder="Enter your recommendation. (max 1000 characters)"></textarea>
                              </div>
                        </div>
                    </div> 
                    <div class="row form-group">    
                        <label class="col-md-2 col-form-label text-md-right">{{ __('Photo') }}</label>
                        <div class="col-md-8">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input form-control-sm  p-0" id="customFile" name="photo">
                                <label class="custom-file-label" for="customFile">Choose a field photo</label>
                              </div>
                        </div>
                    </div> 
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
        </div>
    </div>    
<table class="table table-bordered table-sm">
    <thead class="thead-light">
      <tr>
        <th scope="col">Submitted on</th>
        <th scope="col">Location</th>
        <th scope="col">Activity</th>
        <th scope="col">Status</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
</div>

@endsection