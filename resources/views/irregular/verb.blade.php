@extends("layouts.main")

@section("title", "Глагол " . strtoupper($verb->first_form))
@section("description", "Три формы неправильного глагола " . $verb->first_form . " (" . $verb->translate .") с примерами на каждую форму.")
@section("keywords", "глагол, " . $verb->first_form . ", нерпавильный глагол, английский язык")

@section("content")
    <div class="content">

        <div class="search_box">
            <form>
            <button type="submit" onclick="search()"><img class="search" src="/img/search_w.png"></button>
                <input name="verb" placeholder="Введите глагол..." type="search" id="search" autocomplete="off">
            </form>
            <div id="search_box-result"></div>
        </div>

        @if ($favourite !== null)
        <div>
            <button class="favourite" onclick="favourites({{ auth()->id() }}, {{ $verb->id }})">{{ ($favourite) ? "Добавить в избранное" : "Убрать из избранного" }}</button>
        </div>
        @endif

        <div class="sign-verb">
            <a class="sign-a">{{ $verb->first_form }}</a>
            <p class="sign-p">[{{ ($verb->transcription) ? $verb->transcription : "..." }}], {{ $verb->translate }}</p>
        </div>

        <table class="table-verb">
            <tr>
                <th><p class="color-text-3">Время</p></th>
                <th>Present</th>
                <th>Past</th>
                <th>Perfect</th>
            </tr>
            <tr>
                <th><p class="color-text-3">Глагол</p></th>
                <td class="color-back">
                    <b class="color-text-4">{{ $verb->first_form }}</b>
                </td>
                <td class="color-back">
                    <b class="color-text-4">{{ $verb->second_form }}</b>
                </td>
                <td class="color-back">
                    <b class="color-text-4">{{ $verb->third_form }}</b>
                </td>
            </tr>
            <tr>
                <th><p class="color-text-3">3 лицо ед.ч.</p></th>
                <td>
                    <b class="color-text">{{ $verb->first_form_example_single }}</b>
                </td>
                <td>
                    <b class="color-text">{{ $verb->second_form_example_single }}</b>
                </td>
                <td>
                    <b class="color-text">{{ $verb->third_form_example_single }}</b>
                </td>
            </tr>
            <tr>
                <th><p class="color-text-3">1 лицо, 2 лицо, 3 лицо мн.ч.</p></th>
                <td>
                    <b class="color-text">{{ $verb->first_form_example_multiple }}</b>
                </td>
                <td>
                    <b class="color-text">{{ $verb->second_form_example_multiple }}</b>
                </td>
                <td>
                    <b class="color-text">{{ $verb->third_form_example_multiple }}</b>
                </td>
            </tr>
            <tr>
                <th><p class="color-text-3">Отрицание</p></th>
                <td>
                    <b class="color-text">{{ $verb->first_form_example_negative }}</b>
                </td>
                <td>
                    <b class="color-text">{{ $verb->second_form_example_negative }}</b>
                </td>
                <td>
                    <b class="color-text">{{ $verb->third_form_example_negative }}</b>
                </td>
            </tr>
        </table>
    </div>
@endsection
