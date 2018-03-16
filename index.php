<?php
require_once('autoload.php');

$var = new a\b\c\e\test('Kintamojo ');
$var2 = new a\b\d\test1('reiksme: ');
$name = new a\b\c\e\name(5);

echo $var->var;
echo $var2->var2;
echo $name->name;
