<?php
    include "db.php";
    $query = "select * from students where email='".$_POST['email']."'";
    $res = mysqli_query($con, $query);
    $row =  mysqli_fetch_assoc($res);
?>

<html>
    <head>
        <title>Edit Page</title>
    </head>
    <body>
        <form action="edit1.php" method=post>
            <?php
            echo "Enter name: <input type=text name=name value='".$row['name']."' required>";
            echo "Enter email: <input type=email name=email value='".$row['email']."' required>";
            echo "<input type=hidden name='original_email' value='".$row['email']."'>";
            ?>
            <input type=submit value=edit name=edit>
        </form>
    </body>
</html>