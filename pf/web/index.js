console.clear();

var swiper = new Swiper(".swiper-container", {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  }
});

/* 윈도우 관리 */
const $window = $(window);

/* 스크롤 관리 */
const sliderHeight = 500;

/* 탑바 관리 */
const $topBar = $(".top-bar");

/* 스크롤을 내리면 배경색이 들어갔다 나갔다 하기  */
$window.scroll(function () {
  const scrollTop = $window.scrollTop();

  if (scrollTop > sliderHeight - 100) {
    $topBar.addClass("bg");
  } else {
    $topBar.removeClass("bg");
  }
});


/* 검색창 */

$(document).on('ready', function() {
  
  $('.field').on('focus', function() {
    $('body').addClass('is-focus');
  });
  
  $('.field').on('blur', function() {
    $('body').removeClass('is-focus is-type');
  });
  
  $('.field').on('keydown', function(event) {
    $('body').addClass('is-type');
    if((event.which === 8) && $(this).val() === '') {
      $('body').removeClass('is-type');
    }
  });
  
});