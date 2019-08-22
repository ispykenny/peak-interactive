import $ from "jquery";

const $global = {
  $body: $('body'),
  $nav: $('nav')
};

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
  $lazyImg: $('.lazy-img'),
  didScroll: false,
  navShowing: false
};

export default $s;
