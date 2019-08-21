
import $s from './selectors';
import nav from './nav';
import buttons from './buttons';
import scroll from './scroll';
import footer from './footer';

// generate markup for each button
buttons.generateBtn();


// handle nav
$s.$navBtn.on('click', nav);




requestAnimationFrame(scroll.scrollTicker);

$s.$window.on({
  'load': () => {
    $s.$body.addClass('loaded');
    footer.addFooterMargin();
  },
  'scroll': () => {
    scroll.updateScroller();
  },
  'resize': () => {
    footer.resizeFooterMargin();
  }
})