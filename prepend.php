<?php
/**
 * Initialize the configuration on every page in the TGIFramework samples. This
 * is no longer called automatically on the page and must be included as the
 * first line.
 *
 * You can use this script for other sites either as-is or copy and modify.
 * If you would like to use as-is, set the {@link APP_DIR} before calling this
 * script and you might want to drop in a symbol file (__symbol.php) in the
 * same directory.
 *
 * If you want to copy this file, be sure to change {@link BASE_DIR},
 * {@link TGIF_DIR} etc. Currently the assumption of the code tree is the 
 * following:
 *
 * * <i>base_dir</i>/sample/prepend.php: where this file is
 * * <i>base_dir</i>/tgif: where tgiframework was checked out
 *
 * @package tgif_sample
 * @copyright 2009-2015 terry chay
 * @license MIT
 * @author terry chay <tychay@php.net>
 */
$GLOBALS['_start_time'] = microtime();

// Set common symbols
// BASE_DIR
/**
 * The directory where the code tree is stored
 */
define('BASE_DIR', dirname(realpath(__DIR__)));
// TGIF_DIR
/**
 * The directory where the framework code is stored
 * @ignore
 */
define('TGIF_DIR', BASE_DIR.'/tgif/framework');

// APP_DIR
/**
 * The directory where app code is stored
 */
define('APP_DIR', __DIR__);

// $symbol
$symbol_file = APP_DIR.DIRECTORY_SEPARATOR.'__symbol.php';
global $symbol;
if (file_exists($symbol_file)) {
    /**
     * @global string
     * The symbol. This is a three letter code put in from of any configurations
     * that are cached in order to prevent two applications running on the same
     * machine and/or memcache from overwriting each others variables.
     */
    $symbol = include($symbol_file);
} else {
    $symbol = 'SAM'; //Samples
}

// TGIF_CONF_PATH
/*
 * Where to get config overrides
 */
define('TGIF_CONF_PATH', APP_DIR.DIRECTORY_SEPARATOR.'config');

/**
 * The class loader for the samples project
 *
 * This emulates PSR-4 structure.
 * 
 * @package tgif_sample
 * @param   $class  string the fully-qualified class to load
 * @return  void (as per PSR-4)
 */
function _tgif_sample_autoload($class) {
	static $_class_dir = '';
	if (strpos($class, 'tgif_sample\\') !== 0) {
		return;
	}
	if ( !$_class_dir ) {
		$_class_dir = APP_DIR.DIRECTORY_SEPARATOR.'class';
	}
	// re-root namespace (include first separator)
	$class = substr($class, 11);
	$filename = $_class_dir.str_replace('\\', DIRECTORY_SEPARATOR, $class).'.php';
	include $filename;
}
spl_autoload_register('_tgif_sample_autoload');
/**
 * Load TGIFramework (in a post-Composer world)
 */
require_once BASE_DIR.'/tgif/vendor/autoload.php';

// Set character encoding
// TAGGED: Start session
// TAGGED: PEAR + Smarty
