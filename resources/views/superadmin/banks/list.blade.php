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
                        <h6 class="h2 text-white d-inline-block mb-0">Bank List</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('star.dashboard') }}"><i
                                            class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="">Bank List</a></li>
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
                        <h3 class="mb-0">Bank List</h3>
                    </div>
                  
                </div>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
                <table class="table align-items-center table-flush w-100" id="adminTable">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" class="sort" data-sort="name">Name</th>
                        <th scope="col" class="sort" data-sort="email">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($banks as $bank)
                        <tr class="odd">
                            <form method="post" action="{{route('star.service_advisor_banks_update',$bank->id)}}">
                                @csrf
                            <td>{{$loop->index +1 }}</td>
                            <td><input class="form-control" type="text" name="name" value="{{$bank->name}}" required/></td>
                            <td><input class="form-control" type="email" name="email" value="{{$bank->email}}" required/></td>
                                                      <td><button type="submit" class="btn btn-sm btn-neutral">Update</button></td>

                            </form>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Card footer -->
        </div>
    </div>

    @include('layouts.footers.auth')

@endsection

@push('js')

@endpush

