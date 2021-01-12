<?php

    $conn = mysqli_connect("localhost", "root", "", "bblogs");

    if (!$conn) {
        echo "<h3 class='bg-dark p-3 text-center mt-5 text-white'>Check your connection</h3>";
    }

    $sql = "SELECT * FROM data";
    $query = mysqli_query($conn, $sql);

    if (isset($_REQUEST['new_post'])) {
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

        $sql = "INSERT INTO data(title, content) VALUES('$title' , '$content')";
        mysqli_query($conn, $sql); 
        
        header("location:index.php?info=added");
        exit();

        if (isset($_REQUEST['id'])) {

            $id = $_REQUEST['id'];
            
            $sql = "SELECT * FROM data where id = $id";
            $query = mysqli_query($conn, $query);
        }
    } 

?>