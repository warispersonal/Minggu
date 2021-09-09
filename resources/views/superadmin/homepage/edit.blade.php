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
                            <li class="breadcrumb-item"><a href="{{ route('star.dashboard') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Edit Partner</a></li>
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
                        <h3 class="mb-0">Edit Partner ( {{ $partner->name }} )</h3>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <form role="form" id="store-admin" method="POST" action="{{ route('stars.homepage.edit' , $partner) }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label>Name (EN)</label>
                                        <div class="input-group input-group-alternative">
                                            <input class="form-control"  name="name" placeholder="Name (EN)" value="{{ $partner->name }}" type="text" required="">
                                        </div>
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Name (BM)</label>
                                        <div class="input-group input-group-alternative">
                                            <input class="form-control"  name="name_bm" placeholder="Name (BM)" value="{{ $partner->name_bm }}" type="text" required="">
                                        </div>
                                        @if ($errors->has('name_bm'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('name_bm') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="theme-color">BG Color</label>
                                        <input type="color" class="form-control theme-edit" name="bg_color" id="theme-menu-bg" value="{{ $partner->bg_color }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Description (EN)</label>
                                        <div class="input-group input-group-alternative">
                                            <textarea class="form-control" rows="5" name="description" placeholder="Description (EN)" type="text" >{{ $partner->description }}</textarea>
                                        </div>
                                        @if ($errors->has('description'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Description (BM)</label>
                                        <div class="input-group input-group-alternative">
                                            <textarea class="form-control" rows="5" name="description_bm" placeholder="Description (BM)" type="text" >{{ $partner->description_bm }}</textarea>
                                        </div>
                                        @if ($errors->has('description_bm'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('description_bm') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Video Link</label>
                                        <div class="input-group input-group-alternative">
                                            <input class="form-control"  name="video_link" placeholder="Video Link" value="{{ $partner->video_link }}" type="text" required="">
                                        </div>
                                        @if ($errors->has('video_link'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('video_link') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Facebook Link</label>
                                        <div class="input-group input-group-alternative">
                                            <input class="form-control"  name="fb" placeholder="Facebook Link" value="{{ $partner->fb }}" type="text" >
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Instagram Link</label>
                                        <div class="input-group input-group-alternative">
                                            <input class="form-control"  name="insta" placeholder="Instagram Link" value="{{ $partner->insta }}" type="text" >
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Twitter Link</label>
                                        <div class="input-group input-group-alternative">
                                            <input class="form-control"  name="twitter" placeholder="Twitter Link" value="{{ $partner->twitter }}" type="text" >
                                        </div>
                                    </div>


                                    <div class="form-group mb-3">
                                        <label>Youtube Link</label>
                                        <div class="input-group input-group-alternative">
                                            <input class="form-control"  name="youtube" placeholder="Youtube Link" value="{{ $partner->youtube }}" type="text" >
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Website Link</label>
                                        <div class="input-group input-group-alternative">
                                            <input class="form-control"  name="website" placeholder="Website Link" value="{{ $partner->website }}" type="text" >
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Careers Link</label>
                                        <div class="input-group input-group-alternative">
                                            <input class="form-control"  name="careers" placeholder="Careers Link" value="{{ $partner->careers }}" type="text" >
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Contact Us Link</label>
                                        <div class="input-group input-group-alternative">
                                            <input class="form-control"  name="contact_us" placeholder="Contact Us Link" value="{{ $partner->contact_us }}" type="text" >
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Home Logo</label>
                                        <div class="input-group input-group-alternative">
                                            <input class="form-control"  name="home_logo" type="file">
                                        </div>
                                        @if ($errors->has('home_logo'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('home_logo') }}</strong>
                                            </span>
                                        @endif
                                        <img src="{{$partner->main_logo}}" />
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Promosi Page Logo</label>
                                        <div class="input-group input-group-alternative">
                                            <input class="form-control"  name="promosi_image" type="file">
                                        </div>
                                        @if ($errors->has('promosi_image'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('promosi_image') }}</strong>
                                            </span>
                                        @endif
                                        <img src="{{$partner->promosi_logo}}" />
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Details Page Logo</label>
                                        <div class="input-group input-group-alternative">
                                            <input class="form-control"  name="details_logo" type="file">
                                        </div>
                                        @if ($errors->has('details_logo'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('details_logo') }}</strong>
                                            </span>
                                        @endif
                                        <img class="promosi-image-details" src="{{$partner->store_logo}}" />
                                    </div>

                                    <div class="text-right">
                                        <button type="submit" id="admin-store" class="btn btn-primary my-2">Update</button>
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

