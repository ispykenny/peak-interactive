import $ from 'jquery';
import $s from './selectors';


const generateBtn = () => {
  $s.$cta.each((index, element) => {
    let text = $(element).text();
    $(element).html(`
      <span>${text}</span>
      <span class="cta-bg"></span>
      <span class="cta-border"></span>
    `)
  })
}

export default {generateBtn};