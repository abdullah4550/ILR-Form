<?php


    $db_hostname = 'localhost';
    $db_username = 'Capstonedb';
    $db_password = '';
    $db_database = 'Capstonedb';

    // Database Connection String
    $link = mysqli_connect($db_hostname,$db_username,$db_password, $db_username);


    if (mysqli_connect_error()) {

        die ("Database Connection Error");

    }

?>