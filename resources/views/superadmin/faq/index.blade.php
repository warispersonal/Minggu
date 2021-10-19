@extends('layouts.app')

@push('style')

@endpush

@section('content')
    <div class="header bg-gradient-primary pb-6 pt-4 pt-md-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">FAQ</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ route('star.dashboard') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">FAQ Settings</a></li>
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
                        <h3 class="mb-0">FAQ Setting</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('star.faq') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="videoLink">Minggu Saham Digital (EN)*</label>
                                <!--<textarea class="ckeditor form-control" name="minggu_saham_digital">{!! $faq['minggu_saham_digital'] !!}</textarea>-->
                                <textarea class="form-control" name="minggu_saham_digital" rows="10">{!! $faq['minggu_saham_digital'] !!}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="videoLink">Minggu Saham Digital (BM) *</label>
                                <textarea class=" form-control" name="minggu_saham_digital_bm" rows="10">{!! $faq['minggu_saham_digital_bm'] !!}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="videoLink">Pertandingan (EN) *</label>
                                <textarea class=" form-control" name="pertandingan" rows="10">{!! $faq['pertandingan'] !!}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="videoLink">Pertandingan (BM) *</label>
                                <textarea class=" form-control" name="pertandingan_bm" rows="10">{!! $faq['pertandingan_bm'] !!}</textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" value='submit'>
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });

    </script>

@endpush
