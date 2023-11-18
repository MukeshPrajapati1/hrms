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

                            }
                        </style>
                        <div class="header">


                            <h5 class="card-header">Sub Account</h5>
                            <div class="modalbutton">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#subModal">
                                    Sub Account
                                </button>
                            </div>
                        </div>

                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>SL.No</th>
                                        <th>Subtype</th>
                                        <th>Account</th>
                                        <th>Create Date</th>
                                        <th>Action</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($subaccountdata as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->sub_type }}</td>
                                            <td>{{ $item->account_name }}</td>
                                            <td>{{ $item->create_date }}</td>
                                            <td><span class="badge bg-label-primary me-1">Active</span></td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <td>
                                                        <a class="dropdown-item" href="#"data-bs-toggle="modal"
                                                            data-bs-target="#EditModal"
                                                            data-target-data='{{ $item }}'><i
                                                                class="bx bx-edit-alt me-2"></i>Edit
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a class="dropdown-item"
                                                            href="{{ route('sub_delete', $item->id) }}"><i
                                                                class="bx bx-trash me-2"></i>Delete
                                                        </a>
                                                    </td>

                                                </div>
                                            </div>

                                        </tr>
                                    @endforeach

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
                <div class="modal fade" id="subModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Add Sub Account</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('sub_create') }}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="nameBasic" class="form-label">Subtype*</label>
                                            <input type="text" name="subtype" id="nameBasic" class="form-control"
                                                placeholder="Select Option" />
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="emailBasic" class="form-label">Account Name*</label>
                                            <input type="text" name="account_name" id="emailBasic"
                                                class="form-control" placeholder="Account Name" />
                                        </div>
                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="dobBasic" class="form-label">Create Date*</label>
                                                <input type="date" name="create_date" id="dobBasic"
                                                    class="form-control" placeholder="Create Date" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<x-footer />
