!(function (e) {
  "use strict";
  e(".main-banner .owl-carousel").on("initialized.owl.carousel", () => {
    setTimeout(() => {
      e(".owl-item.active .owl-slide-animated").addClass("is-transitioned"),
        e("section").show();
    }, 200);
  });
  const o = e(".main-banner .owl-carousel").owlCarousel({
    items: 1,
    loop: !0,
    mouseDrag: !1,
    autoHeight: !0,
    nav: !0,
    dots: !1,
    navText: [
      '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
      '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>',
    ],
  });
  function i() {
    t(e(".owl-item.active .owl-slide-text"));
  }
  function t(o) {
    const i = o.height(),
      { top: t, left: n } = o.position(),
      s = i + t + 20;
    e(".main-banner .owl-carousel .owl-dots").css({
      top: `${s}px`,
      left: `${n}px`,
    });
  }
  o.on("changed.owl.carousel", (o) => {
    e(".owl-slide-animated").removeClass("is-transitioned");
    const i = e(".owl-item").eq(o.item.index);
    i.find(".owl-slide-animated").addClass("is-transitioned"),
      t(i.find(".owl-slide-text"));
  }),
    o.on("resize.owl.carousel", () => {
      setTimeout(() => {
        i();
      }, 50);
    }),
    i();
})(jQuery);
