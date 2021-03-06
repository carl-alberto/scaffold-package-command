<?php

if ( ! class_exists( 'WP_CLI' ) ) {
	return;
}

require_once __DIR__ . '/inc/ScaffoldPackageCommand.php';

WP_CLI::add_command( 'scaffold package', array( 'WP_CLI\ScaffoldPackageCommand', 'package' ) );
WP_CLI::add_command( 'scaffold package-readme', array( 'WP_CLI\ScaffoldPackageCommand', 'package_readme' ) );
WP_CLI::add_command( 'scaffold package-tests', array( 'WP_CLI\ScaffoldPackageCommand', 'package_tests' ) );
