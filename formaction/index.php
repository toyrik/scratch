<?php
ini_set('error_reporting', E_ALL);
// require 'form.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Form</title>
</head>
<body>
    <div class="container">
    <form action="submit2.php" method="POST">
        <div class="mb-3">
            <label for="post-title" class="form-label">Название</label>
            <input type="text" name="post-title" class="form-control" id="post-title">
        </div>
        <div class="mb-3">
            <label for="post-text" class="form-label">Содержание</label>
            <textarea class="form-control" name="post-text" id="post-text"></textarea>
        </div>
        <button type="submit" formaction="submit.php" method="get" class="btn btn-primary">get</button>
        <button type="submit" formaction="submit2.php" method="post" class="btn btn-primary">post</button>
    </form>
    </div>
</body>
</html>
