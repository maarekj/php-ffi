--TEST--
FFI 010: string()
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
$a = FFI::new("int[3]");
FFI::memset($a, ord("a"), FFI::sizeof($a));
var_dump(FFI::string($a, FFI::sizeof($a)));
?>
--EXPECT--
string(12) "aaaaaaaaaaaa"