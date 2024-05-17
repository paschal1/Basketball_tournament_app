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
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Player</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-6 col-xxl-12">
                     <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Athlete Information</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{ url('post_player') }}" method="POST">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Player First Name</label>
                                                <input type="text" class="form-control" placeholder="1234 Main St" name="fname">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Player Last Name</label>
                                                <input type="text" class="form-control" name="lname" placeholder="1234 Main St">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Player Display Name</label>
                                                <input type="text" class="form-control" name="dname" placeholder="1234 Main St">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="email" placeholder="Email">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Password</label>
                                                <input type="password" class="form-control" name="password" placeholder="Password">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>City</label>
                                                <input type="text" class="form-control" name="city">
                                            </div>
                                             <div class="form-group col-md-6">
                                                 <label>Age</label>
                                                <select id="inputState" class="form-control" name="age">
                                                    <option selected>Choose...</option>
                                                    <option>10-16</option>
                                                    <option>17-18</option>
                                                    <option>19-25</option>
                                                </select>
                                            </div>
                                             <div class="form-group col-md-6">
                                                <label>Phone</label>
                                                <input type="text" class="form-control" name="phone">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>State</label>
                                                <select id="inputState" class="form-control" name="state">
                                                    <option selected>Choose...</option>
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                </select>
                                            </div>


                                            <div class="form-group col-md-2">
                                                <label>Zip</label>
                                                <input type="text" class="form-control" name="zip">
                                            </div>

                <div class="col-md-6 mb-3">
                    <select name="team_id" id="" class="form-control"   required>
                        <option value="">Select a Team</option>
                        @foreach ($team as $item)
                           <option value="{{ $item->id }}">{{ $item->teamname }}</option>
                        @endforeach
                    </select>
                </div>

                                        </div>
                                        <div class="form-group">
                                            <p class="text">Basketball skill level</p>

                                            <div class="form-check">
                                                <label for="beginner" class="form-check-label p-10">Beginner</label>

                                                <input class="form-check-input p-10" type="radio" name="level" value="1">
                                                <label class="form-check-label p-10">
                                                    1
                                                </label>

                                                <input class="form-check-input p-10" type="radio" name="level" value="2">
                                                <label class="form-check-label p-10">
                                                    2
                                                </label>

                                                 <input class="form-check-input p-10" type="radio" name="level" value="3">
                                                <label class="form-check-label p-10">
                                                    3
                                                </label>

                                                 <input class="form-check-input" type="radio" name="level" value="4">
                                                <label class="form-check-label">
                                                   4
                                                </label>

                                                <input class="form-check-input" type="radio" name="level" value="5">
                                                <label class="form-check-label">
                                                   5
                                                </label>

                                                <label for="Advanced" class="form-check-label">Advanced</label>
                                            </div>


                                        </div>
                                        <button type="submit" class="btn btn-primary">Add Player</button>
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
@sectionend
