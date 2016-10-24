
<?php
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$option = $_POST['option'];
if (is_numeric($number1) && is_numeric($number2)) {
	if ($option == "add") {
		$value= $number1 + $number2;
	}
	if ($option == "multiply") {
		$value = $number1 * $number2;
	}
	if ($option == "subtract") {
		$value = $number1 - $number2;
	}
	if ($option == "divide") {
		$value = $number1 / $number2;
	}
	echo "$value";
}
else
{
	echo "enter a integer value";
}
?>