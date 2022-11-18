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
                    <th>name</th>
                    <th>image</th>
                    <th>download</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            foreach($result as $row){
                
                ?>
                <tr>
   
                    <td><?= $row->file?></td>
                    <td><img src="<?php echo base_url().'./assets/image/'.$row->file?>" width="100px" height="100px"> </td>
                    <td><a href="<?php echo base_url('index.php/multiple/download'.'/assets/image/'.$row->file) ?>">download</a></td>
                </tr>
                <?php } ?>
            </tbody>

        </table>
       <a href="<?php echo base_url("index.php/Multiple_C/")?>"><button class="btn btn-secondary">Return Home</button></a>
        
    </div>
    
</body>
</html>