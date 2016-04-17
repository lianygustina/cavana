<?php
session_start();
if (isset($_POST['name'])) && (isset($_POST['email'])) && (isset($_POST['subject'])) && (isset($_POST['message'])) {
    
    $name = mysql_real_escape_string(stripslashes($_POST['name']));
    $email =  mysql_real_escape_string(stripslashes($_POST['email']);
    $subject =  mysql_real_escape_string(stripslashes($_POST['subject']);
    $message =  mysql_real_escape_string(stripslashes($_POST['message']);
    
    $connection = mysql_connect("localhost", "xxxx", "");
    
    $db = mysql_select_db("xxxx", $connection);
    
    $query = mysql_query("insert into comments values ('$name', '$email', '$subject', '$message')", $connection);
    
    mysql_close($connection);
}
?>