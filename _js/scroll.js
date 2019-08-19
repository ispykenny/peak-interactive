import $s from './selectors';

const updateScroller = () => {
  $s.didScroll = true
} 


const scrollTicker = () => {
  if($s.didScroll) {
    

    // nav styles
    if($s.$window.scrollTop() >= 5) {
      $s.$navMaster.addClass('is-scrolled');
    } else {
      $s.$navMaster.removeClass('is-scrolled');
    }

    // header background image paralax 
    $s.$headerBg.css({'transform': 'translateY('+ $s.$window.scrollTop() / 40 +'%)'})


    $s.didScroll = false;
  }
  requestAnimationFrame(scrollTicker);
}

export default { updateScroller, scrollTicker };



