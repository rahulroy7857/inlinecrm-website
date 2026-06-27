var univesSwiper = new Swiper(".univesSwiper", {
    scrollbar: {
        el: ".swiper-scrollbar",
    },

    autoplay: {
        delay: 3000,
        disableOnInteraction: false
      },

    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        640: {
            slidesPerView: 1.6,
            spaceBetween: 20
        },
        900: {
            slidesPerView: 2.4,
            spaceBetween: 24
        },
        1100: {
            slidesPerView: 3.8,
            spaceBetween: 24
        }
    }
});

var sections = $('.moreabout-sections'),
    nav = $('.moreabout-links'),
    nav_height = nav.outerHeight(),
    had_height = $('header').height(),
    tot_height = had_height + nav_height + 120;

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