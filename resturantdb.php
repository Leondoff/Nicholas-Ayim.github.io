<?php

$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='resturant';

if(!$con = mysqli_connect('localhost','root','','resturant'))
{
    echo ("failed did not connect");
}


?>