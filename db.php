<?php   
    $host_db = "localhost" ;
    $users_db = "root" ;
    $pass_db = "" ;
    $name_db = "Newsfeed" ;

    $connection = new mysqli($host_db, $users_db , $pass_db , $name_db);
    if ($connection->error) {
        die ('Ошибка : ('. $connection -> error .')'. $connection -> error );
    }
    
    $connection->set_charset('utf8');
?>