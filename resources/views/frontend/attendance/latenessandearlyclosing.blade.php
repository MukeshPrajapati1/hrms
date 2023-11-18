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
                            <h5 class="card-header">Lateness and early closing</h5>
                            <div class="modalbutton">

                            </div>

                        </div>


                        <form action="{{ route('lateness_create') }}" method="post">
                            @csrf
                            <div class="modal fade" id="EditModal" tabindex="-1" aria-hidden="true">
                            </div>
                            <div class="modal-body" style=" padding-right: 87px;">
                                <div class="col-lg-4 mb-2">
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
                            <div class="row g-2" style="">
                                <div class="col-lg-4 mb-3" style="padding-left: 33px;">
                                    <label for="emailBasic" class="form-label">Year*</label>
                                    <select name="year" id="input_element" class="form-control"
                                        style="margin-left: 115px;">
                                        <option value="">Select Option</option>
                                        <option value="">2015</option>
                                        <option value="">2016</option>
                                        <option value="">2017</option>
                                        <option value="">2018</option>
                                        <option value="">2019</option>
                                        <option value="">2020</option>
                                        <option value="">2021</option>
                                        <option value="">2022</option>
                                        <option value="">2023</option>
                                        <option value="">2024</option>
                                        <option value="">2025</option>
                                        <option value="">2026</option>
                                        <option value="">2027</option>
                                        <option value="">2028</option>
                                        <option value="">2029</option>
                                        <option value="">2030</option>
                                    </select>
                                    @error('year')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row g-2" style="">
                                <div class="col-lg-4 mb-3" style="padding-left: 33px;">
                                    <label for="emailBasic" class="form-label">Month*</label>
                                    <select name="month" id="input_element" class="form-control"
                                        style="margin-left: 115px;">
                                        <option value="">Select Option</option>
                                        <option value="">January</option>
                                        <option value="">February</option>
                                        <option value="">March</option>
                                        <option value="">April</option>
                                        <option value="">May</option>
                                        <option value="">June</option>
                                        <option value="">July</option>
                                        <option value="">August</option>
                                        <option value="">September</option>
                                        <option value="">October</option>
                                        <option value="">November</option>
                                        <option value="">December</option>
                                    </select>
                                    @error('month')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                {{--  <div id="/latenessandearlyclosingdetail" class="modal-footer" style="padding-right: 57%;">
                                    <button type="submit"
                                        class="btn btn-success w-md m-b-5">Details</button>
                                </div>  --}}
                                <div class="modal-footer">
                                    <a href=""><button id="details" type="submit"
                                            class="btn btn-success">Details</button></a>
                                </div>
                        </form>
                    </div>
                </div>
                <div class=" content-wrapper" style="    padding-top: 30px;">
                    <div class="card">
                        <form action="" method="post">
                            <div align="right" id="print">
                                <button title="Export Leteness Attendance Data" type="submit" name="submit"
                                    value="download" class="btb btn-primary mt-20" autocomplete="off">
                                    <i class="fa fa-file-excel-o"></i>
                                    Export
                                </button>
                                <a href="{{ url(/generate-pdf) }}" title="download pdf">
                                    <button type="pdf" id="" class="btn btn-success btn-md mt-20"
                                        name="btnPdf" autocomplete="off" style="    max-width: 60px;">
                                        <i class="fa-file-pdf-o"></i>
                                        PDF
                                    </button>
                                </a>
                            </div>

                            <body>
                                <h5 class="card-header"></h5>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Sl.No</th>
                                            <th>Date</th>
                                            <th>In Time</th>
                                            <th>Attendance Setup(In Time)</th>
                                            <th>Late Time</th>
                                            <th>Out Time</th>
                                            <th>Attendance Setup(Out Time)</th>
                                            <th>Early Closing</th>
                                        </tr>
                                    </thead>
                                </table>
                                <div class="d-flex">
                                    <p style="padding-right: 10%;">Prepared By: Super Admin</p>
                                    <p style="padding-right: 50%;">Checked By</p>
                                    <p>Authorised By</p>
                                </div>
                            </body>

                            </html>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<x-footer />
