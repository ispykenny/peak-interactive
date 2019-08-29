import $s from './selectors';
import debounce from './debounce';

const setSpacerHeight = () => {
  if(!$s.$spacer.is(":visible")) return;
  $s.$spacer.css({
    'padding-top': $s.$navMaster.outerHeight()
  })
}

const updateSpacer = () => {
  if(!$s.$spacer.is(":visible")) return;
  let setSpacer = debounce(() => {
    $s.$spacer.css({
      'padding-top': $s.$navMaster.outerHeight()
    })
  }, 400)
  setSpacer();
}


export default { setSpacerHeight, updateSpacer };