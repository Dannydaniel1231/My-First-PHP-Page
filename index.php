<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First PHP Page</title>
</head>
<body>
username:<input type="text"><br><br>
password:<input type="password"><br><br>
Email:<input type="text"><br><br>
Tel:<input type="tel"><br><br>
Gender:<input type="radio" value="male" name="gender"><br><br>
<input type="radio" value="female" name="gender"><br><br>
Age:<input type="text"><br><br>
<input type="submit" value="submit"><br><br>
 <?php 
 $txt = "Hello world!";
 
 $x = 5;
 $y = 10.5;
 
 echo $x+$y;
 
 
//  var_dump(used to know data type)
// str_word_count(used to count words in a string)
//    strlen(return the length of a string)
// strpos(used to know the posion of a string)

?>
</body>
</html>