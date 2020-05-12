<?php
require_once('html.php');
echo '<pre>';
echo 'array_change_key_case</br>';
var_dump(array_change_key_case(array(24, 'z'=>'das', array('a'=>5), 'Zs'=>'dsa'), CASE_UPPER));
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
echo 'array_reduce_recursive</br>';
var_dump(array_replace(array('lo'=>5757, 545, 'dsa'=>'sda', 55), array(666, 'test'=>'tesss'), array('kjhdfas'=>'Jakarta')));
echo 'array_replace_recursive</br>';
var_dump(array_replace_recursive(array(array(11)), array(array(14745))));
echo 'array_Flip</br>';
var_dump(array_flip(array('xa', 'jasdhgdfsajhg')));
echo 'array_reverse</br>';
var_dump(array_reverse(array('sda'=>356, 45, 4=>4), true));//Have a preserve key
echo 'array_search</br>';
var_dump(array_search(array('asd', array(14, array('das'))), array('sa' => array('asd', array(14, array('das'))))));
echo 'array_shift</br>';
$array1 = array(245, 545, 'sda');
var_dump(array_shift($array1));
var_dump($array1);
echo 'array_slice</br>';
var_dump(array_slice(array(1,2,4,5,5,5,5,7), -2, 3, true));//preserve keys
echo 'array_splice</br>';
$array1 = array(1,2,3,4,5,6,7,8,9);
var_dump(array_splice($array1, -5, -3, 'test'));
var_dump($array1);
echo 'array_sum</br>';
var_dump(array_sum(array(1,5,1.122)));
echo 'array_values</br>';
var_dump(array_values(array('das'=>'sdsa')));//array reindex
echo 'array_unique</br>';
var_dump(array_unique(array('1', 1, SORT_REGULAR)));
echo 'array_ushift</br>';
$array1 = [1,2,3,54];
var_dump(array_unshift($array1, 'dsfa', 'dsadsa'));
var_dump($array1);
echo 'array_walk</br>';
$array1 = [1,2,5,8,-55];
function arraywalk(&$val, $key, $userData)
{
    if ($val < 0) {
        $val = 'Moins que zero';
    } else {
        $val = 'Plus que zero ou zero';
    }
}
var_dump(array_walk($array1, 'arraywalk', ' LOL'));
var_dump($array1);
echo 'array_walk_recursive</br>';
$array1 = array(1,2,5, array(-9, -5, array(array())), array('sda','fsdf'));
function arraywalkrec(&$val, $key)
{
    if(gettype($val) != 'integer') {
        $val = 'is not number';
    } elseif($val < 0) {
        $val = 'Moins que zero';
    } else {
        $val = 'Plus que zero ou zero';
    }
}
array_walk_recursive($array1, 'arraywalkrec');
var_dump($array1);
/*  ---SORT FLAGS---*/
/*
 * SORT_REGULAR - compare items normally
 * SORT_NUMERIC
 * SORT_STRING
 * SORT_LOCALE_STRING
 * SORT_NATURAL
 * SORT_FLAG_CASE
*/
/* SORT ORDERS
 * SORT_ASC
 * SORT_DESC
*/
/*  ---SORT---  */
echo 'array_multisort</br>';
$array1 = array(array(1,2,3), array('1.5', '1.4555', 1.3));
array_multisort(
    $array1[0], SORT_DESC, SORT_STRING,
    $array1[1], SORT_ASC, SORT_STRING
);
var_dump($array1);
echo 'sort</br>'; //low to high, doesn't save keys
$array1 = array(32,15, array(321, array(554), array(1)), 558,'dsa',array(1));
var_dump($array1);
echo 'asort</br>';//low to high, saves keys
$array1 = array('un' => 1, array('deux' => '2', 'un'=>1), array('deux' => '2', 'un'=>5), 'test' => 'dsakjh');
asort($array1, SORT_REGULAR);
var_dump($array1);
echo 'arsort</br>';//high to low, saves keys
$array1 = array('un' => '-1', array('deux' => '2', 'un'=>1), array('deux' => '2', 'un'=>5), 'test' => 'dsakj', 'deux'=>'-2');
arsort($array1, SORT_REGULAR);
var_dump($array1);
echo 'ksort</br>';//sorts by key, low to high, saves keys
$array1 = array('deux' => 2, 'un'=>1);
ksort($array1);
var_dump($array1);
echo 'krsort</br>';// sorts by key, high to low, saves keys
$array1 = array('deux' => 2, '-un'=>1, 'trois'=>3);
krsort($array1);
var_dump($array1);
echo 'natcasesort</br>';//case insensitive
$array1 = array('Index1.php', 'index.php', 'index.html');
natcasesort($array1);
var_dump($array1);
echo 'natsort</br>';
$array1 = array('Index1.php', 'index.php', 'index.html');
natsort($array1);
var_dump($array1);
echo 'rsort</br>';//high to low, doesn't save keys, sort by value
$array1 = array('un' => '-1', array('deux' => '2', 'un'=>1), array('deux' => '2', 'un'=>5), 'test' => 'dsakj', 'deux'=>'-2');
rsort($array1);
var_dump($array1);
echo 'shuffle</br>';
$array1 = range(-3, 2);
shuffle($array1);
var_dump($array1);
echo 'uasort</br>';
function uasortfc($a, $b)
{
    $key = rand(1, 10000);
    echo $key, ' ', $a, ' ', $b, ' ';
    if(is_string($a)) {
        return -1;
    }
    return 1;
}
$array1 = array('test'=>1, 'iydsg', 'un'=>2, 'desxc'=>'fsdfdsf', 55);
var_dump(usort($array1, 'uasortfc'));
var_dump($array1);
echo 'uksort</br>';
echo 'usort</br>';
/*  ---END SORT---  */
echo 'compact</br>';
$moi = 'Alex';
$ville = 'Marseille';
$pays = 'La France';
$vars = array('ville', 'pays');
$testArr = compact($vars, 'moi');
var_dump($testArr);
echo 'current</br>';
var_dump(current($array1));
echo 'extract</br>';
extract($testArr, EXTR_PREFIX_ALL, 'extr');
var_dump($extr_ville, $extr_pays, $extr_moi);
echo 'in_array</br>';
$array1 = array('12.4', array(1, array(21, 's')));
var_dump(in_array(12.4, $array1));
var_dump(in_array(array(1, array(21, 's')), $array1));
var_dump(in_array(12.4, $array1, true));
echo 'list</br>';
$arr = array('Alex', 'AlexSkorov');
list($name, $lastName) = $arr;
var_dump($name, $lastName);
echo 'pos</br>';
echo 'reset</br>';
