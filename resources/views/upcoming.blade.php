@extends ('layout')

@section('head')
@parent
    <title>Stream-Zone</title>
    <link rel="stylesheet" href="{{ url('css/upcoming.css') }}">
    <script src="{{ url('js/upcoming.js') }}" defer></script>
    @endsection

    @section('content')
<header>
<h1>Hey {{  $username }} ! Dai un'occhiata ai film più recenti e in  uscita nei prossimi mesi</h1>
<section class="box">
<div id="contents">
</div>
</section>
</header>
<footer>
    <span>DENNIS BORDONARO N° 1000001850</span>
    <div class="footer_container">
    <p>Chi siamo</p>
    <p>Link utili</p>
    <p>Valuta la tua esperienza</p>
    <p>Gli show del momento</p>
    </div>
    <span id="site_name"> ™ Stream-Zone: 2023 All right reserved</span>
</footer>
@endsection