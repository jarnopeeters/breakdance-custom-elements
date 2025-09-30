<?php

/**
 * Plugin Name: BGS Custom Elements
 * Plugin URI: https://insideweb.nl/
 * Description: Custom Elements for Biodentistry Global Standard.
 * Author: InsideWeb
 * Author URI: https://insideweb.nl/
 * License: GPLv2
 * Text Domain: breakdance
 * Domain Path: /languages/
 * Version: 0.0.1
 */

namespace BGSCustomElements;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action(
	'breakdance_loaded',
	function () {
		\Breakdance\ElementStudio\registerSaveLocation(
			getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
			'BGSCustomElements',
			'element',
			'BGS Elements',
			false
		);

		\Breakdance\ElementStudio\registerSaveLocation(
			getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
			'BGSCustomElements',
			'macro',
			'BGS Macros',
			false,
		);

		\Breakdance\ElementStudio\registerSaveLocation(
			getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
			'BGSCustomElements',
			'preset',
			'BGS Presets',
			false,
		);
	},
	// register elements before loading them
	9
);
