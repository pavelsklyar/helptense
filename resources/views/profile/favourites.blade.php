@extends("layouts.main")

@section("title", "Избранные")

@section("content")

    @if (!empty($favourites))
        <ul>
            @foreach($favourites as $favourite)
                <li>{{ $favourite->first_form }}</li>
            @endforeach
        </ul>
    @else
        <p>вы пока что не добавили ничего в избранное</p>
    @endif
@endsection
