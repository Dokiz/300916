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
<meta charset="utf-8">
<?php
$check = array( 
"now", 
"10 September 2000", 
"41 day", 
"41 week", 
"+1 week 2 days 4 hours. 2 seconds", 
"next Thursday", 
"last Monday", 
); 
?> 
<table width="100%"> 
<tr align="left"> 
<^п>Входная CTpoKa</th> 
<th>Timestamp</th> 
<^п>Получившаяся naTa</th> 
<th>CeroflHH</th> 
</tr> 
<?foreach ($check as $str) {?> 
<tr> 
<tdx?=$str?x/td> 
<tdx?=$stamp=strtotime ($str) ?></td> 
<tdx?=date("Y-m-d H:i:s", $stamp) ?x/td> 
<tdx?=date("Y-m-d H:i:s", time () ) ?x/td> 
</tr> 
<?}?> 
</table><br>
<?php
$jd = GregorianToJD(10, 11, 1970); 
echo "$jd<br>"; 
$gregorian = JDToGregorian($jd); 
echo "$gregorian<br>"; 
$list = explode($gregorian, "/");"<br>";

 
function local2gm($localStamp=false) { 
if ($localstamp === false) $localStamp = time(); 

$tzOffset = date("Z", $localStamp) ; 
 
return $localStamp - $tzOffset; 
} 
 
function gm21ocal($gmStamp=false, $tzOffset=false) { 
if ($gmStamp === false) return time(); 

if ($tzOffset === false) 
$tzOffset = date("Z", $gmStamp); 
else 
$tzOffset *- 60*60; 

return $gmStamp + $tzOffset; 
} 
?> 
