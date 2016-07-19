<?php

define( 'GD_VIP', '160.153.137.16' );
define( 'GD_RESELLER', 1 );
define( 'GD_ASAP_KEY', '11cd6ed888d49706f690e95c3862ca76' );
define( 'GD_STAGING_SITE', false );
define( 'GD_EASY_MODE', false );
define( 'GD_SITE_CREATED', 1467588767 );

// Newrelic tracking
if ( function_exists( 'newrelic_set_appname' ) ) {
	newrelic_set_appname( 'd527d8ee-1761-4860-8f34-e17b18d8f6bf;' . ini_get( 'newrelic.appname' ) );
}

/**
 * Is this is a mobile client?  Can be used by batcache.
 * @return array
 */
function is_mobile_user_agent() {
	return array(
	       "mobile_browser"             => !in_array( $_SERVER['HTTP_X_UA_DEVICE'], array( 'bot', 'pc' ) ),
	       "mobile_browser_tablet"      => false !== strpos( $_SERVER['HTTP_X_UA_DEVICE'], 'tablet-' ),
	       "mobile_browser_smartphones" => in_array( $_SERVER['HTTP_X_UA_DEVICE'], array( 'mobile-iphone', 'mobile-smartphone', 'mobile-firefoxos', 'mobile-generic' ) ),
	       "mobile_browser_android"     => false !== strpos( $_SERVER['HTTP_X_UA_DEVICE'], 'android' )
	);
}