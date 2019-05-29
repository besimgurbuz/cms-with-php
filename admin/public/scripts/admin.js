$(function () {
    $('[tab]').each(function () {
        var tablist = $('[tab-list] li',this),
            tabContent = $('[tab-content]',this);
        tablist.filter(':first').addClass('active');
        tabContent.filter(':not(:first)').hide();
        tablist.on('click', function (e) {
            var index = $(this).index();
            tablist.removeClass('active').filter(this).addClass('active');
            tabContent.hide().filter(':eq('+index+')').fadeIn(300);
            e.preventDefault();
        });
    });

});