<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
</head>

<body>
    <?php include "navbar.php"  ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3" style="background-color: red;">
                <?php require "sidebar.php";  ?>
            </div>
            <div class="col-md-9" style="background-color: blue;">
                <?php include_once "test.php";  ?>
                <?php

                echo $sum;

                ?>

            </div>
        </div>
    </div>
    <?php include "navbar.php"  ?>
</body>

</html>