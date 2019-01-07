<?php
    define("DATABASE",'takehome');
    define("USER",'root');
    define("PASSWORD",'test');
    define("HOST",'localhost');

    $db = new mysqli(HOST,USER,PASSWORD,DATABASE);

    if($db -> connect_error){
        echo "Cannot connect to MySQL " . $db->connect_error;
    }
?>