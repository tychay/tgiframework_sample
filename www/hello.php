<?php
/**
 * Hello world template.
 *
 * @package tgif_sample
 * @subpackage benchmarking
 * @copyright 2009-2015 terry chay <tychay@php.net>
 * @license MIT
 * @author terry chay <tychay@php.net>
 */
/**
 * init
 */
require_once '../prepend.php';
global $_TAG;
$page = new tgif_page();
$page->assign('title','Test');
$page->assign('greeting','Hello world');
$page->render('hello.php');