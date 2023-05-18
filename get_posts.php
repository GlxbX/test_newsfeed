<?php
    include('db.php');

    if(isset($_POST['getPosts'])) {
       $start = $connection->real_escape_string($_POST['start']);
       $limit = $connection->real_escape_string($_POST['limit']);

       $sql = $connection->query("SELECT * FROM Posts ORDER BY id DESC LIMIT $start, $limit");
       if ($sql->num_rows > 0) {
            $response = "";

            while($data = $sql->fetch_array()) {
                $response .= '
                <div class="d-flex justify-content-center py-2">
                    <div class="post-wrapper py-2 px-2"> 
                        <div class="d-flex justify-content-between py-1 pt-2">
                            <div><h2 class="text2">'.$data['username'].'</h2></div><div><h7 class="text3">'.$data['dt'].'</h7></div>
                        </div>
                        <p class="text1">'.$data['text'].'</p>
                    </div>
                </div>
                ';
            }
            exit($response);
       }else
        exit('reachedMax'); 
    }
?>