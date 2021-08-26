@extends('layouts.main')

@push('style')
@endpush

@section('content')


    <main>
        <div class="main-bg position-relative">
            <div class="container-fluid px-md-5 pt-4">
                <h1 class="text-white mb-0 d-lg-block d-none">PNB &nbsp; ASNB</h1>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-4">
                        <h1 class="faq-heading mt-3">Soalan <br class="d-none d-lg-block"> lazim</h1>
                    </div>
                    <div class="col-lg-8">
                        <div id="jom_kira_tabs">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active ps-0" id="nav-home-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                            aria-selected="true">Minggu Saham Digital</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                            aria-selected="false">pertandingan</button>

                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active pt-5" id="nav-home" role="tabpanel"
                                     aria-labelledby="nav-home-tab">
                                    <div class="mb-4">
                                        <h4 class="text-white">Apa itu Minggu Saham Digital?</h4>
                                        <p>Dianjurkan oleh Permodalan Nasional Berhad (PNB), Minggu Saham Digital adalah acara strim langsung selama 7 hari yang akan disiarkan menerusi laman Facebook dan YouTube. Dengan bertemakan #LaburBersama, karnival digital ini bertujuan untuk mempamerkan pelaburan-pelaburan strategik PNB dan menambah pengetahuan rakyat Malaysia dari semua peringkat usia, tentang kepentingan pelaburan dan perancangan kewangan, disulami dengan hiburan. Sepanjang acara digital ini, penonton dapat menyaksikan pelbagai forum, siri webinar, eksperimen sains yang unik yang serba informatif, dan segmen-segmen hiburan menerusi konsert maya hingga ke rancangan menarik seperti bual bicara, game show, sesi memasak, dan sebagainya.
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <h4 class="text-white">Bila dan di manakah Minggu Saham Digital diadakan?
                                        </h4>
                                        <p>Minggu Saham Digital akan disiarkan secara langsung melalui laman Facebook dan YouTube @MingguSahamDigital setiap hari, dari 18 November hingga 24 November 2020 antara pukul 12.30 tengah hari hingga 10.30 malam.
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <h4 class="text-white">Siapa yang boleh menghadiri Minggu Saham Digital?</h4>
                                        <p>Minggu Saham Digital terbuka kepada semua yang mempunyai akses kepada Facebook dan Youtube.
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <h4 class="text-white">Adakah Minggu Saham Digital percuma untuk ditonton?
                                        </h4>
                                        <p>Ya. Minggu Saham Digital adalah percuma untuk ditonton.
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <h4 class="text-white">Rancangan apa yang boleh dijangkakan sepanjang MSD?</h4>
                                        <p>Penonton akan dihiburkan oleh para selebriti menerusi rancangan seperti konsert maya, program bual bicara, game show, pertunjukan memasak, eksperimen sains, sambil berpeluang mengikut penceramah antarabangsa dan pakar industri dalam pelbagai forum dan siri webinar yang informatif dan bernas.
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <h4 class="text-white">Di manakah jadual penuh program MSD boleh didapati?</h4>
                                        <p>Jadual penuh akan disiarkan di saluran media sosial Minggu Saham Digital dan juga laman web rasmi Minggu Saham Digital tidak lama lagi. Program Minggu Saham Digital akan berlangsung selama tujuh hari berturut-turut dengan lebih daripada 9 jam rancangan siaran langsung setiap hari dari jam 12.30 tengah hari hingga 10.30 malam.
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade pt-5" id="nav-profile" role="tabpanel"
                                     aria-labelledby="nav-profile-tab">
                                    <h2 class="mb-5 text-white">Jom... Kira Duit</h2>
                                    <div class="mb-3 ">
                                        <h4 class="text-white">Hadiah Peraduan ‘Eh, Mana Kod?’
                                        </h4>
                                        <p>
                                            1 x Ford Ranger 2.0L XLT Plus 4WD (10AT) bernilai RM130,000.00. <br>
                                            1 x Toyota Vios 1.5 G (AT) bernilai RM90,000.00. <br>
                                            1 x Yamaha R25 bernilai RM21,500.00. <br>
                                            8 x Honda Dash 125 S bernilai RM6,000.00. <br>
                                            10 x Wang Tunai Raiz bernilai RM250.00 setiap satu. <br>
                                            *Semua hadiah tertakluk kepada perubahan</p>
                                    </div>
                                    <div class="mb-3 ">
                                        <h4 class="text-white">Bagaimanakah cara untuk menyertai peraduan ‘Eh, Mana Kod?’
                                        </h4>
                                        <p>
                                        <ol class="text-white">
                                            <li>
                                                Peserta perlu mendaftar di laman web Minggu Saham Digital www.minggusahamdigital.com.my dengan mengisi data seperti nama penuh, nombor kad pengenalan dan alamat emel untuk menyertai Peraduan ini.
                                            </li>
                                            <li>
                                                Peserta perlu mengumpul sebanyak mungkin kod-kod yang akan dipaparkan di dalam video-video yang disiarkan di laman sosial dan juga di laman rakan korporat di laman web Minggu Saham Digital www.minggusahamdigital.com.my.
                                            </li>
                                            <li>
                                                Peserta perlu menjejak semua kod dan kemudian mengunjungi laman web Minggu Saham Digital untuk memasukkan kod di halaman penebusan. Setiap hantaran akan dikira sebagai satu penyertaan. Semakin banyak bilangan penyertaan, semakin tinggi peluang untuk memenangi hadiah.
                                            </li>
                                            <li>
                                                Pemenang Peraduan akan diumumkan pada 10 Disember 2020 melalui laman Facebook Minggu Saham Digital www.facebook.com/minggusahamdigital.
                                            </li>
                                            <li>
                                                Untuk hadiah berbentuk digital, Penganjur akan memaklumkan butiran lanjut tentang kaedah penebusan hadiah melalui emel. Untuk hadiah fizikal, Penganjur akan menghubungi pemenang dan pihak yang terlibat selepas pengumuman pemenang tersebut dibuat.
                                            </li>
                                        </ol>
                                        </p>
                                    </div>
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
