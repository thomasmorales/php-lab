<html>
<body>
<?php

class Calculator
{
 function div($x, $y) {
   print "\n";
   return $x/$y;
 }
 function mul($x, $y) {
   print "\n";
   return $x*$y;
 }
 function sub($x, $y) {
   print "\n";
   return $x-$y;
 }
 function sum($x, $y) {
   print "\n";
   return $x + $y;
 }
 function ope($operator){
   if ($operator=='div'){
     return "/";
  if ($operator=='mul'){
      return "*";
  if ($operator=='sub'){
      return "-";
  if ($operator=='mul'){
      return "*";
   }
 }
}
$calculator= new Calculator();
$x= $_GET["x"];
$y= $_GET["y"];
$op= $_GET["op"];
echo "<b style='font-size: 40px;'>".$x, $calculator->$op($x,$y)."</b>";
?>
</body>
</html>
