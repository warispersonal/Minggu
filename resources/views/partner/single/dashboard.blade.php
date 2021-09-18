@extends('layouts.app')

@section('content')
    <div class="header bg-gradient-primary pb-6 pt-4 pt-md-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-12 col-12">
                        <h6 class="h2 text-white d-inline-block mb-0">Edit Partner</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('star.dashboard') }}"><i
                                            class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Edit Partner</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header border-0 text-center">
                        <h3 class="mb-0">Verify Partner Info</h3>
                    </div>
                    <div class="container ">
                        <div class="form-group mb-3">
                            <b>Title (EN)</b>
                            <p>{{ $partner->name }}</p>
                        </div>
                        <div class="form-group mb-3">
                            <b>Title (BM)</b>
                            <p> {{ $partner->name_bm }}</p>
                        </div>
                        <div class="form-group">
                            <b>Mode</b>
                            <p>{{$partner->mode == 0 ? 'Dark' : "Light"}}</p>
                        </div>
                        <div class="form-group mb-3">
                            <b for="theme-color">BG Color</b>
                            <br/>
                            <input type="color" class="form-control theme-edit" disabled
                                   value="{{ $partner->bg_color }}">
                        </div>
                        <div class="form-group mb-3">
                            <b>Description (EN) </b>
                            <p>{{ $partner->description }}</p>
                        </div>
                        <div class="form-group mb-3">
                            <b>Description (BM) </b>
                            <p>{{ $partner->description_bm }}</p>
                        </div>
                        <div class="form-group mb-3">
                            <b>Video Link</b>
                            <p> {{ $partner->video_link }}</p>
                        </div>
                        <div class="form-group mb-3">
                            <b>Facebook Link</b>
                            <p> {{ $partner->fb }}</p>
                        </div>
                        <div class="form-group mb-3">
                            <b>Instagram Link</b>
                            <p>{{ $partner->insta }}</p>
                        </div>
                        <div class="form-group mb-3">
                            <b>Twitter Link</b>
                            <p>{{ $partner->twitter }}</p>
                        </div>
                        <div class="form-group mb-3">
                            <b>Youtube Link</b>
                            <p> {{ $partner->youtube }}</p>
                        </div>
                        <div class="form-group mb-3">
                            <b>Linkedin Link</b>
                            <p>{{ $partner->linkedin }}</p>
                        </div>
                        <div class="form-group mb-3">
                            <b>Website Link</b>
                            <p>{{ $partner->website }}</p>
                        </div>
                        <div class="form-group mb-3">
                            <b>Careers Link</b>
                            <p>{{ $partner->careers }}</p>
                        </div>
                        <div class="form-group mb-3">
                            <b>Contact Link</b>
                            <p>{{ $partner->contact_us }}</p>
                        </div>
                        <div class="form-group mb-3">
                            <b>Home Logo (162 × 106 px)</b> <br>
                            <img class="main-details-image mt-2" src="{{$partner->main_logo}}"/>
                        </div>
                        @if($partner->is_promotion != 0)
                            <b>Promosi Page Logo (104 × 86 px)</b> <br>
                            <img class="main-details-image mt-2" src="{{$partner->promosi_logo}}"/>
                        @endif
                        <div class="form-group mb-3">
                            <b>Details Page Logo (403 × 110 px)</b> <br>
                            <img class="main-details-image mt-2" src="{{$partner->store_logo}}"/>
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

