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
 <!-- <link rel="stylesheet" href="./assets/css/libs.bundle.css" />-->
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
                                <span class="username"> {{ auth()->user()->name }} </span>
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
            <a class="nav-link activeNav" href="admin.html">
              <i class="fe fe-users"></i> Employee list
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('registry') }}">
              <i class="fe fe-file-plus"></i> Registry list
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pay.html">
              <i class="fe fe-file"></i> Pay Approval
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="report.html">
              <i class="fe fe-file-text"></i> Reports
            </a>
          </li>
          <br><br>
          <center><form class=" loginForm " action="{{ route ('logout') }}" method="post" class="p-3 inline">
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

              <!-- Card -->
              <div class="card" id="companiesList">
                <!-- Header -->
                <div class="p-3">
                  <div class="tableHeadr">

                    <div class="row align-items-center">
                      <div class="col">

                        
           @if (session('status2'))
           <center class="text-light border border-danger bg-danger"> 
            {{ session ('status2') }}
            </center>
            <br>
            @endif

            @if (session('status'))
            <center class="text-light border border-success bg-success"> 
             {{ session ('status') }}
             </center>
             <br>@endif

                        <!-- Title -->
                        <h1 class="header-title text-truncate">
                          Employee List
                        </h1>

                      </div>
                      <div class="col-auto">


                        <!-- Buttons -->
                        <button type="button" data-toggle="modal" data-target="#modalMembers"
                          class="btn btn-primary ml-2 employeeBtn">
                          + Add employee
                        </button>

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
                          <a class="text-muted" href="#">Employee Name</a>
                        </th>
                        <th>
                          <a class="text-muted" href="#">Position</a>
                        </th>
                        <th>
                          <a class="text-muted">Hire Date</a>
                        </th>
                        <th>
                          <a class="text-muted">Hourly Rate</a>
                        </th>
                        <th>
                          <a class="text-muted">Rate</a>
                        </th>
                        <th>
                          <a class="text-muted">Status</a>
                        </th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody class="list font-size-base">
                      
                      @if($employees->count())

                        @foreach($employees as $employee)
                       
                      <tr>

                        <td>

                          <!-- Text -->
                          <span>{{ $employee->id }}</span>

                        </td>
                        <td>

                          <!-- Text -->
                          <span>{{ $employee->name }}</span>
 
                          
                          
                        </td>
                        <td>
                          <span> {{ $employee->position }}</span>
                        </td>
                        <td>
                          <span>{{ $employee->date }}</span>
                        </td>
                        <td>
                          <span>${{ $employee->hourlyrate }}</span>
                        </td>
                        <td>
                          <span>SOC</span>
                        </td>
                        <td>
                          <span>
                            <button class="btn btn-outline-success">{{ $employee->status }}</button>
                          </span>
                        </td>
                        <td>
                          <span>
                            <button type="button" class="editbtn" data-toggle="modal" data-target="#editMembers-{{ $employee->id }}"><i
                                class="fe fe-edit-3"></i></button>
                          </span>
                        </td>
                      </tr>
                      <div class="modal fade " id="editMembers-{{ $employee->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered editMembers" role="document">
                          <div class="modal-content editMembers">
                            <div class="card-header">
                
                              <!-- Title -->
                              <h2 class="card-header-title">
                                Edit Employee Detail{{ $employee->id }}
                              </h2>
                
                              <!-- Close -->
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                
                            </div>
                            <div class="card-body editMembers">
                              <form method="post" action="update-employee/{{ $employee->id }}">
                                @csrf
                                @method('PUT')
                                <div class="row g-3">
                                  <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label">Employee Name</label>
                                    <input type="text" name="name_update" class="form-control " placeholder="Employee Name" value="{{ $employee->name }}" required>
                                  </div>
                                  <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label">Position</label>
                                    <select name="position_update" class="form-select mb-3">
                                      <option value="Nurse"> Nurse</option>
                                      <option value="RN">RN </option>
                                      <option value="SOC">SOC</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row g-3">
                                  <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label">Hire Date</label>
                                    <input type="date" name="date_update" class="form-control"  value="{{ $employee->date }}" placeholder="__/__/____"
                                      data-inputmask="'mask': 'MM/DD/YYYY'">
                
                                  </div>
                                  <div class="col-12 col-md-6 mb-3">
                                    <label  class="form-label">Hourly Rate</label>
                                    <input name="hourlyrate_update" type="text" class="form-control " value="{{ $employee->hourlyrate }}"placeholder="$90.00" required>
                
                                  </div>
                                </div>
                
                                <div class="row g-3">
                                  <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label">Rate</label>
                                    <select name="rate_update" class="form-select mb-3"  >
                                      <option  value="{{ $employee->rate }}" selected>{{ $employee->rate }}</option>
                                      <option value="SOC">SOC </option>
                                      <option value="RN">RN</option>
                                    </select>
                                  </div>
                                  <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label">Status</label>
                                    <select name="status_update" class="form-select mb-3" >
                                      <option value="{{ $employee->status }}">{{ $employee->status }}</option>
                                      <option value="Active">Active</option>
                                      <option value="InActive">InActive</option>
                                    </select>
                                  </div>
                                </div>
                
                                <div class="col-auto">
                                  <!-- Button -->
                                  <button type="submit" class="btn btn-primary ml-2 addemployeModalBtn employeeBtn">
                                    Save
                                  </button>
                                </div>
                
                
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
  
                      @else

                      <p> You have no employees</p>
                      @endif
                    </tbody>
                  </table>
                </div>
                <div class="card-footer d-flex justify-content-between">

                  <!-- Pagination (prev) -->
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

                  <!-- Alert -->
                  <div class="list-alert alert alert-dark alert-dismissible border fade" role="alert">

                    <!-- Content -->
                    <div class="row align-items-center">
                      <div class="col">

                        <!-- Checkbox -->
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="cardAlertCheckbox" checked disabled>
                          <label class="form-check-label text-white" for="cardAlertCheckbox">
                            <span class="list-alert-count">0</span> deal(s)
                          </label>
                        </div>

                      </div>
                      <div class="col-auto mr-n3">

                        <!-- Button -->
                        <button class="btn btn-sm btn-white-20">
                          Edit
                        </button>

                        <!-- Button -->
                        <button class="btn btn-sm btn-white-20">
                          Delete
                        </button>

                      </div>
                    </div> <!-- / .row -->

                    <!-- Close -->
                    <button type="button" class="list-alert-close close" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>

                  </div>

                </div>
              </div>

            </div>

          </div>

        </div>
      </div> <!-- / .row -->
      <div class="modal fade " id="modalMembers" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalMembers" role="document">
          <div class="modal-content modalMembers">
            <div class="card-header">

              <!-- Title -->
              <h2 class="card-header-title">
                Add Employee
              </h2>

              <!-- Close -->
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>

            </div>
            <div class="card-body modalMembers">
              <form action="{{ route('dashboard') }}" method="post">
                @csrf
                <div class="row g-3">
                  <div class="col-12 col-md-6 mb-3">
                    <label class="form-label">Employee Name</label>
                    <input type="text" name="name" class="form-control  @error('name') border border-danger @enderror" placeholder="Employee Name" >
                    @error('name') 
                    <div class="text-danger">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="col-12 col-md-6 mb-3">
                    <label class="form-label">Position</label>
                    <select name="position" class="form-select mb-3  @error('position') border border-danger @enderror" data-choices>
                      <option>Select Position</option>
                      <option value="position 1">Position 1 </option>
                      <option value="position 2">Position 2</option>
                    </select>
                    @error('position') 
                    <div class="text-danger">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
                <div class="row g-3">
                  <div class="col-12 col-md-6 mb-3">
                    <label class="form-label">Hire Date</label>
                    <input type="date" name="date" class="form-control  @error('date') border border-danger @enderror" placeholder="__/__/____" >   <!--data-inputmask="'mask': 'MM/DD/YYYY'"-->

                    @error('date') 
                    <div class="text-danger">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="col-12 col-md-6 mb-3">
                    <label class="form-label">Hourly Rate</label>
                    <input type="text" name="hourlyrate" class="form-control @error('hourlyrate') border border-danger @enderror" placeholder="$90.00" required>
                    @error('hourlyrate') 
                    <div class="text-danger">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="row g-3">
                  <div class="col-12 col-md-6 mb-3">
                    <label class="form-label">Rate</label>
                    <select name="rate" class="form-select mb-3 @error('hourlyrate') border border-danger @enderror" data-choices>
                      <option >Select Rate</option>
                      <option value="1">1 </option>
                      <option value="2">2</option>
                    </select>
                    @error('rate') 
                    <div class="text-danger">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="col-12 col-md-6 mb-3">
                    <label class="form-label">Status</label>
                    <select name="status"class="form-select mb-3 @error('hourlyrate') border border-danger @enderror" data-choices>
                      <option >Select Status</option>
                      <option value="Active">Active </option>
                      <option value="Inactive">Inactive</option>
                    </select>
                    @error('status') 
                    <div class="text-danger">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
                <div class="col-12 col-md-6 mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" name="email" class="form-control @error('email') border border-danger @enderror" placeholder="stephen@gmail.app" required>
                  @error('email') 
                  <div class="text-danger">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="col-auto">
                  <!-- Button -->
                  <button type="submit" class="btn btn-primary ml-2 addemployeModalBtn employeeBtn">
                    + Add employee
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