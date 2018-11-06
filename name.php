<?php
function one($e,$f)
{
    $c = range($e,$f);
    $c = implode($c);
    $arr = str_split($c);
    return array_count_values($arr)[1];
}