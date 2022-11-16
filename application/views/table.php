<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container mt-5">
      
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>file</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($value as $row){?>
                <tr>
                    <td><?= $row->id?></td>
                    <td><?= $row->name?></td>
                    <td><?= $row->file?></td>
                </tr>
                <?php }?>
            </tbody>

        </table>
       <a href="<?php echo base_url("index.php/Multiple_C/")?>"><button class="btn btn-secondary">Return Home</button></a>
        
    </div>
    
</body>
</html>