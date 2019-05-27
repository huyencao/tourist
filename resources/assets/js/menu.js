$(document).ready(function() {
    $('.type_menu').on('change', function() {
        var type_menu = $('.type_menu').val();
        if (type_menu == 1) {
            $('.cate_tour').show();
            $('.cate_news').hide();
        }
        if (type_menu == 2) {
            $('.cate_tour').hide();
            $('.cate_news').show();
        }
    });
});
