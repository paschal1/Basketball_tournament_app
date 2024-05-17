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
                        <h4 class="card-title">Add Ticket Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ url('tickets.store')}}" method="POST">
                                @csrf
                                <input type="hidden" class="form-control" name="tournament_id">
                                <input type="hidden" class="form-control" name="game_id">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Ticket Type</label>
                                        <select id="inputTicket" class="form-control" name="ticket_type">
                                            <option selected>Choose...</option>
                                            <option>ongoing</option>
                                            <option>scheduled</option>
                                            <option>postponed</option>
                                            <option>completed</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Price</label>
                                        <select id="inputPrice" class="form-control" name="price">
                                            <option selected>Choose...</option>
                                            <option>ongoing</option>
                                            <option>scheduled</option>
                                            <option>postponed</option>
                                            <option>completed</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Starting Date</label>
                                        <input type="number" class="form-control" name="time" placeholder="time">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>End Date</label>
                                        <input type="file" class="form-control" name="file" placeholder="upload">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Status</label>
                                        <select id="inputState" class="form-control" name="age">
                                            <option selected>Choose...</option>
                                            <option>ongoing</option>
                                            <option>scheduled</option>
                                            <option>postponed</option>
                                            <option>completed</option>
                                        </select>
                                    </div>
                                </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Seat</button>
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
