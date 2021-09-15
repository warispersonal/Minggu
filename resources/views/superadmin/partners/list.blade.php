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
                    <h6 class="h2 text-white d-inline-block mb-0">Partners</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                        <li class="breadcrumb-item"><a href="{{ route('star.dashboard') }}"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#">Manage Partners</a></li>
                    </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <button class="btn btn-sm btn-neutral hidden" data-toggle="modal" data-target="#modal-store-partner">Add New Partner</button>
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
                        <h3 class="mb-0">Partners</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush w-100" id="adminTable">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">#</th>
                                <th scope="col" class="sort" data-sort="budget">Name</th>
                                <th scope="col" class="sort" data-sort="status">Email</th>
                                <th scope="col">Type</th>
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
        <div class="modal fade" id="modal-store-partner" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="card bg-secondary shadow border-0">
                            <div class="card-header bg-transparent">
                                <div class="text-muted text-center mt-2 mb-2">Add New Partner</div>
                            </div>
                            <div class="card-body px-lg-4 py-lg-4">
                                <form role="form" id="store-partner">
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                            </div>
                                            <input class="form-control" id="partner-name" name="name" placeholder="Full Name" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                            </div>
                                            <input class="form-control" id="partner-email" name="email" placeholder="Email" type="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                            </div>
                                            <select name="type" id="partner-type" class="form-control">
                                                <option value="">Select Partner Type</option>
                                                <option value="premier">Premier</option>
                                                <option value="utama">Utama</option>
                                                <option value="rakan">Rakan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                            </div>
                                            <input class="form-control" id="partner-password" name="password" placeholder="Password" type="password" required>
                                        </div>
                                    </div>
                                    <div>
                                        <ul class="text-danger" id="store-partner-errors">

                                        </ul>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" id="partner-store" class="btn btn-primary my-2">Create</button>
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
        $(document).ready(function() {
            // Show Admins DataTable
            $('#adminTable').DataTable({
                "processing": true,
                "serverSide": true,
                "pageLength": 25,
                "order": [],
                "ajax": "{{ route('star.getpartnersAJAX') }}",
                "columns":[
                    {"data": "DT_RowIndex"},
                    { "data": "name" },
                    { "data": "email" },
                    { "data": "type" },
                    { "data": "action",'name':'action' },
                ],
                "language": {
                    "paginate": {
                    "previous": "<i class='fa fa-angle-left'></i>",
                    "next": "<i class='fa fa-angle-right'></i>"
                    }
                }
            });

            // Store New Admin
            $('#store-partner').on('submit' , function(e){
                e.preventDefault();
                var $name = $('#partner-name').val();
                var $email = $('#partner-email').val();
                var $password = $('#partner-password').val();
                var $type = $('#partner-type').val();

                $.ajax({
                    url : "{{ route('star.storePartner') }}",
                    method : 'POST',
                    data : {
                        '_token' : '{{ csrf_token() }}',
                        name : $name,
                        email : $email,
                        password : $password,
                        type : $type,
                    },
                    beforeSend : function(){
                        $('#partner-store').prop('disabled' , true);
                        $('#store-partner-errors').html('');
                    },
                    success : function(response){
                        $('#partner-store').prop('disabled' , false)
                        clearFormInputField()
                        if($.isEmptyObject(response.error)){
                            $('#store-partner')[0].reset();
                            $('#modal-store-partner').modal('toggle');
                            $('#adminTable').DataTable().ajax.reload();
                            $.toast({
								text: response.success,
								position: 'top-right',
								loader: false,
                                allowToastClose : false,
								textColor: 'white',
								icon: 'success'
							});
                        }else{
                            showFormErrors('store-partner-errors' , response.error);
                        }
                    },
                });
            });

            function showFormErrors(id,errors){
                var list = $('#' + id);
                list.html('');
                $.each( errors, function( key, value ) {
                    list.append('<li>'+value+'</li>');
                });
            }

        });
    </script>
@endpush

