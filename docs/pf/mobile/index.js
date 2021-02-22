gsap.from(".img-4", {
  x: -500,
  opacity: 0,
  duration: 1,
  scrollTrigger: {
    trigger: ".img-4",
    start: "50% bottom",
    toggleActions: "restart none none none"
  }
});

gsap.from(".img-5", {
  x: 500,
  opacity: 0,
  duration: 1,
  scrollTrigger: {
    trigger: ".img-5",
    start: "50% bottom",
    toggleActions: "restart none none none"
  }
});

gsap.from(".big", {
  opacity: 0,
  duration: 1,
  scrollTrigger: {
    trigger: ".big",
    start: "50% bottom",
    toggleActions: "restart none none none"
  }
});

gsap.from(".small", {
  opacity: 0,
  duration: 1,
  scrollTrigger: {
    trigger: ".small",
    start: "50% bottom",
    toggleActions: "restart none none none"
  }
});

gsap.from(".img-6", {
  opacity: 0,
  duration: 1,
  scrollTrigger: {
    trigger: ".img-6",
    start: "50% bottom",
    toggleActions: "restart none none none"
  }
});

gsap.from(".img-7", {
  opacity: 0,
  duration: 1,
  scrollTrigger: {
    trigger: ".img-7",
    start: "50% bottom",
    toggleActions: "restart none none none"
  }
});

gsap.from(".img-9", {
  opacity: 0,
  duration: 1,
  scrollTrigger: {
    trigger: ".img-9",
    start: "50% bottom",
    toggleActions: "restart none none none"
  }
});

gsap.from(".img-10", {
  x: -500,
  opacity: 0,
  duration: 1,
  scrollTrigger: {
    trigger: ".img-10",
    start: "50% bottom",
    end: "80% bottom",
    scrub: true
  }
});

gsap.from(".img-11", {
  x: 500,
  opacity: 0,
  duration: 1,
  scrollTrigger: {
    trigger: ".img-11",
    start: "50% bottom",
    scrub: true
  }
});

gsap.from(".img-12", {
  x: 500,
  opacity: 0,
  duration: 1,
  scrollTrigger: {
    trigger: ".img-12",
    start: "50% bottom",
    scrub: true
  }
});

gsap.from(".img-13", {
  x: -500,
  opacity: 0,
  duration: 1,
  scrollTrigger: {
    trigger: ".img-13",
    start: "50% bottom",
    scrub: true
  }
});

gsap.from(".img-14", {
  opacity: 0,
  duration: 1,
  scrollTrigger: {
    trigger: ".img-14",
    start: "50% bottom",
    scrub: true
  }
});

gsap.from(".img-16", {
  opacity: 0,
  duration: 3,
  scrollTrigger: {
    trigger: ".img-16",
    start: "50% bottom",
    scrub: true
  }
});

gsap.from(".img-19", {
  opacity: 0,
  duration: 1,
  scrollTrigger: {
    trigger: ".img-19",
    start: "50% bottom",
    toggleActions: "restart none none none"
  }
});

gsap.from(".img-20", {
  opacity: 0,
  duration: 1,
  scrollTrigger: {
    trigger: ".img-20",
    start: "50% bottom",
    toggleActions: "restart none none none"
  }
});

gsap.from(".img-22", {
  x: -500,
  opacity: 0,
  duration: 1,
  scrollTrigger: {
    trigger: ".img-22",
    start: "50% bottom",
    toggleActions: "restart none none none"
  }
});

gsap.from(".img-23", {
  opacity: 0,
  duration: 1,
  scrollTrigger: {
    trigger: ".img-23",
    start: "50% bottom",
    toggleActions: "restart none none none"
  }
});

gsap.from(".img-24", {
  x: 500,
  opacity: 0,
  duration: 1,
  scrollTrigger: {
    trigger: ".img-24",
    start: "50% bottom",
    toggleActions: "restart none none none"
  }
});

function Section__init() {
  const timeline1 = gsap.timeline({
    delay: 0
  });

  timeline1.from(".pic > .section-1 .img-2", {
    x: -500,
    opacity: 0,
    duration: 1
  });

  timeline1.from(".pic > .section-1 .img-3", {
    x: 500,
    opacity: 0,
    duration: 1
  });
}

function Page__init() {
  Section__init();

  gsap.set(".section-1", {
    autoAlpha: 1
  });
}

Page__init();
