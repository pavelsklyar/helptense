@extends("layouts.main")

@section("title", "Избранные")

@section("content")

    @if (!empty($favourites))
        <ul>
            @foreach($favourites as $favourite)
                <li>
                    <a href="{{ route('irregular', $favourite->first_form) }}">
                    {{ $favourite->first_form }}
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p>вы пока что не добавили ничего в избранное</p>
    @endif
@endsection
