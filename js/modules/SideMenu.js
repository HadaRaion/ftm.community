import anime from 'animejs'

class SideMenu {
	constructor() {
		this.sideMenus = document.querySelectorAll('.site-header__menu-wrapper li')
		this.mediaQuery = window.matchMedia('(min-width: 1200px)')
		this.events()
	}

	events() {
		// document.addEventListener('DOMContentLoaded', () => (this.mediaQuery.matches ? this.sideMenuHoverAnime() : false))
		// document.addEventListener('DOMContentLoaded', () => (this.mediaQuery.matches ? this.onLoadAnime() : false))
	}

	onLoadAnime() {
		anime
			.timeline({
				easing: 'easeOutExpo',
			})
			.add({
				targets: 'site-header__menu li',
				opacity: [0, 1],
				translateY: [20, 0],
				delay: (el, i) => 100 * i,
				offset: '-=500',
			})
			.add({
				targets: 'site-header__social-links li',
				opacity: [0, 1],
				translateY: [20, 0],
				delay: (el, i) => 100 * i,
				offset: '-=1100',
			})
	}

	sideMenuHoverAnime() {
		this.sideMenus.forEach(sideMenu => {
			sideMenu.addEventListener('mouseenter', () => {
				let letter = sideMenu.querySelectorAll('.letter')
				anime.remove(letter)
				anime
					.timeline({
						targets: letter,
					})
					.add({
						translateX: [0, 30],
						opacity: [1, 0],
						easing: 'easeInExpo',
						duration: 500,
						delay: (el, i) => 30 * i,
					})
					.add({
						translateX: [-30, 0],
						opacity: [0, 1],
						easing: 'easeOutExpo',
						duration: 1100,
						delay: (el, i) => 30 * i,
					})
			})
		})
	}
}

export default SideMenu
