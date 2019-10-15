--TEST--
Test sprintf() function : error conditions
--FILE--
<?php
/* Prototype  : string sprintf(string $format [, mixed $arg1 [, mixed ...]])
 * Description: Return a formatted string
 * Source code: ext/standard/formatted_print.c
 */

echo "*** Testing sprintf() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing sprintf() function with Zero arguments --\n";
try {
    var_dump( sprintf() );
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

echo "\n-- Testing sprintf() function with less than expected no. of arguments --\n";
$format1 = '%s';
$format2 = '%s%s';
$format3 = '%s%s%s';
$arg1 = 'one';
$arg2 = 'two';

// with one argument less than expected
try {
    var_dump( sprintf($format1) );
} catch (\Error $e) {
    echo $e->getMessage(), "\n";
}
try {
    var_dump( sprintf($format2,$arg1) );
} catch (\Error $e) {
    echo $e->getMessage(), "\n";
}
try {
    var_dump( sprintf($format3,$arg1,$arg2) );
} catch (\Error $e) {
    echo $e->getMessage(), "\n";
}

// with two argument less than expected
try {
    var_dump( sprintf($format2) );
} catch (\Error $e) {
    echo $e->getMessage(), "\n";
}
try {
    var_dump( sprintf($format3,$arg1) );
} catch (\Error $e) {
    echo $e->getMessage(), "\n";
}

// with three argument less than expected
try {
    var_dump( sprintf($format3) );
} catch (\Error $e) {
    echo $e->getMessage(), "\n";
}

echo "Done";
?>
--EXPECTF--
*** Testing sprintf() : error conditions ***

-- Testing sprintf() function with Zero arguments --
sprintf() expects at least %d parameter, %d given

-- Testing sprintf() function with less than expected no. of arguments --
Too few arguments
Too few arguments
Too few arguments
Too few arguments
Too few arguments
Too few arguments
Done
