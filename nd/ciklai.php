<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main.css">
    <title>Ciklai</title>
</head>
<body>
    <div>
        <h2>1a uzduotis</h2>
        <div class="container">
            <?php 
                for($i = 0; $i < 400; $i++) { 
                    echo "<p>*</p>";
                } 
            ?>        
        </div>
    </div>
    <div>
        <h2>1b uzduotis</h2>
        <div class="container center">
            <?php 
                echo '<pre>';
                for($i = 0; $i < 8; $i++) {
                    echo "<p>",str_repeat('*', 50), "</p>";
                } 
            ?>        
        </div>
    </div>
    <div>
        <h2>2 uzduotis</h2>
        
            <?php
                $count2 = 0;
                for($i = 0; $i < 300; $i++) {
                    $sk2 = rand(0, 300);
                    if ($sk2 > 150) {
                        $count2++;
                    }
                    if ($sk2 > 275) {
                       echo "<span style='color:red'>$sk2 </span>";
                    }
                    echo $sk2.' ';
                }
                echo "<p>Didesni uz 150: $count2</p>";
            ?>        
        
    </div>
    <div>
        <h2>3 uzduotis</h2>
        <div class="container">
            <?php
                $sk3 = '';
                for ($i=1; $i < rand(3000, 4000); $i++) { 
                    if ($i % 77 == 0) {
                        $sk3 = $sk3.', '.$i;
                    }
                }
                echo substr($sk3,2);
            ?>        
        </div>
    </div>
</body>
</html>
