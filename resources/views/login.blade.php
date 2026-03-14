<html>
    <head>
        <link rel='stylesheet' href='{{ url("css/login.css") }}'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Accesso</title>
    </head>
    <body>
    <div id="title">STREAMZONE</div>
    <section class='section'>
    <h3>Inserisci le tue credenziali per accedere</h3>
    <main>
    @if($error == 'empty')
    <section class='error'>Compilare tutti i campi!</section> 
    @endif
    @if($error == 'wrong_cred')
    <section class="error"> Credenziali errate!</section>
    @endif
    <form id="form_login"  name='form' method='POST'>
    @csrf
    <div class='user'>
    <label>Username</label>
    <input type='text' name='username' placeholder="Username"> 
    </div>
    <div class='password'>
    <label>Password</label>
    <input type='password' name='password' placeholder="password..."> 
    </div>
    <div class='submit' > 
    <input  type='submit' value="PROSEGUI" > 
    </div>
    <div><h1>Non hai un profilo?</h1></div>
    <div class='signup_button'><a class='signup_btn' href="{{ url('subscribe') }}">REGISTRATI QUI </a>
    </div>
    </form>
    </section>
    </main>
    </body>
</html>


