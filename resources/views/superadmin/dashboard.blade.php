@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row mt-5">
            <div class="col-lg-6 mb-12 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">
                                    Admins
                                    <span class="badge badge-success">New</span>
                                </h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('star.admins') }}" class="btn btn-sm btn-primary">See all</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($data['admins']) > 0)
                                    @foreach ($data['admins'] as $admin)
                                        <tr>
                                            <th scope="row">
                                                {{ $admin->id }}
                                            </th>
                                            <td>
                                                {{ $admin->name }}
                                            </td>
                                            <td>
                                                {{ $admin->email }}
                                            </td>
                                        </tr>    
                                    @endforeach
                                @else
                                        <tr><td>No Admin Found</td></tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">
                                    Partners
                                    <span class="badge badge-success">New</span>
                                </h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('star.partners') }}" class="btn btn-sm btn-primary">See all</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($data['partners']) > 0)
                                    @foreach ($data['partners'] as $partner)
                                        <tr>
                                            <th scope="row">
                                                {{ $partner->id }}
                                            </th>
                                            <td>
                                                {{ $partner->name }}
                                            </td>
                                            <td>
                                                {{ $partner->email }}
                                            </td>
                                        </tr>    
                                    @endforeach
                                @else
                                        <tr><td>No Partner Found</td></tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-2">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">
                                    Programms
                                    <span class="badge badge-success">Recent</span>
                                </h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('star.programs') }}" class="btn btn-sm btn-primary">See all</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Program Name</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($data['programs']) > 0)
                                    @foreach ($data['programs'] as $program)
                                        <tr>
                                            <th scope="row">
                                                {{ $program->id }}
                                            </th>
                                            <td>
                                                {{ $program->name }}
                                            </td>
                                            <td>
                                                {{ $program->date }}
                                            </td>
                                        </tr>    
                                    @endforeach
                                @else
                                        <tr>
                                            <td>No Prgrams Found</td>
                                        </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-2">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">
                                    Registrations
                                    <span class="badge badge-success">Recent</span>
                                </h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('star.users') }}" class="btn btn-sm btn-primary">See all</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($data['users']) > 0)
                                    @foreach ($data['users'] as $user)
                                        <tr>
                                            <th scope="row">
                                                {{ $user->id }}
                                            </th>
                                            <td>
                                                {{ $user->name }}
                                            </td>
                                            <td>
                                                {{ $user->email }}
                                            </td>
                                        </tr>    
                                    @endforeach
                                @else
                                        <tr>
                                            <td>No Registration Found</td>
                                        </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush