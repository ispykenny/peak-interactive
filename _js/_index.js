
import $s from './selectors';
import nav from './nav';
import buttons from './buttons';


// generate markup for each button
buttons.generateBtn();


// handle nav
$s.$navBtn.on('click', nav);
