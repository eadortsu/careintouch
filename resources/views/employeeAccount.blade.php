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
                    <li class="nav-item ">
                        <a class="nav-link activeNav" href="employeeAccount.html">
                            <i class="fe fe-user"></i> Account
                        </a>
                    </li>
                    <br><br>
                    <center>
                      <form class=" loginForm " action="{{ route ('logout') }}" method="post" class="p-3 inline">
                        @csrf
                        <button type="submit" class="btn btn-light">logout</button>
                    
                        </form>
                     </center>
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
                            
                            <div class="card">
                                <div class="pl-3">
                                    <div class="tableHeadr">

                                        <div class="row align-items-center">
                                            <div class="col">
                                                <!-- Title -->
                                                <div class="d-flex">
                                                    <div class="mr-6">
                                                        <h4 class="header-pretitle ml-3">
                                                            Employee Name
                                                          </h4>
                                                        <h1 class="header-title text-truncate ml-3">
                                                            John Doe
                                                        </h1>
                                                    </div>
                                                    <div class="mr-6">
                                                        <h4 class="header-pretitle ml-3">
                                                            Position
                                                          </h4>
                                                        <h1 class="header-title text-truncate ml-3">
                                                            Nurse
                                                        </h1>
                                                    </div>
                                                    <div class="mr-6">
                                                        <h4 class="header-pretitle ml-3">
                                                            Employment
                                                          </h4>
                                                        <h1 class="header-title text-truncate ml-3">
                                                            Full Time
                                                        </h1>
                                                    </div>
                                                    <div class="mr-6">
                                                        <h4 class="header-pretitle ml-3">
                                                            Date of Hire
                                                          </h4>
                                                        <h1 class="header-title text-truncate ml-3">
                                                            31/08/22
                                                        </h1>
                                                    </div>
                                                    <div>
                                                        <h4 class="header-pretitle ml-3">
                                                            Rates
                                                          </h4>
                                                        <h1 class="header-title text-truncate ml-3">
                                                            SOC
                                                        </h1>
                                                    </div>
                                                </div>
                                                

                                            </div>
                                            <div class="col-auto">
                                                <div class="mr-4">
                                                    <!-- Buttons -->
                                                    <button type="button" data-toggle="modal"
                                                        data-target="#modalPaySummary"
                                                        class="btn btn-primary ml-2 employeeBtn">
                                                        Enter pay summary
                                                    </button>
                                                </div>
                                            </div>
                                        </div> <!-- / .row -->
                                    </div>
                                </div>
                            </div>
                            <!-- Card -->
                            <div class="card" id="companiesList">
                                <!-- Header -->      
                                <div class="tabs">

                                   <div class="row align-items-center">
                                    <div class="col" id="employeeProfile1">
                                        <ul class="nav nav-tabs  ml-4 mr-4" id="tabSwitch">
                                            <li class="nav-item active" >
                                                <a href="#Submitted" class="nav-link ">
                                                    <span>
                                                        Submitted
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#Returned" class="nav-link ">
                                                    <span>
                                                        Returned
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#Approved" class="nav-link">
                                                    <span>
                                                        Approved
                                                    </span>
                                                </a>
                                            </li>
    
                                        </ul>
                                    </div>
                                    <div class="col-auto">
                                        <div class="p-4">
                                            <select class="form-select mb-3" data-choices>
                                                <option>2022</option>
                                            </select>
                                        </div>
                                    </div>
                                   </div>

                                    <div id="Submitted" class="tab active">
                                        
                                        <div class="table-responsive">
                                            <table class="table table-sm  table-nowrap card-table">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <a class=" text-muted" href="#">Ref</a>
                                                        </th>
                                                        <th>
                                                            <a href="#" class="text-muted">Pay Period</a>
                                                        </th>
                                                        <th>
                                                            <a class="text-muted" href="#">Invoice No.</a>
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
                                                            <a class="text-muted">Total ($)</a>
                                                        </th>
                                                        <th>
                                                            <a class="text-muted"> Mileage ($)</a>
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
                                                            <span>08/15-08/20</span>
                                                        </td>
                                                        <td>
                                                            <span> #478851</span>
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
                                                            <span>90 USD</span>
                                                        </td>
                                                        <td>
                                                            <span>90 USD</span>
                                                        </td>
                                                        <td>
                                                            <span>Supply</span>
                                                        </td>
                                                        <td>
                                                            <span>
                                                                <button
                                                                    class="btn btn-outline-success">Approved</button>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span>
                                                                <button type="button" class="editbtn"
                                                                    data-toggle="modal" data-target="#editMembers"><i
                                                                        class="fe fe-edit-3"></i></button>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <!-- Text -->
                                                            <span>1</span>

                                                        </td>
                                                        <td>
                                                            <span>08/15-08/20</span>
                                                        </td>
                                                        <td>
                                                            <span> #478851</span>
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
                                                            <span>90 USD</span>
                                                        </td>
                                                        <td>
                                                            <span>90 USD</span>
                                                        </td>
                                                        <td>
                                                            <span>Supply</span>
                                                        </td>
                                                        <td>
                                                            <span>
                                                                <button
                                                                    class="btn btn-outline-danger">In-Active</button>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span>
                                                                <button type="button" class="editbtn"
                                                                    data-toggle="modal" data-target="#editMembers"><i
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
                                                <ul
                                                    class="list-pagination-prev pagination pagination-tabs card-pagination">
                                                    <li class="page-item">
                                                        <a class="page-link pl-0 pr-4 border-right" href="#">
                                                            <i class="fe fe-arrow-left mr-1"></i> Prev
                                                        </a>
                                                    </li>
                                                </ul>

                                                <!-- Pagination -->
                                                <ul class="list-pagination pagination pagination-tabs card-pagination">
                                                </ul>

                                                <!-- Pagination (next) -->
                                                <ul
                                                    class="list-pagination-next pagination pagination-tabs card-pagination">
                                                    <li class="page-item">
                                                        <a class="page-link pl-4 pr-0 border-left" href="#">
                                                            Next <i class="fe fe-arrow-right ml-1"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div id="Returned" class="tab">
                                        <div class="table-responsive">
                                            <table class="table table-sm  table-nowrap card-table">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <a class="text-muted" href="#">Ref</a>
                                                        </th>
                                                        <th>
                                                            <a class="text-muted" href="#">Pay Period</a>
                                                        </th>
                                                        <th>
                                                            <a class="text-muted" href="#">Invoice No.</a>
                                                        </th>
                                                       
                                                        <th>
                                                            <a class="text-muted">Patients No.</a>
                                                        </th>
                                                       
                                                        <th>
                                                            <a class="text-muted">Date of Vist</a>
                                                        </th>
                                                        <th>
                                                            <a class="text-muted">Visit Type</a>
                                                        </th>
                                                        
                                                        <th>
                                                            <a class="text-muted">Reason</a>
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
                                                            17/22 - 31/22
                                                        </td>
                                                        <td>
                                                            <span> #1548</span>
                                                        </td>
                                                        <td>
                                                            <span>MRN-552</span>
                                                        </td>
                                                        <td>
                                                            <span>22/07/2022</span>
                                                        </td>
                                                        <td>
                                                            <span>Sick visit</span>
                                                        </td>
                                                        <td>
                                                            <span>Medical inquiry</span>
                                                        </td>
                                                       
                                                        <td>
                                                            <span>
                                                                <button type="button" class="editbtn"
                                                                    data-toggle="modal" data-target="#editMembers"><i
                                                                        class="fe fe-edit-3"></i></button>
                                                                        <button type="button" class="editbtn"><i class="fe fe-trash"></i>
                                                                </button>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                        </div>

                                        <div class="card-footer ">

                                            <!-- Pagination (prev) -->
                                            <div class="d-flex justify-content-between">
                                                <ul
                                                    class="list-pagination-prev pagination pagination-tabs card-pagination">
                                                    <li class="page-item">
                                                        <a class="page-link pl-0 pr-4 border-right" href="#">
                                                            <i class="fe fe-arrow-left mr-1"></i> Prev
                                                        </a>
                                                    </li>
                                                </ul>

                                                <!-- Pagination -->
                                                <ul class="list-pagination pagination pagination-tabs card-pagination">
                                                </ul>

                                                <!-- Pagination (next) -->
                                                <ul
                                                    class="list-pagination-next pagination pagination-tabs card-pagination">
                                                    <li class="page-item">
                                                        <a class="page-link pl-4 pr-0 border-left" href="#">
                                                            Next <i class="fe fe-arrow-right ml-1"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                           
                                        </div>
                                       
                                    </div>
                                    
                                    <div id="Approved" class="tab">
                                        <div class="table-responsive">
                                            <table class="table table-sm  table-nowrap card-table">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <a class=" text-muted" href="#">Ref</a>
                                                        </th>
                                                        <th>
                                                            <a href="#" class="text-muted">Pay Period</a>
                                                        </th>
                                                        <th>
                                                            <a class="text-muted" href="#">Invoice No.</a>
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
                                                            <a class="text-muted">Total ($)</a>
                                                        </th>
                                                        <th>
                                                            <a class="text-muted"> Mileage ($)</a>
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
                                                            <span>08/15-08/20</span>
                                                        </td>
                                                        <td>
                                                            <span> #478851</span>
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
                                                            <span>90 USD</span>
                                                        </td>
                                                        <td>
                                                            <span>90 USD</span>
                                                        </td>
                                                        <td>
                                                            <span>Supply</span>
                                                        </td>
                                                        <td>
                                                            <span>
                                                                <button
                                                                    class="btn btn-outline-success">Approved</button>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span>
                                                                <button type="button" class="editbtn"
                                                                    data-toggle="modal" data-target="#editMembers"><i
                                                                        class="fe fe-edit-3"></i></button>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <!-- Text -->
                                                            <span>1</span>

                                                        </td>
                                                        <td>
                                                            <span>08/15-08/20</span>
                                                        </td>
                                                        <td>
                                                            <span> #478851</span>
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
                                                            <span>90 USD</span>
                                                        </td>
                                                        <td>
                                                            <span>90 USD</span>
                                                        </td>
                                                        <td>
                                                            <span>Supply</span>
                                                        </td>
                                                        <td>
                                                            <span>
                                                                <button
                                                                    class="btn btn-outline-danger">In-Active</button>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span>
                                                                <button type="button" class="editbtn"
                                                                    data-toggle="modal" data-target="#editMembers"><i
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
                                                <ul
                                                    class="list-pagination-prev pagination pagination-tabs card-pagination">
                                                    <li class="page-item">
                                                        <a class="page-link pl-0 pr-4 border-right" href="#">
                                                            <i class="fe fe-arrow-left mr-1"></i> Prev
                                                        </a>
                                                    </li>
                                                </ul>

                                                <!-- Pagination -->
                                                <ul class="list-pagination pagination pagination-tabs card-pagination">
                                                </ul>

                                                <!-- Pagination (next) -->
                                                <ul
                                                    class="list-pagination-next pagination pagination-tabs card-pagination">
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
                            <button type="button" id="Returned" data-toggle="modal" data-target="#modalReportSummary" class="tab btn btn-outline-primary ml-2 employeeBtnOut float-right">
                                Pay Summary Report
                            </button>


                        </div>

                    </div>

                </div>
            </div> <!-- / .row -->
            <div class="modal fade " id="modalPaySummary" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modalReportSummaryLeft" role="document">
                  <div class="modal-content modalMembers">
                    <div class="card-header">
        
                      <!-- Title -->
                      <h2 class="card-header-title">
                        Pay Summary
                      </h2>
        
                      <!-- Close -->
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
        
                    </div>
                    <div class="card-body modalMembers">
                      <form>
                        <div class="row mb-4">
                            <div class="col">
                                <span class="registryName">Registry Name: John Doe </span>
                            </div>
                              <div class="col-auto">
                                <span class="registryDate">31/08/2022</span>
                              </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-3 mb-3">
                                <select class="form-select mb-3" data-choices>
                                  <option>Select Pay Period</option>
                                  <option>Pay Period </option>
                                </select>
                            </div>
                            <div class="col-12 col-md-3 mb-3">
                                <select class="form-select mb-3" data-choices>
                                  <option>Patient Name</option>
                                  <option>Patient </option>
                                </select>
                            </div>
                            
                           
                        </div>
                       
                         <div class="tabs">
                            
                            <ul class="nav nav-tabs ulnav " id="tabSwitch">
                                <li class="nav-item">
                                  <a href="#soc" class="nav-link " >
                                    <span >
                                        SOC
                                    </span>
                                  </a>
                                </li>
                                <li class="nav-item" >
                                  <a href="#rrs" class="nav-link " >
                                    <span >
                                        RRS
                                    </span>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a href="#rv" class="nav-link" >
                                    <span >
                                        RV
                                    </span>
                                  </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#dco" class="nav-link" >
                                      <span >
                                        DCO
                                      </span>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="#ndco" class="nav-link" >
                                      <span >
                                        NDCO
                                      </span>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="#reimbursement" class="nav-link text-center" >
                                      <span >
                                        Reimbursement
                                      </span>
                                    </a>
                                  </li>
                            </ul>
        
                            <div id="soc" class="tab active pt-4">
                                <div class="row">
                                    <div class="col-12 col-md-3 mb-3">
                                        <label class="form-label">Date</label>
                                      <div class="input-group input-group-merge mb-3">
                                        
                                        <input type="text" class="form-control" placeholder="__/__/____" data-inputmask="'mask': 'MM/DD/YYYY'">
                                        <div class="input-group-text" id="inputGroup">
                                          <span class="fe fe-calendar"></span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-12 col-md-3 pt-2 mb-3">
                                      <div class="checkBoxHt">
                                        <div class="form-check mr-4">
                                            <label  for="ht">
                                              HT
                                            </label>
                                            <input class="form-check-input " type="checkbox" value="" id="ht" required="">
                                          </div>
                                          <div class="form-check">
                                            <label  for="we">
                                              WE
                                            </label>
                                            <input class="form-check-input " type="checkbox" value="" id="we" required="">
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-12 col-md-3 mb-3">
                                      <label class="form-label">Rate</label>
                                      <select class="form-select mb-3" data-choices>
                                        <option>Select Rate</option>
                                        <option>Rate 1 </option>
                                        <option>Rate 2</option>
                                      </select>
                                    </div>
                                    <div class="col-12 col-md-3 mb-3">
                                      <label class="form-label">No. of Visits</label>
                                      <input type="text" class="form-control " placeholder="Employee Name" required>
                                    </div>
                                </div>
                                  <div class="row">
                                      <div class="col-12 col-md-3 mb-3">
                                        <label class="form-label">Miles</label>
                                        <input type="text" class="form-control" placeholder="No. of Miles" >
                                      </div>
                                      <div class="col-12 col-md-3 mb-3">
                                        <label class="form-label">$ Total Rate</label>
                                        <input type="text" class="form-control " placeholder="" required>
                                      </div>
                                      <div class="col-12 col-md-3 mb-3">
                                        <label class="form-label">$ Miles</label>
                                        <input type="text" class="form-control " placeholder="" required>
                                      </div>
                                      <div class="col-12 col-md-3 mb-3">
                                        <label class="form-label">Comment</label>
                                        <input type="text" class="form-control " placeholder="" required>
                                      </div>
                                  </div>
                            </div>
                            <div id="rrs" class="tab pt-4">
                                <div class="row g-3">
                                  <div class="col-12 col-md-3 mb-3">
                                    <label class="form-label">Date</label>
                                    <input type="text" class="form-control" placeholder="__/__/____" data-inputmask="'mask': 'MM/DD/YYYY'">
                                  </div>
                                  <div class="col-12 col-md-3 pt-2 mb-3">
                                    <label class="form-label"></label>
                                    <input type="text" class="form-control " placeholder="Employee Name" required>
                                  </div>
                                  <div class="col-12 col-md-3 mb-3">
                                    <label class="form-label">Rate</label>
                                    <select class="form-select mb-3" data-choices>
                                      <option>Select Rate</option>
                                      <option>Rate 1 </option>
                                      <option>Rate 2</option>
                                    </select>
                                  </div>
                                  <div class="col-12 col-md-3 mb-3">
                                    <label class="form-label">No. of Visits</label>
                                    <input type="text" class="form-control " placeholder="Employee Name" required>
                                  </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-12 col-md-3 mb-3">
                                      <label class="form-label">Miles</label>
                                      <input type="text" class="form-control" placeholder="No. of Miles" >
                                    </div>
                                    <div class="col-12 col-md-3 mb-3">
                                      <label class="form-label">$ Total Rate</label>
                                      <input type="text" class="form-control " placeholder="" required>
                                    </div>
                                    <div class="col-12 col-md-3 mb-3">
                                      <label class="form-label">$ Miles</label>
                                      <input type="text" class="form-control " placeholder="" required>
                                    </div>
                                    <div class="col-12 col-md-3 mb-3">
                                      <label class="form-label">Comment</label>
                                      <input type="text" class="form-control " placeholder="" required>
                                    </div>
                                </div>
                            </div>
                            <div id="rv" class="tab pt-4">
                                <div class="row g-3">
                                  <div class="col-12 col-md-3 mb-3">
                                    <label class="form-label">Date</label>
                                    <input type="text" class="form-control" placeholder="__/__/____" data-inputmask="'mask': 'MM/DD/YYYY'">
                                  </div>
                                  <div class="col-12 col-md-3 pt-2 mb-3">
                                    <label class="form-label"></label>
                                    <input type="text" class="form-control " placeholder="Employee Name" required>
                                  </div>
                                  <div class="col-12 col-md-3 mb-3">
                                    <label class="form-label">Rate</label>
                                    <select class="form-select mb-3" data-choices>
                                      <option>Select Rate</option>
                                      <option>Rate 1 </option>
                                      <option>Rate 2</option>
                                    </select>
                                  </div>
                                  <div class="col-12 col-md-3 mb-3">
                                    <label class="form-label">No. of Visits</label>
                                    <input type="text" class="form-control " placeholder="Employee Name" required>
                                  </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-12 col-md-3 mb-3">
                                      <label class="form-label">Miles</label>
                                      <input type="text" class="form-control" placeholder="No. of Miles" >
                                    </div>
                                    <div class="col-12 col-md-3 mb-3">
                                      <label class="form-label">$ Total Rate</label>
                                      <input type="text" class="form-control " placeholder="" required>
                                    </div>
                                    <div class="col-12 col-md-3 mb-3">
                                      <label class="form-label">$ Miles</label>
                                      <input type="text" class="form-control " placeholder="" required>
                                    </div>
                                    <div class="col-12 col-md-3 mb-3">
                                      <label class="form-label">Comment</label>
                                      <input type="text" class="form-control " placeholder="" required>
                                    </div>
                                </div>
                            </div>
                            <div id="dco" class="tab pt-4">
                                <div class="row g-3">
                                  <div class="col-12 col-md-3 mb-3">
                                    <label class="form-label">Date</label>
                                    <input type="text" class="form-control" placeholder="__/__/____" data-inputmask="'mask': 'MM/DD/YYYY'">
                                  </div>
                                  <div class="col-12 col-md-3 pt-2 mb-3">
                                    <label class="form-label"></label>
                                    <input type="text" class="form-control " placeholder="Employee Name" required>
                                  </div>
                                  <div class="col-12 col-md-3 mb-3">
                                    <label class="form-label">Rate</label>
                                    <select class="form-select mb-3" data-choices>
                                      <option>Select Rate</option>
                                      <option>Rate 1 </option>
                                      <option>Rate 2</option>
                                    </select>
                                  </div>
                                  <div class="col-12 col-md-3 mb-3">
                                    <label class="form-label">No. of Visits</label>
                                    <input type="text" class="form-control " placeholder="Employee Name" required>
                                  </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-12 col-md-3 mb-3">
                                      <label class="form-label">Miles</label>
                                      <input type="text" class="form-control" placeholder="No. of Miles" >
                                    </div>
                                    <div class="col-12 col-md-3 mb-3">
                                      <label class="form-label">$ Total Rate</label>
                                      <input type="text" class="form-control " placeholder="" required>
                                    </div>
                                    <div class="col-12 col-md-3 mb-3">
                                      <label class="form-label">$ Miles</label>
                                      <input type="text" class="form-control " placeholder="" required>
                                    </div>
                                    <div class="col-12 col-md-3 mb-3">
                                      <label class="form-label">Comment</label>
                                      <input type="text" class="form-control " placeholder="" required>
                                    </div>
                                </div>
                            </div>
                            <div id="ndco" class="tab pt-4">
                                <div class="row g-3">
                                  <div class="col-12 col-md-3 mb-3">
                                    <label class="form-label">Date</label>
                                    <input type="text" class="form-control" placeholder="__/__/____" data-inputmask="'mask': 'MM/DD/YYYY'">
                                  </div>
                                  <div class="col-12 col-md-3 pt-2 mb-3">
                                    <label class="form-label"></label>
                                    <input type="text" class="form-control " placeholder="Employee Name" required>
                                  </div>
                                  <div class="col-12 col-md-3 mb-3">
                                    <label class="form-label">Rate</label>
                                    <select class="form-select mb-3" data-choices>
                                      <option>Select Rate</option>
                                      <option>Rate 1 </option>
                                      <option>Rate 2</option>
                                    </select>
                                  </div>
                                  <div class="col-12 col-md-3 mb-3">
                                    <label class="form-label">No. of Visits</label>
                                    <input type="text" class="form-control " placeholder="Employee Name" required>
                                  </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-12 col-md-3 mb-3">
                                      <label class="form-label">Miles</label>
                                      <input type="text" class="form-control" placeholder="No. of Miles" >
                                    </div>
                                    <div class="col-12 col-md-3 mb-3">
                                      <label class="form-label">$ Total Rate</label>
                                      <input type="text" class="form-control " placeholder="" required>
                                    </div>
                                    <div class="col-12 col-md-3 mb-3">
                                      <label class="form-label">$ Miles</label>
                                      <input type="text" class="form-control " placeholder="" required>
                                    </div>
                                    <div class="col-12 col-md-3 mb-3">
                                      <label class="form-label">Comment</label>
                                      <input type="text" class="form-control " placeholder="" required>
                                    </div>
                                </div>
                            </div>
                            <div id="reimbursement" class="tab pt-4">
        
                                <div class="row g-3">
                                  <div class="col-12 col-md-3 mb-3">
                                    <label class="form-label">Date</label>
                                    <input type="text" class="form-control" placeholder="__/__/____" data-inputmask="'mask': 'MM/DD/YYYY'">
                                  </div>
                                  <div class="col-12 col-md-3 pt-2 mb-3">
                                    <label class="form-label"></label>
                                    <input type="text" class="form-control " placeholder="Employee Name" required>
                                  </div>
                                  <div class="col-12 col-md-3 mb-3">
                                    <label class="form-label">Rate</label>
                                    <select class="form-select mb-3" data-choices>
                                      <option>Select Rate</option>
                                      <option>Rate 1 </option>
                                      <option>Rate 2</option>
                                    </select>
                                  </div>
                                  <div class="col-12 col-md-3 mb-3">
                                    <label class="form-label">No. of Visits</label>
                                    <input type="text" class="form-control " placeholder="Employee Name" required>
                                  </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-12 col-md-3 mb-3">
                                      <label class="form-label">Miles</label>
                                      <input type="text" class="form-control" placeholder="No. of Miles" >
                                    </div>
                                    <div class="col-12 col-md-3 mb-3">
                                      <label class="form-label">$ Total Rate</label>
                                      <input type="text" class="form-control " placeholder="" required>
                                    </div>
                                    <div class="col-12 col-md-3 mb-3">
                                      <label class="form-label">$ Miles</label>
                                      <input type="text" class="form-control " placeholder="" required>
                                    </div>
                                    <div class="col-12 col-md-3 mb-3">
                                      <label class="form-label">Comment</label>
                                      <input type="text" class="form-control " placeholder="" required>
                                    </div>
                                </div>
                            </div>
                          </div>
                                   
                        <div class="row ">
                            <div class="col">
                                <hr>
                                <span class="mr-4">Total Visits:  6 Visits </span>
                                <span class="mr-6">No. of Hours:  2.5 Visits</span>
                                <span class="mr-4">$170</span>
                                <span>$52.50</span>
                                <hr>
                            </div>
                              <div class="col-auto">
                                <button type="button" class="btn btn-primary mt-3 p-2 addemployeModalBtn employeeBtn">
                                    Submit
                                  </button>
                              </div>
                        </div>
        
        
                      </form>
                    </div>
                  </div>
                </div>
              </div>
        
              <div class="modal fade " id="modalReportSummary" tabindex="0" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modalReportSummaryLeft" role="document">
                  <div class="modal-content modalReportSummary">
                    <div class="card-header">
                      <!-- Title -->
                      <h2 class="card-header-title">
                        Pay Summary Report
                      </h2>
                      <!-- Close -->
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="card-body ">
                      <form>
                        <div class="row mb-4">
                            <div class="col">
                                <span class="registryName">Employee Name: John Doe  </span>
                            </div>
                              <div class="col-auto">
                                <span class="registryDate">31/08/2022</span>
                              </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-3 mb-3">
                                <select class="form-select mb-3" data-choices>
                                  <option>Select Pay Period</option>
                                  <option>Pay Period </option>
                                </select>
                            </div>
                            
                        </div>
                        
                        <div class="table-responsive" id="modalTable">
                            <table class="table  table-nowrap card-table">
                              <thead>
                                <tr>
                                  <th>
                                    Ref
                                  </th>
                                  <th>
                                    Patient Name
                                  </th>
                                  <th>
                                    Visit Date
                                  </th>
                                  <th>
                                    Visit Type
                                  </th>
                                  <th>
                                    $Total
                                  </th>
                                  <th>
                                    $Miles
                                  </th>
                                  <th>
                                    Comment
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
                                    <span>John Smith</span>
                                  </td>
                                  <td>
                                    <span>2/12/21</span>
                                  </td>
                                  <td>
                                    <span>SOC</span>
                                  </td>
                                  <td>
                                    <span>
                                        $120
                                    </span>
                                  </td>
                                  <td>
                                    <span>$7.50</span>
                                  </td>
                                  <td>
                                    <span>Supply</span>
                                  </td>
                                  <td>
                                    <span>
                                      <button type="button" class="editbtn mr-3" data-toggle="modal" data-target="#editMembers"><i
                                          class="fe fe-edit-3"></i>
                                      </button>
                                      <button type="button" class="editbtn" data-toggle="modal" data-target="#editMembers"><i
                                        class="fe fe-trash"></i>
                                    </button>
                                    </span>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                                   
                        <div class="row ">
                            <div class="col ">
                                <hr>
                                <span class="mr-4">Total Visits:  6 Visits </span>
                                <span class="mr-4">No. of Hours:  2.5 Visits</span>
                                <span class="mr-2">$170</span>
                                <span>$52.50</span>
                                <hr>
                            </div>
                           
                              <div class="col-auto">
                                <button type="button" class="btn btn-primary mt-3 p-2 addemployeModalBtn employeeBtn">
                                    Submit
                                  </button>
                              </div>
                        </div>
        
        
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            <div class="modal fade " id="editMembers" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered editMembers" role="document">
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
                                        <label class="form-label">No. Of Patients</label>
                                        <input type="text" class="form-control " placeholder="No. Of Patients" required>

                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <label class="form-label">No. Of Visits</label>
                                        <input type="text" class="form-control" placeholder="No. Of Visits">

                                    </div>
                                </div>

                                <div class="row g-3">
                                   
                                    <div class="col-12 col-md-6 mb-3">
                                        <label class="form-label">Date Range</label>
                                        <input type="date" class="form-control " placeholder="Date Range" required>
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