@extends('layouts.admin')
@section('content')
<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1">Datatable</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                </ol>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        {{-- <div class="card-header">{{ __('Dashboard') }}
                    </div> --}}

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        {{-- {{ __('You are logged in!') }} --}}
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- row -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Scheduled Game</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Game Name</th>
                                    <th>Time</th>
                                    <th>Date</th>
                                    <th>Venue</th>
                                    <th>Team One</th>
                                    <th>Team Two</th>
                                    <th>Status</th>
                                    <th>Result</th>
                                    <th>Referee</th>
                                    <th>Notes</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($schedule as $schedules)
                                <tr>
                                    <td>{{$schedules->id}}</td>
                                    <td>{{$schedules->game_id}}</td>
                                    <td>{{$schedules->time}}</td>
                                    <td>{{$schedules->date}}</td>
                                    <td>{{$schedules->venue}}</td>
                                    <td>{{$schedules->team1}}</td>
                                    <td>{{$schedules->team2}}</td>
                                    <td>{{$schedules->game_status}}</td>
                                    <td>{{$schedules->results}}</td>
                                    <td>{{$schedules->referees}}</td>

                                    <td>{{$schedules->note}}</td>

                                    <td>
                                        <span>
                                            <a href="{{url('editschedule', $schedules->id)}}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i> </a>
                                            <a href="{{url('destroy', [($schedules->id)])}}" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>S/N</th>
                                    <th>Game Name</th>
                                    <th>Time</th>
                                    <th>Date</th>
                                    <th>Venue</th>
                                    <th>Team One</th>
                                    <th>Team Two</th>
                                    <th>Status</th>
                                    <th>Result</th>
                                    <th>Referee</th>
                                    <th>Notes</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<!--**********************************
            Content body end
        ***********************************-->
@endsection
