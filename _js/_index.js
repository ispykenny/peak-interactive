
import $s from './selectors';
import nav from './nav';
import buttons from './buttons';
import scroll from './scroll';
import footer from './footer';
import lazyload from './lazyload';
import util from './util';

// generate markup for each button
buttons.generateBtn();


// handle nav
$s.$navBtn.on('click', nav);

// run scroll ticker 
requestAnimationFrame(scroll.scrollTicker);

$s.$window.on({
  'load': () => {
    $s.$body.addClass('loaded');
    lazyload.lazyBg();
    lazyload.lazyImg();
    util.setSpacerHeight();
  },
  'scroll': () => {
    scroll.updateScroller();
  },
  'resize': () => {
    util.updateSpacer();
  }
})