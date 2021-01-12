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
        <form action="" method="GET">
            <input type="text" name="title" placeholder="Bog Title" class="form-control bg-dark text-center text-white my-3">
            <textarea name="content" placeholder="Blog content" class="form-control bg-dark text-white my-3" id="" cols="30" rows="10"></textarea>
            <button name="new_post"class="btn btn-dark"> Add Post</button>
        </form>
    </div>
</body>
</html>