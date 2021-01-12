<?php

    include "logic.php"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>B.BLOGS</title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">

      <?php foreach($query as $q){?>
        <div class=" text-white bg-light p-4 text-black-50 rounded-lg text-center">
            <h1><?php echo $q['title'];?></h1>
        </div>
            <p class="mt-5 border-black border-bottom border-dark bg-dark pl-3 text-white p-5"><?php echo $q['content'];?></p>
      <?php }?>

      <a href="index.php" class="btn btn-success margin-bottom-4">HOME!</a>

    </div>
</body>
</html>