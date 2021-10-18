<?php
    if(isset($_POST['fupload'])){
        $path = "./uploads/";
        if($_FILES['file_upload']['type'] !== "application/pdf"){
            echo "Only pdf files are allowed!";
        }else {
            $path = $path.$_FILES['file_upload']['name'];
            echo $path;
            move_uploaded_file($_FILES['file_upload']['tmp_name'], $path);
        }
    }
?>

<html>
    <head>
        <title>File upload</title>
    </head>
    <body>
        <form action="" method=post enctype="multipart/form-data">
            <input type="file" name="file_upload" accept=".pdf">
            <input type="submit" name="fupload" value="submit">
        </form>
    </body>
</html>