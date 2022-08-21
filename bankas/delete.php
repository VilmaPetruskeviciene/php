<?php 
if(isset($_GET)) {
    $index = $_GET['index'];
}

$data = json_decode(file_get_contents(__DIR__ . '/data.json'), 1);
    foreach($data as $i => $val) {
        if($i == $index && $val['likutis'] != 0) {
            header("Location: ./delErrorMessage.php");
            die();  
        } else {
            unset($data[$i]);
            file_put_contents(__DIR__ . '/data.json', json_encode($data), 1); 
            header("Location: ./deleteMessage.php");
            die();             
        }
    }
