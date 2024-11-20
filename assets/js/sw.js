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

  const topSwiper = new Swiper('.topSwiper', {
    // Optional parameters
    loop: true,
    speed: 1500, // 少しゆっくり(デフォルトは300)
    autoplay: { // 自動再生
      delay: 1500, // 1.5秒後に次のスライド
    },
      effect: "fade",

  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
  
  });