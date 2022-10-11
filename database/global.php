<?php


$host = "localhost";
$user = "root";
$password = "";
$dbname = "student_project";


$connection_database = mysqli_connect($host, $user, $password, $dbname);
$query = mysqli_query($connection_database, "SELECT * FROM `students`");