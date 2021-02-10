class MobileMenu {
	constructor() {
		this.openButton = document.querySelector('.burger');
		this.menu = document.querySelector('.site-header__menu-wrapper');
		this.menuLinks = document.querySelectorAll('.site-header__menu-wrapper ul li');
		this.events();
	}

	events() {
		this.openButton.addEventListener('click', () => this.openMenu());
	}

	openMenu() {
		this.openButton.classList.toggle('open');
		this.menu.classList.toggle('site-header__menu-wrapper--active');
		this.menuLinks.forEach((link, index) => {
			if (link.style.animation) {
				link.style.animation = '';
			} else {
				link.style.animation = `menuLinkFade 0.5s ease forwards ${index / 10}s`;
			}
		});
	}
}

export default MobileMenu;
