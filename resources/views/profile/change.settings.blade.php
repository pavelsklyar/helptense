@extends("layouts.main")

@section("title", "Настройки")

@section("content")
    
    <div class="signature">
        <p class="sign-two">Изменение данных профиля</p>
    </div>

    <div class="profile-info">
            <div class="account-info">
                <p class="settings-title">Email:</p>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            </div>
            <div class="account-info">
                <p class="settings-title">Пароль:</p>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            </div>
            <div class="change-button">
                <a href="">
                    <button id="change-password" class="change" type="submit" value="Сохранить">Сохранить</button>
                </a>
            </div>
        </div>

@endsection