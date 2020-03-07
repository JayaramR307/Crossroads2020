<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="css/event.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css" />
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" />
  </head>
  <body>
    <section class="swiper-container loading">
      <div class="swiper-wrapper">
        

        <div class="swiper-slide slide0">
          <div class="content">
            <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">General</p>
            <span class="caption" data-swiper-parallax="-20%">Description</span>
          </div>
        </div>


        <div class="swiper-slide slide1">
          <div class="content">
            <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">Event 1</p>
            <span class="caption" data-swiper-parallax="-20%">Description</span>
          </div>
        </div>

        <div class="swiper-slide slide2">
          <div class="content">
            <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">Event 2</p>
            <span class="caption" data-swiper-parallax="-20%">Description</span>
          </div>
        </div>

        <div class="swiper-slide slide3">
         
          <div class="content">
            <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">Event 3</p>
            <span class="caption" data-swiper-parallax="-20%">Description</span>
          </div>
        </div>
      
        <div class="swiper-slide slide4">
          <div class="content">
            <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">Event 4</p>
            <span class="caption" data-swiper-parallax="-20%">Description</span>
          </div>
        </div>

        <div class="swiper-slide slide5">
          <div class="content">
            <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">Event 5</p>
            <span class="caption" data-swiper-parallax="-20%">Description</span>
          </div>
        </div>
      </div>
    </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
  <script>
    let sliderSelector = '.swiper-container',
        options = {
          loop: true,
          speed:800,
          slidesPerView: 2, // or 'auto'
          spaceBetween: 20,
          centeredSlides : true,
          effect: 'coverflow', // 'cube', 'fade', 'coverflow',
          coverflowEffect: {
            rotate: 50, // Slide rotate in degrees
            stretch: 0, // Stretch space between slides (in px)
            depth: 50, // Depth offset in px (slides translate in Z axis)
            modifier: 1, // Effect multipler
            slideShadows : true // Enables slides shadows
          },
          grabCursor: true,
          parallax: true,
          on: {
            imagesReady: function(){
              this.el.classList.remove('loading');
            }
          }
        };
    let mySwiper = new Swiper(sliderSelector, options);
    mySwiper.init();
  </script>
  </body>
</html>
