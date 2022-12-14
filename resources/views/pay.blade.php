<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Payroll Management Syetem." />

    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/favicon/favicon.ico" type="image/x-icon" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

  <!-- Libs CSS -->
  <link rel="stylesheet" href="{{ asset('/assets/css/libs.bundle.css') }}" />

  <!-- Theme CSS -->
  <link rel="stylesheet" href="{{ asset('/assets/css/theme.bundle.css') }}" />
  <link rel="stylesheet" href="{{ asset('/assets/css/main.css') }}">

    <!-- Title -->
    <title>Payroll</title>
</head>

<body>

    <header class="card">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-body">
                        <div class="row ">
                            <div class="col">
                              <div class="d-flex justify-content-between">
                                <a class="ml-3" href="admin.html">
                                    <img src="./assets/images/logo.png" class="logoAdmin"  alt="...">
                                    <span class="link-primary logoText">Care in Touch</span>
                                </a>
                                <a  href="#" >
                                    <img src="./assets/images/ccr.png" class=" mx-auto mr-2" alt="..." height="20" width="30">
                                    <span class="link-primary logoText mt-2">7:50:27 AM  Sep, 2022</span>
                                </a>
                                <div class="mr-5">
                                    <img src="./assets/images/avator.png" alt="" srcset="">
                                    <span class="username">John Doe</span>
                                </div>
                              </div>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- NAVIGATION -->
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" id="sidebar">
        <div class="container-fluid sidebarNav">

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse"
                aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>




            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarCollapse">


                <!-- Navigation -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " href="admin.html">
                            <i class="fe fe-users"></i> Employee list
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="registry.html">
                            <i class="fe fe-file-plus"></i> Registry list
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link activeNav" href="pay.html">
                            <i class="fe fe-file"></i> Pay Approval
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="report.html">
                            <i class="fe fe-file-text"></i> Reports
                        </a>
                    </li>

                </ul>


            </div>
    </nav>

    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <!-- Tab content -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="companiesListPane" role="tabpanel"
                            aria-labelledby="companiesListTab">

                            <!-- Card -->
                            <div class="card" id="companiesList">
                                <!-- Header -->
                                <div class="p-3">
                                    <div class="tableHeadr">

                                        <div class="row align-items-center">
                                            <div class="col">


                                                <!-- Title -->
                                                <h1 class="header-title text-truncate ml-3">
                                                    Approved
                                                </h1>

                                            </div>
                                            <div class="col-auto">
                                                <div class="d-flex mr-4">
                                                    <div class="mr-3">
                                                        <select class="form-select mb-3" data-choices>
                                                            <option>Category</option>
                                                        </select>
                                                    </div>
                                                    <div>
                                                        <select class="form-select mb-3" data-choices>
                                                            <option>2022</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- / .row -->
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-sm  table-nowrap card-table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <a class=" text-muted" href="#">Ref</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted" href="#">Pay Period</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted" href="#">Invoice No.</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted">Employee Name</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted">No. of Patients</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted">No. of Visits</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted">Date Range</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted">Total Hours</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted">$Total</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted">$ Mileage</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted">Comment</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted">Status</a>
                                                </th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody class="list font-size-base">
                                            <tr>

                                                <td>

                                                    <!-- Text -->
                                                    <span>1</span>

                                                </td>
                                                <td>

                                                    <!-- Text -->
                                                    <span>0815-0825</span>

                                                </td>
                                                <td>
                                                    <span> #478851</span>
                                                </td>
                                                <td>
                                                    <span>Sean Evans</span>
                                                </td>
                                                <td>
                                                    <span>15</span>
                                                </td>
                                                <td>
                                                    <span>15</span>
                                                </td>
                                                <td>
                                                    <span>Monthly</span>
                                                </td>
                                                <td>
                                                    <span>5</span>
                                                </td>
                                                <td>
                                                    <span>256</span>
                                                </td>
                                                <td>
                                                    <span>12.5</span>
                                                </td>
                                                <td>
                                                    <span>Supply</span>
                                                </td>
                                                <td>
                                                    <span>
                                                        <button class="btn btn-outline-success">Approved</button>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span>
                                                        <button type="button" class="editbtn" data-toggle="modal"
                                                            data-target="#editMembers"><i
                                                                class="fe fe-edit-3"></i></button>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>

                                                    <!-- Text -->
                                                    <span>2</span>

                                                </td>
                                                <td>

                                                    <!-- Text -->
                                                    <span>0815-0825</span>

                                                </td>
                                                <td>
                                                    <span> #478851</span>
                                                </td>
                                                <td>
                                                    <span>Sean Evans</span>
                                                </td>
                                                <td>
                                                    <span>15</span>
                                                </td>
                                                <td>
                                                    <span>15</span>
                                                </td>
                                                <td>
                                                    <span>Monthly</span>
                                                </td>
                                                <td>
                                                    <span>5</span>
                                                </td>
                                                <td>
                                                    <span>256</span>
                                                </td>
                                                <td>
                                                    <span>12.5</span>
                                                </td>
                                                <td>
                                                    <span>Supply</span>
                                                </td>
                                                <td>
                                                    <span>
                                                        <button class="btn btn-outline-warning">Pending</button>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span>
                                                        <button type="button" class="editbtn" data-toggle="modal"
                                                            data-target="#editMembers"><i
                                                                class="fe fe-edit-3"></i></button>
                                                    </span>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                        
                                    </table>
                                </div>
                              
                                <div class="card-footer ">
                                    
                                    <!-- Pagination (prev) -->
                                      <div class="d-flex justify-content-between">
                                        <ul class="list-pagination-prev pagination pagination-tabs card-pagination">
                                            <li class="page-item">
                                                <a class="page-link pl-0 pr-4 border-right" href="#">
                                                    <i class="fe fe-arrow-left mr-1"></i> Prev
                                                </a>
                                            </li>
                                        </ul>
    
                                        <!-- Pagination -->
                                        <ul class="list-pagination pagination pagination-tabs card-pagination"></ul>
    
                                        <!-- Pagination (next) -->
                                        <ul class="list-pagination-next pagination pagination-tabs card-pagination">
                                            <li class="page-item">
                                                <a class="page-link pl-4 pr-0 border-left" href="#">
                                                    Next <i class="fe fe-arrow-right ml-1"></i>
                                                </a>
                                            </li>
                                        </ul>
                                      </div>

                                </div>
                            </div>

                            <!-- Card -->
                            <div class="card" id="companiesList">
                                <!-- Header -->
                                <div class="p-3">
                                    <div class="tableHeadr">

                                        <div class="row align-items-center">
                                            <div class="col">


                                                <!-- Title -->
                                                <h1 class="header-title text-truncate ml-3">
                                                    Pending
                                                </h1>

                                            </div>
                                            <div class="col-auto">
                                                <div class="d-flex mr-4">
                                                    <div class="mr-3">
                                                        <select class="form-select mb-3" data-choices>
                                                            <option>Category</option>
                                                        </select>
                                                    </div>
                                                    <div>
                                                        <select class="form-select mb-3" data-choices>
                                                            <option>2022</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- / .row -->
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-sm  table-nowrap card-table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <a class=" text-muted" href="#">Ref</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted" href="#">Pay Period</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted" href="#">Invoice No.</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted">Employee Name</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted">No. of Patients</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted">No. of Visits</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted">Date Range</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted">Total Hours</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted">$Total</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted">$ Mileage</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted">Comment</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted">Status</a>
                                                </th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody class="list font-size-base">
                                            <tr>

                                                <td>

                                                    <!-- Text -->
                                                    <span>1</span>

                                                </td>
                                                <td>

                                                    <!-- Text -->
                                                    <span>0815-0825</span>

                                                </td>
                                                <td>
                                                    <span> #478851</span>
                                                </td>
                                                <td>
                                                    <span>Sean Evans</span>
                                                </td>
                                                <td>
                                                    <span>15</span>
                                                </td>
                                                <td>
                                                    <span>15</span>
                                                </td>
                                                <td>
                                                    <span>Monthly</span>
                                                </td>
                                                <td>
                                                    <span>5</span>
                                                </td>
                                                <td>
                                                    <span>256</span>
                                                </td>
                                                <td>
                                                    <span>12.5</span>
                                                </td>
                                                <td>
                                                    <span>Supply</span>
                                                </td>
                                                <td>
                                                    <span>
                                                        <button class="btn btn-outline-success">Approved</button>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span>
                                                        <button type="button" class="editbtn" data-toggle="modal"
                                                            data-target="#editMembers"><i
                                                                class="fe fe-edit-3"></i></button>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>

                                                    <!-- Text -->
                                                    <span>2</span>

                                                </td>
                                                <td>

                                                    <!-- Text -->
                                                    <span>0815-0825</span>

                                                </td>
                                                <td>
                                                    <span> #478851</span>
                                                </td>
                                                <td>
                                                    <span>Sean Evans</span>
                                                </td>
                                                <td>
                                                    <span>15</span>
                                                </td>
                                                <td>
                                                    <span>15</span>
                                                </td>
                                                <td>
                                                    <span>Monthly</span>
                                                </td>
                                                <td>
                                                    <span>5</span>
                                                </td>
                                                <td>
                                                    <span>256</span>
                                                </td>
                                                <td>
                                                    <span>12.5</span>
                                                </td>
                                                <td>
                                                    <span>Supply</span>
                                                </td>
                                                <td>
                                                    <span>
                                                        <button class="btn btn-outline-warning">Pending</button>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span>
                                                        <button type="button" class="editbtn" data-toggle="modal"
                                                            data-target="#editMembers"><i
                                                                class="fe fe-edit-3"></i></button>
                                                    </span>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                        
                                    </table>
                                </div>
                              
                                <div class="card-footer ">
                                    
                                    <!-- Pagination (prev) -->
                                      <div class="d-flex justify-content-between">
                                        <ul class="list-pagination-prev pagination pagination-tabs card-pagination">
                                            <li class="page-item">
                                                <a class="page-link pl-0 pr-4 border-right" href="#">
                                                    <i class="fe fe-arrow-left mr-1"></i> Prev
                                                </a>
                                            </li>
                                        </ul>
    
                                        <!-- Pagination -->
                                        <ul class="list-pagination pagination pagination-tabs card-pagination"></ul>
    
                                        <!-- Pagination (next) -->
                                        <ul class="list-pagination-next pagination pagination-tabs card-pagination">
                                            <li class="page-item">
                                                <a class="page-link pl-4 pr-0 border-left" href="#">
                                                    Next <i class="fe fe-arrow-right ml-1"></i>
                                                </a>
                                            </li>
                                        </ul>
                                      </div>

                                </div>
                            </div>

                             <!-- Card -->
                             <div class="card" id="companiesList">
                                <!-- Header -->
                                <div class="p-3">
                                    <div class="tableHeadr">

                                        <div class="row align-items-center">
                                            <div class="col">


                                                <!-- Title -->
                                                <h1 class="header-title text-truncate ml-3">
                                                    Returned
                                                </h1>

                                            </div>
                                            <div class="col-auto">
                                                <div class="d-flex mr-4">
                                                    <div class="mr-3">
                                                        <select class="form-select mb-3" data-choices>
                                                            <option>Category</option>
                                                        </select>
                                                    </div>
                                                    <div>
                                                        <select class="form-select mb-3" data-choices>
                                                            <option>2022</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- / .row -->
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-sm  table-nowrap card-table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <a class=" text-muted" href="#">Ref</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted" href="#">Pay Period</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted" href="#">Invoice No.</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted">Employee Name</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted">No. of Patients</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted">No. of Visits</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted">Date Range</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted">Total Hours</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted">$Total</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted">$ Mileage</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted">Comment</a>
                                                </th>
                                                
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody class="list font-size-base">
                                            <tr>

                                                <td>

                                                    <!-- Text -->
                                                    <span>1</span>

                                                </td>
                                                <td>

                                                    <!-- Text -->
                                                    <span>0815-0825</span>

                                                </td>
                                                <td>
                                                    <span> #478851</span>
                                                </td>
                                                <td>
                                                    <span>Sean Evans</span>
                                                </td>
                                                <td>
                                                    <span>15</span>
                                                </td>
                                                <td>
                                                    <span>15</span>
                                                </td>
                                                <td>
                                                    <span>Monthly</span>
                                                </td>
                                                <td>
                                                    <span>5</span>
                                                </td>
                                                <td>
                                                    <span>256</span>
                                                </td>
                                                <td>
                                                    <span>12.5</span>
                                                </td>
                                                <td>
                                                    <span>Supply</span>
                                                </td>
                                               
                                                <td>
                                                    <span>
                                                        <button type="button" class="editbtn" data-toggle="modal"
                                                            data-target="#editMembers"><i
                                                                class="fe fe-edit-3"></i></button>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>

                                                    <!-- Text -->
                                                    <span>2</span>

                                                </td>
                                                <td>

                                                    <!-- Text -->
                                                    <span>0815-0825</span>

                                                </td>
                                                <td>
                                                    <span> #478851</span>
                                                </td>
                                                <td>
                                                    <span>Sean Evans</span>
                                                </td>
                                                <td>
                                                    <span>15</span>
                                                </td>
                                                <td>
                                                    <span>15</span>
                                                </td>
                                                <td>
                                                    <span>Monthly</span>
                                                </td>
                                                <td>
                                                    <span>5</span>
                                                </td>
                                                <td>
                                                    <span>256</span>
                                                </td>
                                                <td>
                                                    <span>12.5</span>
                                                </td>
                                                <td>
                                                    <span>Supply</span>
                                                </td>
                                               
                                                <td>
                                                    <span>
                                                        <button type="button" class="editbtn" data-toggle="modal"
                                                            data-target="#editMembers"><i
                                                                class="fe fe-edit-3"></i></button>
                                                    </span>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                        
                                    </table>
                                </div>
                                
                                <div class="card-footer ">
                                    
                                    <!-- Pagination (prev) -->
                                      <div class="d-flex justify-content-between">
                                        <ul class="list-pagination-prev pagination pagination-tabs card-pagination">
                                            <li class="page-item">
                                                <a class="page-link pl-0 pr-4 border-right" href="#">
                                                    <i class="fe fe-arrow-left mr-1"></i> Prev
                                                </a>
                                            </li>
                                        </ul>
    
                                        <!-- Pagination -->
                                        <ul class="list-pagination pagination pagination-tabs card-pagination"></ul>
    
                                        <!-- Pagination (next) -->
                                        <ul class="list-pagination-next pagination pagination-tabs card-pagination">
                                            <li class="page-item">
                                                <a class="page-link pl-4 pr-0 border-left" href="#">
                                                    Next <i class="fe fe-arrow-right ml-1"></i>
                                                </a>
                                            </li>
                                        </ul>
                                      </div>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div> <!-- / .row -->

            <div class="modal fade " id="editMembers" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered bd-example-modal-lg" role="document">
                  <div class="modal-content editMembers">
                    <div class="card-header">
        
                      <!-- Title -->
                      <h2 class="card-header-title">
                        Edit Reports
                      </h2>
        
                      <!-- Close -->
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
        
                    </div>
                    <div class="card-body editMembers">
                      <form>
                       
                        <div class="row g-3">
                          <div class="col-12 col-md-6 mb-3">
                            <label class="form-label">Pay Period</label>
                            <input type="text" class="form-control" placeholder="__/__/____"
                              data-inputmask="'mask': 'MM/DD/YYYY'">
        
                          </div>
                          <div class="col-12 col-md-6 mb-3">
                            <label class="form-label">Invoice No</label>
                            <input type="text" class="form-control " placeholder="Invoice No" required>
        
                          </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-12 col-md-6 mb-3">
                              <label class="form-label">Employee Name</label>
                              <input type="text" class="form-control" placeholder="Employee Name">
          
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                              <label class="form-label">No. Of Patients</label>
                              <input type="text" class="form-control " placeholder="No. Of Patients" required>
          
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-12 col-md-6 mb-3">
                              <label class="form-label">No. Of Visits</label>
                              <input type="text" class="form-control" placeholder="No. Of Visits">
          
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                              <label class="form-label">Date Range</label>
                              <input type="date" class="form-control " placeholder="Date Range" required>
          
                            </div>
                        </div>
        
                        <div class="row g-3">
                          <div class="col-12 col-md-6 mb-3">
                            <label class="form-label">Total Hours</label>
                            <input type="text" class="form-control" placeholder="Total Hours">
                          </div>
                          <div class="col-12 col-md-6 mb-3">
                            <label class="form-label">Total</label>
                            <input type="text" class="form-control" placeholder="Total">
                          </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-12 col-md-12 mb-3">
                              <label class="form-label">Mileage</label>
                              <input type="text" class="form-control" placeholder="Mileage">
                            </div>
                            <div class="col-12 col-md-12 mb-3">
                              <label class="form-label">Comment</label>
                              <div data-quill='{"placeholder": "Comment"}'></div>
                            </div>
                          </div>
        
                        <div class="col-auto">
                          <!-- Button -->
                          <button type="button" class="btn btn-primary ml-2 addemployeModalBtn employeeBtn">
                            Save
                          </button>
                        </div>
        
        
                      </form>
                    </div>
                  </div>
                </div>
              </div>
        </div>

    </div> <!-- / .main-content -->

    <!-- JAVASCRIPT -->

    <!-- Vendor JS -->
    <script src="./assets/js/vendor.bundle.js"></script>

    <!-- Theme JS -->
    <script src="./assets/js/theme.bundle.js"></script>

</body>

</html>