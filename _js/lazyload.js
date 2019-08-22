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
      console.log('image loaded')
    })
  })
}

const lazyImg = () => {
  console.log('lazy-images')
}


export default { lazyBg, lazyImg }