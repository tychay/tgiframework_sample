<?php
// vim:set expandtab tabstop=4 shiftwidth=4 softtabstop=4 foldmethod=marker syntax=php:
//345678901234567890123456789012345678901234567890123456789012345678901234567890
/**
 * Test object (for globals)
 *
 * @package tgif_sample
 * @subpackage testing
 * @copyright 2009-2015 terry chay
 * @license MIT
 * @author terry chay <tychay@php.net>
 */
namespace tgif_sample;
/**
 * Test object (for globals loading)
 *
 * @package tgif_sample
 * @subpackage testing
 */
class test {
    private $_foo = 'spam';
    public $bar = 'alot';
    function __construct()
    {
        printf('%s:__construct() called',get_class($this));
    }
    function __wakeup()
    {
        printf('%s:wakeup() called',get_class($this));
    }
}
?>
