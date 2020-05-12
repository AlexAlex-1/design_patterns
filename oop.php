<?php
/*-----------------------------------------------------------------------Magic Methods-------------------------------------------------*/
class Magic
{
    public $a = "A";
    protected $b = array('a'=>'A', 'b'=>'B', 'c'=>'C');
    protected $c = array(1,2,3);

    public function __get($v)
    {
        echo "$v,";
        return $this->b[$v];
    }

    public function __set($var, $val)
    {
        echo "$var: $val";
        $this->$var = $val;
    }
}

$m = new Magic();
echo $m->a.",".$m->b.",".$m->c.",";
/*$m->c = 'C';
echo $m->a.",".$m->b.",".$m->c;*/
echo '1'+'0.54', print(1) + 1;
class Destruct
{
    public function __destruct () {
        echo '<br>This is desctruct function';
    }
}
new Destruct();
class MagicCall
{
    public function __call($name, $arg)
    {
        echo "<br>{$name} méthode n'existe pas";
    }

    public static function __callStatic($name, $arg) // Depuis PHP 5.3.0
    {
        echo "<br>{$name} méthode statique n'existe pas";
    }
}
$magicCall = new MagicCall();
$magicCall->testCall();
$magicCall::testCall();
class issetUnset
{
    public $a = 'A';

    private $b = 'B';

    public function __isset($name)
    {
        echo "<br>Est-ce que '$name' est défini ?\n - ";
        echo isset($this->$name) ? 'true' : 'false';
    }

    public function __unset($name)
    {
        unset($this->$name);
    }

    public function get($name)
    {
        return $this->$name;
    }
}
$issetUnset = new issetUnset();
isset($issetUnset->b);
empty($issetUnset->b);
unset($issetUnset->b);
isset($issetUnset->b);
#-----------------------------------------------------------------------End Magic Methods----------------------------------------------------
#-----------------------------------------------------------------------Predefined Constants-------------------------------------------------
echo "<br>" . PHP_VERSION . '<br>';
echo phpversion();
echo "<br>" . PHP_MAJOR_VERSION;
echo "<br>" . PHP_MINOR_VERSION;
echo "<br>" . PHP_RELEASE_VERSION;
echo "<br>" . PHP_OS;
#-----------------------------------------------------------------------End Predefined Constants-------------------------------------------------
#-----------------------------------------------------------------------Predefined Variables-----------------------------------------------------
$testGlob = 'outside function';
function testVar()
{
    $testGlob = 'inside function';
    echo "<br>$testGlob / {$GLOBALS['testGlob']}";
}
testVar();
echo '<br>_GET<br>';
var_dump($_GET);
echo '<br>_FILES<br>';
var_dump($_FILES);
echo '<br>_POST<br>';
var_dump($_POST);
echo '<br>_REQUEST<br>';
var_dump($_REQUEST);
echo '<br>_COOKIE<br>';
var_dump($_COOKIE);
var_dump($argv);
#-----------------------------------------------------------------------End Predefined Variables-------------------------------------------------
trait TestTrait
{
    public function addition($a, $b)
    {
        return $a + $b;
    }
}

class ClassTestTrait
{
    use TestTrait;
}

$traitClass = new ClassTestTrait;
echo nl2br("\n") . $traitClass->addition(5, 5);
