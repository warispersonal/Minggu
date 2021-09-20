@extends('layouts.app')

@push('style')
    <link rel="stylesheet" href="{{ asset('argon') }}/vendor/data-table/datatables.min.css">
@endpush

@section('content')
    <div class="header bg-gradient-primary pb-6 pt-4 pt-md-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Admins</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('star.dashboard') }}"><i
                                            class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Manage Admins</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <button class="btn btn-sm btn-neutral" data-toggle="modal"
                                data-target="#modal-store-admin">Add New Admin
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h3 class="mb-0">Admins</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush w-100" id="adminTable">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">#</th>
                                <th scope="col" class="sort" data-sort="budget">Name</th>
                                <th scope="col" class="sort" data-sort="status">Email</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <!-- Card footer -->
                </div>
            </div>
        </div>

        <!-- Models Start -->

        <!-- Add Admin Modal -->
        <div class="modal fade" id="modal-store-admin" tabindex="-1" role="dialog" aria-labelledby="modal-form"
             aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="card bg-secondary shadow border-0">
                            <div class="card-header bg-transparent">
                                <div class="text-muted text-center mt-2 mb-2">Add New Admin</div>
                            </div>
                            <div class="card-body px-lg-4 py-lg-4">
                                <form role="form" id="store-admin">
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                            </div>
                                            <input class="form-control" id="admin-name" name="name"
                                                   placeholder="Full Name" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                            </div>
                                            <input class="form-control" id="admin-email" name="email"
                                                   placeholder="Email" type="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="ni ni-lock-circle-open"></i></span>
                                            </div>
                                            <input class="form-control" id="admin-password" name="password"
                                                   placeholder="Password" type="password" required>
                                        </div>
                                    </div>
                                    <div>
                                        <ul class="text-danger" id="store-admin-errors">

                                        </ul>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" id="admin-store" class="btn btn-primary my-2">Create
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Admin Details -->
        <div class="modal fade" id="modal-update-admin" tabindex="-1" role="dialog" aria-labelledby="modal-form"
             aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="card bg-secondary shadow border-0">
                            <div class="card-header bg-transparent">
                                <div class="text-muted text-center mt-2 mb-2">Add New Admin</div>
                            </div>
                            <div class="card-body px-lg-4 py-lg-4">
                                <form role="form" id="store-admin">
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                            </div>
                                            <input class="form-control" id="admin-name" name="name"
                                                   placeholder="Full Name" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                            </div>
                                            <input class="form-control" id="admin-email" name="email"
                                                   placeholder="Email" type="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="ni ni-lock-circle-open"></i></span>
                                            </div>
                                            <input class="form-control" id="admin-password" name="password"
                                                   placeholder="Password" type="password" required>
                                        </div>
                                    </div>
                                    <div>
                                        <ul class="text-danger" id="store-admin-errors">

                                        </ul>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" id="admin-store" class="btn btn-primary my-2">Create
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Models End -->
        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/js-cookie/js.cookie.js"></script>
    <script src="{{ asset('argon') }}/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>

    <script src="{{ asset('argon') }}/vendor/data-table/datatables.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            function deleteUser(id){
                alert(id)
            }
            // Show Admins DataTable
            $('#adminTable').DataTable({
                "processing": true,
                "serverSide": true,
                "pageLength": 25,
                "columnDefs":
                    [
                        {"searchable": false, "targets": 0}
                    ],
                "order": [],
                "ajax": "{{ route('star.getadminsAJAX') }}",
                "columns": [
                    {"data": "DT_RowIndex"},
                    {"data": "name"},
                    {"data": "email"},
                    {"data": "action", 'name': 'action'},
                ],
                "language": {
                    "paginate": {
                        "previous": "<i class='fa fa-angle-left'></i>",
                        "next": "<i class='fa fa-angle-right'></i>"
                    }
                }
            });

            // Store New Admin
            $('#store-admin').on('submit', function (e) {
                e.preventDefault();
                var $name = $('#admin-name').val();
                var $email = $('#admin-email').val();
                var $password = $('#admin-password').val();

                $.ajax({
                    url: "{{ route('star.storeAdmin') }}",
                    method: 'POST',
                    data: {
                        '_token': '{{ csrf_token() }}',
                        name: $name,
                        email: $email,
                        password: $password,
                    },
                    beforeSend: function () {
                        $('#admin-store').prop('disabled', true);
                        $('#store-admin-errors').html('');
                    },
                    success: function (response) {
                        $('#admin-store').prop('disabled', false)

                        if ($.isEmptyObject(response.error)) {
                            $('#store-admin')[0].reset();
                            $('#modal-store-admin').modal('toggle');
                            $('#adminTable').DataTable().ajax.reload();
                            clearFormInputField();
                            $.toast({
                                text: response.success,
                                position: 'top-right',
                                loader: false,
                                allowToastClose: false,
                                textColor: 'white',
                                icon: 'success'
                            });
                        } else {
                            showFormErrors('store-admin-errors', response.error);
                        }
                    },
                });
            });

            function showFormErrors(id, errors) {
                var list = $('#' + id);
                list.html('');
                $.each(errors, function (key, value) {
                    list.append('<li>' + value + '</li>');
                });
            }


        });
    </script>
@endpush

