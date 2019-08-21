import $s from './selectors';
import debounce from './debounce';

const resizeFooterMargin = () => {
  let resizer = debounce(() => {
    $s.$main.css({
      'margin-bottom': $s.$footer.outerHeight() + 'px'
    })
  }, 500)
  resizer();
}

const addFooterMargin = () => {
  $s.$main.css({
    'margin-bottom': $s.$footer.outerHeight() + 'px'
  })
}

export default { resizeFooterMargin, addFooterMargin };