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

        <?php if (isset($_REQUEST['info'])){?>
            <?php if ($_REQUEST['info'] == 'added'){ ?>
                <div class="alert alert-success  "role = "alert">
                    <p>Blog is successfully submitted</p>
                </div>
            <?php }?>
        <?php }?>    

        <div class="text-center">
            <a href="create.php" class="btn btn-outline-dark">+ create a new post</a>
        </div>

        <div class="row">
            <?php foreach ($query as $q) {?>
                <div class="col-4 justify-content-center align-items-center d-flex">
                    <div class="card text-white bg-dark mt-5"> 
                        <div class="card-body" style="width: 18rem">
                            <h5 class="card-title"><?php echo $q['title'];?></h5>
                            <p class="card-text"><?php echo $q['content'];?></p>
                            <a href="view.php?id=<?php echo $q['id']; ?>" class="btn btn-light">Read more <span class="text-danger">&rarr;</span></a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>

    </div>
</body>
</html>