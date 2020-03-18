<?php
require_once('html.php');
echo '<pre>';
echo 'array_chunk</br>';
var_dump(array_chunk(array('a','a','a'), 2, true));
echo 'array_column</br>';
var_dump(array_column(array(array('lol' => 'HY'), array('id'=>3245,'lol' => 'Meow', array('lol' => 'OOOO'))), 'lol', 'id'));
echo 'array_combine</br>';
var_dump(array_combine(array('lol'=>'sda'), array('llo'=>'dasdsa')));
echo 'array_count_values</br>';
var_dump(array_count_values(array(1)));//in array only strings or int
echo 'array_diff</br>';
var_dump(array_diff(array('1', 2), array(3), array(1)));
echo 'array_key_last</br>';
var_dump(array_key_last(array(1,2,'i'=>3)));
echo 'array_key_first</br>';
var_dump(array_key_first(array(1,2,'i'=>3)));
echo 'array_diff_key</br>';
var_dump(array_diff_key(array('a'=>1,'c'=>2), array('c'=>23), array(1)));
echo 'array_diff_assoc</br>';
var_dump(array_diff_assoc(array(1,2,3,5), array(2, 3=>5)));
echo 'array_diff_ukey</br>';
function test($a, $b)
{
    echo $a, '|', $b, '||';
}
var_dump(array_diff_ukey(array('a'=>2,'b'=>2,3,'I'=>214), array(2,2,'da'=>2), 'test'));
echo 'array_fill</br>';
var_dump(array_fill(-2, 2, 'Kate'));
echo 'range</br>';
var_dump(range('-2', '2', 2));//third is step
echo 'array_fill_keys</br>';
var_dump(array_fill_keys(array('a','b','c'), 'LOL'));
echo 'array_filter</br>';
var_dump(array_filter(array('i0'=>5, array(1) ,2,0,3), fn($a) => (gettype($a) == 'array') ? true :false));
echo 'array_intersect</br>';
var_dump(array_intersect(array('i'=>1,'b'=>0,'c'=>'h'), array('ii'=>1), array(1, 'h')));
echo 'array_intersect_key<br>';
var_dump(array_intersect_key(array('a'=>12,'k'=>10), array(1,'a'=>4), array('k'=>1,'a'=>1)));
echo 'array_intersect_assoc</br>';
var_dump(array_intersect_assoc(array(1,2,3), array(1,2), array(5,2)));//assoc uses keys and values
echo 'array_key_exists</br>';
var_dump(array_key_exists('1', array(1,2,2,310))); //false
echo 'array_keys</br>';
var_dump(array_keys(array('a'=>'a', 2, array('kl'))));
echo 'array_map</br>';
var_dump(array_map(null, array(1,2,3), array('un', 'deux', 'trois'), array('one', 'two', 'three', 'four')));/*return array of 3 arrays*/echo '</br>';
var_dump(array_map(fn($index1, $index2, $i3) => $index1 . $index2 . $i3, array('a'=>1,'b'=>2,3,4), array(1,2,3,5), array(1,2)));
echo 'array_merge_recursive</br>';
var_dump(array_merge_recursive());//return an empty array
var_dump(array_merge_recursive(array('a'=>array('aa'=>5454), array(12)), array('a'=>array('aa'=>2), 5, array(1223))));
echo 'array_merge<br>';
var_dump(array_merge());//return empty array
var_dump(array_merge(array('a'=>1, array(12)), array('a'=>2, 5, array(1223))));
echo 'array_pad<br>';
$array1 = array(111, 2, 3);
var_dump(array_pad($array1, -2, 'MEOW'));
echo 'array_pop<br>';
$array1 = array(1,2,5,6,array(1));
var_dump(array_pop($array1));
echo 'array_product<br>';
var_dump(array_product(array(2, 15)));
echo 'array_push<br>';
$array1 = [1, 2];
array_push($array1, array(5), 'ds', 1);
var_dump($array1);
echo 'array_rand</br>';
var_dump(array_rand(array('i'=>1,'b'=>2,3), 3));
echo 'array_reduce</br>';
$array1 = array(1,2,3,4,5,6,7);
function test1($carry, $item)
{
    return $carry + $item + 1;
}
var_dump(array_reduce($array1, 'test1'));

