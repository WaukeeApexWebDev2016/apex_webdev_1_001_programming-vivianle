<?php

echo "Available shapes: square, triangle, rectangle, circle, trapezoid \n";
$shape = readline("Enter Shape: ");


function square($side) {
  return $side * $side;
}

function triangle ($height, $length) {
  return $height * $length;
}

function rectangle ($length, $width) {
  return $length * $width;
}

function circle ($radius) {
  return ($radius * $radius) * 3.14159;
}

function trapezoid ($base1, $base2, $height) {
  return (($base1 + $base2) / 2) * $height;
}

if ($shape == "square") {
  $side = readline("Enter Side Length: ");
echo "The area is ";
echo square($side, $side);
echo "\n";

}
else if ($shape == "triangle") {
  $height = readline("Enter Height: ");
  $length = readline("Enter Length: ");
  echo "The area is ";
  echo triangle($height, $length);
  echo "\n";

}
else if ($shape == "rectangle"){
  $length = readline("Enter Length: ");
  $width = readline("Enter Width: ");
  echo "The area is ";
  echo rectangle($length, $width);
  echo "\n";

}
else if ($shape == "circle"){
  $radius = readline("Enter Radius: ");
  echo "The area is ";
  echo circle($radius);
  echo "\n";

}
else if ($shape == "trapezoid"){
  $base1 = readline("Enter 1st base length: ");
  $base2 = readline ("Enter 2nd base length: ");
  $height = readline ("Enter height: ");
  echo "The area is ";
  echo trapezoid($base1, $base2, $height);
  echo "\n";

}

else {
echo ("Invalid Shape\n");
}
 ?>
