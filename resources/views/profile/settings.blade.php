@extends("layouts.main")

@section("title", "Настройки")

@section("content")

    @if(isset($message))
        <div>
            <p class="alert alert-dark">{{ $message }}</p>
        </div>
    @endif

    <div class="signature">
        <p class="sign-two">Настройки</p>
    </div>

    <div class="profile-info">
            <div class="account-info">
                <p class="settings-title">Email:</p>
                <p>{{ $user->email }}</p>
            </div>
            <div class="account-info">
                <p class="settings-title">Пароль:</p>
                <p>********</p>
            </div>
            <div class="change-button">
                <a href="{{ route('edit') }}">
                    <button id="change-password" class="change" type="submit" value="Изменить">Изменить</button>
                </a>
            </div>
        </div>

@endsection
