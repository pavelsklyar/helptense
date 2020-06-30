@extends("layouts.main")

@section("title", "HelpTense - поиск английских глаголов")

@section("content")
    <div class="signature-main">
        <p class="sign-a">Быстро поможет с прошедшим временем в настоящем</p>
    </div>

    <div class="search_box">
        <form>
            <input name="verb" placeholder="Введите глагол..." type="search" id="search" autocomplete="off">
            <button type="submit" onclick="search()"><img class="search" src="/img/search_w.png"></button>
        </form>
        <div id="search_box-result"></div>
    </div>
@endsection
