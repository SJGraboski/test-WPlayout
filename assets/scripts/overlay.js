/**
 * Navbar Overlay Script - SJGraboski
 **/


/*
 * Functions
 */

// Show navbar
function showNav() {
	jQuery('div.nav-overlay').fadeIn(400);
}

// Hide navvar
function hideNav() {
	jQuery('div.nav-overlay').fadeOut(400);
}


/*
 * Calls
 */

// Call showNav when user clicks menu link
jQuery(document).on('click', 'a.menu-title', showNav);

// Call hideNav when user clicks nav's X button
jQuery(document).on('click', 'a.menu-close', hideNav);
