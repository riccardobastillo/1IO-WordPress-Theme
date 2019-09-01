<?php

/**
 * WP Cli commands for theme.
 */
class FLTheme_WPCLI_Command extends WP_CLI_Command {

	/**
	 * Deletes compiled css for WPI Theme.
	 *
	 * ## EXAMPLES
	 *
	 * 1. wpi theme clearcache
	 *      - Clears and rebuilds the WPI Theme CSS.
	*/
	public function clearcache( $args, $assoc_args ) {
		$compile = FLCustomizer::refresh_css();
		if ( ! is_wp_error( $compile ) ) {
			WP_CLI::success( 'Rebuilt the theme cache' );
		} else {
			WP_CLI::error( sprintf( 'Error while compiling Less: %s', $compile->get_error_message() ) );
		}
	}
}

WP_CLI::add_command( 'wpi theme', 'FLTheme_WPCLI_Command' );
