@extends('layouts.main')


@section('content')


    <main>
        <div class="main-bg">
            @if(Config::get('app.locale') == 'en')
                <iframe src="https://msd2021demo.com/terms/MSD2021TERMASYARAT-JOMKIRADUIT-BM.pdf" width="100%" style="height:100vh"></iframe>
            @elseif (Config::get('app.locale') == 'bm')
                <iframe src="https://msd2021demo.com/terms/MSD2021TERMASYARAT-JOMKIRADUIT-BM.pdf" width="100%" style="height:100vh"></iframe>
            @endif
         
        </div>
    </main>
   

@endsection

