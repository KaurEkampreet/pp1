<?php

function printArr($array)
{
    $count = count($array);
    for ($i = 0; $i < $count; $i++) {
        echo ($array[$i]) . "<br>";

    }
}

function largest($array)
{
    $count = count($array);
    $max = 0;
    for ($i = 0; $i < $count; $i++) {

       if ($array[$i] > $max)
       {
           $max = $array[$i];
       }

    }
    return $max;
}

function removeDups($array) {
    return array_unique($array);
}

function distribution($array) {
    sort($array);
    $arrayAssoc = array();
    foreach ($array as $arr) {
        if ( array_key_exists($arr, $arrayAssoc)) {
            $arrayAssoc[$arr]++;
        }
        else {
            $arrayAssoc[$arr] = 1;
        }
    }
    return $arrayAssoc;
}
