@extends('layouts.main')

@push('style')

@endpush

@section('content')
    <main>
        <div class="main-bg position-relative">
            <div class="container-fluid px-md-5 pt-4 position-absolute top-0">
                <div class="d-lg-block d-none">
                    <img src="{{asset('assets/img/header-pnb-white.png')}}" class="img-fluid me-2">
                    <img src="{{asset('assets/img/header-asnb-white.png')}}" class="img-fluid">
                </div>
            </div>
            <img src="{{asset('assets/img/rakan 2.png')}}" class="img-fluid rakan-img d-none d-lg-block" alt="">
            <img src="{{asset('assets/img/rakan mboile 1.png')}}" class="img-fluid rakan-img d-lg-none " alt="">
        </div>
    </main>
@endsection

@push('js')


@endpush
