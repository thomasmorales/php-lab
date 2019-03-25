
<?php

$names = array("Patrick", "John", "Marie", "Claire", "Paul");
foreach ($names as $name) {

	$pa_name= strstr($name, "pa");
	print "$pa_name ";
	if ($pa_name !="FALSE")
		print "$name ";
	if (strpos($name, "Pa")===0){
		print "$name, ";
	}
}


function sum($x, $y) {
	print "\n";
	return $x + $y;
}

echo sum(5, 7);




function sub($x, $y) {
	print "\n";
	return $x-$y;
}

echo sub(5, 7);


function mul($x, $y) {
	print "\n";
	return $x*$y;
}


function div($x, $y) {
	print "\n";
	return $x/$y;
}

echo div(5, 7);


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



}



$calculator = new Calculator();
echo $calculator->sum(5, 7);
echo $calculator->sub(8, 2);
echo $calculator->mul(2, 5);
echo $calculator->div(20, 4);


?>
