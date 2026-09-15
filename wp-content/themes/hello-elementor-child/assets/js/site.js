( function () {
	'use strict';

	const reducedMotion = window.matchMedia( '(prefers-reduced-motion: reduce)' );
	const hero = document.querySelector( '[data-gk-hero]' );

	if ( hero && ! reducedMotion.matches ) {
		hero.classList.add( 'has-motion' );

		window.requestAnimationFrame( () => {
			window.requestAnimationFrame( () => hero.classList.add( 'is-hero-ready' ) );
		} );

		if ( window.matchMedia( '(pointer: fine)' ).matches ) {
			let pointerFrame;

			hero.addEventListener( 'pointermove', ( event ) => {
				if ( pointerFrame ) {
					window.cancelAnimationFrame( pointerFrame );
				}

				pointerFrame = window.requestAnimationFrame( () => {
					const bounds = hero.getBoundingClientRect();
					const x = ( event.clientX - bounds.left ) / bounds.width - 0.5;
					const y = ( event.clientY - bounds.top ) / bounds.height - 0.5;

					hero.style.setProperty( '--gk-hero-x', `${ x * -12 }px` );
					hero.style.setProperty( '--gk-hero-y', `${ y * -8 }px` );
				} );
			} );

			hero.addEventListener( 'pointerleave', () => {
				hero.style.setProperty( '--gk-hero-x', '0px' );
				hero.style.setProperty( '--gk-hero-y', '0px' );
			} );
		}
	}

	const toggle = document.querySelector( '[data-nav-toggle]' );
	const nav = document.querySelector( '[data-nav]' );

	if ( toggle && nav ) {
		const closeNavigation = () => {
			toggle.setAttribute( 'aria-expanded', 'false' );
			toggle.setAttribute( 'aria-label', 'Open navigation' );
			nav.classList.remove( 'is-open' );
		};

		toggle.addEventListener( 'click', () => {
			const isOpen = toggle.getAttribute( 'aria-expanded' ) === 'true';
			toggle.setAttribute( 'aria-expanded', String( ! isOpen ) );
			toggle.setAttribute( 'aria-label', isOpen ? 'Open navigation' : 'Close navigation' );
			nav.classList.toggle( 'is-open', ! isOpen );
		} );

		nav.querySelectorAll( 'a' ).forEach( ( link ) => {
			link.addEventListener( 'click', closeNavigation );
		} );

		document.addEventListener( 'keydown', ( event ) => {
			if ( event.key === 'Escape' ) {
				closeNavigation();
			}
		} );
	}

	const revealItems = document.querySelectorAll( '.gk-reveal' );

	if ( 'IntersectionObserver' in window && ! reducedMotion.matches ) {
		revealItems.forEach( ( item ) => item.classList.add( 'gk-animate-ready' ) );

		const observer = new IntersectionObserver(
			( entries ) => {
				entries.forEach( ( entry ) => {
					if ( entry.isIntersecting ) {
						entry.target.classList.add( 'is-visible' );
						observer.unobserve( entry.target );
					}
				} );
			},
			{ rootMargin: '0px 0px -8% 0px', threshold: 0.08 }
		);

		revealItems.forEach( ( item ) => observer.observe( item ) );
	} else {
		revealItems.forEach( ( item ) => item.classList.add( 'is-visible' ) );
	}
}() );
