<?php
/**
 * Test configuration used for features
 *
 * @package tgif_sample
 * @subpackage testing
 * @copyright 2009-2015 terry chay
 * @license MIT
 * @author terry chay <tychay@php.net>
 */
return array(
    'readConfig'        => false, // don't keep loading config
    //test variables {{{
    'gld_testGlobal'    => array(
        'construct'         => array('\\tgif_sample\\test'),
        'version'           => 2,
        'isSmemable'        => false,
        'isMemcacheable'    => true,
    ),
    'gld_testCollection'=> array(
        'params'            => 1, //index
        'construct'         => array('\\tgif_sample\\member'),
        'version'           => 1,
        'isSmemable'        => false,
        'isMemcacheable'    => true,
    ),
    'testConf'          => 'testing',
    'testConfMacros'    => array(
        'testConf'      => 'nested {{{testConf}}}',
        'subproperty'   => 'nested {{{gld_testGlobal.version}}}',
    ),
    // }}}
    'firephp.enable'    => true,
);
