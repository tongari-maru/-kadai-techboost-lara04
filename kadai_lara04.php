<?php //課題1
function double($num){
  $result=0;
  $result+=$num*2;
  echo $result;
}
double(3);
?>

<?php //課題2
function plus($a,$b){
  $result=0;
  $result+=$a+$b;
  echo $result;
}
plus(2,3);
 ?>

<?php //課題3
function cross($arr){
 $a=1;
 foreach ($arr as $b) {
   $a *=$b;
 }
 echo $a;
}
cross(array(1, 3,5,7,9));
 ?>

 <?php //課題4
 function max_array($arr){
 // とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 if($max_number<$a){
   $result=$a; }
 }
 echo $result;
 }
 echo max_array(array(1, 3, 5 ,7, 9));
  ?>
