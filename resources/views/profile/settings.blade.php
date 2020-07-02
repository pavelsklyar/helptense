@extends("layouts.main")

@section("title", "Настройки")

@section("content")
    
    <div class="signature">
        <p class="sign-two">Настройки</p>
    </div>

    <div class="profile-info">
            <div class="account-info">
                <p class="settings-title">Email:</p>
                <p>-</p>
            </div>
            <div class="account-info">
                <p class="settings-title">Пароль:</p>
                <p>***</p>
            </div>
            <div class="change-button">
                <a href="">
                    <button id="change-password" class="change" type="submit" value="Изменить">Изменить</button>
                </a>
            </div>
        </div>

@endsection
