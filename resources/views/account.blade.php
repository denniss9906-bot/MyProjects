@extends ('layout')

@section('head')
@parent
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ url('css/account.css') }}">
    <script src="{{ url('js/account.js') }}" defer></script>
    <script>const DELETE = "{{ url('deleteMovie') }}";
            const MOVIES = "{{ url('movies')}}";
    </script>
    <title>Stream-Zone :il tuo account</title>
@endsection

@section('content')
<header>
    <h2>La tua Watchlist:</h2>
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
