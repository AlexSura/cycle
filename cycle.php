<?php
$m=array();
$m[0]=mt_rand(0, 500);
$m[1]=mt_rand(0, 500);
$m[2]=mt_rand(0, 500);
$m[3]=mt_rand(0, 500);
$m[4]=mt_rand(0, 500);
$m[5]=mt_rand(0, 500);
$m[6]=mt_rand(0, 500);
$m[7]=mt_rand(0, 500);
$m[8]=mt_rand(0, 500);
$m[9]=mt_rand(0, 500);
print_r($m);
echo "<br/>";
$m_1=array(50,45,40,35,30);
$result=0;
foreach ($m_1 as $sum){
    $result+=$sum;
}
echo $result;
echo "<br/>";
$m_2=array(132,15,98,46,57,65);
print_r($m_2);
echo "<br/>";
krsort($m_2);
print_r($m_2);
echo"<br/>";

$m_3=array('a'=>'A','b'=>'B','c'=>'C','d'=>'D');
$bul=false;
foreach ($m_3 as $q=>$b){
    if ($bul) echo "$q=$b <br/>";
    $bul=!$bul;
}

$m_4=array(
    'шапка' => array ('красный','синий','зеленый'),
    'сцена' => array ('красный','синий','зеленый'),
    'пол' =>array ('красный','синий','зеленый'),
);
  /*  foreach ($m_4 as $k=>$v){
        foreach ($k=>$v1){
            echo "$v1";
        }*/

    



