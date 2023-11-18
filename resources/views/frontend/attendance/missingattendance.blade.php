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


                        <form action="{{ route('missing_create') }}" method="post">
                            @csrf
                            <div class="modal fade" id="EditModal" tabindex="-1" aria-hidden="true">
                            </div>
                            <div class="modal-body" style=" padding-right: 87px;">
                                <div class="col-lg-4 mb-2">
                                    <label for="nameBasic" class="form-label">Date*
                                    </label>

                                    <input id="input_element" type="date" name="date" id="nameBasic"
                                        class="form-control" placeholder="Select Date" />
                                    @error('date')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer" style="padding-right: 57%;">
                                <button id="missingbtn" type="submit" class="btn btn-success">Search</button>
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
                                            <input type="checkbox" id="checkAllmissattendance" onclick="checkallmissattendance()" name autocomplete="off">
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
                                @foreach ($missingattendancedata as $item)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td class="text-center">
                                            <input type="checkbox" id="check_id_1" onclick="checkboxcheckmisattendance(1)" class="checkboxitem" name="checkItem[]" value="2">
                                        </td>
                                        <td>{{ $loop->index + 1 }}</td>
                                        
                                        <td>{{ $item->date }}</td>
                                        <td class="text-center">
                                            <input type="time" id="intime_1" class="intimes form-control timePicker" valu fdprocessedid="vx6nt">

                                        </td>
                                        <td class="text-center">
                                            <input type="time" class="outtimes form-control timePicker" id="outtime_1" value fdprocessedid="f2g08g">

                                        </td>
                                        <td>{{ $item['user'] ? $item['user']->id : 'Absent' }}</td>

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
