$(document).ready(function () {
    var sections = $('.test-dtl-sections'),
        nav = $('.test-cont-rolling-links'),
        nav_height = nav.outerHeight(),
        had_height = $('header').height(),
        tot_height = had_height + nav_height + 100;
        // console.log(had_height);
        // console.log(nav_height);
        // console.log(tot_height); // Added them to track the changes 

    $(window).on('scroll', function () {
        var cur_pos = $(this).scrollTop();

        sections.each(function () {
            var top = $(this).offset().top - tot_height,
                bottom = top + $(this).outerHeight();

            if (cur_pos >= top && cur_pos <= bottom) {
                nav.find('a').removeClass('active');
                sections.removeClass('active');

                $(this).addClass('active');
                nav.find('a[href="#' + $(this).attr('id') + '"]').addClass('active');
            }
        });
    });

    nav.find('a').on('click', function () {
        var $el = $(this),
            id = $el.attr('href');


        $('html, body').animate({
            scrollTop: $(id).offset().top - had_height,
        }, 500);

        return false;
    });

});