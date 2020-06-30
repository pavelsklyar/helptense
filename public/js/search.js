$(document).ready(function() {
    var result = $('#search_box-result');

    $('#search').on('keyup', function(){

        if (event.code === "Enter") {
            let verb = $(this).val();
            if (verb !== "") {
                document.location.href = "/irregular/" + verb;
            }
        }

        var search = $(this).val();
        if (search != ''){
            $.ajax({
                type: "POST",
                url: "/verbs",
                data: {'search': search},
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response){
                    console.log(response);
                    result.html(response);
                    if(response != ''){
                        result.fadeIn();
                    } else {
                        result.fadeOut(100);
                    }
                },
                error: function (msg) {
                    console.log(msg);
                }
            });
        } else {
            result.html('');
            result.fadeOut(100);
        }
    });

    $(document).on('click', function(e){
        if (!$(e.target).closest('.search_box').length){
            result.html('');
            result.fadeOut(100);
        }
    });
});

function enter(value) {
    document.location.href = "/irregular/" + value;
}
