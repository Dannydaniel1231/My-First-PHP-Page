
<!-- QUESTION1: -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First PHP Page</title>
</head>
<body>
<?php 
function sum($nbr1,$nbr2,$nbr3,$nbr4){
    $sum=$nbr1+$nbr2+$nbr3+$nbr4;
    echo $sum;
}
sum(5,2,3,4);

// QUESTION 2:

echo "<br>";
echo "/"."***************************************************"."/";
echo"<br>
*Name (s): NDUWAYEZU Divin<br>
*Student ID: 22/16511<br>
*INES – RUHENGERI<br>
*Faculty of Applied Fundamental Sciences<br>
*Department of your department: CS<br>
*Class: your Level: II<br>
*Course: Advanced Web design and Delopment<br>
";
echo "/"."***************************************************"."/";

// QUESTION 3

echo "<br>";

$name="President";
$present="Cow";
$age=40;
$city="bujumbura";
$yourName="Divin";


echo "

Dear $name,<br>
Thank you for the $present. I really like it.<br>
I can’t believe I’m aleady $age years old, but it doesn’t fell that much different than being <br>";
echo $age-1;echo ". <br>";
echo "
I hope that some time in the next year we can come visit you in $city.<br>
Thank you once again for the $present.<br>
Sincerely,<br>
$yourName
"."<br>";

// QUESTION 4


$pi=3.14;
$radius=3;
$p= 2 * $pi *$radius;
$a= $pi * ($radius * $radius);
$v = (4/3) * $pi * ($radius * $radius * $radius);
echo "P =".$p."<br>"."A =".$a."<br>"."V = ".$v;
?>
</body>
</html>