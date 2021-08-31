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
                        <h6 class="h2 text-white d-inline-block mb-0">Partner Promotion</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('star.dashboard') }}"><i
                                            class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="">Partner Promotion</a></li>
                            </ol>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt--7">
        <div class="card mt-5 mb-5">
            <!-- Card header -->
            <div class="card-header border-0">
                <div class="row">
                    <div class="col-6 ">
                        <h3 class="mb-0">Promotion Details</h3>
                    </div>
                    <div class="col-6 text-right">
                        <a data-toggle="modal" data-target="#modal-promotion-image" class="btn btn-sm btn-neutral">
                            Add New Promotion
                        </a>
                    </div>
                </div>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
                <table class="table align-items-center table-flush w-100" id="adminTable">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="name">ID</th>
                        <th scope="col" class="sort" data-sort="budget">Promotion Image</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($promotions as $promotion)
                        <tr class="odd">
                            <td>{{$promotion->id}}</td>
                            <td><img src="{{$promotion->promotion_logo}}" class="promosi-image-details"/>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="fas fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item"
                                           href="{{route('partner.promotion.delete',$promotion->id)}}">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Card footer -->
        </div>
    </div>

    <div class="modal fade" id="modal-promotion-image" tabindex="-1" role="dialog" aria-labelledby="modal-form"
         aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card bg-secondary shadow border-0">
                        <div class="card-header bg-transparent">
                            <div class="text-muted text-center mt-2 mb-2">Add New Promotion Image</div>
                        </div>
                        <div class="card-body px-lg-4 py-lg-4">
                            <form method="post" action="{{route('partner.promotion.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label>Select Image</label>
                                    <div class="input-group input-group-alternative">
                                        <input class="form-control" name="slider" type="file" required>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" id="admin-store" class="btn btn-primary my-2">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('layouts.footers.auth')

@endsection

@push('js')

@endpush

