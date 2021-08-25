@extends('layouts.app')

@push('style')
    <link rel="stylesheet" href="{{ asset('argon') }}/vendor/data-table/datatables.min.css">
@endpush

@section('content')
    <div class="header bg-gradient-primary pb-6 pt-4 pt-md-6">
    </div>

    <div class="card bg-secondary shadow border-0">
        <div class="card-header bg-transparent">
            <div class="text-muted text-center mt-2 mb-2">Add New Program</div>
        </div>
        <div class="card-body px-lg-4 py-lg-4">
            <form method="post" action="{{route('programs.add.post')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                        <input class="form-control"  name="name" placeholder="Program Name" type="text" required="">
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label>Thumbnail Image</label>
                    <div class="input-group input-group-alternative">
                        <input class="form-control" id="partner-email" name="thumbnail_image" type="file" required="">
                    </div>
                </div>
                <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                        <input class="form-control"  name="date" placeholder="Program Date" type="date" required="">
                    </div>
                </div>
                <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                        <textarea  class="form-control"  name="description" required placeholder="Description"></textarea>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label>Sponsor Image</label>
                    <div class="input-group input-group-alternative">
                        <input class="form-control"  name="sponser_image" type="file" required="">
                    </div>
                </div>

                <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                        <textarea  class="form-control"  name="video_link" required placeholder="Video Link"></textarea>
                    </div>
                </div>
                <div class="text-right">
                    <button type="submit" id="partner-store" class="btn btn-primary my-2">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('js')

@endpush

