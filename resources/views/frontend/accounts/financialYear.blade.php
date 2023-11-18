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
                            <h5 class="card-header">Financial year</h5>
                            <div class="modalbutton">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#CloseModal">
                                    Close finacial Year
                                </button>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#CreateModal">
                                    Create finacial Year
                                </button>
                            </div>
                        </div>

                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>SL.No</th>
                                        <th>Year</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Status</th>
                                        <th>edit</th>
                                        <th>delete</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($finalyeardata as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->financial_year }}</td>
                                            <td>{{ $item->financial_year_start_date }}</td>
                                            <td>{{ $item->financial_year_end_date }}</td>
                                            <td><span class="badge bg-label-primary me-1">Active</span></td>
                                            <td>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#EditModal"
                                                    data-target-data='{{ $item }}'>
                                                    <i class="bx bx-edit-alt me-2"></i>Edit
                                                </a>

                                            </td>
                                            <td>
                                                <a class="dropdown-item"
                                                    href="{{ route('financial_delete', $item->id) }}"><i
                                                        class="bx bx-trash me-2"></i>Delete</a>
                                            </td>

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
                <div class="modal fade" id="EditModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Add Financial Year</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('finacial_update', $item->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="nameBasic" class="form-label">Financial year*</label>
                                            <input type="text" name="financial_year"
                                                value="{{ $item->financial_year }}" id="financial_year"
                                                class="form-control" placeholder="Financial year" />
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="emailBasic" class="form-label">Financial year start
                                                date*</label>
                                            <input type="date" name="financial_year_start_date"
                                                value="{{ $item->financial_year_start_date }}"
                                                id="financial_year_start_date" class="form-control"
                                                placeholder="Financial year start date" />
                                        </div>
                                        <div class="col mb-0">
                                            <label for="dobBasic" class="form-label">Financial year end date*</label>
                                            <input type="date" name="financial_year_end_date"
                                                value="{{ $item->financial_year_end_date }}"
                                                id="financial_year_end_date" class="form-control"
                                                placeholder="Financial year end date" />
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

            <div class="modal fade" id="CloseModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel1">Close Financial Year</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="" method="">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="nameBasic" class="form-label">Financial year*</label>
                                        <input type="text" name="financial_year" id="nameBasic"
                                            class="form-control" placeholder="Financial year" />
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">
                                    Year Close
                        </form>
                    </div>
                </div>
            </div>


        </div>
        <div class="modal fade" id="CreateModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Add Financial Year</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <form action="{{ route('financial_create') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Financial year*</label>
                                    <input type="text" name="financial_year" id="nameBasic" class="form-control"
                                        placeholder="Financial year" />
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="emailBasic" class="form-label">Financial year start
                                        date*</label>
                                    <input type="date" name="financial_year_start_date" id="emailBasic"
                                        class="form-control" placeholder="Financial year start date" />
                                </div>
                                <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Financial year end date*</label>
                                    <input type="date" name="financial_year_end_date" id="dobBasic"
                                        class="form-control" placeholder="Financial year end date" />
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

<script>
    $(document).ready(function() {
        $("#EditModal").on("show.bs.modal", function(e) {
            var data = $(e.relatedTarget).data('target-data');
            console.log(data);

            $('#financial_year').val(data.financial_year);
            $('#financial_year_start_date').val(data.financial_year_start_date);
            $('#financial_year_end_date').val(data.financial_year_end_date);
        });
    });
</script>
<x-footer />
