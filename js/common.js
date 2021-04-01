function TopBar__init() {
  const timeline1 = gsap.timeline({
    delay:0
  });

  timeline1.from('.top-bar .logo > span', {
    y:-60,
    opacity:0,
    duration:1.5
  });

  timeline1.to('.btn-to-top > div > div:nth-child(1) > span', {
    left:0,
    duration:0.3
  }, "-=0.7");

  timeline1.to('.btn-to-top > div > div:nth-child(2) > span', {
    left:0,
    duration:0.3
  }, "-=0.6");

  timeline1.to('.btn-to-top > div > div:nth-child(2) > span', {
    left:"20%",
    duration:.2
  }, "-=0.1");

  timeline1.from('.main-page .main-box > .blush', {
    x:-70,
    opacity:0,
    duration:0.7
  });

  timeline1.from('.main-page .main-box > .title', {
    opacity:0,
    duration:0.7
  });

  timeline1.from('.main-page .main-box > .content-1', {
    opacity:0,
    duration:0.7
  });

  $('.btn-to-top').click(function() {
    if ( $(this).hasClass('active') ) {
      SideBar__hide();
    }
    else {
      SideBar__show();
    }
  });
}

function Page__init() {
  TopBar__init();

  gsap.set('body', {
    autoAlpha:1
  });
}

function SideBar__show() {
  $('.btn-to-top').addClass('active');
  $('.side-bar').addClass('active');
}

function SideBar__hide() {
  $('.btn-to-top').removeClass('active');
  $('.side-bar').removeClass('active');
}

Page__init();