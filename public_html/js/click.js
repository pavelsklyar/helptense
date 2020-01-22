$(document).ready(function() {
    var touch = $('#touch-menu');
    var menu = $('.nav-list');

    $(touch).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
        document.getElementById("content").className += "MyClass";
    });
    $(window).resize(function() {
        var wid = $(window).width();
        if (wid > 760 && menu.is(':hidden')) {
            menu.removeAttr('style');
        }
    });
});