$(document).ready(function() {

    var $result = $('#search_box-result');



    $('#search').on('keyup', function(){

        var search = $(this).val();

        if ((search != '') && (search.length > 1)){

            $.ajax({

                type: "POST",

                url: "/live/search/",

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