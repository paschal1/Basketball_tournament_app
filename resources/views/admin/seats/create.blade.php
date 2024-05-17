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
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Seats</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Ticket Type Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('seats.store')}}" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Seat Name</label>
                                        <input type="text" class="form-control" name="seat_name" placeholder="seat name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Seat Limit</label>
                                        <input type="text" class="form-control" name="seat_limit" placeholder="seat limit">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Seat Rate</label>
                                        <input type="number" class="form-control" name="seat_rate" placeholder="seat rate">
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

<!--**********************************
            Content body end
        ***********************************-->
@endsection
