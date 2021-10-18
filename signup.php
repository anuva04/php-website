<html>
    <head>
        <title>
            Signup Form
        </title>
    </head>
    <body>
        <center>
            <h1>Signup Form</h1>
            <form action="" method="post">
                <table>
                    <tr>
                        <td>Name: </td><td><input type="text" name="name" required></td>
                    </tr>
                    <tr>
                        <td>Email: </td><td><input type="email" name="email" required></td>
                    </tr>
                    <tr>
                        <td>Password: </td><td><input type="password" name="password" required></td>
                    </tr>
                    <tr>
                        <td>Branch:</td>
                        <td>
                            <select name="branch" id="">
                                <option value="">Select</option>
                                <option>CSE</option>
                                <option>ECE</option>
                                <option>ME</option>
                                <option>EE</option>
                                <option>CE</option>
                                <option>EIE</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=2 align=center><input type="submit" value="signup" name="signup"></td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>

<?php
    if(isset($_POST['signup'])){
        include "db.php";
        $query = "insert into students values ('".$_POST['name']."','".$_POST['email']."','".$_POST['password']."','".$_POST['branch']."')";
        $res = mysqli_query($con, $query);
        if(mysqli_affected_rows($con)==1)
            echo "Signup successful!";
        else
            echo "Signup failed! Duplicate email may have been used!";
    }
?>