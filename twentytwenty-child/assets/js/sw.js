const swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    freeMode: false,
    autoplay: true,
    centeredSlides : true,
    breakpoints: {
        768: {
            slidesPerView: 3.5,// PCでは3枚を中央に、.5で見切れ具合を調整
            spaceBetween:20,
        }
    },

  });


  const swiper2  = new Swiper(".profileSwiper", {
        // Optional parameters
        loop: true,
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,

        },

        breakpoints: {
            768: {
                slidesPerView: 1,// PCでは3枚を中央に、.5で見切れ具合を調整
                loop: true,

                    navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                  },
                  pagination: {
                    el: '.swiper-pagination',
                    clickable: true,

                }
            }
        },
  });