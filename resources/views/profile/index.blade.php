@extends("layouts.main")

@section("title", "Профиль")

@section("content")
    <a href="{{ route("settings") }}">Настройки</a>
    <a href="{{ route("favourites") }}">Избранное</a>
    <p>профиль</p>
@endsection
