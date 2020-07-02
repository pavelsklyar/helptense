@extends("layouts.main")

@section("title", "Настройки")

@section("content")
    <a href="{{ route("profile") }}">Профиль</a>
    <a href="{{ route("favourites") }}">Избранное</a>
    <p>Тут будут настройки</p>
@endsection
