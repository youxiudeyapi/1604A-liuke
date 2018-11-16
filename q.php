<?php 
// $arr = range(5,80);
// echo dz($arr,150);
// echo "<br>";
// echo upAndS($arr,150);
// // function dz($arr,$num){
// //   $small = 1000000;
// //   foreach($arr as $v){
// //     foreach($arr as $val){
// //       if($v + $val == $num && $v != $val){
// //         if($small > $v * $val){
// //           $small = $v * $val;
// //           return $v*$val;
// //         }
// //       }
// //     }
// //   }
// // }

// function dz($arr,$num){
//   $t_start = microtime();
//   $small=100000;
//   foreach($arr as $v){
//     foreach($arr as $val){
//       if($v + $val == $num && $v != $val){
//         if($small > $v * $val){
//           $small = $v * $val;
//           $a = $v.$val;
//         }
//       }
//     }
//   }
//   $t_end = microtime();
//   $i=$t_end - $t_start;
//   return $a.'/'.$i;
// }


// function upAndS($array,$s)
// {
//     $t_start = microtime();
//     $a = end($array);
//     $b = prev($array);
//     if(($a+$b)<$s) return false;
//     foreach($array as $key=>$val){
//         if($val>$s){
//             unset($array[$key]);
//         }
//     }
//     $arr = array();
//     foreach($array as $key=>$val){
//         foreach($array as $k=>$v){
//             if($val!=$v){
//                 $a = $val+$v;
//                 if($a==$s){
//                     $arr[$key] = array($val,$v);
//                 }
//             }
//         }
//         unset($array[$key]);
//     }
//     $are = array();
//     foreach($arr as $key=>$val){
//         $are[] = array_product($val);
//     }
//     sort($are);
//      $t_end = microtime();
//      $i=$t_end - $t_start;
//     return $are[0].'/'.$i;
// }

// 11 16/
$str = 'abcdefghabcdefg';

echo first($str);

function first($str)
{
    $arr = str_split($str);
    $cnt = array_count_values($arr);
    foreach($cnt as $key=>$val){
        if($val==1){
            return stripos($str,$key);
        }
    }
    return -1;
}
 ?>