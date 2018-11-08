<?php 
// echo ugly(14);
// function ugly($ugly)
// {
//     if($ugly==1)return 1;
//     if(getUgly($ugly)==false)return "不是丑数";
//     $j = 1;
//     for($i=2;;$i++)
//     {
//         $a = getUgly($i);
//         if($a){
//             $j++;
//         }
//         if($i==$ugly){
//             return $j;
//         }
//     }
// }
// function getUgly($ugly)
// {
//    if($ugly<=0) return false;
//    while($ugly!=1)
//    {
//        while($ugly%2==0)
//        {
//            $ugly = $ugly/2;
//        }
//        while($ugly%3==0){
//            $ugly = $ugly/3;
//        }
//        while($ugly%5==0){
//            $ugly = $ugly/5;
//        }
//        return $ugly==1?true:false;
//    }
// }


function sixOne($n,$m)
{
    echo "<pre>";
    $a = 1;
    $arr = range(0,$n-1);
    while(true){
        if(count($arr)==1){
            return array_keys($arr)[0];
        }
        foreach($arr as $key=>$val){
            $a++;
            if($a==$m-1){
                unset($arr[$key]);
                $a=0;
            }
        }
    }
}


 ?>