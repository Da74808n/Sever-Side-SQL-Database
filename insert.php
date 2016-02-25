<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "FIRST SQL");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$id = mysqli_real_escape_string($link, $_POST['id']);
$name = mysqli_real_escape_string($link, $_POST['name']);
$age = mysqli_real_escape_string($link, $_POST['age']);
 
// attempt insert query execution
$sql = "INSERT INTO `NY KNICKS TEAM MEMBERS` (id, name, age) VALUES ('$id', '$name', '$age')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>