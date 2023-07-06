<?php
session_start();

if (!isset($_SESSION['userId'])) {
    include "assg_NavBar.php";
    include "assg_doBackToLogin.php";
    exit();
}

if (isset($_SESSION['username'])) {
    session_destroy();
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <style>
<?php include "stylesheets/assignmentStylesheet.css"; ?>
        </style>
        <title></title>
    </head>
    <body>
        <div class="d-flex justify-content-center">
            <div class="colour infoCard cardmargin" style="width:450px">
                <div class="formheader">
                    <div class="infoheader" style="padding-top:10px">
                        <h1>Logout</h1>
                        <hr>
                    </div>
                    <br>
                    <p>You have logged out</p>
                    <div class="d-flex justify-content-center">
                        <a href="assg_Login.php"><button class="btn btn-dark" type="button">Back to Login</button></a>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </body>
</html>
