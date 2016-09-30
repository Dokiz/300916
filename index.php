<meta charset="utf-8">
<?php
echo date("l ds of F Y h:i:s A")."<br>";
echo date("Сегодня d.m.Y")."<br>";
echo date("Этот файл датирова d.m.Y,filectime(__FILE__)")."<br>";
echo date("M-d-Y", mktime(0,0,0,1,1,2005))."<br>";
echo date("M-d-Y", mktime(0,0,0,12,32,2004))."<br>";
echo date("M-d-Y", mktime(0,0,0,13,1,2004))."<br>";
$time = microtime(true);
printf("С начала эпохи Unix: %f секунд.<br>",$time);
echo "С начала эпохи Unix: $time секунд.<br>"."<br>";
setlocale(LC_ALL, '');
echo strftime("%B %Y года, %d число. Был %A, часы показывали %H:%M.");
?>