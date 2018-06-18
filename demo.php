<?php


$mysqli = new mysqli('localhost', 'root', '', 'website');

/*
 * This is the "official" OO way to do it,
 * BUT $connect_error was broken until PHP 5.2.9 and 5.3.0.
 */
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}

$mysqli->select_db("website");

//echo 'Connected Successfully';

$sql="INSERT INTO demo (person_name,name,service,contact,location) VALUES ('".$_POST["pname"]."','".$_POST["name"]."','".$_POST["mode"]."','".$_POST["contact"]."','".$_POST["location"]."')";


if (mysqli_query($mysqli, $sql)) {
               //echo "New record created successfully";
            } else {
               //echo "Error: " . $sql . "" . mysqli_error($mysqli);
            }

mysqli_close($mysqli);
header("Location: http://localhost/html1/web3.php"); /* Redirect browser */
exit();

?>

