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
                        </style>
                        <div class="header">


                            <h5 class="card-header">Opening Balance</h5>
                            <div class="modalbutton">
                                <a href="/createopeningbalance"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="">
                                        Create Opening Balance
                                    </button></a>
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

                                    {{--  <tr>
                                        <td>4</td>
                                        <td>
                                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Bootstrap
                                                Project</strong>
                                        </td>
                                        <td>Jerry Milton</td>
                                        <td>
                                            <ul
                                                class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Lilian Fuller">
                                                    <img src="../assets/img/avatars/5.png" alt="Avatar"
                                                        class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Sophia Wilkerson">
                                                    <img src="../assets/img/avatars/6.png" alt="Avatar"
                                                        class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Christina Parker">
                                                    <img src="../assets/img/avatars/7.png" alt="Avatar"
                                                        class="rounded-circle" />
                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-warning me-1">Pending</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-edit-alt me-2"></i> Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-trash me-2"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>  --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{--  <div class="modal fade" id="subModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Opening Balance</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ url('create') }}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="nameBasic" class="form-label">Financial Year*</label>
                                            <input type="text" name="financial_year" id="nameBasic"
                                                class="form-control" placeholder="Select Option" />
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="emailBasic" class="form-label">Date*</label>
                                            <input type="text" name="date" id="emailBasic" class="form-control"
                                                placeholder="Date" />
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
                                            </table>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="nameBasic" class="form-label"></label>
                                                        <input type="text" name="financial_year" id="nameBasic"
                                                            class="form-control" placeholder="Select Option" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>  --}}
            </div>
        </div>
    </div>
</div>
<x-footer />
