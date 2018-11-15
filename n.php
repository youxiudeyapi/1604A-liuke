<?php 
function upAndS($array,$s)
{
    $a = end($array);
    $b = prev($array);
    if(($a+$b)<$s) return false;
    foreach($array as $key=>$val){
        if($val>$s){
            unset($array[$key]);
        }
    }
    $arr = array();
    foreach($array as $key=>$val){
        foreach($array as $k=>$v){
            if($val!=$v){
                $a = $val+$v;
                if($a==$s){
                    $arr[$key] = array($val,$v);
                }
            }
        }
        unset($array[$key]);
    }
    $are = array();
    foreach($arr as $key=>$val){
        $are[] = array_product($val);
    }
    sort($are);
    return $are[0];
}

 ?>