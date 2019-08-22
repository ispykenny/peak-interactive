import $s from './selectors';
import $ from 'jquery';

const lazyBg = () => {
  $s.$lazyBg.each((index, element) => {
    let newImg = new Image();
    newImg.src = $(element).attr('data-bg')
    $(newImg).on('load', () => {
      $(element).css({
        'background-image': 'url('+ newImg.src +')'
      })
    })
  })
}

const lazyImg = () => {
  $s.$lazyImg.each((index, element) => {
    let $this = $(element);
    let src = $this.attr('data-src');
    let mkImg = new Image();
    mkImg.src = src;

    $(mkImg).on('load', () => {
      $this.attr('src', src);
    })
  })
}


export default { lazyBg, lazyImg }