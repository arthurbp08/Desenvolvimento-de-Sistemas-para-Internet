<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="styleAutentication.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php
    @session_start();
        if (!isset($_SESSION['login'])) {
            header('location:../index.php');
        }

    ?>
</body>

</html>