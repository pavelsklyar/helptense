@extends("layouts.main")

@section("title", "HelpTense - поиск английских глаголов")

@section("content")
    <div class="signature-main">
        <p class="sign-a">Быстро поможет с прошедшим временем в настоящем</p>
    </div>

    <form>
        <input name="verb" placeholder="Введите глагол..." type="search" id="search">
        <button type="submit" onclick="search()"><img class="search" src="/img/search_w.png"></button>
    </form>
@endsection
