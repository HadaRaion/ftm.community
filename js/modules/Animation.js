import anime from 'animejs'

document.addEventListener('DOMContentLoaded', () => {
	if (window.location.pathname === '/') {
		anime
			.timeline({
				easing: 'easeOutExpo',
			})
			.add({
				targets: 'body',
				opacity: [0, 1],
			})
			.add({
				targets: '.site-header__menu-wrapper li',
				opacity: [0, 1],
				translateY: ['30px', '0px'],
				offset: '-=500',
				delay: (el, i) => 50 * i,
			})
	}

	// 		.add({
	// 			targets: '.logo h1, nav a',
	// 			opacity: [0, 1],
	// 			translateY: [20, 0],
	// 			delay: (el, i) => 100 * i,
	// 			offset: '-=700'
	// 		})
	// 		.add({
	// 			targets: '.text-section',
	// 			opacity: [0, 1],
	// 			translateY: [100, 0],
	// 			offset: '-=700'
	// 		})
	// 		.add({
	// 			targets: '.image-section',
	// 			opacity: [0, 1],
	// 			translateY: [-100, 0],
	// 			offset: '-=1000'
	// 		})
	// 		.add({
	// 			targets: '#gallery-headline',
	// 			height: ['0px', '80px'],
	// 			opacity: [0, 1],
	// 			offset: '-=800'
	// 		})
	// 		.add({
	// 			targets: '#gallery-loader',
	// 			height: ['0px', '135px'],
	// 			opacity: [0, 1],
	// 			offset: '-=700'
	// 		})
	// 		.add({
	// 			targets: '.ham-line',
	// 			translateX: [500, 0],
	// 			opacity: [0, 1],
	// 			duration: 800,
	// 			delay: (el, i) => 100 * i,
	// 			offset: '-=700'
	// 		})
	// 		.add({
	// 			targets: '.social a',
	// 			translateX: [500, 0],
	// 			opacity: [0, 1],
	// 			delay: (el, i) => 200 * i,
	// 			offset: '-=1000'
	// 		})
	// 		.add({
	// 			targets: '.gallery-nav div',
	// 			translateY: [500, 0],
	// 			opacity: [0, 1],
	// 			delay: (el, i) => 200 * i,
	// 			offset: '-=1000'
	// 		})
})
