<html>
  <head>
    <title>Scholar ID Parser</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <style>
      html, body {
      display: flex;
      justify-content: center;
      height: 100%;
      }
      body, div, h1,form, input, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #666;
      }
      h1 {
      padding: 10px 0;
      font-size: 32px;
      font-weight: 300;
      text-align: center;
      }
      p {
      font-size: 12px;
      }
      hr {
      color: #a9a9a9;
      opacity: 0.3;
      }
      .main-block {
      max-width: 340px; 
      min-height: 460px; 
      padding: 10px 10px;
      margin: auto;
      border-radius: 5px; 
      border: solid 1px #ccc;
      box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
      background: #ebebeb; 
      }
      form {
      margin: 0 30px;
      }
      input[type=text], input[type=number], input[type=string] {
      width: calc(100%);
      height: 36px;
      margin: 13px 0 0 -5px;
      padding-left: 10px; 
      border-radius: 0 5px 5px 0;
      border: solid 1px #cbc9c9; 
      box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
      background: #fff;
      }
      input[type=submit] {
          background: none;
          color: white;
          border: none;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 100%;
      padding: 10px 0;
      margin: 10px auto;
      border-radius: 5px; 
      border: none;
      background: #1c87c9; 
      font-size: 14px;
      font-weight: 600;
      color: #fff;
      }
      button:hover {
      background: #26a9e0;
      }
      td, th {
          padding : 2px;
          text-align: center;
      }
      footer {
          text-align: right;
          margin-top: 20px;
      }
    </style>
  </head>
  <body>
    <div class="main-block">
      <h1>Scholar ID Parser</h1>
      <form action="" method="post">
        <hr>
        <center>
            <input pattern=".{7}" type="string" name="schid" placeholder="Enter a Scholar ID" required title="7 characters"/>
        </center>
        <div class="btn-block">
          <button><input type="submit" name="schid_submit"></button>
        </div>
      </form>
    <?php
        if(isset($_POST['schid_submit'])){
            $schid = $_POST['schid'];
            $year = "20".substr($schid, 0, 2);
            $course = substr($schid, 2, 1);
            switch ($course) {
              case 1:
                $course = "B.Tech.";
                break;
              case 2:
                $course = "M.Tech.";
                break;
              case 3:
                $course = "pHd";
                break;
              default:
                $course = "Invalid";
            }
            $branch = substr($schid, 3, 1);
            switch ($branch) {
              case 1:
                $branch = "Civil Engineering";
                break;
              case 2:
                $branch = "Mechanical Engineering";
                break;
              case 3:
                $branch = "Electrical Engineering";
                break;
              case 4:
                $branch = "Electronics and Communication Engineering";
                break;
              case 5:
                $branch = "Computer Science and Engineering";
                break;
              case 6:
                $branch = "Electronics and Instrumentation Engineering";
                break;
              default:
                $branch = "Invalid";
            }
            $roll = substr($schid, 4, 3);
            echo "<table border=1 align=center>";
                echo "<tr>";
                    echo "<td> Year of Admission </td> <td> <b>$year</b> </td> ";
                echo "</tr>";
                echo "<tr>";
                    echo "<td> Course </td> <td> <b>$course</b> </td> ";
                echo "</tr>";
                echo "<tr>";
                    echo "<td> Branch </td> <td> <b>$branch</b> </td> ";
                echo "</tr>";
                echo "<tr>";
                    echo "<td> Roll No. </td> <td> <b>$roll</b> </td> ";
                echo "</tr>";
            echo "</table>";
        }
    ?>
    <footer>
        Created by: <b>Anuva Bhattacharjee</b> <br>
        Scholar ID: <b>1814001</b> <br>
    </footer>
    </div>
  </body>
</html>