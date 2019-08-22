import $ from "jquery";

const $s = {
  $body: $("body"),
  $navParent: $(".nav-parent"),
  $navEl: $("nav"),
  $navBtn: $("#mt-trigger"),
  $cta: $(".cta"),
  $window: $(window),
  $navMaster: $(".nav-master"),
  $headerEl: $(".hdr-el"),
  $headerBg: $(".hdr-bg"),
  $footer: $('footer'),
  $main: $('.main'),
  $lazyBg: $('.lazy-bg'),
  $lazyImg: $('.lazy-image'),
  didScroll: false,
  navShowing: false
};

export default $s;
