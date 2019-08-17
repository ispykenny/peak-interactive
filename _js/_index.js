
import $s from './selectors';
import nav from './nav';

const we = () => console.log(window.innerWidth)

window.addEventListener('resize', we)

// handle nav
$s.$navBtn.on('click', nav);
