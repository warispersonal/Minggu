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
                        <h6 class="h2 text-white d-inline-block mb-0">View Submission</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('star.dashboard') }}"><i
                                            class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">View Submission</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
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
                        <h3 class="mb-0">View Submission</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush w-100" id="adminTable">
                            <thead class="thead-light">
                            <tr>
                                <th aria-sort="false">#</th>
                                <th scope="col" class="sort" data-sort="budget">Name</th>
                                <th scope="col" class="sort" data-sort="status">Email</th>
                                <th scope="col">IC Number</th>
                                <th scope="col">Lottery Title</th>
                                <th scope="col">Submitted Value</th>
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
            $('#adminTable').DataTable({
                "processing": true,
                "serverSide": true,
                dom: 'Bfrtip',
                "pageLength": 25,
                "columnDefs":
                    [
                        {"searchable": false, "targets": 0, "orderable": false},
                    ],
                "order": [],
                lengthMenu: [
                    [ 10, 25, 50, -1 ],
                    [ '10 rows', '25 rows', '50 rows', 'Show all' ]
                ],
                buttons: [
                    {
                        extend: 'csv',
                        className: 'btn btn-sm btn-neutral',
                        exportOptions: {
                            columns: 'th:not(:last-child)'
                        }
                    },
                    {
                        extend: 'excel',
                        className: 'btn btn-sm btn-neutral',
                        exportOptions: {
                            columns: 'th:not(:last-child)'
                        }
                    },
                    {
                        extend: 'pdf',
                        className: 'btn btn-sm btn-neutral',
                        exportOptions: {
                            columns: 'th:not(:last-child)'
                        }
                    },
                    {
                        extend: 'copy',
                        className: 'btn btn-sm btn-neutral',
                        exportOptions: {
                            columns: 'th:not(:last-child)'
                        }
                    },
                    'pageLength'
                ],
                "ajax": "{{ route('star.viewSubmissionAJAX') }}",
                "columns": [
                    {"data": "DT_RowIndex"},
                    {"data": "name"},
                    {"data": "email"},
                    {"data": "ic_number"},
                    {"data": "lottery_title"},
                    {"data": "code"},
                ],
                "language": {
                    "paginate": {
                        "previous": "<i class='fa fa-angle-left'></i>",
                        "next": "<i class='fa fa-angle-right'></i>"
                    }
                }
            });
        });
    </script>
@endpush

