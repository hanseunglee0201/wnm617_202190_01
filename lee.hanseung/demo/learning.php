<?php

// phpinfo();
// broken

echo "<h1>Hello World</h1>";
echo "Goodbye world\n\t";


$a = 5; // $ means variables. Equal is assignment operator.

// String Interpolation
echo "<div>I have $a things</div>"; // Double quotes get variables.
echo '<div>I have $a things</div>';

// Value Types

// Number
// Integer
$b = 15;
// Float
$b = 0.576;

$b = 10;

// String
$name = "Yerdude";
$name = 'Hanseung';

// Boolean is True or False
$isOn = True;

// function, class, object



// Math


// Order of Operation
// PEMDAS is Paranthesis, Exponents, Multiplication, Division, Addition and Substraction. (The order of opeation)
echo (5 + 2) * 3;

// Concatenation
echo "<div>b + a = c</div>";
echo "<div>$b + $a = "  .  ($b+$a)  .  "</div>";



?>

<hr>
<div>This is my name,
	<?php

	$firstname = "Hanseung";
	$lastname = "Lee";
	$fullname = "$firstname $lastname";

	echo $fullname;

	?>. What's yours?
</div>

<hr>

<?php

// Superglobal
echo "Name is: ".$_GET['name'];
echo "<div><a href='?name=Bob'>Bob</a></div>"; // ?name=Bob을 url 마지막에 넣음으로 새로운 페이지를 만들 수 있다.
echo "<div><a href='?name=Grace'>Grace</a></div>";

echo "<div><a href='?name={$_GET['name']}&type=h1'>H1</a></div>";
echo "<div><a href='?name={$_GET['name']}&type=textarea'>Textarea</a></div>";
echo "Name is: <{$_GET['type']}>{$_GET['name']}</{$_GET['type']}>"; // 복잡한 interpolation을 만들 때는 add braces around complex variables. {}.


?>

<hr>

<?php

// Arrays
$colors = array("red","green","blue","purple");
$colors = ["red","green","blue","purple"];

echo $colors[2]; // inside number mostly calls index. (주로 index라 불리지만 어쩔때는 ID, and key 라고도 한다.)

echo "
   <br>$colors[0]
   <br>$colors[1]
   <br>$colors[2]
   <br>$colors[3]
";

echo count($colors); // Number of array를 알고싶을 때는 echo count($name of array);

?>

<div style="color:<?= $colors[2] ?>">
   This text is blue
</div>


<hr>

<?php 

// Associative Array. Comparing to number array, associative array has no order.
$colorsAssoc = [
   "red" => "#f00", // When assigning a value, use an equal arrow.
   "green" => "#0f0",
   "blue" => "#00f"
];

echo $colorsAssoc['red'];

?>


<hr>

<?php

// Casting
$c = "$a";
$d = $c*1;

$colorsObject = (object)$colorsAssoc; // It means cast $colorAssoc to object.

// echo $colorsObject;


echo "<hr>";

// Array Index Notation
echo $colors[0]."<br>";
echo $colorsAssoc['red']."<br>";
echo $colorsAssoc[$colors[0]]."<br>";

// Object Property Notation
echo $colorsObject->red."<br>"; // When selecting a value, use a dash arrow.
echo $colorsObject->{$colors[0]}."<br>";

?>

<hr>

<?php

var_dump($colors); // var_dump prints the data
echo "<hr>";
var_dump($colorsAssoc);
echo "<pre>",var_dump($colorsObject),"</pre>";


// CUSTOM FUNCTIONS
function pretty_dump($data) {
   echo "<pre>",var_dump($data),"</pre>";
}

pretty_dump($colors);

?>