<?php

echo phpversion();

//字符串函数总结


$author="lester@example.com";
$author=str_replace("@", "at", $author);//指定字符串替换
echo "<hr>";
echo $author;
echo "<hr>";
$author = strstr($author,"at");  //返回被截取字符串（从指定字符串开始到该字符串结束，包含指定的起始字符串）
echo $author;
echo "<hr>";
$author = ltrim(strstr($author,"at"), "at");//去除左边指定字符串at
echo $author;
echo "<hr>";

/**
 * strpos — 查找字符串首次出现的位置
 * int strpos ( string $haystack , mixed $needle [, int $offset = 0 ] )  返回 needle 在 haystack 中首次出现的数字位置
 * offset
        如果提供了此参数，搜索会从字符串该字符数的起始位置开始统计。 如果是负数，搜索会从字符串结尾指定字符数开始（从7.1.0版本支持负数）。
 */
$substr = "index.html";
$log = <<< logfile
    192.168.1.11:/www/htdocs/index.html:[2016/08/10:21:58:27]
    192.168.1.11:/www/htdocs/index.html:[2016/08/18:01:51:37]
    192.168.1.11:/www/htdocs/index.html:[2016/08/20:11:48:27]
logfile;
$pos =strpos($log, $substr); //返回目标字符串在指定字符串中第一次出现的位置  int类型

// 忽视位置偏移量之前的字符进行查找
$newstring = 'abcdef abcdef';
$poss = strpos($newstring, 'a',1); // $pos = 7, 不是 0   offset意味着从当前的offset开始查找，如果找到了，返回该字符串在原字符串的真实位置
var_dump($poss);
echo $poss;
echo "<br>";


