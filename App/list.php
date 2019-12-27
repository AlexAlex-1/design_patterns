<?php
$root = $_SERVER['DOCUMENT_ROOT'];
$path = '/App/Patterns';
$full_path = $root . $path;
$patterns = scandir($full_path);
array_splice($patterns, 0, 2);
$tous = 21;
$ilya = 0;
foreach($patterns as $pattern) {
    $url = $path . '/' . $pattern . '/Index.php';
    echo nl2br("<a href='$url'>$pattern</a>\n");
    $tous--;
    $ilya++;
}
echo nl2br("Il y a: $ilya\n");
echo nl2br("Il reste: $tous\n");
echo nl2br("Pour aujourd'hui: " . floor($tous/4));
