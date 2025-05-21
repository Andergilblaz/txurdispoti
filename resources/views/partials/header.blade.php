<style>
    .header-container {
        background: #333;
        padding: 0;
        margin: 0;
        border-bottom: 2px solid #222;
        width: 100vw;
        position: relative;
        left: 0;
        right: 0;
    }

    .header-title {
        color: #00ff00;
        font-size: 48px;
        font-weight: bold;
        text-align: center;
        margin: 0;
        padding: 20px 0 10px 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    .navbar {
        background: #444;
        display: flex;
        justify-content: center;
        padding: 10px 0;
    }

    .navbar a {
        color: #fff;
        text-decoration: none;
        font-size: 24px;
        margin: 0 40px;
        font-family: Arial, Helvetica, sans-serif;
        transition: color 0.2s;
    }

    .navbar a:hover {
        color: #00ff00;
    }
</style>

<div class="header-container">
    <div class="header-title">Txurdi Spotify</div>
    <nav class="navbar">
        <a href="{{ route('home') }}">Inicio</a>
        <a href="#">Musica</a>
        <a href="{{ route('podcast.index') }}">Podcast</a>
        <a href="{{ route('buscador.index') }}">Buscar</a>
        <a href="{{ route('logout') }}">Cerrar Sesión</a>

    </nav>
</div>
