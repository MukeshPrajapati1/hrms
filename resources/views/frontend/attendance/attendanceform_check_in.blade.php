<x-header />

<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <x-sidebar />
        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->


            <x-navbar />
            <!-- / Navbar -->
            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="card">

                        <style>
                            .header {
                                display: flex;
                                justify-content: space-between;
                                background: #e0e0e0;
                                margin: 10px;
                            }

                            .btn {
                                height: 40px;
                                margin: 15px;
                                padding: 0px;
                                width: 100px;

                            }

                            #input_element {
                                margin-left: 33%;
                                margin-top: -34px;
                            }

                            #input_element_1 {
                                margin-left: 32%;
                                margin-top: -34px;
                                width: 97%;
                            }
                        </style>
                        <div class="header">
                            <h5 class="card-header">Attendance</h5>
                            <div class="modalbutton">
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#Bulk_check_inModal" style=" margin-left: 370%;">
                                    Bulk Check In
                                </button>
                            </div>
                            <div class="modalbutton" style=>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#Bulk_exportModal">
                                    Bulk Export
                                </button>
                            </div>
                        </div>


                        <form action="{{ route('attendance_create') }}" method="post">
                            @csrf

                            <div class="modal-footer" style="">
                                <div class="d-flex" style="padding-right: 79%;">
                                    <a href="/attendanceform_check_in"><button id="check_in" type="button"
                                            class="btn btn-success">Check In</button></a>
                                    <a href="/attendanceform_check_out"><button id="check_out" type="button"
                                            class="btn btn-success">Check Out</button></a>
                                </div>
                            </div>
                            <div class="modal fade" id="EditModal" tabindex="-1" aria-hidden="true">
                            </div>
                            <div class="modal-body" style=" padding-right: 87px;">
                                <div class="col-lg-4 mb-3">
                                    <label for="nameBasic" class="form-label">Employee Name*
                                    </label>

                                    <select name="employee_name" id="input_element" class="form-control">
                                        <option value="">Select Option</option>
                                        <option value="">Satish</option>
                                        <option value="">Sachin</option>
                                        <option value="">Rohan</option>
                                        <option value="">Mohan</option>
                                        <option value="">Ansh</option>
                                    </select>
                                    @error('employee_name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row g-2" style="   ">
                                <div class="col-lg-4 mb-0" style="padding-left: 33px;">
                                    <label for="emailBasic" class="form-label">Punch Time*</label>
                                    <input id="input_element_1" type="datetime-local" name="punch_time" id="emailBasic"
                                        class="form-control" placeholder="2023/12/12 01:30pm" />
                                    @error('punch_time')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button id="accountbtn" type="submit" class="btn btn-success">Check In</button>
                            </div>
                        </form>
                        <div class="modal fade" id="Bulk_exportModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel2">Export Attendance</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('attendance_create') }}" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label for="nameBasic" class="form-label">From:</label>
                                                    <input type="date" name="from" id="nameBasic"
                                                        class="form-control" placeholder="" />
                                                </div>
                                                @error('from')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="row g-2">
                                                <div class="col mb-0">
                                                    <label for="emailBasic" class="form-label">To:</label>
                                                    <input type="date" name="to" id="emailBasic"
                                                        class="form-control" placeholder="" />
                                                </div>
                                                @error('to')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror

                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Download</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="Bulk_check_inModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel1">Add Attendance</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="{{ route('attendance_add_attendance') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col mb-3" style="    margin-left: 36px;">
                                                <label for="nameBasic" class="form-label">Download Sample File</label>
                                                <button type="button" class="btn btn-success"
                                                    data-bs-dismiss="modal"
                                                    style="    width: auto;
                                                    padding-left: 3px;">
                                                    Download Sample File
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-3" style="    margin-left: 36px;">
                                                <label for="nameBasic" class="form-label"></label>
                                                <input type="file" name="image" id="">
                                            </div>
                                        </div>
                                        @error('image')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="row" style="text-align: center">
                                        <p>Note:Attendance file data format must be as given sample file</p>
                                    </div>


                                    <div class="modal-footer" style="margin-right: 64%;">
                                        <button type="submit" class="btn btn-success" data-bs-dismiss="modal">
                                            UPLOAD
                                        </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
</div>
<x-footer />
