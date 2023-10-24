@extends('panel.layout.main')


@push('title') Home @endpush

@section('content')

    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card corona-gradient-card">
          <div class="card-body py-0 px-0 px-sm-3">
            <div class="row align-items-center">
              <div class="col-4 col-sm-3 col-xl-2">
                <img src="assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
              </div>
              <div class="col-5 col-sm-7 col-xl-8 p-0">
                <h4 class="mb-1 mb-sm-0">Welcome Mr. (Name of The User)</h4>
                <p class="mb-0 font-weight-normal d-none d-sm-block">Check out Your Task List For Know What You Have to Do  !</p>
              </div>
              <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                <span>
                  <a href="#todo" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Manage List </a>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0">(total View)</h3>
                  <!-- <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p> -->
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success ">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Total View</h6>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0"> (Movie Record) </h3>
                  <!-- <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p> -->
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Available Movie</h6>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0"> (Show Record) </h3>
                  <p class="text-success ml-2 mb-0 font-weight-medium"> (No. of Episode) </p>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Available Show's</h6>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0"> {No. of User} </h3>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success ">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Total User's</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">
              Users
              <small style="font-size: 0.6rem;" class="text-danger mt-3 d-block">Click on Name to Edit</small>
            </h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <!-- <th>
                      <div class="form-check form-check-muted m-0">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input">
                        </label>
                      </div>
                    </th> -->
                    <th> Client Name </th>
                    <th> Email </th>
                    <th> Shows  </th>
                    <th> Movies </th>
                    <th> Username  </th>
                    <th> Joining Date </th>
                    <th> User Status </th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <!-- <td>
                      <div class="form-check form-check-muted m-0">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input">
                        </label>
                      </div>
                    </td> -->
                    <td>
                      <img src="#" alt="image" />
                      <span class="pl-2">
                        <a href="#edituser" class="text-light"> 
                          (User ka Naam)
                        </a>
                      </span>
                    </td>
                    <td> 
                        (Email)
                    </td>
                    <td> (Watched Shows) </td>
                    <td> (watched Movies) </td>
                    <td> (Username) </td>
                    <td> (Registration Date) </td>
                    <td>
                        <div class='badge badge-outline-success'>
                            Approved
                        </div>
                        <div class='badge badge-outline-warnning'>
                            Pending
                        </div>
                        <div class='badge badge-outline-danger'>
                            Rejected
                        </div>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-xl-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">To do list</h4>
            <div class="add-items d-flex">
              <input type="text" class="form-control todo-list-input" placeholder="enter task..">
              <button class="add btn btn-primary todo-list-add-btn">Add</button>
            </div>
            <div class="list-wrapper">
              <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">

                <li class='completed' >
                  <div class="form-check form-check-primary">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" value="#" 
                      checked > (Task) </label>
                  </div>
                  <i class="remove mdi mdi-close-box" ></i>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
@endsection