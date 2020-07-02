@extends("layouts.main")

@section("title", "Глагол " . strtoupper($verb->first_form))
@section("description", "Три формы неправильного глагола " . $verb->first_form . " (" . $verb->translate .") с примерами на каждую форму.")
@section("keywords", "глагол, " . $verb->first_form . ", нерпавильный глагол, английский язык")

@section("content")
    <div class="content">

        <div class="search_box">
            <form>
                <input name="verb" placeholder="Введите глагол..." type="search" id="search" autocomplete="off">
                <button type="submit" onclick="search()"><img class="search" src="/img/search_w.png"></button>
            </form>
            <div id="search_box-result"></div>
        </div>

        @if ($favourite !== null)
        <div>
            <button onclick="favourites({{ auth()->id() }}, {{ $verb->id }})">{{ ($favourite) ? "Добавить в избранное" : "Убрать из избранного" }}</button>
        </div>
        @endif

        <div align="center" class="sign-verb">
            <a class="sign-a">{{ $verb->first_form }}</a>
            <p class="sign-p">[{{ ($verb->transcription) ? $verb->transcription : "..." }}], {{ $verb->translate }}</p>
        </div>

        <table class="table-verb">
            <tr>
                <th>Время</th>
                <th>Present</th>
                <th>Past</th>
                <th>Perfect</th>
            </tr>
            <tr>
                <th>Глагол</th>
                <td align="center" class="color-back">
                    <b class="color-text">{{ $verb->first_form }}</b>
                </td>
                <td align="center" class="color-back">
                    <b class="color-text">{{ $verb->second_form }}</b>
                </td>
                <td align="center" class="color-back">
                    <b class="color-text">{{ $verb->third_form }}</b>
                </td>
            </tr>
            <tr>
                <th>3 лицо ед.ч.</th>
                <td align="center">
                    <b class="color-text">{{ $verb->first_form_example_single }}</b>
                </td>
                <td align="center">
                    <b class="color-text">{{ $verb->second_form_example_single }}</b>
                </td>
                <td align="center">
                    <b class="color-text">{{ $verb->third_form_example_single }}</b>
                </td>
            </tr>
            <tr>
                <th>1 лицо, 2 лицо, 3 лицо мн.ч.</th>
                <td align="center">
                    <b class="color-text">{{ $verb->first_form_example_multiple }}</b>
                </td>
                <td align="center">
                    <b class="color-text">{{ $verb->second_form_example_multiple }}</b>
                </td>
                <td align="center">
                    <b class="color-text">{{ $verb->third_form_example_multiple }}</b>
                </td>
            </tr>
            <tr>
                <th>Отрицание</th>
                <td align="center">
                    <b class="color-text">{{ $verb->first_form_example_negative }}</b>
                </td>
                <td align="center">
                    <b class="color-text">{{ $verb->second_form_example_negative }}</b>
                </td>
                <td align="center">
                    <b class="color-text">{{ $verb->third_form_example_negative }}</b>
                </td>
            </tr>
        </table>
    </div>
@endsection
