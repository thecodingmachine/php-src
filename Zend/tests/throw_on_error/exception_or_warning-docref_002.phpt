--TEST--
php_exception_or_warning_docref test when declare explicitly disable
--SKIPIF--
<?php
if (!class_exists('_ZendTestClass')) die('skip zend_test extension required');
?>
--FILE--
<?php
declare(throw_on_error=0);

zend_throw_on_error_declare_exception_or_warning();

echo "OK";
--EXPECTF--
Warning: zend_throw_on_error_declare_exception_or_warning(): Context dependent in %s on line %d
OK
