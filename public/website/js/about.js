var coreSwiper = new Swiper(".coreSwiper", {
    slidesPerView: 1,
    spaceBetween: 10,

    navigation: {
        nextEl: ".corebtn-next",
        prevEl: ".corebtn-prev",
    },


    breakpoints: {
        360: {
            slidesPerView: 1,
            spaceBetween: 20,
        },

        565: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        835: {
            slidesPerView: 3,
            spaceBetween: 30,
        },

        1025: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
    },

});

/* journey swiper script */
const swiperJourney = new Swiper(".swiperJourney", {
    slidesPerView:3.5,

    navigation: {
        nextEl: ".journeybtn-next",
        prevEl: ".journeybtn-prev",
    },

    speed: 1000,
    grabCursor: true,
    spaceBetween: 30,

    autoplay: {
        delay: 2000,
        disableOnInteraction: false
      },
    breakpoints: {
        1201: {
            slidesPerView: 3.5,
            spaceBetween: 110,
        },
        991: {
            slidesPerView: 3,
            spaceBetween: 50,
        },
        576: {
            slidesPerView: 2.5,
        },
        481: {
            slidesPerView: 1.8,
        },
        380: {
            slidesPerView: 1.4,
        }
    }
});

Fancybox.bind('[data-fancybox]', {

});

const mapRange = (inputLower, inputUpper, outputLower, outputUpper, value) => {
    const INPUT_RANGE = inputUpper - inputLower;
    const OUTPUT_RANGE = outputUpper - outputLower;
    return (
        outputLower + (((value - inputLower) / INPUT_RANGE) * OUTPUT_RANGE || 0)
    );
};

const container = document.getElementById("myCarousel");
const options = {
 Autoplay: {
  timeout: 3000,
  progressParentEl : (autoplay) => {
    return autoplay.instance.viewport;
  }
 } ,

 Dots: false,
 slidesPerPage: 1,
on: {

'Panzoom.beforeTransform': (carousel) => {
    carousel.slides.map((slide) => {
        const progress = carousel.getProgress(slide.index);
        const scale = mapRange(0, 1, 1, 1.2, 1 - Math.abs(progress));
        const blur = mapRange(0, 1, 3, 0, 1 - Math.abs(progress));

        slide.el.style.setProperty('--f-translateX', `${progress * -10}%`);
        slide.el.style.setProperty('--f-scale', scale);
        slide.el.style.setProperty('--f-blur', `${blur}px`);
    });
},
},
};

new Carousel(container, options, { Autoplay });
