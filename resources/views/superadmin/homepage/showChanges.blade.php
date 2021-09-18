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
                        <h6 class="h2 text-white d-inline-block mb-0">Partner Changes</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('star.dashboard') }}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Manage Partner Changes</a></li>
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
                    <div class="card-header border-0">
                        <div class="row">
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header border-0">
                                        <h3 class="mb-0">Approve Partner Details</h3>
                                    </div>
                                    <div class="container">
                                        <div class="form-group mb-3">
                                            @if($changes->name != $original->name )
                                                <b>Name (EN)</b>
                                                <p>{{ $original->name }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            @if($changes->name_bm != $original->name_bm )
                                                <b>Name (BM)</b>
                                                <p> {{ $original->name_bm }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            @if($changes->mode != $original->mode )
                                                <b>Mode</b>
                                                <p>{{$original->mode == 0 ? 'Dark' : "Light"}}</p>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            @if($changes->bg_color != $original->bg_color )
                                                <b for="theme-color">BG Color</b>
                                                <br/>
                                                <input type="color" class="form-control theme-edit" disabled
                                                       value="{{ $original->bg_color }}">
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            @if($changes->description != $original->description )
                                                <b>Description (EN) </b>
                                                <p>{{ $original->description }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            @if($changes->description_bm != $original->description_bm )
                                                <b>Description (BM) </b>
                                                <p>{{ $original->description_bm }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            @if($changes->video_link != $original->video_link )
                                                <b>Video Link</b>
                                                <p> {{ $original->video_link }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            @if($changes->fb != $original->fb )
                                                <b>Facebook Link</b>
                                                <p> {{ $original->fb }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            @if($changes->insta != $original->insta )
                                                <b>Instagram Link</b>
                                                <p>{{ $original->insta }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            @if($changes->twitter != $original->twitter )
                                                <b>Twitter Link</b>
                                                <p>{{ $original->twitter }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            @if($changes->youtube != $original->youtube )
                                                <b>Youtube Link</b>
                                                <p> {{ $original->youtube }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            @if($changes->linkedin != $original->linkedin )
                                                <b>Linkedin Link</b>
                                                <p>{{ $original->linkedin }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            @if($changes->website != $original->website )
                                                <b>Website Link</b>
                                                <p>{{ $original->website }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            @if($changes->careers != $original->careers )
                                                <b>Careers Link</b>
                                                <p>{{ $original->careers }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            @if($changes->contact_us != $original->contact_us )
                                                <b>Contact Link</b>
                                                <p>{{ $original->contact_us }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            @if($changes->main_logo != $original->main_logo )
                                                <b>Home Logo (162 × 106 px)</b> <br>
                                                <img class="main-details-image mt-2" src="{{$original->main_logo}}"/>
                                            @endif
                                        </div>
                                        @if($original->is_promotion != 0)
                                            <div class="form-group mb-3">
                                                @if($changes->promosi_logo != $original->promosi_logo )
                                                    <b>Promosi Page Logo (104 × 86 px)</b> <br>
                                                    <img class="main-details-image mt-2"
                                                         src="{{$original->promosi_logo}}"/>
                                                @endif
                                            </div>
                                        @endif
                                        <div class="form-group mb-3">
                                            @if($changes->details_logo != $original->details_logo )
                                                <b>Details Page Logo (403 × 110 px)</b> <br>
                                                <img class="main-details-image mt-2" src="{{$original->store_logo}}"/>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header border-0">
                                        <h3 class="mb-0">Not Approve Changes</h3>
                                    </div>
                                    <div class="container">
                                        <div class="form-group mb-3">
                                            @if($changes->name != $original->name )
                                                <b>Name (EN)</b>
                                                <p>{{ $changes->name }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            @if($changes->name_bm != $original->name_bm )
                                                <b>Name (BM)</b>
                                                <p> {{ $changes->name_bm }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            @if($changes->mode != $original->mode )
                                                <b>Mode</b>
                                                <p>{{$changes->mode == 0 ? 'Dark' : "Light"}}</p>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            @if($changes->bg_color != $original->bg_color )
                                                <b for="theme-color">BG Color</b>
                                                <br/>
                                                <input type="color" class="form-control theme-edit" disabled
                                                       value="{{ $changes->bg_color }}">
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            @if($changes->description != $original->description )
                                                <b>Description (EN) </b>
                                                <p>{{ $changes->description }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            @if($changes->description_bm != $original->description_bm )
                                                <b>Description (BM) </b>
                                                <p>{{ $changes->description_bm }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            @if($changes->video_link != $original->video_link )
                                                <b>Video Link</b>
                                                <p> {{ $changes->video_link }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            @if($changes->fb != $original->fb )
                                                <b>Facebook Link</b>
                                                <p> {{ $changes->fb }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            @if($changes->insta != $original->insta )
                                                <b>Instagram Link</b>
                                                <p>{{ $changes->insta }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            @if($changes->twitter != $original->twitter )
                                                <b>Twitter Link</b>
                                                <p>{{ $changes->twitter }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            @if($changes->youtube != $original->youtube )
                                                <b>Youtube Link</b>
                                                <p> {{ $changes->youtube }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            @if($changes->linkedin != $original->linkedin )
                                                <b>Linkedin Link</b>
                                                <p>{{ $changes->linkedin }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            @if($changes->website != $original->website )
                                                <b>Website Link</b>
                                                <p>{{ $changes->website }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            @if($changes->careers != $original->careers )
                                                <b>Careers Link</b>
                                                <p>{{ $changes->careers }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            @if($changes->contact_us != $original->contact_us )
                                                <b>Contact Link</b>
                                                <p>{{ $changes->contact_us }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            @if($changes->main_logo != $original->main_logo )
                                                <b>Home Logo (162 × 106 px)</b> <br/>
                                                <img class="main-details-image mt-2" src="{{$changes->main_logo}}"/>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            @if($changes->promosi_logo != $original->promosi_logo )
                                                <b>Promosi Page Logo (104 × 86 px)</b> <br/>
                                                <img class="main-details-image mt-2" src="{{$changes->promosi_logo}}"/>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            @if($changes->details_logo != $original->details_logo )
                                                <b>Details Page Logo (403 × 110 px)</b> <br/>
                                                <img class="main-details-image mt-2" src="{{$changes->store_logo}}"/>
                                            @endif
                                        </div>
                                        <div class="text-center mt- mb-3">
                                            <a class="btn btn-sm btn-primary" href="{{route('partner.approvePartner',['id'=> $changes->id, 'status'=>'approve'])}}">
                                                Approve Changes
                                            </a>
                                            <a class="btn btn-sm btn-secondary" href="{{route('partner.approvePartner',['id'=> $changes->id, 'status'=>'not_approve'])}}">
                                                Discard Changes
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush
