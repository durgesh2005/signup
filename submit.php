<?php

echo "<pre>";
print_r($_REQUEST);

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

$name =  $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$myfile = fopen($name.".txt", "w");

fwrite($myfile, $name);
fwrite($myfile, "\n");

fwrite($myfile, $lname);
fwrite($myfile, "\n");

fwrite($myfile, $email);
fwrite($myfile, "\n");

fwrite($myfile, $password);
fwrite($myfile, "\n");

header("Location: thank-you.php?name=$name");

?>