<?php
// vim:set expandtab tabstop=4 shiftwidth=4 softtabstop=4 foldmethod=marker syntax=php:
//345678901234567890123456789012345678901234567890123456789012345678901234567890
/**
 * Test object (for global collection)
 *
 * @package tgif_sample
 * @subpackage testing
 * @copyright 2010-2015 terry chay
 * @license MIT
 * @author terry chay <tychay@php.net>
 */
namespace tgif_sample;
/**
 * Test object (for global collection loading)
 *
 * @package tgif_sample
 * @subpackage testing
 */
class member {
    private $_index;
    function __construct($name)
    {
        printf("%s:__construct() called\n",get_class($this));
        $this->_index = $name;
    }
    function __wakeup()
    {
        printf("%s:wakeup() called\n",get_class($this));
    }
}
?>
