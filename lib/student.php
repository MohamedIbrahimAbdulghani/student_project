<?php


$actions = "";

function add_Student($id, $name, $address) {
    global $connection_database;
    if(isset($_POST["add"])) {
        $actions = "INSERT INTO `students` (`id`, `name`, `address`) VALUES ('$id', '$name', '$address')";
        mysqli_query($connection_database, $actions);
        header("Location: home.php");
    }
}


function selectStudent($id) {
    global $connection_database;
    if(isset($_POST["delete"])) {
        $actions = "DELETE FROM `students` WHERE `id` = '$id' ";
        mysqli_query($connection_database, $actions);
        header("Location: home.php");
    }
}
