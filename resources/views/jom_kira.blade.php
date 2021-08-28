@extends('layouts.main')

@push('style')

@endpush

@section('content')

    <main>
        <div class="main-bg">
            <div class="container-fluid px-md-5 pt-4">
                <h1 class="text-white mb-0 d-lg-block d-none">PNB &nbsp; ASNB</h1>
            </div>
            <div class="container mt-5">
                <div class="row gy-4">
                    <div class="col-lg-5 pt-4">
                        <img src="{{asset('assets/img/jom-kira.png')}}" class="img-fluid" alt="">
                        <p class="text-white mt-3 text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem quis, deleniti id voluptatem necessitatibus eos animi voluptatibus, amet itaque illo dolorum excepturi quam aperiam blanditiis? Ipsa, ut veritatis! Cum, aut. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam molestiae deserunt atque dolore optio eos assumenda rerum voluptates commodi impedit dicta officia dignissimos dolorum exercitationem voluptatibus, asperiores quas similique vel!</p>
                        <div class="mt-4 text-center">
                            <a href="{{route('sertai.sekarang')}}" class="sertai-btn">Sertai Sekarang!</a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="cars-row">
                            <div class="d-flex align-items-end p-md-3 p-2">
                                <div>
                                    <img src="{{asset('assets/img/car1.png')}}" class="img-fluid" alt="">
                                    <div class="car-details">
                                        <h4>FORD Ranger</h4>
                                        <p>2.0L XLT Plus 4WD (10AT)</p>
                                    </div>
                                </div>
                                <div>
                                    <img src="{{asset('assets/img/car3.png')}}" class="img-fluid" alt="">
                                    <div class="car-details">
                                        <h4>PERODUA Aruz</h4>
                                        <p>1.5 AV (AT)</p>
                                    </div>
                                </div>
                                <div>
                                    <img src="{{asset('assets/img/car2.png')}}" class="img-fluid" alt="">
                                    <div class="car-details">
                                        <h4>TOYOTA Vios</h4>
                                        <p>1.5 G (AT)</p>
                                    </div>
                                </div>
                                <div class="info_iconn info_iconn_1">
                                    <span class="bi bi-info"></span>
                                </div>
                            </div>
                        </div>
                        <div class="cars-row">
                            <div class="d-flex align-items-center justify-content-around p-md-3 p-2">
                                <div>
                                    <img src="{{asset('assets/img/raiz-logo')}}.png" class="img-fluid" alt="">

                                </div>
                                <div>
                                    <div class="car-details">
                                        <h5>E-Baucar Lazada
                                            Bernilai Lebih Daripada</h5>
                                        <h1>RM180,000</h1>
                                    </div>
                                </div>
                                <div class="info_iconn info_iconn_2">
                                    <span class="bi bi-info"></span>
                                </div>
                            </div>

                        </div>
                        <div class="cars-row">
                            <a href="" class="ringgit-btn">Ringgit Emas</a>
                            <div class="d-flex align-items-end p-md-3 p-2">
                                <div>
                                    <img src="{{asset('assets/img/bike.png')}}" class="img-fluid" alt="">
                                    <div class="car-details">
                                        <h4>HONDA Dash 125 S</h4>

                                    </div>
                                </div>
                                <div>
                                    <img src="{{asset('assets/img/bike.png')}}" class="img-fluid" alt="">
                                    <div class="car-details">
                                        <h4>HONDA Dash 125 S</h4>

                                    </div>
                                </div>
                                <div>
                                    <img src="{{asset('assets/img/bike.png')}}" class="img-fluid" alt="">
                                    <div class="car-details">
                                        <h4>HONDA Dash 125 S</h4>

                                    </div>
                                </div>
                                <div>
                                    <img src="{{asset('assets/img/bike.png')}}" class="img-fluid" alt="">
                                    <div class="car-details">
                                        <h4>HONDA Dash 125 S</h4>

                                    </div>
                                </div>
                                <div class="info_iconn info_iconn_3">
                                    <span class="bi bi-info"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>



@endsection


@push('js')

@endpush
