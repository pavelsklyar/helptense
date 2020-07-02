function favourites(user_id, verb_id) {
    $.ajax({
        type: "POST",
        url: "/verbs/favourite",
        data: {"user_id": user_id, "verb_id": verb_id},
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response) {
            if (response.type === 'delete') {
                alert("Вы убрали глагол из избранного!");
            }
            else {
                alert("Вы добавили глагол в избранное!");
            }

            document.location.reload();
        },
        error: function (msg) {
            console.log(msg);
        }
    });
}
