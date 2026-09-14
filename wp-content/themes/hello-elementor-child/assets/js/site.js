( function () {
	'use strict';

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

	if ( 'IntersectionObserver' in window && ! window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches ) {
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
