<!DOCTYPE html>
<html>
<head>
	<title>Varaibles and Data Types in PHP</title>
</head>
<body>
	<h2>Variables</h2>
	<?php 
		// single line comment
		# single line comment as well
		/* 

			this is a 
			multine comment
			//camelCase oneWordInCamelCase
			//snakeCase one_word_in_snake_case
		*/ 
			echo "<h3>Variable Rules</h3>";
			/*
				1. A variable name MUST start with a $ sign
				2. A varibale name MUST either start with an underscore or a letter 
				e.g $_name $name
				3. A variable name cannot start with a number or any special characters but it can contain a number e.g $num1 $h6997365
				4. Variables are case sensitive e.g $a $A
			*/
				echo "<br>";
				//Strings
				$string="anything inside double or single quotation\" marks is a type string";
				echo "$string";
				$string1='345678345678 is also a string';
				echo "<br>";
				echo "$string1";
				$concatente = $string . " -- " . $string1;
				echo "<hr>";
				echo "$concatente";
				//intergers
				//any full number (without decimal points)
				$int1 = 56;
				$int2 = 786;
				//bodmas
				//add
				echo "<hr>";
				$resut = $int2 / ($int1 * 10); 
				echo $resut;
				$yearBorn = 1999;
				$currentYear =2019;
				echo "<hr>";
				// I am [age] year old
				// echo 'I am [age years old]';
				$age = $currentYear - $yearBorn;
				echo 'I am' .$age. 'years old';
				//booleans
				//represents two states, either true or false
				//booleans are used in conditional statements
				$underAge = false;
				if($underAge) {
					//do something if condition is true
					echo "<h1>Not allowed to drive, sorry <h1>";
				} else {
					echo "<h1>You can drive now</h1>";
				}


				//Arrays
				//indexed arrays
				//1.
				$classList = array ("Ian", "Grace", "Jeremy", "Ryan");
				echo "<pre>";
				print_r($classList);
				echo "</pre>";
				echo "The value at position 4 is" . $classList[3];
				$mixedArray = ["Kenya", 47, "Nairobi", "Mike Sonko"];
				echo "<pre>";
				print_r($mixedArray);
				echo "</pre>";
				echo "<br>";
				echo "I live in " . $mixedArray[0], " which has " . $mixedArray[1], " counties. My counrty is " . $mixedArray[2], " which is goverend by " . $mixedArray[3];
				$nestedArray = array (
					["Mr.", "Mrs.", "Ms."],
					["Leah", "Frank", "Jane"],
				);
				echo "<pre>";
				print_r($nestedArray);
				echo "</pre>";
				echo $nestedArray[0] [1]. $nestedArray[1] [0]. " " .$nestedArray[0] [0]. $nestedArray[1] [1]. " " .$nestedArray[0] [2] . $nestedArray[1] [2];

?>				
</body>
</html>