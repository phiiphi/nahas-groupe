<div class="">
  <div class="swiper">
    <div class="swiper-wrapper ">
      <div class="swiper-slide myswiper">
        <img class="object-cover w-full h-80 md:h-full overflow-hidden" src="{{ asset('/images/slider1.jpeg') }}" alt="image" />
      </div>
      <div class="swiper-slide myswiper">
        <img class="object-cover w-full h-80 md:h-full overflow-hidden" src="{{ asset('/images/slider1.jpeg') }}" alt="image" />
      </div>
      <div class="swiper-slide myswiper">
        <img class="object-cover w-full h-80 md:h-full overflow-hidden" src="{{ asset('/images/slider1.jpeg') }}" alt="image" />
      </div>
      <div class="swiper-slide myswiper">
        <img class="object-cover w-full h-80 md:h-full overflow-hidden" src="{{ asset('/images/slider1.jpeg') }}" alt="image" />
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".swiper", {
        cssMode: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
        },
        autoplay: {
        delay: 9000,
        },
        mousewheel: true,
        keyboard: true,
      });
  </script>
</div>