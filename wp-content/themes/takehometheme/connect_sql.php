<?php
    define("DATABASE",'takehome');
    define("USER",'wordpress');
    define("PASSWORD",'wordpress');
    define("HOST",'172.20.0.2');

    $db = new mysqli(HOST,USER,PASSWORD,DATABASE);

    if($db -> connect_error){
        echo "Cannot connect to MySQL " . $db->connect_error;
    }
?>