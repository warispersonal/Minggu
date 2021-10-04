@extends('layouts.app')

@section('content')
    <div class="header bg-gradient-primary pb-6 pt-4 pt-md-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-12 col-12">
                        <h6 class="h2 text-white d-inline-block mb-0">Edit Promotion</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ route('star.dashboard') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Edit Promotion</a></li>
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
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h3 class="mb-0">Edit Promotion</h3>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <form method="post" action="{{route('admin.stars.promotion.update',$slider->id)}}"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label>Select Image (526 × 234 px)</label>
                                        <div class="input-group input-group-alternative">
                                            <input class="form-control" name="slider"  onchange="validateUploadImage(this)"  type="file" >
                                        </div>
                                        <div class="mt-2">
                                            <img src="{{$slider->promotion_logo}}"
                                                 class="promosi-image-details main-details-image"/>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Promotion URL</label>
                                        <div class="input-group input-group-alternative">
                                            <input class="form-control" name="url" value="{{$slider->url}}" type="url" required>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" id="admin-store" class="btn btn-primary my-2">
                                            Update
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')

@endpush

