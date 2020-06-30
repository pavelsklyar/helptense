$(document).ready(function() {
    var $result = $('#search_box-result');

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
                success: function(msg){
                    $result.html(msg);
                    if(msg != ''){
                        $result.fadeIn();
                    } else {
                        $result.fadeOut(100);
                    }
                }
            });
        } else {
            $result.html('');
            $result.fadeOut(100);
        }
    });

    $(document).on('click', function(e){
        if (!$(e.target).closest('.search_box').length){
            $result.html('');
            $result.fadeOut(100);
        }
    });
});

function enter(value) {
    document.location.href = "/irregular/" + value;
}
