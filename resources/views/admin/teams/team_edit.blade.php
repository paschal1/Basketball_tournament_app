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
                     <li class="breadcrumb-item"><a href="javascript:void(0)">Edit</a></li>
                     <li class="breadcrumb-item active"><a href="javascript:void(0)">Team</a></li>
                 </ol>
             </div>
         </div>
         <!-- row -->
         <div class="row">
             <div class="col-xl-6 col-xxl-12">
                 <div class="card">
                     <div class="card-header">
                         <h4 class="card-title">Team Information</h4>
                     </div>
                     <div class="card-body">
                         <div class="basic-form">
                             <form>
                                 @method('PUT')
                                 <div class="form-row">
                                     <div class="form-group col-md-6">
                                         <label>Team Name</label>
                                         <input type="text" class="form-control" name="teamname" placeholder="1234 Main St">
                                     </div>
                                     <div class="form-group col-md-6">
                                         <label>Team Coach Name</label>
                                         <input type="text" class="form-control" name="coachname" placeholder="1234 Main St">
                                     </div>

                                     <div class="form-group col-md-6">
                                         <label>Email</label>
                                         <input type="email" class="form-control" placeholder="Email">
                                     </div>
                                     <div class="form-group col-md-6">
                                         <label>Password</label>
                                         <input type="password" class="form-control" placeholder="Password">
                                     </div>
                                     <div class="form-group col-md-6">
                                         <label>City</label>
                                         <input type="text" class="form-control">
                                     </div>
                                     <div class="form-group col-md-6">
                                         <label>Age</label>
                                         <select id="inputState" class="form-control">
                                             <option selected>Choose...</option>
                                             <option>10-16</option>
                                             <option>17-18</option>
                                             <option>19-25</option>
                                         </select>
                                     </div>
                                     <div class="form-group col-md-6">
                                         <label>Phone</label>
                                         <input type="text" class="form-control">
                                     </div>
                                 </div>
                                 <div class="form-row">
                                     <div class="form-group col-md-4">
                                         <label>State</label>
                                         <select id="inputState" class="form-control">
                                             <option selected>Choose...</option>
                                             <option>Option 1</option>
                                             <option>Option 2</option>
                                             <option>Option 3</option>
                                         </select>
                                     </div>


                                     <div class="form-group col-md-2">
                                         <label>Zip</label>
                                         <input type="text" class="form-control">
                                     </div>

                                 </div>

                                 <button type="submit" class="btn btn-primary">Add Team</button>
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
