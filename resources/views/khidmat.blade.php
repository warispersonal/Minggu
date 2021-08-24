@extends('layouts.main')

@push('style')

@endpush

@section('content')
    <main>
        <div class="main-bg">
            <div class="container-fluid px-md-5 pt-4">
                <div class="d-flex justify-content-md-between align-items-center">
                    <h1 class="text-white mb-0">PNB &nbsp; ASNB</h1>
                    <div class="text-white ms-3">
                        <small>EM | EN</small>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row gy-3">
                    <div class="col-lg-4 pe-lg-5">
                        <div class="d-flex w-100">
                            <h2 class="heading2">Khidmat Nasihat <br> 1-1</h2>
                            <img src="{{asset('assets/img/nasihat2.png')}}" class="img-fluid w-50 d-lg-none" alt="">
                        </div>
                        <img src="{{asset('assets/img/nasihat.png')}}" class="img-fluid mt-5 d-none d-lg-inline-block"
                             alt="">
                    </div>
                    <div class="col-lg-8 text-white" id="khidmat_nasihat_section">
                        <h2>Apa itu Khidmat Nasihat 1-1?</h2>
                        <p>
                            Anda boleh mendapatkan khidmat nasihat dan rundingan peribadi selama 30 minit dengan
                            penasihat-penasihat dari ASNB, AmBank, Bank Islam, CIMB &amp; RHB. Tetapkan awal sesi anda!
                        </p>
                        <div class="d-flex justify-content-between flex-xl-nowrap flex-wrap">
                            <img src="{{asset('assets/img/ambank.png')}}" class="img-fluid" alt="">
                            <img src="{{asset('assets/img/bankislam.png')}}" class="img-fluid" alt="">
                            <img src="{{asset('assets/img/climb.png')}}" class="img-fluid" alt="">
                            <img src="{{asset('assets/img/rhb.png')}}" class="img-fluid" alt="">
                        </div>
                        <p>Penasihat daripada Ejen Bank kami yang pakar sedia membantu anda mengenai perkara-perkara
                            berikut:</p>
                        <h2>Pembiayaan ASB</h2>
                        <p>Penasihat akan berkongsi tentang faedah pembiayaan ASB dan cara memohonnya</p>
                        <h2>Unit Amanah ASNB</h2>
                        <p>Khidmat nasihat peribadi mengenai perancangan kewangan melalui Unit Amanah ASNB</p>
                        <button id="tetapkan_btn" class="theme-btn">Tetapkan Temujanji Anda Sekarang &gt;</button>
                    </div>
                    <div class="col-lg-8 text-white" id="tetapkan_section">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="mb-3">Tetapkan temujanji 1-1 anda</h3>
                                    <div class="mb-3">
                                        <input type="text" name="" id="" placeholder="Nama">
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" name="" id="" placeholder="E-mel">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="" id="" placeholder="Nombor Telefon">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="" id="" placeholder="Agensi yang anda ingin menempah">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="" id="" placeholder="Topik yang diminati">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="" id="" placeholder="Ejen">
                                    </div>
                                </div>
                                <div class="col-md-6 px-5">
                                    <h5 class="mb-3">Tarikh</h5>
                                    <div id="datepicker" data-date="12/03/2012">
                                        <div class="datepicker datepicker-inline">
                                            <div class="datepicker-days" style="">
                                                <table class="table-condensed">
                                                    <thead>
                                                    <tr>
                                                        <th colspan="7" class="datepicker-title"
                                                            style="display: none;"></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="prev">«</th>
                                                        <th colspan="5" class="datepicker-switch">December 2012</th>
                                                        <th class="next">»</th>
                                                    </tr>
                                                    <tr>
                                                        <th class="dow">Su</th>
                                                        <th class="dow">Mo</th>
                                                        <th class="dow">Tu</th>
                                                        <th class="dow">We</th>
                                                        <th class="dow">Th</th>
                                                        <th class="dow">Fr</th>
                                                        <th class="dow">Sa</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="old day" data-date="1353801600000">25</td>
                                                        <td class="old day" data-date="1353888000000">26</td>
                                                        <td class="old day" data-date="1353974400000">27</td>
                                                        <td class="old day" data-date="1354060800000">28</td>
                                                        <td class="old day" data-date="1354147200000">29</td>
                                                        <td class="old day" data-date="1354233600000">30</td>
                                                        <td class="day" data-date="1354320000000">1</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="day" data-date="1354406400000">2</td>
                                                        <td class="active day" data-date="1354492800000">3</td>
                                                        <td class="day" data-date="1354579200000">4</td>
                                                        <td class="day" data-date="1354665600000">5</td>
                                                        <td class="day" data-date="1354752000000">6</td>
                                                        <td class="day" data-date="1354838400000">7</td>
                                                        <td class="day" data-date="1354924800000">8</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="day" data-date="1355011200000">9</td>
                                                        <td class="day" data-date="1355097600000">10</td>
                                                        <td class="day" data-date="1355184000000">11</td>
                                                        <td class="day" data-date="1355270400000">12</td>
                                                        <td class="day" data-date="1355356800000">13</td>
                                                        <td class="day" data-date="1355443200000">14</td>
                                                        <td class="day" data-date="1355529600000">15</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="day" data-date="1355616000000">16</td>
                                                        <td class="day" data-date="1355702400000">17</td>
                                                        <td class="day" data-date="1355788800000">18</td>
                                                        <td class="day" data-date="1355875200000">19</td>
                                                        <td class="day" data-date="1355961600000">20</td>
                                                        <td class="day" data-date="1356048000000">21</td>
                                                        <td class="day" data-date="1356134400000">22</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="day" data-date="1356220800000">23</td>
                                                        <td class="day" data-date="1356307200000">24</td>
                                                        <td class="day" data-date="1356393600000">25</td>
                                                        <td class="day" data-date="1356480000000">26</td>
                                                        <td class="day" data-date="1356566400000">27</td>
                                                        <td class="day" data-date="1356652800000">28</td>
                                                        <td class="day" data-date="1356739200000">29</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="day" data-date="1356825600000">30</td>
                                                        <td class="day" data-date="1356912000000">31</td>
                                                        <td class="new day" data-date="1356998400000">1</td>
                                                        <td class="new day" data-date="1357084800000">2</td>
                                                        <td class="new day" data-date="1357171200000">3</td>
                                                        <td class="new day" data-date="1357257600000">4</td>
                                                        <td class="new day" data-date="1357344000000">5</td>
                                                    </tr>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th colspan="7" class="today" style="display: none;">Today</th>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="7" class="clear" style="display: none;">Clear</th>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="datepicker-months" style="display: none;">
                                                <table class="table-condensed">
                                                    <thead>
                                                    <tr>
                                                        <th colspan="7" class="datepicker-title"
                                                            style="display: none;"></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="prev">«</th>
                                                        <th colspan="5" class="datepicker-switch">2012</th>
                                                        <th class="next">»</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td colspan="7"><span class="month">Jan</span><span
                                                                class="month">Feb</span><span
                                                                class="month">Mar</span><span
                                                                class="month">Apr</span><span
                                                                class="month">May</span><span
                                                                class="month">Jun</span><span
                                                                class="month">Jul</span><span
                                                                class="month">Aug</span><span
                                                                class="month">Sep</span><span
                                                                class="month">Oct</span><span
                                                                class="month">Nov</span><span
                                                                class="month focused active">Dec</span></td>
                                                    </tr>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th colspan="7" class="today" style="display: none;">Today</th>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="7" class="clear" style="display: none;">Clear</th>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="datepicker-years" style="display: none;">
                                                <table class="table-condensed">
                                                    <thead>
                                                    <tr>
                                                        <th colspan="7" class="datepicker-title"
                                                            style="display: none;"></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="prev">«</th>
                                                        <th colspan="5" class="datepicker-switch">2010-2019</th>
                                                        <th class="next">»</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td colspan="7"><span class="year old">2009</span><span
                                                                class="year">2010</span><span
                                                                class="year">2011</span><span
                                                                class="year active focused">2012</span><span
                                                                class="year">2013</span><span
                                                                class="year">2014</span><span
                                                                class="year">2015</span><span
                                                                class="year">2016</span><span
                                                                class="year">2017</span><span
                                                                class="year">2018</span><span
                                                                class="year">2019</span><span
                                                                class="year new">2020</span></td>
                                                    </tr>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th colspan="7" class="today" style="display: none;">Today</th>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="7" class="clear" style="display: none;">Clear</th>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="datepicker-decades" style="display: none;">
                                                <table class="table-condensed">
                                                    <thead>
                                                    <tr>
                                                        <th colspan="7" class="datepicker-title"
                                                            style="display: none;"></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="prev">«</th>
                                                        <th colspan="5" class="datepicker-switch">2000-2090</th>
                                                        <th class="next">»</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td colspan="7"><span class="decade old">1990</span><span
                                                                class="decade">2000</span><span
                                                                class="decade active focused">2010</span><span
                                                                class="decade">2020</span><span
                                                                class="decade">2030</span><span
                                                                class="decade">2040</span><span
                                                                class="decade">2050</span><span
                                                                class="decade">2060</span><span
                                                                class="decade">2070</span><span
                                                                class="decade">2080</span><span
                                                                class="decade">2090</span><span
                                                                class="decade new">2100</span></td>
                                                    </tr>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th colspan="7" class="today" style="display: none;">Today</th>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="7" class="clear" style="display: none;">Clear</th>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="datepicker-centuries" style="display: none;">
                                                <table class="table-condensed">
                                                    <thead>
                                                    <tr>
                                                        <th colspan="7" class="datepicker-title"
                                                            style="display: none;"></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="prev">«</th>
                                                        <th colspan="5" class="datepicker-switch">2000-2900</th>
                                                        <th class="next">»</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td colspan="7"><span class="century old">1900</span><span
                                                                class="century active focused">2000</span><span
                                                                class="century">2100</span><span
                                                                class="century">2200</span><span
                                                                class="century">2300</span><span
                                                                class="century">2400</span><span
                                                                class="century">2500</span><span
                                                                class="century">2600</span><span
                                                                class="century">2700</span><span
                                                                class="century">2800</span><span
                                                                class="century">2900</span><span class="century new">3000</span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th colspan="7" class="today" style="display: none;">Today</th>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="7" class="clear" style="display: none;">Clear</th>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" id="my_hidden_input">
                                    <h5 class="mt-3">Masa</h5>
                                    <div class="d-flex">
                                        <div class="owl-carousel time-piker owl-loaded owl-drag">
                                            <div class="owl-stage-outer">
                                                <div class="owl-stage" style="transition: all 0s ease 0s;">
                                                    <div class="owl-item">
                                                        <div>12.00 AM</div>
                                                    </div>
                                                    <div class="owl-item">
                                                        <div>1.00 AM</div>
                                                    </div>
                                                    <div class="owl-item">
                                                        <div>2.00 AM</div>
                                                    </div>
                                                    <div class="owl-item">
                                                        <div>3.00 AM</div>
                                                    </div>
                                                    <div class="owl-item">
                                                        <div>4.00 AM</div>
                                                    </div>
                                                    <div class="owl-item">
                                                        <div>5.00 AM</div>
                                                    </div>
                                                    <div class="owl-item">
                                                        <div>6.00 AM</div>
                                                    </div>
                                                    <div class="owl-item">
                                                        <div>7.00 AM</div>
                                                    </div>
                                                    <div class="owl-item">
                                                        <div>8.00 AM</div>
                                                    </div>
                                                    <div class="owl-item">
                                                        <div>9.00 AM</div>
                                                    </div>
                                                    <div class="owl-item">
                                                        <div>10.00 AM</div>
                                                    </div>
                                                    <div class="owl-item">
                                                        <div>11.00 AM</div>
                                                    </div>
                                                    <div class="owl-item">
                                                        <div>12.00 PM</div>
                                                    </div>
                                                    <div class="owl-item">
                                                        <div>1.00 PM</div>
                                                    </div>
                                                    <div class="owl-item">
                                                        <div>2.00 PM</div>
                                                    </div>
                                                    <div class="owl-item">
                                                        <div>3.00 PM</div>
                                                    </div>
                                                    <div class="owl-item">
                                                        <div>4.00 PM</div>
                                                    </div>
                                                    <div class="owl-item">
                                                        <div>5.00 PM</div>
                                                    </div>
                                                    <div class="owl-item">
                                                        <div>6.00 PM</div>
                                                    </div>
                                                    <div class="owl-item">
                                                        <div>7.00 PM</div>
                                                    </div>
                                                    <div class="owl-item">
                                                        <div>8.00 PM</div>
                                                    </div>
                                                    <div class="owl-item">
                                                        <div>9.00 PM</div>
                                                    </div>
                                                    <div class="owl-item">
                                                        <div>10.00 PM</div>
                                                    </div>
                                                    <div class="owl-item">
                                                        <div>11.00 PM</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-nav">
                                                <button type="button" role="presentation" class="owl-prev"><span
                                                        aria-label="Previous">‹</span></button>
                                                <button type="button" role="presentation" class="owl-next"><span
                                                        aria-label="Next">›</span></button>
                                            </div>
                                            <div class="owl-dots disabled"></div>
                                        </div>
                                        <input class="submit-btn ms-2" type="submit" value="Hantar">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button id="back_btn"><i class="bi bi-chevron-left"></i>Kembali</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


@push('js')

@endpush
