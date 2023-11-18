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

                            table {
                                font-family: arial, sans-serif;
                                border-collapse: collapse;
                                width: 100%;
                            }

                            td,
                            th {
                                border: 1px solid #dddddd;
                                text-align: left;
                                padding: 8px;
                            }

                            tr:nth-child(even) {
                                background-color: #dddddd;
                            }



                            /* Set the width of the second column to 70% */
                            th:nth-child(2),
                            td:nth-child(2) {
                              width: 10%;
                            }
                        </style>
                        <div class="header">
                            <h5 class="card-header">Attendance Log</h5>
                            <div class="modalbutton">

                            </div>

                        </div>


                        <form action="{{ url('create') }}" method="post">
                            @csrf
                            <div class="modal fade" id="EditModal" tabindex="-1" aria-hidden="true">
                            </div>
                            <div class="modal-body" style=" padding-right: 87px;">
                                <div class="col-lg-4 mb-2">
                                    <label for="nameBasic" class="form-label">Employee:
                                    </label>

                                    <select name="employee_name" id="input_element" class="form-control">
                                        <option value="">Select Option</option>
                                        <option value="Satish">Satish</option>
                                        <option value="Sachin">Sachin</option>
                                        <option value="Rohan">Rohan</option>
                                        <option value="Mohan">Mohan</option>
                                        <option value="Ansh">Ansh</option>
                                    </select>
                                    @error('employee')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-body" style=" padding-right: 87px;">
                                <div class="col-lg-4 mb-2">
                                    <label for="nameBasic" class="form-label">From:
                                    </label>

                                    <input id="input_element" type="date" name="from" id="nameBasic"
                                        class="form-control" placeholder="Select Date" />
                                    @error('from')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-body" style=" padding-right: 87px;">
                                <div class="col-lg-4 mb-2">
                                    <label for="nameBasic" class="form-label">To:
                                    </label>

                                    <input id="input_element" type="date" name="to" id="nameBasic"
                                        class="form-control" placeholder="Select Date" />
                                    @error('to')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer" style="padding-right: 57%;">
                                <button id="accountbtn" type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive text-nowrap" style="padding-top: 35px;">

                        <table class="table" style="">

                            <thead>
                                <tr>
                                    <th class="text-center" colspan="7">Attendance History of January 25,2023</th>
                                </tr>
                                <tr>
                                    <th>SL.No</th>
                                    <th>Employee Name</th>
                                    <th>In Time</th>
                                    <th>Last In Time</th>
                                    <th>Last Out Time</th>
                                    <th>Worked Hours</th>
                                    <th>Active</th>
                                </tr>
                            </thead>
                            <tr>
                                <td>1</td>
                                <td>Sachin</td>
                                <td>13:35:00</td>
                                <td>15:50:00</td>
                                <td>18:20:00</td>
                                <td>0:20:0</td>
                                <td>
                                    <button id="accountbtn" type="submit" class="btn btn-primary">Details</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Raju</td>
                                <td>13:35:00</td>
                                <td>15:50:00</td>
                                <td>18:20:00</td>
                                <td>0:20:0</td>
                                <td>
                                    <button id="accountbtn" type="submit" class="btn btn-primary">Details</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Ansh</td>
                                <td>13:35:00</td>
                                <td>15:50:00</td>
                                <td>18:20:00</td>
                                <td>0:20:0</td>
                                <td>
                                    <button id="accountbtn" type="submit" class="btn btn-primary">Details</button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Satish</td>
                                <td>13:35:00</td>
                                <td>15:50:00</td>
                                <td>18:20:00</td>
                                <td>0:20:0</td>
                                <td>
                                    <button id="accountbtn" type="submit" class="btn btn-primary">Details</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="table-responsive text-nowrap">

                        <table class="table" style="">

                            <thead>
                                <tr>
                                    <th class="text-center" colspan="7">Attendance History of January 5,2023 </th>
                                </tr>
                                <tr>
                                    <th>SL.No</th>
                                    <th>Employee Name</th>
                                    <th>In Time</th>
                                    <th>Last In Time</th>
                                    <th>Last Out Time</th>
                                    <th>Worked Hours</th>
                                    <th>Active</th>
                                </tr>
                            </thead>
                            <tr>
                                <td>1</td>
                                <td>Sachin</td>
                                <td>13:35:00</td>
                                <td>15:50:00</td>
                                <td>18:20:00</td>
                                <td>0:20:0</td>
                                <td>
                                    <button id="accountbtn" type="submit" class="btn btn-primary">Details</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Raju</td>
                                <td>13:35:00</td>
                                <td>15:50:00</td>
                                <td>18:20:00</td>
                                <td>0:20:0</td>
                                <td>
                                    <button id="accountbtn" type="submit" class="btn btn-primary">Details</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Ansh</td>
                                <td>13:35:00</td>
                                <td>15:50:00</td>
                                <td>18:20:00</td>
                                <td>0:20:0</td>
                                <td>
                                    <button id="accountbtn" type="submit" class="btn btn-primary">Details</button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Satish</td>
                                <td>13:35:00</td>
                                <td>15:50:00</td>
                                <td>18:20:00</td>
                                <td>0:20:0</td>
                                <td>
                                    <button id="accountbtn" type="submit" class="btn btn-primary">Details</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="table-responsive text-nowrap">

                        <table class="table" style="">

                            <thead>
                                <tr>
                                    <th class="text-center" colspan="7">Attendance History of January 4,2023</th>
                                </tr>
                                <tr>
                                    <th>SL.No</th>
                                    <th>Employee Name</th>
                                    <th>In Time</th>
                                    <th>Last In Time</th>
                                    <th>Last Out Time</th>
                                    <th>Worked Hours</th>
                                    <th>Active</th>
                                </tr>
                            </thead>
                            <tr>
                                <td>1</td>
                                <td>Sachin</td>
                                <td>13:35:00</td>
                                <td>15:50:00</td>
                                <td>18:20:00</td>
                                <td>0:20:0</td>
                                <td>
                                    <button id="accountbtn" type="submit" class="btn btn-primary">Details</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="table-responsive text-nowrap">

                        <table class="table" style="">

                            <thead>
                                <tr>
                                    <th class="text-center" colspan="7">Attendance History of January 2,2023</th>
                                </tr>
                                <tr>
                                    <th>SL.No</th>
                                    <th>Employee Name</th>
                                    <th>In Time</th>
                                    <th>Last In Time</th>
                                    <th>Last Out Time</th>
                                    <th>Worked Hours</th>
                                    <th>Active</th>
                                </tr>
                            </thead>
                            <tr>
                                <td>1</td>
                                <td>Raju</td>
                                <td>13:35:00</td>
                                <td>15:50:00</td>
                                <td>18:20:00</td>
                                <td>0:20:0</td>
                                <td>
                                    <button id="accountbtn" type="submit" class="btn btn-primary">Details</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="table-responsive text-nowrap">

                        <table class="table" style="">

                            <thead>
                                <tr>
                                    <th class="text-center" colspan="7">Attendance History of June 21,2022</th>
                                </tr>
                                <tr>
                                    <th>SL.No</th>
                                    <th>Employee Name</th>
                                    <th>In Time</th>
                                    <th>Last In Time</th>
                                    <th>Last Out Time</th>
                                    <th>Worked Hours</th>
                                    <th>Active</th>
                                </tr>
                            </thead>
                            <tr>
                                <td>1</td>
                                <td>Sachin</td>
                                <td>13:35:00</td>
                                <td>15:50:00</td>
                                <td>18:20:00</td>
                                <td>0:20:0</td>
                                <td>
                                    <button id="accountbtn" type="submit" class="btn btn-primary">Details</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Raju</td>
                                <td>13:35:00</td>
                                <td>15:50:00</td>
                                <td>18:20:00</td>
                                <td>0:20:0</td>
                                <td>
                                    <button id="accountbtn" type="submit" class="btn btn-primary">Details</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="table-responsive text-nowrap">

                        <table class="table" style="">
                            <thead>
                                <tr>
                                    <th class="text-center" colspan="7">Attendance History of June 20,2022</th>
                                </tr>
                                <tr>
                                    <th>SL.No</th>
                                    <th>Employee Name</th>
                                    <th>In Time</th>
                                    <th>Last In Time</th>
                                    <th>Last Out Time</th>
                                    <th>Worked Hours</th>
                                    <th>Active</th>
                                </tr>
                            </thead>
                            <tr>
                                <td>1</td>
                                <td>Ansh</td>
                                <td>13:35:00</td>
                                <td>15:50:00</td>
                                <td>18:20:00</td>
                                <td>0:20:0</td>
                                <td>
                                    <button id="accountbtn" type="submit" class="btn btn-primary">Details</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="table-responsive text-nowrap">

                        <table class="table" style="">

                            <thead>
                                <tr>
                                    <th class="text-center" colspan="7">Attendance History of June 19,2022</th>
                                </tr>
                                <tr>
                                    <th>SL.No</th>
                                    <th>Employee Name</th>
                                    <th>In Time</th>
                                    <th>Last In Time</th>
                                    <th>Last Out Time</th>
                                    <th>Worked Hours</th>
                                    <th>Active</th>
                                </tr>
                            </thead>
                            <tr>
                                <td>1</td>
                                <td>Ansh</td>
                                <td>13:35:00</td>
                                <td>15:50:00</td>
                                <td>18:20:00</td>
                                <td>0:20:0</td>
                                <td>
                                    <button id="accountbtn" type="submit" class="btn btn-primary">Details</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="table-responsive text-nowrap">

                        <table class="table" style="">

                            <thead>
                                <tr>
                                    <th class="text-center" colspan="7">Attendance History of June 15,2022</th>
                                </tr>
                                <tr>
                                    <th>SL.No</th>
                                    <th>Employee Name</th>
                                    <th>In Time</th>
                                    <th>Last In Time</th>
                                    <th>Last Out Time</th>
                                    <th>Worked Hours</th>
                                    <th>Active</th>
                                </tr>
                            </thead>
                            <tr>
                                <td>1</td>
                                <td>Ansh</td>
                                <td>13:35:00</td>
                                <td>15:50:00</td>
                                <td>18:20:00</td>
                                <td>0:20:0</td>
                                <td>
                                    <button id="accountbtn" type="submit" class="btn btn-primary">Details</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="table-responsive text-nowrap">

                        <table class="table" style="">

                            <thead>
                                <tr>
                                    <th class="text-center" colspan="7">Attendance History of June 14,2022</th>
                                </tr>
                                <tr>
                                    <th>SL.No</th>
                                    <th>Employee Name</th>
                                    <th>In Time</th>
                                    <th>Last In Time</th>
                                    <th>Last Out Time</th>
                                    <th>Worked Hours</th>
                                    <th>Active</th>
                                </tr>
                            </thead>
                            <tr>
                                <td>1</td>
                                <td>Ansh</td>
                                <td>13:35:00</td>
                                <td>15:50:00</td>
                                <td>18:20:00</td>
                                <td>0:20:0</td>
                                <td>
                                    <button id="accountbtn" type="submit" class="btn btn-primary">Details</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="table-responsive text-nowrap">

                        <table class="table" style="">

                            <thead>
                                <tr>
                                    <th class="text-center" colspan="7">Attendance History of June 13,2022</th>
                                </tr>
                                <tr>
                                    <th>SL.No</th>
                                    <th>Employee Name</th>
                                    <th>In Time</th>
                                    <th>Last In Time</th>
                                    <th>Last Out Time</th>
                                    <th>Worked Hours</th>
                                    <th>Active</th>
                                </tr>
                            </thead>
                            <tr>
                                <td>1</td>
                                <td>Ansh</td>
                                <td>13:35:00</td>
                                <td>15:50:00</td>
                                <td>18:20:00</td>
                                <td>0:20:0</td>
                                <td>
                                    <button id="accountbtn" type="submit" class="btn btn-primary">Details</button>
                                </td>
                            </tr>
                        </table>
                    </div>

                </div>

            </div>
        </div>


    </div>
</div>
<x-footer />
