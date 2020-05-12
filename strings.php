<?php
echo 'addcslashes</br>';
$string = "abcdefghijklmnopqrstuvwxyz0123456789''";
var_dump(addcslashes($string, '0..d'));
echo '</br>addslashes</br>';
var_dump(addslashes($string));// \, ', ", NUL BYTE
echo '</br>chop</br>';//Alias of rtrim
var_dump(chop($string, "'"));
echo '</br>chr</br>';
var_dump(chr(124));
echo '</br>chunk_split</br>';
var_dump(chunk_split($string, 2, "\r"));
echo '</br>count_chars</br>';
//0: key - ASCII code, value - quantity in string
//1: as 0 but if value is equal to 0 so this code not will in array
//2: as 0 but only zero values in the array
//3: a string containing all unique characters is returned
//4: a string containing all not used characters is returned
var_dump(count_chars($string, 3));
echo '</br>crc32</br>';
//Вычисляет контрольную сумму
var_dump(crc32($string));
echo '</br>explode</br>';
$str = 'Alex,19,2000';
var_dump(explode(',', $str));
echo '</br>implode</br>';
$array = array('Alex', 19, 2000);
var_dump(implode($array, ','));
/*
    %b - binary
    %c - symbol from ASCII
    %d - as int (со знаком)
    %F - as float (non-locale aware)
    %f - as float (locale aware)
    %o - as int in octal number
    %s - as string
    %u - as unsigned decimal number
    %x - as a hexadecimal number (with lowercase letters).
    %X - as a hexadecimal number (with uppercase letters).
*/
echo '</br>printf</br>';
printf('%d', -755);
echo '</br>vprintf</br>';
echo '</br>fprintf</br>';
echo '</br>vsprintf</br>';
var_dump(vsprintf('%u-%s', array(12, 'sat')));
echo '</br>vfprintf</br>';
echo '</br>sprintf</br>';
echo '</br>strcmp</br>';
var_dump(strcmp('Aa', 'aa'));
echo '</br>htmlentities</br>';
$link = htmlentities('<a href="https://test.com/Test Page.php?lfdss=s a">Test LINK</a>');
var_dump($link);
echo '</br>html_entity_decode</br>';
var_dump(html_entity_decode($link));
echo '</br>htmlspecialchars</br>';
$link = htmlspecialchars('<a href="https://test.com/Test Page.php?lfdss=a>b">Test LINK</a>');
var_dump($link);
echo '</br>htmlspecialchars_decode</br>';
var_dump(htmlspecialchars_decode($link));
echo '</br>lcfirst</br>';
var_dump(lcfirst('Hy'));
echo '</br>ucfirst</br>';
var_dump(ucfirst('hy'));
echo '</br>ltrim</br>';
var_dump(ltrim("     \n\r test"));
echo '</br>md5_file</br>';
var_dump(md5_file('http://myphp.com/array.php'));
echo '</br>md5</br>';
var_dump(md5('Hello World'));
echo '</br>nl2br</br>';
$string = "This\r\nis\n\ra\nstring\r";
echo nl2br($string);
echo '</br>ord</br>';
var_dump(ord('k'));
echo '</br>parse_str</br>';
parse_str('price.USD.default=4%3A6&brand=Generic&color=Yellow~Gray', $result);
var_dump($result);
echo '</br>quotemeta</br>';
echo '</br>rtrim</br>';
echo dechex(245);
echo '</br>sha1_file</br>';
var_dump(sha1_file('array.php'));
echo '</br>str_replace</br>';
var_dump(str_replace(array('Alex', '19', '2000'), array('Test', 31, 2001), 'My name is Alex. I\'m 19 years. I was born in 2000'));echo '<br>';
var_dump(str_replace(array('Alex', '19', '2000'), 'SECRET', 'My name is Alex. I\'m 19 years. I was born in 2000'));echo '<br>';
var_dump(str_replace('m', '', 'My name is Alex. I\'m 19 years. I was born in 2000'));
echo '</br>str_ireplace</br>';
var_dump(str_ireplace('m', '', 'My name is Alex. I\'m 19 years. I was born in 2000'));
echo '</br>str_pad</br>';
var_dump(str_pad('test_str', 15, '$kjgjkfahgsdjkhfgasdjukhf', STR_PAD_LEFT));
echo '</br>str_repeat</br>';
var_dump(str_repeat('-', 10));
echo '</br>str_rot13</br>';
var_dump(str_rot13('string'));
echo '</br>str_shuffle</br>';
var_dump(str_shuffle('rand_symbols'));
echo '</br>str_split</br>';
var_dump(str_split(htmlspecialchars('<a href="https://test.com/Test Page.php?lfdss=a>b">Test LINK</a>'), 5));
echo '</br>strcasecmp</br>';
var_dump(strcasecmp('Ab', 'ab'));
echo '</br>strncasecmp</br>';
var_dump(strncasecmp('AAbb', 'AAbC', 3));
echo '</br>strncmp</br>';
var_dump(strncmp('dsad', 'dsaa', 3));
echo '</br>strchr</br>';
//alias of strstr
echo '</br>strstr</br>';
var_dump(strstr('testasdfфыв', 'фы', true));
echo '</br>stristr</br>';
echo '</br>preg_match</br>';
var_dump(preg_match('/(^AbC)/i', 'abcdefghijklmnopqrstuvwxyz0123456789'));
echo '</br>strip_tags</br>';
echo '</br>stripcslashes</br>';
var_dump(stripcslashes(addcslashes('abcdefghijklmnopqrstuvwxyz0123456789', '0..d')));
echo '</br>stripslashes</br>';
var_dump(stripslashes(addslashes('abcdefghijklmnopqrstuvwxyz012\'3456"789')));
echo '</br>strpos</br>';
var_dump(strpos('kasdfhjgflksdajhffialijhdf da\'', ' '));
echo '</br>substr_replace</br>';
var_dump(substr_replace('jhgasdgdfjksaghfjkadsghkijhsdakjh', 'NULL', 0, 15));
echo '</br>strlen</br>';
var_dump(strlen('dfkjhagfskjhdsgfjksdhkl,j  dass '));
echo '</br>strtr</br>';
echo '</br>substr_compare</br>';
echo '</br>strrchr</br>';
var_dump(strrchr('kjjhgasdfkjahgsdjdsahjjgfhjk', 'j'));
echo '</br>strrev</br>';
echo '</br>strrpos</br>';
var_dump(strrpos('tekfdshjgkjhgfte', 'te'));
echo '</br>strripos</br>';
var_dump(strripos('Ffkdaskaffbhv', 'ff'));
echo '</br>stripos</br>';
var_dump(stripos('ggjfdhsgg', 'gG'));
echo '</br>substr_count</br>';
var_dump(substr_count('GGfdggsdfggadksljfh', 'gg'));
echo '</br>substr</br>';
var_dump(substr('daslkjfghadsklj', 0, 5));
echo '</br>ucwords</br>';
var_dump(ucwords('djsfvd,dajfg,fdakjshf,akhdg jhg', ', '));
echo '</br>wordwrap</br>';
