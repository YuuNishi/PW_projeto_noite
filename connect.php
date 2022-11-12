<?php
    $server = "localhost";//"201.55.32.20:306";
    $user = "root";//"pw_user";
    $password = "";//"Fatec@123";
    $database = "projeto";//"pw_user_db";

    $connection = mysqli_connect($server, $user, $password);
    mysqli_select_db($connection, $database);

?>