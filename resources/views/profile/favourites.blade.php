@extends("layouts.main")

@section("title", "Избранные")

@section("content")

    @if (!empty($favourites))

        <div class="signature">
            <p class="sign-two">Избранное</p>
        </div>
        <ul class="favourite-verbs">
            @foreach($favourites as $favourite)
                <li class="favourite-list">
                    <a class="favourite-verb" href="{{ route('irregular', $favourite->first_form) }}">
                    {{ $favourite->first_form }}
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p>вы пока что не добавили ничего в избранное</p>
    @endif
@endsection
