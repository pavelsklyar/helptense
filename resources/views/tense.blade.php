@extends("layouts.main")

@section("title", "Таблица времён")

@section("content")
  
    <p class="sign">Таблица времен</p>
        
    <table class="table-tense">
        <tr>
            <th>Формы\Времена</th>
            <th>Present</th>
            <th>Past</th>
            <th>Future</th>
            <th>Future in the past</th>
        </tr>
        <tr>
            <th>Simple<br/><br/>
                <p class="color-text-3">(Обычное действие/<br/>Факт)</p>
            </th>
            <td><p class="color-text-4">Do/does <br/> Don't + do/doesn't + doing</p><br/>
                I go / don't go<br/>
                He/She goes / doesn't go <br/>
                We/You/They go / don't go
            </td>
            <td><p class="color-text-4">Did <br/> Didn't</p><br/>
                I went / didn't go<br/>
                He/She went / didn't go <br/>
                We/You/They went / didn't go
            </td>
            <td><p class="color-text-4">Will/Shall + do <br/> Won't/Shan't + do</p><br/>
                I shall go / shan't go<br/>
                He/She will go / won't go <br/>
                We/You/They shall / shan't go <br/><br/>
                <p class="color-text-2">(Сейчас разрешено использовать WILL <br/> со всеми местоимениями)</p>
            </td>
            <td><p class="color-text-4">Would/should + do<br/> Wouldn't/shouldn't</p><br/>
                I should / shouldn't go<br/>
                He/She would / wouldn't go <br/>
                We/You/They should / shouldn't go <br/><br/>
                <p class="color-text-2">(Сейчас разрешено использовать WOULD <br/> со всеми местоимениями)</p>
            </td>
        </tr>
        <tr>
            <th>Continuous<br/><br/>
                <p class="color-text-3">(Процесс)</p>
            </th>
            <td><p class="color-text-4">Am/is/are + doing <br> 'm not/isn't/aren't + doing</p><br/>
                I am going<br/>
                He/She is going <br/>
                We/You/They are going
            </td>
            <td><p class="color-text-4">Was/Were + doing <br> Wasn't/weren't + doing</p><br/>
                I was going<br/>
                He/She was going <br/>
                We/You/They were going
            </td>
            <td><p class="color-text-4">Will/shall + be doing</p><br/>
                I shall(will) be going<br/>
                He/She will be going <br/>
                We/You/They shall(will) be going
            </td>
            <td><p class="color-text-4">Would/should + been doing</p><br/>
                I should(would) been going<br/>
                He/She will been going <br/>
                We/You/They should(would) been going
            </td>
        </tr>
        <tr>
            <th>Perfect<br/><br/>
                <p class="color-text-3">(Законченное действие<br/>+есть результат)</p></th>
            <td><p class="color-text-4">Have/has + done (III форма)</p><br/>
                I have gone<br/>
                He/She has gone <br/>
                We/You/They have gone
            </td>
            <td><p class="color-text-4">Had + done (III форма) </p><br/>
                I had gone <br/>
                He/She had gone <br/>
                We/You/They had gone
            </td>
            <td><p class="color-text-4">Will/Shall + have + done (III форма)</p><br/>
                I shall(will) have gone <br/>
                He/She will have gone <br/>
                We/You/They shall(will) have gone
            </td>
            <td><p class="color-text-4">Would/should + have + done (III форма)</p><br/>
                I should(would) have gone<br/>
                He/She would have gone <br/>
                We/You/They should(would) have gone
            </td>
        </tr>
        <tr>
            <th>Perfect Continuous<br/><br/>
                <p class="color-text-3">(Результат действия<br/>+процесс)</p></th>
            <td><p class="color-text-4">Have/has + been doing</p><br/>
                I have been going<br/>
                He/She has been going <br/>
                We/You/They have been going<br/>
            </td>
            <td><p class="color-text-4">Had + been doing</p><br/>
                I had been going <br/>
                He/She had been going <br/>
                We/You/They had been going
            </td>
            <td><p class="color-text-4">Will/Shall + have + been doing</p><br/>
                I shall(will) have been going <br/>
                He/She will have been going <br/>
                We/You/They shall(will) have been going
            </td>
            <td><p class="color-text-4">Would/should + have + been doing</p><br/>
                I should(would) have been going<br/>
                He/She would have been going <br/>
                We/You/They should(would) have been going
            </td>
        </tr>

    </table>
@endsection
