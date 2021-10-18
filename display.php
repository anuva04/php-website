<?php
    session_start();
    if(!isset($_SESSION['type']))
        header('location:login.php');
    echo "Logged in as: <b>".$_SESSION['type']."</b>";
    // print_r($_SESSION);
?>

<html>
    <head><title>Display records</title></head>
    <body>
        <h1>Filter by branch</h1>
        <form action="" method="post">
            <select name="branch" id="">
                <option value="">Select</option>
                <option>CSE</option>
                <option>ECE</option>
                <option>ME</option>
                <option>EE</option>
                <option>CE</option>
                <option>EIE</option>
            </select>
            <input type="submit" name=filter value=filter>
        </form>
    </body>
</html>

<?php
    include "db.php";
    $query = "select * from students";
    $res = mysqli_query($con, $query);

    echo "<center>";
    echo "<table border=2>";
    echo "<tr><td>Name</td><td>Email</td><td>Branch</td><td>Actions</td></tr>";
    while($row = mysqli_fetch_assoc($res)){
        echo "<tr>
            <td>".$row['name']."</td>
            <td>".$row['email']."</td>
            <td>".$row['branch']."</td>";
                if($_SESSION['type']=='admin'){
            echo "<td><form action='delete.php' method=post>
                        <input type=hidden name=email value=".$row['email'].">
                        <input type=submit value=delete name=delete>
                    </form>";
            echo "
                    <form action='edit.php' method=post>
                        <input type=hidden name=email value=".$row['email'].">
                        <input type=submit value=edit name=edit>
                    </form>
                </td>";
                }else{
                    if($_SESSION['email'] == $row['email']){
                        echo "
                            <td>
                            <form action='edit.php' method=post>
                                <input type=hidden name=email value=".$row['email'].">
                                <input type=submit value=edit name=edit>
                            </form>
                            </td>
                        
                        ";
                    }
                }
        
        echo "</tr>";
    }
    echo "</table>";
    echo "</center>";

    if(isset($_POST['filter'])){
        $filter_query = "select * from students where branch='".$_POST['branch']."'";
        $filter_res = mysqli_query($con, $filter_query);
        if(mysqli_num_rows($filter_res)<1){
            echo "<h3 style='color:red;'>No records found!</h3>";
        }else{
            echo "<h2>Filtered output for branch: </h2>".$_POST['branch'];
            echo "<center>";
            echo "<table border=2>";
            echo "<tr><td>Name</td><td>Email</td><td>Branch</td></tr>";
            while($filter_row = mysqli_fetch_assoc($filter_res))
                echo "<tr><td>".$filter_row['name']."</td><td>".$filter_row['email']."</td><td>".$filter_row['branch']."</td></tr>";
            echo "</table>";
            echo "</center>";
        }
    }
?>