<?php
    include "db.php";
    $delete_query = "delete from students where email='".$_POST['email']."'";
    mysqli_query($con, $delete_query);
    header('location:display.php');
?>