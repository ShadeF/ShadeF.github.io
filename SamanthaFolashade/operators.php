<!DOCTYPE html>
<html>
<head>
	<title>PHP Operators</title>
</head>
<body>
	<h1>Arithmentic Operators</h1>
	<?php
		$a= 78;
		$b= 50.65;
		//addition
		$c = $a + $b;
		echo "The result of additon is $c <br>";
		//subtration
		$c = $a - $b;
		echo "The result of subtration: $c <br>";
		//multiplication
		$c = $a * $b;
		echo "The result of multiplication is $c <br>";
		//division
		$c = $a / $b;
		echo "The result of dividing is $c <br>";
		//modulusRemainder
		$c = $a % $b;
		echo "Remainder after division is $c <br>";
		//post-increment
		$c = $a++; //$c = $a + 1;
		echo $c;
		echo $c;
		//pre-increment
		$c = ++$b;
		echo $c;
		$c += 20; //$c = $c + 20
		$c++; //= $c = $c + 1; 
		$c--; //= $c = $c - 1; 
		$c-= 67; //= $c = $c - 67;
	 ?>
	 <h2>Comparison Operators</h2>
	 <?php 
	 /* 
	 	are used inside conditional statements to compare
	 	different values and always evaluate to a boolean
	 	== Equality operator: it checks whether the operand on the right is equal to the operand to the left. if so, it
	 	returns true, else it returns false 4== "67"
	 	=== Strict Equality operator: it compares both value and type e.g 10 === "10"
	 	!= Not equal operator: returns true us the the operand on the right is NOTEQUAL to the operand on the left e.g 5!= 50
	 	< Less than sign: e.g 5<10; checks if the value in the right is less than the value on the left
	 	<= Less than or equal to sign: e.g 5 <= 5; checks if the value in the right is less than or equal the value on the left
	 	> Greater than
	 	>= Greater than or equal to
	 */	

	 	$num1 = 45; 
	 	$num2 = 45;
	 	if ($num1 >= $num2) {
	 		// this will run if condition is true
	 		echo "Num1 is greatrer than num2";
	 	}  
	 	?>
	 <h2>Logical Operators</h2>
	 <?php 
	 	//used to combine more than two conditions and return something
	 // && Logical and: ONLY returns TRUE if all the conditions being compared are true
	 // || Logical or: Returns true if any of the conditons being checked is true 
	 // ! Logical not: Returns true if a condition is false and false if a condition is true
	 $cond1 = true;
	 $cond2 = true;
	 $cond3 = true;
	 	if ($cond1 && $cond2 && $cond3) {
	 		echo "All conditions are true <br>";
	 	}
	 $cond1 = true;
	 $cond2 = false;
	 $cond3 = false;
	 	if ($cond1 || $cond2 || $cond3) {
	 		echo "All conditions are true <br>";
	 	}

	 	echo "<hr>";
	 	if (!false) {
	 		echo "This will run if condition evaluates to true";
	 	}if (!true) {
	 		echo "This will run if condition evaluates to true";

	 	}

	 	echo "<hr>";

	 	/* 

			//assignment operators
			=
			+= a // c = c + a;
			-= c -=a // c = c - a;
			/= c /=a = c = c / a;
			*= c* =*a // c = c * a;

	 	*/

			// $c=20;
			// $c = $c + 10;
			// //DRY -
			// $c+=10
		?>

		<h1> Challenge </h1>
		<?php 
			echo "<br>";
			$c= 8;
			echo "The value is now $c.";
			$c= $c + 2;
			echo "<br>";
			echo "<br>";
			echo " Add 2. The value is now $c.";
			$c= $c - 4;
			echo "<br>";
			echo "<br>";
			echo "Subtract 4. The value is now $c.";
			$c = $c * 5;
			echo "<br>";
			echo "<br>";
			echo "Multiply by 5. The value is now $c.";
			echo "<br>";
			echo "<br>";
			$c/=3;
			echo "Divide by 3. The value is now $c.";
			echo "<br>";
			echo "<br>";
			$c++;
			echo "Increment value by one. The value is now $c.";
			echo "<br>";
			echo "<br>";
			$c--;
			echo "Decrement value by one. The value is now $c.";
			echo "<br>"; 
			echo "<br>"; 
		 ?>
</body>
</html>