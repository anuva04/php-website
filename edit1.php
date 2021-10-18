<?php
    include "db.php";
    if(!isset($_POST['edit']))
        header('location:display.php');

    $edit_query = "update students set name='".$_POST['name']."', email='".$_POST['email']."' where email='".$_POST['original_email']."'";
    mysqli_query($con, "update students set name='".$_POST['name']."', email='".$_POST['email']."' where email='".$_POST['original_email']."'");
    header('location:display.php');
?>