@extends('layouts.app')

@section('content')
    <div class="row justify-content-center my-5">
        <div class="col-md-8">
            <form action="{{ route('buscador') }}" method="GET" class="custom-search-form p-0 border-0 shadow-none">
                <div class="input-group input-group-lg rounded-pill overflow-hidden bg-dark border border-success">
                    <input type="text" class="form-control custom-input border-0 bg-dark text-white px-4" name="name" placeholder="Buscar canciones..." value="{{ request('name') }}" style="border-radius: 50px 0 0 50px;">
                    <div class="input-group-append d-flex gap-2">
                        <a class="btn btn-clear custom-clear d-flex align-items-center justify-content-center" href="{{ route('buscador') }}" style="border-radius: 0;">
                            <i class="fa fa-times-circle" aria-hidden="true"></i>
                        </a>
                        <button class="btn btn-search custom-search d-flex align-items-center justify-content-center" type="submit" id="button-search" style="border-radius: 0 50px 50px 0;">
                            <i class="fa fa-search me-2"></i> Buscar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(isset($songs) && $songs->isEmpty())
                <div class="alert alert-warning mt-4 text-center">
                    No se encontraron canciones.
                </div>
            @else
                <ul class="list-group mt-4 custom-list">
                    @foreach($songs ?? [] as $song)
                        <li class="list-group-item custom-list-item">
                            🎵 {{ $song->nombre }}
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>

    <style>
        body {
            background-color: #1a1a1a;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }

        .custom-search-form {
            background: transparent;
            padding: 0;
            border-radius: 0;
            box-shadow: none;
        }

        .input-group-lg {
            box-shadow: 0 0 16px #00ff00aa;
        }

        .custom-input {
            background-color: #1a1a1a;
            border: none;
            color: white;
            font-size: 1.2rem;
        }

        .custom-input:focus {
            background-color: #222;
            color: #fff;
            box-shadow: none;
        }

        .custom-input::placeholder {
            color: #aaa;
            opacity: 1;
        }

        .custom-clear,
        .custom-search {
            background-color: #00ff00;
            color: #1a1a1a;
            border: none;
            padding: 0 24px;
            font-weight: bold;
            font-size: 1.1rem;
            height: 100%;
            transition: all 0.3s;
            min-width: 48px;
        }

        .custom-clear:hover,
        .custom-search:hover {
            background-color: #00cc00;
            color: #fff;
        }

        .custom-list {
            border-radius: 10px;
            overflow: hidden;
        }

        .custom-list-item {
            background-color: #2b2b2b;
            color: white;
            border: 1px solid #444;
        }

        .custom-list-item:hover {
            background-color: #3a3a3a;
        }

        .alert-warning {
            background-color: #444;
            color: #ffcc00;
            border: 1px solid #ffcc00;
        }
    </style>
@endsection
