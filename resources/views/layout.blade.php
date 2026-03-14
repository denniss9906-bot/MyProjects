<html>
    <head>
        @section('head')
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @show
    </head>

<body>
<div id="click_area" class="hidden"></div>
<section id="header_container">
<nav>
<div class="links">
<img id="logo" src="play.logo.jpg">
<a id="title">STREAMZONE</a>
<a href='{{ url("home") }}'>HOME</a>
<a>ABOUT</a>
<a>SHARE</a>
<a>CONTACTS</a>
<a id ='upcoming' href='{{ url("upcoming") }}'>COMING SOON</a>
<a href='{{ url("account") }}'>IL TUO PROFILO</a>
<a href='{{ url("logout") }}' id="esc">ESCI</a>
</div>
<div id="menu">
    <div></div>
    <div></div>
    <div></div>
</div>
</nav>
        @section('content')
        @show
</body>
