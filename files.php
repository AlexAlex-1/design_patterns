<?php
var_dump(stat('musique.php'));
require_once('html.php');
echo '<br>chown<br>';
var_dump(chown('yo', 'www-data'));
echo '<br>filesize<br>';
var_dump(round(filesize('strings.php')/1024, 2), 'KB');
echo '<br>basename<br>';
var_dump(basename('/etc/nginx/'));
echo '<br>chgrp<br>';
var_dump(chgrp('yo', 'alex'));
echo '<br>chmod<br>';
var_dump(chmod('yo', 0777));
symlink('test', 'meow_test');
echo '<br>disk_free_space</br>';
var_dump(disk_free_space('/')/1024/1024);
echo '<br>is_readable</br>';
var_dump(is_readable('test'));
var_dump(is_writable('test'));
/*==========================================================================================START F FUNCTIONS====================================================================================================*/
/*
    r - only read
    r+ - read and write
    w - only write if file not exists so try create it
    w+ - read and write if file not exists so try create it
    a - only write if file not exists so try create it
    a+ - read and write if file not exists so try create it
    x - write only if file not exists so try create it, if file exists throw E_WARNING
    x+ - read and write
    c
    c+
    e
*/
$handle = fopen('new', 'a+');
echo '<br>flock</br>';/* LOCK_SH /* LOCK_EX /* LOCK_UN */
var_dump(flock($handle, LOCK_EX));
echo '<br>fwrite</br>';
var_dump(fwrite($handle, rand(1,1000)."\n"));
flock($handle, LOCK_UN);
echo '<br>fflush</br>';/*--Pour ce soir--*/
fflush($handle);
echo '<br>ftell</br>';
var_dump(ftell($handle));
echo '<br>rewind</br>';
var_dump(rewind($handle));
echo '<br>fread</br>';
var_dump(fread($handle, filesize('new')));
echo '<br>feof</br>';
var_dump(feof($handle));
echo '<br>fseek</br>';
var_dump(fseek($handle, rand(0, filesize('new')), SEEK_SET));/*SEEK_SET/*SEEK_CUR/*SEEK_END*/
echo '<br>fgetc</br>';
var_dump(fgetc($handle));
echo '<br>fstat</br>';
var_dump(fstat($handle));
echo '<br>fputs</br>';/*Alias of fwrite*/
echo '<br>fgets</br>';
rewind($handle);
var_dump(fgets($handle));
echo '<br>ftruncate</br>';
var_dump(ftruncate($handle, 411));
echo '<br>fclose</br>';
var_dump(fclose($handle));
/*===========================================================================================END F FUNCTIONS=====================================================================================================*/
echo '<br>fileperms</br>';
var_dump(fileperms('test'));
echo '<br>readlink</br>';
var_dump(readlink('/etc/nginx/sites-enabled/shopia'));
echo '<br>disk_total_space</br>';
var_dump(round(disk_total_space('/')/1024/1024/1024, 3));
var_dump(is_uploaded_file('test'));
echo '<br>scandir</br>';
var_dump(scandir('.'));
echo '<br>is_file</br>';
var_dump(is_file('/etc/nginx/sites-available/shopia'));
echo '<br>is_dir</br>';
var_dump(is_dir('..'));
echo '<br>is_executable</br>';
var_dump(is_executable('install.sh'));
echo '<br>is_link</br>';
var_dump(is_link('/etc/nginx/sites-enabled/shopia'));
echo '<br>linkinfo<br>';
var_dump(linkinfo('/etc/nginx/sites-enabled/shopia'));
$fileCsv = fopen('super.csv', 'r');
$csvData = fgetcsv($fileCsv, 0, ',');
fclose($fileCsv);
$handle = fopen('super.csv', 'w');
fputcsv($handle, array('1,sa',2,3,5),',');
fclose($handle);
echo '<br>clearstatcache<br>';
$handle = fopen('test.txt', 'w');
echo 'Check perms of test.txt'; var_dump(fileperms('test.txt'));
echo 'Now we will change perms of this file! '; var_dump(chmod('test.txt', 0777));
echo 'Check perms of test.txt again: '; var_dump(base_convert(fileperms('test.txt'), 8, 10));
clearstatcache();
echo 'Check again after clearstatcache()'; var_dump(fileperms('test.txt'));
echo '<br>unlink<br>';//auto clear stat cache
var_dump(unlink('test.txt'));
echo '<br>copy<br>';
echo '<br>unset<br>';
$testVar = '';
echo 'Before unset. Is var "testVar" exists: ';
var_dump(isset($testVar));
unset($testVar);
echo 'After unset. Is var "testVar" exists: ';
var_dump(isset($testVar));
echo '<br>mkdir<br>';
var_dump(mkdir('testaa'));
echo '<br>rmdir<br>';
var_dump(rmdir('testaa'));
echo '<br>dirname<br>';
var_dump(dirname('/das/das/fdasfhjg/lakfsjs.py'));
echo '<br>fileatime<br>';
var_dump(fileatime('files.php'));
echo '<br>filectime<br>';
var_dump(filectime('rar'));
echo '<br>filegroup<br>';//return group id
var_dump(posix_getgrgid(filegroup('files.php'))['name']);
echo '<br>filemtime<br>';
var_dump(filemtime('rar'));
echo '<br>filetype<br>';
var_dump(filetype('App'));
echo '<br>rename<br>';
var_dump(rename('rar', 'rap'));
rename('rap', 'rar');
var_dump(glob('*{a}*.*', GLOB_BRACE));echo '<br>';//get files from dir which with 'a'
var_dump(scandir('../'));
echo '<br>fileowner<br>';
var_dump(posix_getpwuid(fileowner('rar'))['name']);
var_dump(lchgrp('meow_test', 'www-data'));
echo '<br>patchinfo<br>';
var_dump(pathinfo('play.svga'));//dirname, basename, extension, filename
echo '<br>realpath</br>';
var_dump(realpath('/var/www/html/myphp/meow_test'));//absolute path
echo '<br>readlink</br>';
var_dump(readlink('/etc/nginx/sites-enabled/shopia'));
echo '<br>readfile</br>';
readfile('meow_test');
