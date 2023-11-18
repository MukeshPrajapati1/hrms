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
                    {{--  <div class=" content-wrapper"
                        style="    padding-left: 28px;
                     padding-right: 28px;">
                        <div class="card">
                            <form action="{{ url('/latenessandearlyclosingdetail') }}" method="post">
                                <div align="right" id="print">
                                    <button title="Export Leteness Attendance Data" type="submit" name="submit"
                                        value="download" class="btb btn-primary mt-20" autocomplete="off">
                                        <i class="fa fa-file-excel-o"></i>
                                        Export
                                    </button>
                                    <a href="" title="download pdf">
                                        <button type="pdf" id="" class="btn btn-success btn-md mt-20"
                                            name="btnPdf" autocomplete="off" style="    max-width: 60px;">
                                            <i class="fa-file-pdf-o"></i>
                                            PDF
                                        </button>
                                    </a>
                                </div>
                                <h5 class="card-header" style="    text-align: center;">HRMS</h5>
                                <tbody class="table-border-bottom-0">
                                    <table class="table" style="margin-top: 20px;">
                                        <thead style="background-color: #caffc8;">
                                            <tr>
                                                <th>Sl.No</th>
                                                <th>Date</th>
                                                <th>In Time</th>
                                                <th>Attendance Setup(In Time)</th>
                                                <th>Last Time</th>
                                                <th>Out Time</th>
                                                <th>Attendance Setup(Out Time)</th>
                                                <th>Early Closing</th>
                                            </tr>
                                        </thead>

                                    </table>

                                </tbody>
                                <div class="d-flex"
                                    style="    margin-top: 70px;
                                    padding-left: 30px;">
                                    <p style="    padding-right: 10%;">
                                        Prepared By: Super Admin
                                    </p>
                                    <p style="    padding-right: 50%;">
                                        Checked By
                                    </p>
                                    <p>
                                        Authorised By
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>  --}}
                </div>

            </div>
        </div>
    </div>
</div>
<x-footer />
