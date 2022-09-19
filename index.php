<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_FILES["image"])) {
        echo "Upload success";
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";
        move_uploaded_file($_FILES["image"]["tmp_name"], "files/ " . $_FILES["image"]["name"]);
    }
    ?>

    <form action="index.php" method="post" enctype="multipart/form-data">
        <label for="image">Select a Image: </label>
        <input type="file" name="image" id="image"> <br><br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>