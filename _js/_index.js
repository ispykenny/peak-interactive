
import $s from './selectors';
import nav from './nav';
import buttons from './buttons';
import scroll from './scroll';

// generate markup for each button
buttons.generateBtn();


// handle nav
$s.$navBtn.on('click', nav);




$s.$window.on('scroll', scroll.updateScroller);
requestAnimationFrame(scroll.scrollTicker);
$s.$window.on('load', () => $s.$body.addClass('loaded'));