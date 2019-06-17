<?php $connection = mysqli_connect('localhost', 'root', '','cms2');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'cms2');

if (!$select_db){
    die("Database Selection Failsed" . mysqli_error($connection));
} ?>