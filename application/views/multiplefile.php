<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=hi, initial-scale=1.0">
    <title>file Uploading</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container mt-5 w-50">
        <form method="post" enctype="multipart/form-data" action="<?php echo base_url()."index.php/multiple_c/insert"?>">
            Name :
            <input type="text" name="name" class="form-control"/><br>
            <input type="file" name="file" class="form-control"/>
            <input type="submit" class="form-control mt-5 w-25"/>
        </form>
    </div>
</body>
</html>