<?php
$flg = True; //
if($flg){
echo '$flg is true'; //
}else {
  echo '$flg is false'; //
}

echo "<br />";

/*
$num = 15;
if($num > 10){
  echo '$num is bigger then 10'; //
} else
{
  echo '$num is 10 or less'; //
}

echo "<br />";
*/
/*
$num = 10;
if($num > 5 && $num<10){
  echo '$num is bigger then 5, and smaller then 10'; //
} else
{
  echo '$num is bigger then 5, and smaller then 10 の範囲外'; //
}

echo "<br />";



$name = 'Suzuki';
if($name == 'Tanaka'){
  echo '$name is ta-na-ka'; //
} elseif($name == 'Sato')
{
  echo '$name is sa-to'; //
} elseif($name == 'Yamada')
{
  echo '$name is ya-ma-da'; //
}else
{
  echo '$name is nobady'; //
}



echo "<br />";

*/



$name = 'Suzuki';
if($name == 'Tanaka') :
  ?>
$name is ta-na-ka
<?php elseif($name == 'Sato'):  ?>
  $name is sa-to
<?php elseif($name == 'Yamada') : ?>
  $name is ya-ma-da
<?php else : ?>
  $name is nobady
<?php endif; ?>
