<?php 
//索引数组
$aa=array("1","2","3","4","5","6");
$ab=array("aa","bb","cc","dd","ee","ff");
$abc=array("1","1","1","3","b","b");
//关联数组
$a=array('a'=>'0','b'=>'1','c'=>'2','d'=>'3');
//二维数组
$aaa=array('a'=>array('a'=>'0','b'=>'1','c'=>'2','d'=>'3'),'b'=>array('a'=>'3','b'=>'2','c'=>'1'));
$b=array_change_key_case($a,CASE_UPPER);
$bb=array_change_key_case($a,CASE_LOWER);
$c=array_chunk($aa,3,true);
$d=array_column($aaa,'a');
$e=array_combine($aa,$ab);
$f=array_count_values($abc);



/**
 * 				
 */
echo "用 CASE_UPPER,将数组的键转化为大写";
echo "<pre>";
print_r($b);
echo "</br>";
/**
 * 
 */
echo "用 CASE_LOWER,将数据的键值转化为小写";
echo "</br>";
print_r($bb);
/**
 * 
 */
echo "用 array_chunk,把数组分割为有两个元素的数组,并保留原数组中的键名";
echo "</br>";
print_r($c);
/**
 * 
 */
echo "用 array_column,返回数组中某个单一键的值";
echo "</br>";
print_r($d);
/**
 * 
 */
echo "用 array_combine,来合并来创建一个新数组";
echo "</br>";
print_r($e);
/**
 * 
 */
echo "用 array_count_values,来返回数组中出现所以值的次数";
echo "</br>";
print_r($f);
 ?>

