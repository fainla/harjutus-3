<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>
<body>
	<h1>Muutujad<h1>

<?php
    $variable = 10;
    echo $variable;
    echo "<br>";
?>
<?php
    $variable = 20;
    echo $variable;
?>
<h2>Stringid</h2>
<?php
 	echo "Hello world! <br> ";
?>
<?php
	 echo 'Hello World!';
?>

<?php
    $number1 ="24";
    $number2 ="26";
    echo $number1 . $number2;
?>
    <h2>Nimekirja väljastamine muutujate ja stringide abil</h2>
<?php
   	$student1 ="Syret";
   	$student2 ="Anneli";
   	$student3 ="Margit";
   	$student4 ="Eve";
   	$student5 ="Fränk";

?>
<?php
   		echo "<li>" . $student1 . "</li>";
   		echo "<li>" . $student2 . "</li>";
   		echo "<li>" . $student3 . "</li>";
   		echo "<li>" . $student4 . "</li>";
   		echo "<li>" . $student5 . "</li>";
?>
<?php 

	$firstName ="Fränk"; 
	$lastName ="Ainla";
	$fullName = $firstName . " " . $lastName;
	echo "$fullName";
?>	
	<br>

<?php

	$test = "Testmime";
	echo "$test kas interpolatsioon töötab";
	$age = "24";
	echo "Ma olen $age-e aastane";
?>

<h2>Täisarvud</h2>
<?php
	$variable ="20";
	$variable1 ="13";
	echo ($variable * $variable1) * 2;
?>

</body>
</html>


