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
            <form class="frs-report-submission" method="POST" action="{{ route('module.frs.submissions.store')}}" enctype="multipart/form-data">
                    @csrf
                    {{-- Visit Date --}}
                    <div class="row">
                        <label for="report_date" class="col-md-2 col-form-label text-md-right">{{ __('Date') }}</label>
                        <div class="col-md-5">
                            <div class="form-group">
                                {{-- <div class='input-group'> --}}
                                    {{-- <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div> --}}
                                    <input type='date' id="report_date" class="form-control form-control-sm" name="report_date" />
                                {{-- </div>   --}}
                                {{-- <span data-error="error"></span>                             --}}
                            </div>
                        </div>
                    </div>
                    {{--Location  --}}
                    <div class="row">
                        <label class="col-md-2 col-form-label text-md-right">{{ __('Location') }}</label>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class='input-group'>
                                    <select class="custom-select custom-select-sm dynamic" name="municipal_id" id="municipal" data-dependent="posto" >
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

                    {{-- Programs --}}
                    <div class="row">
                        <label for="program" class="col-md-2 col-form-label text-md-right">{{ __('Program') }}</label>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class='input-group'>
                                    <select class="custom-select custom-select-sm dynamic" name="program_id" data-dependent="activity">
                                        <option value="">--Select Program--</option>
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
                                        <option value="">--Select Activity--</option>
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
                                        <option value="">Projects</option>
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
                                        <option value="">Activiy</option>
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
                                        <option value="">Monitoring</option>
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
                                        <option value="">Rating</option>
                                        @foreach($ratings as $rating)
                                            <option value="{{$rating->id}}">{{$rating->name}}</option>
                                        @endforeach
                                    </select>                                                 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End hidden fields -->
                    {{--Categories--}}
                    <div class="row">
                    <label class="col-md-2 col-form-label text-md-right">{{ __('Category & Cycles') }}</label>
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class='input-group'>
                                <select class="category_items" id="category_items" name="categories[]" multiple required>
                                    <option value="">Not Required</option>
                                    @foreach($categories as $category) 
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>                                                 
                            </div> 
                        </div>  
                    </div>

                    {{--Cycles--}}
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class='input-group'>
                                <select class="cycle_items" id="cycle_items" name="cycles[]" multiple>
                                    <option value="0">Not Required</option>
                                    @foreach($cycles as $cycle)
                                        <option value="{{$cycle->id}}">{{$cycle->name}}</option>
                                    @endforeach
                                </select>                                                    
                            </div>
                        </div>
                    </div>
                    {{--Phase --}}
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class='input-group'>
                                <select class="phase_items" name="phases[]" multiple>
                                    <option value="0">Not Required</option>
                                    @foreach($phases as $phase)
                                        <option value="{{$phase->id}}">{{$phase->name}}</option>
                                    @endforeach
                                </select>                                                 
                            </div>
                        </div>
                    </div>
                    </div>

                    {{-- Staff PARTISIPA --}}
                    <div class="row">    
                        <label class="col-md-2 col-form-label text-md-right">{{ __('Staff') }}</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                <div class='input-group'>
                                    <select class="staff_partisipa custom-select custom-select-sm" name="partisipa[]" multiple style="width: 100%">
                                        <option value="0" disabled>-- Select Partisipa Staff--</option>
                                        @foreach($moduleusers->first()->member as $user)
                                            <option value="{{$user->id}}">{{$user->fullnames}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>   

                    {{-- Staff Counterpart --}}
                    <div class="row"> 
                        <label class="col-md-2 col-form-label text-md-right">{{ __('Counteparts') }}</label>
                        <div class="col-md-8">
                            <div class="card collapsed-card">
                              <div class="header-card">
                                <span class="card-title custom-select-sm card-title-custom">Counterpart Staff & Capacity</span>
                                <div class="card-tools card-tool-custom">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-caret-down"></i></button>
                                </div>
                              </div>
                              <div class="card-body">
                                <table id="counterpart_capacity"></table>
                              </div>
                            </div>
                          </div>
                    </div>
                    {{-- Weakness --}}
                    <div class="row">    
                        <label class="col-md-2 col-form-label text-md-right">{{ __('Weakness') }}</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                <div class='input-group'>
                                    <select class="multiitems" name="wekanesses[]" multiple style="width: 100%">
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
                                    <textarea class="form-control form-control-sm" name="observation" id="user-message" rows="4" placeholder="Enter your observation. (max 1000 characters)"></textarea>
                                </div>
                           </div>
                        </div>
                    </div> 
                    <div class="row">    
                        <label class="col-md-2 col-form-label text-md-right">{{ __('Recommendation') }}</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                <textarea class="form-control form-control-sm" name="recommendation" rows="4" placeholder="Enter your recommendation. (max 1000 characters)"></textarea>
                              </div>
                        </div>
                    </div> 
                    <div class="row">    
                        <label class="col-md-2 col-form-label text-md-right mb-5">{{ __('Photo') }}</label>
                        <div class="col-md-8">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="file">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                <p class="text-success"><strong><i>Please check all the required fields before submit</i></strong></p>
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

{{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script> --}}
{{-- <script>
    bsCustomFileInput.init();
</script> --}}

@endsection