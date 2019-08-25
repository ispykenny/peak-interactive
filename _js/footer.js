import $s from './selectors';
import debounce from './debounce';

const resizeFooterMargin = () => {
  let resizer = debounce(() => {
    $s.$main.css({
      'margin-bottom': $s.$footer.outerHeight() + 'px'
    })
  }, 400)
  if(!$s.$navBtn.is(":visible")) {
    resizer();
  } else {
    $s.$main.css({
      'margin-bottom': 0 + 'px'
    })
  }
}

const addFooterMargin = () => {
  if(!$s.$navBtn.is(":visible")) {
    $s.$main.css({
      'margin-bottom': $s.$footer.outerHeight() + 'px'
    })
  }
}

export default { resizeFooterMargin, addFooterMargin };