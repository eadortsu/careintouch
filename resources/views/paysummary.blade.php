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
                                                <div class="col-md-2 ml-2">
                                                    <select class="form-select mb-3" data-choices>
                                                        <option>Employee Name</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-auto">
                                                <div class="d-flex mr-4"> 
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
                                                    <a class="text-muted" href="#">Invoice No.</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted" href="#">Patient Name</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted">Visit Date</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted">Clinician Name</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted">Visit Type</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted">$ Total</a>
                                                </th>
                                                <th>
                                                    <a class="text-muted">$ Miles</a>
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
                                                    <span>#478851</span>

                                                </td>
                                                <td>
                                                    <span>John Smith</span>
                                                </td>
                                                <td>
                                                    <span>2/12/21</span>
                                                </td>
                                                <td>
                                                    <span>Adam Smith</span>
                                                </td>
                                                <td>
                                                    <span>SOC</span>
                                                </td>
                                                <td>
                                                    <span>$120</span>
                                                </td>
                                                <td>
                                                    <span>$7.50</span>
                                                </td>
                                                <td>
                                                    <span>Supply</span>
                                                </td>
                                                <td>
                                                    <span>12.5</span>
                                                </td>
                                                <td>
                                                    <div class="checkBoxHtABLE">
                                                        <div class="form-check mr-4">
                                                            <label  for="md">
                                                              MD <input class="form-check-input mr-2 " type="checkbox" value="" id="md" required="">
                                                            </label>
                                                            
                                                          </div>
                                                          <div class="form-check mr-4">
                                                            <label  for="Oasis">
                                                                Oasis <input class="form-check-input mr-2" type="checkbox" value="" id="Oasis" required="">
                                                            </label>
                                                            
                                                          </div>
                                                          <div class="form-check">
                                                            <label  for="PtSignature">
                                                                Pt Signature <input class="form-check-input mr-2" type="checkbox" value="" id="PtSignature" required="">
                                                            </label>
                                                            
                                                          </div>
                                                      </div>
                                                </td>
                                                <td>
                                                    <span>
                                                        <button type="button" class="editbtn" data-toggle="modal"
                                                            data-target="#editMembers"><i
                                                                class="fe fe-edit-3"></i>
                                                        </button>
                                                        <button type="button" class="editbtn" data-toggle="modal"
                                                        data-target="#editMembers"><i
                                                            class="fe fe-trash"></i>
                                                    </button>
                                                    </span>
                                                </td>
                                            </tr>
                                          
                                        </tbody>
                                        
                                    </table>
                                </div>
                               
                                <div class="card-footer ">
                                    <button type="button"  class="btn btn-primary ml-2 employeeBtn float-right">
                                        Submit
                                    </button>
                                </div>
                            </div>

                          
                        </div>

                    </div>

                </div>
            </div> <!-- / .row -->

            <div class="modal fade " id="editMembers" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content ">
                    <div class="card-header">
        
                      <!-- Title -->
                      <h2 class="card-header-title">
                        Edit Pay Summery
                      </h2>
        
                      <!-- Close -->
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
        
                    </div>
                    <div class="card-body ">
                      <form>
                       
                        <div class="row g-3">
                          <div class="col-12 col-md-6 mb-3">
                            <label class="form-label">Invoice No</label>
                            <input type="text" class="form-control " placeholder="Invoice No" required>
        
                          </div>
                          <div class="col-12 col-md-6 mb-3">
                            <label class="form-label">Patient Name</label>
                            <input type="text" class="form-control" placeholder="Patient Name">
        
                          </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label">Visit Date</label>
                                <input type="date" class="form-control " placeholder="Visit Date" required>
            
                              </div>
                            <div class="col-12 col-md-6 mb-3">
                              <label class="form-label">Clinician Name</label>
                              <input type="text" class="form-control " placeholder="Clinician Name" required>
          
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-12 col-md-6 mb-3">
                              <label class="form-label">Visit Type</label>
                              <select  class="form-select mb-3" data-choices>
                                <option value="">SOC</option>
                              </select>
          
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                              <label class="form-label">Total</label>
                              <input type="text" class="form-control " placeholder="Total" required>
          
                            </div>
                        </div>
        
                        <div class="row g-3">
                          <div class="col-12 col-md-6 mb-3">
                            <label class="form-label">Miles</label>
                            <input type="text" class="form-control" placeholder="Miles">
                          </div>
                          <div class="col-12 col-md-6 mb-3">
                            <div class="form-check mr-4 mt-5">
                                <label  for="md">
                                  MD <input class="form-check-input mr-2 " type="checkbox" value="" id="md" required="">
                                </label>
                                
                              </div>
                          </div>
                        </div>

                        <div class="row g-3">
            
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