<?php

declare(strict_types=1);
 
// function helloWorld(bool $a, bool $b, bool $c): string
// {
//     if ($a) {
//         if ($b && !$c) {
//             return 'Goodbye Cruel World!';
//         }
 
//         if (!$b && !$c) {
//             return 'Nothing here';
//         }
//     }
//     if (!$b) {
//         if (!$a && (!$b && $c)) {
//             return 'Hello, World!';
//         }
 
//         return 'Goodbye World!';
//     }
 
//     return 'Not quite.';
// }
 
// $a=false;
// $b=false;
// $c=true;

// echo helloWorld($a,$b,$c);


$s1='Edmonds';
$s2='Commerce';
$s3='Commerce';


$combined="$s1 $s2";

// $combined=$s1 + $s2;

$emptyString='fff'; $combined=implode($emptyString, array($s1,$s2, $s3));

echo $combined;


 
$a         = 1;
$question4 = (static function (int $b) use ($a): int {
    {
        $a    += $b;
        $func = static function (int $a): int {
            return ++$a;
        };
 
        return ($func(++$a) * $func($a++));
    }
})(1);

echo $question4;