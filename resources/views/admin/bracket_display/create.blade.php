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
                    <span class="ml-1">Admin</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Add</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Bracket Display</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">bracket Display Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('brackets.store')}}" method="POST">
                                @csrf
                                <div class="form-group col-md-6">
                                    <label>Tournament Name</label>
                                    <select id="inputState" class="form-control" name="tournament_id">
                                        <option selected>Choose...</option>
                                        <option>10-16</option>
                                        <option>17-18</option>
                                        <option>19-25</option>
                                    </select>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Round?</label>
                                        <input type="text" class="form-control" name="round" placeholder="What Round?">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Winner Name</label>
                                        <select id="inputState" class="form-control" name="winner_id">
                                            <option selected>Choose...</option>
                                            <option>10-16</option>
                                            <option>17-18</option>
                                            <option>19-25</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Team 1 Name</label>
                                        <select id="inputState" class="form-control" name="team1_id">
                                            <option selected>Choose...</option>
                                            <option>10-16</option>
                                            <option>17-18</option>
                                            <option>19-25</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Team 2 Name</label>
                                        <select id="inputState" class="form-control" name="team2_id">
                                            <option selected>Choose...</option>
                                            <option>10-16</option>
                                            <option>17-18</option>
                                            <option>19-25</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Team 1 Score</label>
                                        <input type="text" class="form-control" name="team1_score">
                                    </div>


                                    <div class="form-group col-md-2">
                                        <label>Team 2 Score</label>
                                        <input type="text" class="form-control" name="team2_score">
                                    </div>

                                </div>

                                <button type="submit" class="btn btn-primary">Add Bracket Display</button>
                            </form>
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
