@extends('layouts.app')


@section('content')
    <h3>Hola {{ Auth::user()->name }} {{ Auth::user()->lastname }}</h3>

    <h1>Listado de podcasts</h1>
    <div>
        @foreach ($podcasts as $podcast)
            <div style="background-color: white; color: black; width: 400px; border-radius: 5px; padding: 5px; height: 50px;">
                <h3 style="margin-top:0px"><strong>{{ $podcast->nombre }}</strong></h3>
                @if(collect(Auth::user()->podcasts)->contains($podcast->id))
                    <h3 style="color:#e74c3c; margin-top: -20px;margin-bottom: -10px;">&#10084</h3>
                @else
                    <h3 style="color:#f0e6c5;margin-top: -20px; margin-bottom: -10px;">&#10084</h3>
                @endif
            </div>
            <br>
        @endforeach
    </div>
@endsection
