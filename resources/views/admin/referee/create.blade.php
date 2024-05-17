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
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">referees</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Referee Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('referees.store')}}" method="POST">
                                @csrf
                                <input type="hidden" class="form-control" name="tournament_id">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Referee Name</label>
                                        <input type="text" class="form-control" name="referee_name" placeholder="Referee name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Referee Phone</label>
                                        <input type="tel" class="form-control" name="phone" placeholder="+234 8130062780">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Referee Address</label>
                                        <input type="text" class="form-control" name="address" placeholder="Address">
                                    </div>

                                </div>

                        </div>

                        <button type="submit" class="btn btn-primary">Add Referee</button>
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
