@extends('layouts.app')

@section('content')
    <div class="header bg-gradient-primary pb-6 pt-4 pt-md-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-12 col-12">
                        <h6 class="h2 text-white d-inline-block mb-0">Edit Main Program</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('star.dashboard') }}"><i
                                            class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Edit Main Program</a></li>
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
                        <h3 class="mb-0">Edit Program ( {{ $program->title }} )</h3>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <form role="form" id="store-admin" method="POST"
                                      action="{{ route('star.updateMainDetail' , $program->id) }}"  enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label>Title (EN)</label>
                                        <div class="input-group input-group-alternative">
                                            <input class="form-control" id="admin-name" name="title"
                                                   placeholder="Title (EN)" value="{{  $program->title }}" type="text"
                                                   required="">
                                        </div>
                                        @if ($errors->has('title'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Title (BM)</label>
                                        <div class="input-group input-group-alternative">
                                            <input class="form-control" id="admin-name" name="title_bm"
                                                   placeholder="Title (BM)" value="{{  $program->title_bm }}"
                                                   type="text" required="">
                                        </div>
                                        @if ($errors->has('title_bm'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('title_bm') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Description (EN)</label>
                                        <div class="input-group input-group-alternative">
                                            <textarea class="form-control" name="description"
                                                      id="admin-email">{{$program->description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Description (BM)</label>
                                        <div class="input-group input-group-alternative">
                                            <textarea class="form-control" name="description_bm"
                                                      id="admin-email_bm">{{$program->description_bm}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Logo (150 × 96 px)</label>
                                        <div class="input-group input-group-alternative">
                                            <input class="form-control" name="logo" type="file">
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" id="admin-store" class="btn btn-primary my-2">Update
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

