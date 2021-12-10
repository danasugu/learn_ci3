<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SendIndex</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <h1 class="text-center">trimite index</h1>
    
    <div class="container">
        <div class="row">
            <div class="card-title">client index</div>
            <div class="card-body">
             <?php echo form_open('home/check_send_index'); ?>
                <p><input type="text" name="cod_client" placeholder="cod client"></p>
                <p><input type="text" name="pod" placeholder="pod"></p>
                <p><input type="text" name="send_index" placeholder="valoare index"></p>
                <p><input type="submit" name="submit" value="submit"></p>
            <?php echo form_close(); ?>
            </div>
        </div>
    </div>

</body>
</html>


