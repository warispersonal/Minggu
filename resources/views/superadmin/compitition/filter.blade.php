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
                    <div class="card-header border-0">
                        <h3 class="mb-0">Upload Competition Filters</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('star.compitition.uploadFilter') }}" id="filterForm" enctype="multipart/form-data" method="POST">
                            {{ csrf_field() }}
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="input-group-text btn btn-outline-primary" value="submit" type="submit" id="uploadFilters">Upload Filters</button>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="csv_file" id="chooseFilters" aria-describedby="uploadFilters" required>
                                    <label class="custom-file-label" id="fileName" for="chooseFile">Choose file</label>
                                </div>
                            </div>
                        </form>

                        <div class="table-responsive">
                            <table class="table align-items-center table-flush w-100" id="filterTable">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">#</th>
                                    <th scope="col" class="sort" data-sort="budget">Full Name</th>
                                    <th scope="col" class="sort" data-sort="status">IC</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/data-table/datatables.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#filterTable').DataTable({
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": "{{ route('star.compitition.getfiltersAJAX') }}",
                "columns":[
                    {"data": "DT_RowIndex"},
                    { "data": "full_name" },
                    { "data": "ic_number" },
                    { "data": "action",'name':'action' },
                ],
                "language": {
                    "paginate": {
                    "previous": "<i class='fa fa-angle-left'></i>",
                    "next": "<i class='fa fa-angle-right'></i>"
                    }
                }
            });
        });
        $('#chooseFilters').on('change',function(){
            var fileName = $('#chooseFilters')[0].files[0].name;
            var fileExt = fileName.split('.').pop();
            if(fileExt == 'csv'){
                $('#fileName').html('').html(fileName);
            }else{
                $('#chooseFilters').val('');
                jQuery.toast({
                    text: 'Invalid File Selection',
                    position: 'top-right',
                    allowToastClose : false,
                    loader: false,
                    textColor: 'white',
                    icon: 'error'
                });
            }
        });

    </script>
@endpush
