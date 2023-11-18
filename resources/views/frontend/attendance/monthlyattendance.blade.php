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
                            </div>
                        </div>


                        <form action="{{ route('monthly_create') }}" method="post">
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
                            </div>
                            <div class="row g-2" style="">
                                <div class="col-lg-4 mb-3" style="padding-left: 33px;">
                                    <label for="emailBasic" class="form-label">In Time*</label>
                                    <input id="input_element_1" type="time" name="in_time" id="emailBasic"
                                        class="form-control" placeholder="" />
                                    @error('in_time')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row g-2" style="">
                                <div class="col-lg-4 mb-3" style="padding-left: 33px;">
                                    <label for="emailBasic" class="form-label">Out Time*</label>
                                    <input id="input_element_1" type="time" name="out_time" id="emailBasic"
                                        class="form-control" placeholder="" />
                                    @error('out_time')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="modal-footer" style="padding-right: 57%;">
                                <button type="submit" onclick="checkfiledmonthlyattn()"
                                    class="btn btn-success w-md m-b-5" autocomplete="off"
                                    fdprocessedid="e87jdx">Details</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=" content-wrapper"
                    style="    padding-left: 28px;
                    padding-right: 28px;">
                    <div class="card">
                        <form action="" method="">
                            <h5 class="card-header">Attendance</h5>
                            <tbody class="table-border-bottom-0">
                                <table class="table">
                                    <thead style="background-color: #caffc8;">
                                        <tr>
                                            <th>SL.No</th>
                                            <th class="text-center">
                                                <input type="checkbox" id="checkAllmissattendance"
                                                    onclick="checkallmissattendance()" name autocomplete="off">
                                                All
                                            </th>
                                            <th>Employee Id</th>
                                            <th>Name</th>
                                            <th>Designation</th>
                                            <th>Date</th>
                                            <th>In Time</th>
                                            <th>Out Time</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    @foreach ($monthlyAttendanceData as $item)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td class="text-center">
                                                <input type="checkbox" id="check_id_1"
                                                    onclick="checkboxcheckmisattendance(1)" class="checkboxitem"
                                                    name="checkItem[]" value="2">
                                            </td>
                                            <td>{{ $item['attendance']->employee_id }}</td>
                                            <td>{{ $item['attendance']->employee_name }}</td>
                                            <td>{{ $item['attendance']->designation }}</td>
                                            <td>{{ $item['attendance']->date }}</td>
                                            <td>{{ $item['attendance']->in_time }}</td>
                                            <td>{{ $item['attendance']->out_time }}</td>
                                            <td>
                                                @if ($item['attendance']->status == '1')
                                                    Present
                                                @else
                                                    weekend
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>

                            </tbody>
                            <button type="submit" class="btn btn-success" style="margin-left: 40%;">Save</button>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<x-footer />
