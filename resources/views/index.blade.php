@extends("layouts.main")

@section("title", "HelpTense - поиск английских глаголов")

@section("content")
    <div class="signature">
        <!-- <p class="sign-one">Быстро поможет с прошедшим временем в настоящем</p> -->
        <p class="sign-two">Поиск неправильного глагола</p>
    </div>

    <div class="search_box">
        <form>
        <button type="submit" onclick="search()"><img class="search" src="/img/search_w.png"></button>
            <input name="verb" placeholder="Введите глагол..." type="search" id="search" autocomplete="off">
        </form>
        <div id="search_box-result"></div>
    </div>
@endsection
