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
                            <span class="ml-1">Card</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Card</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">


                    <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="card mb-3">
                            <img class="card-img-top img-fluid" src="./images/card/1.png" alt="Card image cap">
                            <div class="card-header">
                                <h5 class="card-title">Card title</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text text-dark">Last updated 3 mins ago</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="card mb-3">
                            <img class="card-img-top img-fluid" src="./images/card/2.png" alt="Card image cap">
                            <div class="card-header">
                                <h5 class="card-title">Card title</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">He lay on his armour-like back, and if he lifted his head a little
                                </p>
                            </div>
                            <div class="card-footer">
                                <p class="card-text d-inline">Card footer</p>
                                <a href="javascript:void()" class="card-link float-right">Card link</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@sectionend
