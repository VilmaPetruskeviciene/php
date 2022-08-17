<?php 

if(array_key_exists('delete', $_POST)) {

    $data = json_decode(file_get_contents(__DIR__ .'/data.json'), 1);

    foreach($data as $key => $value) {

        if($_POST['delete'] == $value['iban']) {

            if($value['likutis'] == 0) {
                array_splice($data, $key, 1);

                file_put_contents(__DIR__ .'/data.json', json_encode($data));

                header("Location: ./deleteMessage.php");
                die();
            } else {
                header("Location: ./delErrorMessage.php");
                die();
            }
        }
    }

    
}
