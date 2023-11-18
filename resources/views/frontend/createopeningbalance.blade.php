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
                                width: 190px;
                                margin: 10px;
                                padding: 0px;

                            }

                            #totalsubtype {
                                text-align: right;
                                margin-top: 31px;
                            }

                            #accountbtn {
                                width: 79px;
                            }

                            table,
                            th,
                            td,
                            tbody {
                                border: 1px solid black;

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
                            <h5 class="card-header">Opening Balance</h5>
                            {{--  <div class="modalbutton">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#subModal">
                                    Create Opening Balance
                                </button>
                            </div>  --}}
                        </div>

                        <form action="{{ url('create') }}" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-4 mb-3">
                                        <label for="nameBasic" class="form-label">Financial
                                            year</label>

                                        <input id="input_element" type="text" name="financial_year" id="nameBasic"
                                            class="form-control" placeholder="Financial year" />
                                        @error('financial_year')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col-lg-4 mb-0">
                                        <label for="emailBasic" class="form-label">Date</label>
                                        <input id="input_element_1" type="date" name="date" id="emailBasic"
                                            class="form-control" placeholder="Date" />
                                        @error('date')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Account Name</th>
                                            <th>Subtype</th>
                                            <th>Debit</th>
                                            <th>Credit</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        {{--  @foreach ($subaccountdata as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->financial_year }}</td>
                                            <td>{{ $item->date }}</td>
                                            <td><span class="badge bg-label-primary me-1">Active</span></td>
                                            <td>


                                            <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item"
                                                            href="{{ url('edit') }}/{{ $item->id }}"
                                                            data-bs-toggle="modal" data-bs-target="#EditModal"><i
                                                                class="bx bx-edit-alt me-2"></i>
                                                            Edit</a>
                                                        <a class="dropdown-item"
                                                            href="{{ url('delete') }}/ {{ $item->id }}"><i
                                                                class="bx bx-trash me-2"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                    @endforeach  --}}

                                        <tr>
                                            <td>
                                                <input type="text" name="account_name" id="emailBasic"
                                                    class="form-control" placeholder="Select Option" />
                                                @error('account_name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                <button id="accountbtn" type="submit" class="btn btn-info">Add
                                                    More</button>
                                            </td>
                                            <td>
                                                <input type="text" name="subtype" id="emailBasic"
                                                    class="form-control" placeholder="Select Option" />
                                                @error('subtype')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                <h6 id="totalsubtype">Total</h6>
                                            </td>
                                            <td>
                                                <input type="number" name="debit" id="emailBasic"
                                                    class="form-control" placeholder="" />
                                                @error('debit')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror

                                                <input type="text" name="account" id="emailBasic"
                                                    class="form-control" placeholder="" / style="margin-top: 17px;">
                                                @error('debit')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="number" name="credit" id="emailBasic"
                                                    class="form-control" placeholder="" />
                                                @error('credit')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror

                                                <input type="text" name="action" id="emailBasic"
                                                    class="form-control" placeholder="" / style="margin-top: 17px;">
                                                @error('credit')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </td>
                                            <td>
                                                <button id="accountbtn" type="submit" class="btn btn-danger"
                                                    style="margin-top: -60px;">Delete</button>
                                            </td>

                                        </tr>

                                    </tbody>

                                </table>
                                <div class="modal-footer">
                                    <button id="accountbtn" type="submit" class="btn btn-primary">Save</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<x-footer />
