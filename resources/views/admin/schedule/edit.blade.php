@extends('layouts.admin')
@section('content')
<!--**********************************
            Content body start
        ***********************************-->
<!-- <div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <p class="mb-0">Your business dashboard template</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Components</a></li>
                </ol>
            </div>
        </div>
         row
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form step</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('store')}}"  Method="POST" id="step-form-horizontal" class="step-form-horizontal">
                            <div>
                                <h4>Schedule Info</h4>
                                <section>
                                    <div class="row">

                                        <div class="col-lg-12 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Game Name*</label>
                                                <select id="inputGameName" class="form-control" name="game_id">
                                                    <option selected>Choose...</option>
                                                    <option>ongoing</option>
                                                    <option>scheduled</option>
                                                    <option>postponed</option>
                                                    <option>completed</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Date*</label>
                                                <div class="input-group">
                                                    <input type="date" name="date" class="form-control" placeholder="12-4-2024" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Time*</label>
                                                <input type="number" name="time" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h4>Venue and Team Info</h4>
                                <section>
                                    <div class="row">
                                        <div class="col-lg-12 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Venue Name*</label>
                                                <input type="text" name="venue" class="form-control" placeholder="Cellophane Square" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Team First*</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="team1" id="team1" placeholder="Team first name" required>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Team Second*</label>
                                                <div class="input-group">
                                                    <input type="text" name="team2" class="form-control" placeholder="Team Second Name" required>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </section>
                                <h4>More Info</h4>
                                <section>
                                    <div class="row">
                                        <div class="col-4 col-sm-3 mb-4">
                                            <h4>Game Status *</h4>
                                        </div>
                                        <div class="col-4 col-sm-3 mb-4">
                                            <div class="form-group">
                                                <select id="inputGameName" class="form-control" name="game_status">
                                                    <option selected>Choose...</option>
                                                    <option>ongoing</option>
                                                    <option>scheduled</option>
                                                    <option>postponed</option>
                                                    <option>completed</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-4 col-sm-3 mb-4">
                                            <h4>Results *</h4>
                                        </div>
                                        <div class="col-4 col-sm-3 mb-4">
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="results" id="input2">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-4 col-sm-3 mb-4">
                                            <h4>Referees *</h4>
                                        </div>
                                        <div class="col-4 col-sm-3 mb-4">
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="referees" id="input5">
                                            </div>
                                        </div>

                                    </div>


                                </section>
                                <h4>Notes</h4>
                                <section>
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Note</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="summernote"></div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1">Admin</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Add</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Schedule</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Game Schedule Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ url('update', $schedule->id)}}" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="col-lg-12 mb-4">
                                        <div class="form-group">
                                            <label class="text-label">Game Name*</label>
                                            <select id="inputGameName" class="form-control" name="game_id">
                                                <option selected>Choose...</option>
                                                <option>ongoing</option>
                                                <option>scheduled</option>
                                                <option>postponed</option>
                                                <option>completed</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Date</label>
                                        <input type="date" class="form-control" value="{{ $schedule->date}}" name="date" placeholder="Date">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Time</label>
                                        <input type="text" class="form-control" value="{{ $schedule->time}}" name="time" placeholder="time">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Venue</label>
                                        <input type="text" class="form-control" name="venue" value="{{ $schedule->venue}}" placeholder="Venue">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Team one</label>
                                        <input type="text" class="form-control" name="team1" value="{{ $schedule->team1}}" placeholder="Team One">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Team Two</label>
                                        <input type="text" class="form-control" name="team2" value="{{ $schedule->team2}}" placeholder="Team Two">
                                    </div>

                                    <div class="col-lg-12 mb-4">
                                        <div class="form-group">
                                            <label class="text-label">Game Status*</label>
                                            <select id="inputGameName" class="form-control" name="game_status">
                                                <option selected>Choose...</option>
                                                <option>ongoing</option>
                                                <option>scheduled</option>
                                                <option>postponed</option>
                                                <option>completed</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Results</label>
                                        <input type="text" class="form-control" name="results" value="{{ $schedule->results}}" placeholder="Results">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Referees</label>
                                        <input type="text" class="form-control" name="referees" value="{{ $schedule->results}}" placeholder="Referees">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Notes</label>
                                        <input type="text" class="form-control" name="note" value="{{ $schedule->note}}" placeholder="Notes">
                                    </div>

                                </div>




                        </div>

                        <button type="submit" class="btn btn-primary">Schedule Game</button>
                        </form>
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
