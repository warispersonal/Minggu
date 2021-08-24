@extends('layouts.app')

@push('style')
    
@endpush

@section('content')
    <div class="header bg-gradient-primary pb-6 pt-4 pt-md-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Tonton MSD Live</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ route('star.dashboard') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Tonton MSD Live Settings</a></li>
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
                        <h3 class="mb-0">Change Website Theme</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('star.content.tontonlink') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="videoLink">Tonton MSD Live Video *</label>
                                <input type="url" class="form-control" name="link" value="{{ $data['link']->value }}" placeholder="Enter Video Link">
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
    
@endpush