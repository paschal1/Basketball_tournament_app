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
                        <form action="{{ route('games.store')}}" method="POST">
                            @csrf
                            <input type="hidden" class="form-control" name="tournament_id" value="1">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Game Name</label>
                                    <input type="text" class="form-control" name="game_name" placeholder="Game Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Game Date</label>
                                    <input type="date" class="form-control" name="date" placeholder="date">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Game Time</label>
                                    <input type="number" class="form-control" name="time" placeholder="time">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Game Image</label>
                                    <input type="file" class="form-control" name="file" placeholder="upload">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Game Status</label>
                                    <select id="inputState" class="form-control" name="game_status">
                                        <option selected>Choose...</option>
                                        <option>ongoing</option>
                                        <option>scheduled</option>
                                        <option>postponed</option>
                                        <option>completed</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Note</label>
                                    <input type="text" class="form-control" name="notes" placeholder="Note">
                                </div>
                            </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Add Game</button>
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
