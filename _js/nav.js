import $ from 'jquery';
import $s from './selectors';


const toggleNav = () => {
  if($s.navShowing != true) {
    $s.$navEl.slideDown(200);
    $s.$navParent.addClass('is-active')
    $s.navShowing = true;
  } else {
    $s.$navEl.slideUp(10);
    $s.$navParent.removeClass('is-active');
    $s.navShowing = false;
  }
}

export default toggleNav;

