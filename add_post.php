<?php
    include('db.php') ;
    
    $name_table = "Posts" ;
    
    $text = $_POST['text'] ;

    $name = $_POST['name'] ;

    $date = date("Y-m-d H:i:s") ;

    $query = "INSERT INTO `" . $name_table . "` (`text` , `dt`, `username`) VALUES ('$text','$date','$name')";

    $success = $connection->query($query);
    if ($connection->$affected_rows == 1){
    echo "Информация занесена в базу данных";
    }else{
    echo "Информация не занесена в базу данных" . $connection->error;
    }
    $connection->close();
    header('Location: index.html')
?>