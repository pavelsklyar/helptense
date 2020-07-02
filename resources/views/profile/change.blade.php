@extends("layouts.main")

@section("title", "Изменение данных профиля")

@section("content")

    <div class="signature">
        <p class="sign-two">Изменение данных профиля</p>
    </div>

    <div class="profile-info">
        <form action="{{ route("edit") }}" method="post">
            @csrf

            <div class="account-info">
                <p class="settings-title">Email:</p>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $user->email }}" autocomplete="email" autofocus>
            </div>

            <hr>

            <div class="account-info">
                <p class="settings-title">Пароль:</p>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="old_password" autocomplete="current-password">
            </div>
            <div class="account-info">
                <p class="settings-title">Пароль:</p>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
            </div>
            <div class="account-info">
                <p class="settings-title">Подтвердите пароль:</p>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" autocomplete="current-password">
            </div>
            <div class="change-button">
                <a href="">
                    <button id="change-password" class="change" type="submit" value="Сохранить">Сохранить</button>
                </a>
            </div>
        </form>
    </div>

@endsection
