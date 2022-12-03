$(document).ready(function() {
    $(".sidebar-opener").on('click', function () {
        $(".sidebar").toggleClass("open-sidebar");
    });

    $(".box-header").on('click', function () {
        var box_type = $(this).data('box');
        $("#"+box_type+"-body").fadeToggle();
    });
});