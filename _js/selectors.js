import $ from "jquery";

const $g = {
  $body: $('body'),
  $nav: $('nav'),
  didScroll: false,
  navShowing: false
  
};

const $s = {
  $body: $("body"),
  $nav: $('nav'),
  $navParent: $(".nav-parent"),
  $navEl: $(".nav-master nav"),
  $navBtn: $("#mt-trigger"),
  $spacer: $('.spacer'),
  $cta: $(".cta"),
  $window: $(window),
  $navMaster: $(".nav-master"),
  $headerEl: $(".hdr-el"),
  $headerBg: $(".hdr-bg"),
  $footer: $('footer'),
  $main: $('.main'),
  $lazyBg: $('.lazy-bg'),
  $lazyImg: $('.lazy-img'),
  didScroll: false,
  navShowing: false
};

export default $s;
