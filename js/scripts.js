import '../css/style.css';
// import anime from 'animejs'
// Our modules / classes
import MobileMenu from './modules/MobileMenu';
import Animation from './modules/Animation';

// Instantiate a new object using our modules/classes
new MobileMenu();
// new Animation();

window.addEventListener('load', () => {
	let vh = window.innerHeight * 0.01;
	document.documentElement.style.setProperty('--vh', `${vh}px`);
	window.addEventListener('resize', () => {
		let vh = window.innerHeight * 0.01;
		document.documentElement.style.setProperty('--vh', `${vh}px`);
	});
});

// Allow new JS and CSS to load in browser without a traditional page refresh
if (module.hot) {
	module.hot.accept();
}
