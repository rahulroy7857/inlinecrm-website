 document.addEventListener("DOMContentLoaded", function () {
   function setTopPadding() {
       var topPadding = document.querySelectorAll(".steps-card");
       if (window.innerWidth <= 1024) {
           topPadding.forEach((elem, index) => {
                 var topPosition = (index + 1) * 8; // Adjusted padding for <= 1023px
                 elem.style.top = topPosition + "%";
             });
       } else {
           topPadding.forEach((elem, index) => {
                 var topPosition = (index + 1) * 13; // Original padding for > 1023px
                 elem.style.top = topPosition + "%";
             });
       }
   }

     setTopPadding(); // Initial call to set padding based on viewport width

     window.addEventListener("resize", function () {
         setTopPadding(); // Call setTopPadding() whenever the window is resized
     });
 });



 var trustedImgSwiper = new Swiper(".trustedImgSwiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    navigation: {
     nextEl: ".trusted-next",
     prevEl: ".trusted-prev",
 }, 
 
 speed: 800,



 autoplay: {
   delay: 2500,
   disableOnInteraction: false,
},
breakpoints: {
   320: {
       slidesPerView: 1,
       spaceBetween: 20
   },
   769: {
       slidesPerView: 1.2,
       spaceBetween: 20
   },
   1290: {
       slidesPerView: 1.6,
       spaceBetween: 20
   }
},
});


 /*  review section script */
 /* 
  function homeImgScroll() {
      const imgAnim = gsap.timeline({
              scrollTrigger: {
                  trigger: ".destination-sec-wrap",
                  start: "0% 80%",
                  end: "0% -50%",
                  scrub: 1,

              }
          })
          .from(".dest-img-left", {
              y: -1000
          }, 0)
          .from(".dest-img-right", {
              y: 1000
          }, 0)

  }
  homeImgScroll();
  */


 ScrollTrigger.matchMedia({
   "(min-width: 601px)": function () {
       let imgAnim = gsap.timeline({
           scrollTrigger: {
               trigger: ".destination-sec-wrap",
               start: "0% 80%",
               end: "0% -50%",
               scrub: 1,
                 // markers: true
           }
       });

       imgAnim.from(".dest-img-left", {
           y: -1000
       }, 0)
       .from(".dest-img-right", {
           y: 1000
       }, 0)
   },
     /*==================================================================*/

     /* "(max-width: 1024px)": function () {
         let imgAnim = gsap.timeline({
             scrollTrigger: {
                 trigger: ".destination-sec-wrap",
                 start: "0% 80%",
                 end: "0% -50%",
                 scrub: 1,
                 // markers: true
             }
         });

         imgAnim.from(".dest-img-left", {
                 y: -1000
             }, 0)
             .from(".dest-img-right", {
                 y: 1200
             }, 0)
     } */
})


var courseSwiper = new Swiper(".courseSwiper", {
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: true,
  navigation: {
    nextEl: ".swiper-button-next-course",
    prevEl: ".swiper-button-prev-course",
  },
  scrollbar: {
    el: ".swiper-scrollbar",
  },
  breakpoints: {
    320: {
      slidesPerView: 1.6,
      spaceBetween: 20,
    },
    640: {
      slidesPerView: 2.5,
      spaceBetween: 30,
    },
    1290: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
  },
});



 var courseSwiper2 = new Swiper(".courseSwiper2", {
   effect: "fade",
   fadeEffect: {
       crossFade: true,
   },
   spaceBetween: 10,
   thumbs: {
       swiper: courseSwiper,
   },
});

/*==================================================================*/

 var cb = document.querySelectorAll(".close");
 for (i = 0; i < cb.length; i++) {
   cb[i].addEventListener("click", function() {
      var dia = this.parentNode.parentNode; /* You need to update this part if you change level of close button */
      dia.style.opacity = 0;
      dia.style.zIndex = -1;
  });
}

var mt = document.querySelectorAll(".modal-toggle");
for (i = 0; i < mt.length; i++) {
   mt[i].addEventListener("click", function() {
      var targetId = this.getAttribute("data-target");
      var target = document.getElementById(targetId);
      target.style.opacity = 1;
      target.style.zIndex = 9999;
  });
}