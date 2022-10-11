<?php

session_start();

require_once "database/global.php";
require_once "lib/student.php";

if(!empty($_POST["id"]) && !empty($_POST["name"]) && !empty($_POST["address"]) ) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $address = $_POST["address"];

    add_Student($id, $name, $address);

    selectStudent($id);

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css">
    <title>student project</title>
</head>
<body>


    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-12 show-data">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th>Student Id</th>
                    <th>Student Name</th>
                    <th>Student Address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <th><?php echo $row["id"] ?></th>
                    <td><?php echo $row["name"] ?></td>
                    <td><?php echo $row["address"] ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 form-data">
                <form  method="POST">
                    <div id="left">
                        <h3>Control Manger</h3>
                        <img src="image/images.png" class="img-fluid" alt="control panel">
                        <label for="id">Student Id</label>
                        <input type="text" class="form-control" name="id" id="id">
                        <label for="name">Student Name</label>
                        <input type="text" class="form-control" name="name" id="name">
                        <label for="address">Student Address</label>
                        <input type="text" class="form-control" name="address" id="address">
                        <button class="btn btn-primary" name="add" >Add Student</button>
                        <button class="btn btn-danger" name="delete">Delete Student</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>