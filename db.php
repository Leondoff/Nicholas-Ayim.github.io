<?php
$dbhost ='localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'register';

if(!$con = mysqli_connect("localhost","root","","register"))
{

 die("failed to connect");
}
?>