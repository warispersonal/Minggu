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
                        <h6 class="h2 text-white d-inline-block mb-0">Filters</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('star.dashboard') }}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Filters Settings</a></li>
                            </ol>
                        </nav>
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
                    <div class="card-header border-0">
                        <h3 class="mb-0">
                            Upload Competition Filters <b class="text-danger">Don't replace column name</b>
                            <a href="{{asset('samplefile.csv')}}" class="btn btn-primary" download> Download Sample File</a>

                        </h3>
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
                                <input type="submit" value="Upload File" class="btn btn-primary" />
                            </div>
                        </form>

                        <div class="table-responsive">
                            <table class="table align-items-center table-flush w-100" id="filterTable">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">ID</th>
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
                dom: 'Bfrtip',
                "pageLength": 25,
                "columnDefs":
                    [
                        {"searchable": false, "targets": 0}
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
                "ajax": "{{ route('star.compitition.getfiltersAJAX') }}",
                "columns":[
                    { "data": "id" },
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
            debugger
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
