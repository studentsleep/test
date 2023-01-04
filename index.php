<?php
    require('db.php');
    $sql = "SELECT * FROM pic";
    $query = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .banner {
            background-image: url("img/banner.jpg");
            height: 500px;
            background-repeat: no-repeat;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="banner"></div>
    <div class="container-fulid">
        <header class="d-flex justify-content-center py-3 bg-dark">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="#" class="nav-link active">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Gallery</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Contect</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown5" data-bs-toggle="dropdown" aria-expanded="false">Manage</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown5">
                        <li><a class="dropdown-item" href="#">Travel Manage</a></li>
                        <li><a class="dropdown-item" href="#">Contact Us</a></li>
                    </ul>
                </li>
            </ul>
        </header>
    </div>
        <br>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card" style="width: 300px;">
                    <div class="card">
                        <h5 class="card-title">
                            <center>ดอยอินทนนท์</center>
                        </h5>
                        <img src="img/1.jpg" alt="">
                        <a href="#" class="btn btn-warning">รายละเอียด</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>