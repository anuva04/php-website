<html>
    <head>
        <title>
            Login Form
        </title>
    </head>
    <body>
        <center>
            <h1>Login Form</h1>
            <form action="" method="post">
                <table>
                    <tr>
                        <td>Email: </td><td><input type="email" name="email"></td>
                    </tr>
                    <tr>
                        <td>Password: </td><td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td colspan=2 align=center><input type="submit" value="login" name="login"></td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>

<?php
    if(isset($_POST['login'])){
        include "db.php";
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        session_start();

        $query = "select * from students where email='$email' and password='$password'";
        $res = mysqli_query($con, $query);
        if(mysqli_num_rows($res)==1){
            $row = mysqli_fetch_assoc($res);
            $_SESSION['type'] = $row['type'];
            $_SESSION['email'] = $email;
            // print_r($_SESSION);
            header('location:display.php');
        }
        else
            echo "Invalid credentials!";
    }
?>