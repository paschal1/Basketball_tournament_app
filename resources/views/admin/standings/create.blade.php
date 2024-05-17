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
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Games</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Game Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ url('standings')}}" method="POST">
                                @csrf
                                <input type="hidden" class="form-control" value="1" name="tournament_id">
                                <input type="hidden" class="form-control" value="1" name="team_id">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Team Name</label>
                                        <input type="text" class="form-control" name="team_name" placeholder="seat name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Number of Game Played</label>
                                        <input type="number" class="form-control" name="number_game_played" placeholder="number of game played">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Wins</label>
                                        <input type="number" class="form-control" name="wins" placeholder="Wins">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Losses</label>
                                        <input type="number" class="form-control" name="losses" placeholder="Losses">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Point Against</label>
                                        <input type="number" class="form-control" name="point_against" placeholder="Point Against">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Point Differential</label>
                                        <input type="number" class="form-control" name="point_differential" placeholder="Point Differential">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Rank</label>
                                        <input type="number" class="form-control" name="rank" placeholder="Rank">

                                    </div>
                                    <!-- row -->
                                    <div class="row">
                                        <div class="col-xl-12 col-xxl-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Note</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="summernote" name="notes"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Standings</button>
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
