@extends('layouts.app')

@section('content')
    <div style="padding: 5px">
        <form action="{{ route('login.validation') }}" method="post">
            @csrf

            <label for="email">Email:</label>
            <input type="text" name="email" value="{{ old('email') }}">
            @error('email')
                <div style="color: red;">{{ $message }}</div>
            @enderror

            <label for="password">Contraseña:</label>
            <input type="password" name="password">
            @error('password')
                <div style="color: red;">{{ $message }}</div>
            @enderror

            <input type="submit" value="Entrar">
        </form>

    </div>
@endsection
