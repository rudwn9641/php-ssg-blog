console.clear();

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


gsap.from(".section-2", {
  x: -500,
  opacity: 0,
  duration: 1,
  scrollTrigger: {
    trigger: ".section-2",
    start: "50% bottom",
    toggleActions: "restart none none none"
  }
});

gsap.from(".section-3", {
  x: 500,
  opacity: 0,
  duration: 1,
  scrollTrigger: {
    trigger: ".section-3",
    start: "50% bottom",
    toggleActions: "restart none none none"
  }
});

gsap.from(".section-4", {
  y: -400,
  opacity: 0,
  duration: 1,
  scrollTrigger: {
    trigger: ".section-4",
    start: "50% bottom",
    toggleActions: "restart none none none"
  }
});

gsap.from(".section-5", {
  x: 500,
  opacity: 0,
  duration: 1,
  scrollTrigger: {
    trigger: ".section-5",
    start: "50% bottom",
    toggleActions: "restart none none none"
  }
});

gsap.from(".section-6", {
  x: -500,
  opacity: 0,
  duration: 1,
  scrollTrigger: {
    trigger: ".section-6",
    start: "50% bottom",
    toggleActions: "restart none none none"
  }
});

gsap.from(".section-7", {
  x: 500,
  opacity: 0,
  duration: 1,
  scrollTrigger: {
    trigger: ".section-7",
    start: "50% bottom",
    toggleActions: "restart none none none"
  }
});

gsap.from(".section-8", {
  y: -400,
  opacity: 0,
  duration: 1,
  scrollTrigger: {
    trigger: ".section-8",
    start: "50% bottom",
    toggleActions: "restart none none none"
  }
});

gsap.from(".section-9", {
  x: 500,
  opacity: 0,
  duration: 1,
  scrollTrigger: {
    trigger: ".section-9",
    start: "50% bottom",
    toggleActions: "restart none none none"
  }
});

gsap.from(".section-10", {
  x: -500,
  opacity: 0,
  duration: 1,
  scrollTrigger: {
    trigger: ".section-10",
    start: "50% bottom",
    toggleActions: "restart none none none"
  }
});

gsap.from(".section-11", {
  y: -400,
  opacity: 0,
  duration: 1,
  scrollTrigger: {
    trigger: ".section-11",
    start: "50% bottom",
    toggleActions: "restart none none none"
  }
});