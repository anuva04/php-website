<html>
  <head>
    <title>Multiplication Table</title>
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
      input[type=text], input[type=number] {
      width: calc(100% - 57px);
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
      input[type=submit]:hover{
          cursor: pointer;
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
      <h1>Multiplication Table</h1>
      <form action="" method="post">
        <hr>
        <center><input type="number" name="num" placeholder="Enter a number" required/></center>
        <div class="btn-block">
          <button><input type="submit" name="multiply_submit"></button>
        </div>
      </form>
    <?php
        if(isset($_POST['multiply_submit'])){
            $num = $_POST['num'];
            echo "<table border=1 align=center>";
                echo "<tr>";
                    echo "<th> A </th> <th> Operator </th> <th> B </th> <th> A*B </th> ";
                echo "</tr>";
                for($i=1; $i<=10; $i++){
                    $res = $num*$i;
                    echo "<tr>";
                        echo "<td> $num </td> <td> x </td> <td> $i </td> <td> $res </td> ";
                    echo "</tr>";
                }
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