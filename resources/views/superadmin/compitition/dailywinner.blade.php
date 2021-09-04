@extends('layouts.app')

@push('style')
    <link rel="stylesheet" href="{{ asset('argon') }}/vendor/data-table/datatables.min.css">
@endpush

@section('content')
    <div class="header bg-gradient-primary pb-6 pt-4 pt-md-6">
        <div class="container-fluid">
            <div class="header-body">
                <form method="post" action="{{route('star.compitition.generate.daily.winner.list')}}">
                    @csrf
                    <div class="row align-items-center py-4">
                        <div class="col-lg-9 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0">No of Daily Winner</h6>
                            <div class="form-group mb-3">
                                <div class="input-group input-group-alternative">
                                    <input class="form-control" id="admin-name" name="daily_winner"
                                           placeholder="No of Daily Winner" type="number" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-5 text-right">
                            <button class="btn btn-sm btn-neutral" type="submit">Get Winner</button>
                        </div>
                    </div>
                </form>
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
                        <h3 class="mb-0">Users</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush w-100" id="adminTable">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="id">ID</th>
                                <th scope="col" class="sort" data-sort="name">Name</th>
                                <th scope="col" class="sort" data-sort="email">Email</th>
                                <th scope="col" class="sort" data-sort="ic">IC Number</th>
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

    <!-- Winner Modal -->
    <div class="modal" tabindex="-1" role="dialog" id="winnerModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Daily Winner</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h2 class="text-center" id="winnerName"></h2>
                    <p id="winnerEmail" class="text-center"></p>
                    <h2 id="winnerICNumber" class="text-center"></h2>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-primary">Export</button> -->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
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
            $('#adminTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf'
                ],
                "order": [],
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('star.getDailyWinnerAJAX') }}",
                "columns": [
                    {"data": "id"},
                    {"data": "name"},
                    {"data": "email"},
                    {"data": "ic"},
                    {"data": "date"},
                ],
                "language": {
                    "paginate": {
                        "previous": "<i class='fa fa-angle-left'></i>",
                        "next": "<i class='fa fa-angle-right'></i>"
                    }
                }
            });

            $('#getDailyWinner').on('click', function () {
                $.ajax({
                    method: 'GET',
                    url: "{{ route('star.compitition.getDailyWinner') }}",
                    success: function (response) {
                        if (response.status == 'success') {
                            var modal = $('#winnerModal');
                            $('#winnerName').html(response.winner[0].name);
                            $('#winnerEmail').html(response.winner[0].email);
                            $('#winnerICNumber').html(response.winner[0].icno);

                            modal.modal('show')
                        } else {

                        }
                    },
                    error: function () {

                    }
                });
            });

        });
    </script>
@endpush

