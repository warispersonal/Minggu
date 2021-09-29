@extends('layouts.app')

@push('style')
    <link rel="stylesheet" href="{{ asset('argon') }}/vendor/data-table/datatables.min.css">
@endpush

@section('content')
    <div class="header bg-gradient-primary pb-6 pt-4 pt-md-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4 mb-5">
                    <div class="col-lg-9 col-7">
                    </div>
                    <div class="col-lg-3 col-5 text-right ">
                        <a href="{{route('star.compitition.generateRinggitEmas')}}" class="btn btn-sm btn-neutral">Generate
                            Winner</a>
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
                        <div class="row">
                            <div class="col-lg-2 col-5">
                                <h3 class="mb-0">Ringgit Emas Winner</h3>
                            </div>
                            <div class="col-lg-4 col-5">
                                <input class="form-control" id="date_filter" name="date" type="date">
                            </div>
                        </div>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush w-100" id="adminTable">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="id">#</th>
                                <th scope="col" class="sort" data-sort="name">Name</th>
                                <th scope="col" class="sort" data-sort="email">Email</th>
                                <th scope="col" class="sort" data-sort="ic">IC Number</th>
                                <th scope="col" class="sort" data-sort="ic">Lottery Title</th>
                                <th scope="col">Date</th>
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
            // Show Admins DataTable
            $datatable = $('#adminTable').DataTable({
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
                "ajax": "{{ route('star.compitition.getRinggitEmasWinnerAJAX') }}",
                "columns": [
                    {"data": "DT_RowIndex"},
                    {"data": "name"},
                    {"data": "email"},
                    {"data": "ic"},
                    {"data": "title"},
                    {"data": "date"},
                ],
                "language": {
                    "paginate": {
                        "previous": "<i class='fa fa-angle-left'></i>",
                        "next": "<i class='fa fa-angle-right'></i>"
                    }
                }
            });
            $('#date_filter').on('change', function () {
                $datatable.columns(4).search( this.value ).draw();
            });
        });
    </script>
@endpush

