<?php
  include "../config/connection.php";
  include "../helper/conver.php";


 if ($_GET['id']) {
    $id =  $_GET['id'];

    $sql = "SELECT * FROM product WHERE id =".$id;
    $sentence = $pdo->prepare($sql);
    $sentence->execute();
    $list = $sentence->fetchAll(PDO::FETCH_ASSOC);
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
  <link rel="stylesheet" href="../assets/resource/css/style.css">
  <link rel="stylesheet" href="../assets/resource/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-dark bg-primary">
    <p>CRUD</p>
    <a href="./product.php" id="volver">Volver</a>
  </nav>

    <form action="saveproduct.php" method="POST" enctype="multipart/form-data">

    <?php  foreach($list as $value){ ?>
  <div class="container mt-5">
     <div class="row">
       <div class="col-md-5">
          <input type="hidden" name="id" class="form-control" value="<?= $value["id"]?>" placeholder="Name..">
          <input type="text" name="name" class="form-control" value="<?= $value["name"]?>" placeholder="Name..">
       </div>

       <div class="col-md-5">
          <input type="text" name="price" class="form-control" value="<?= $value["price"]?>" placeholder="Price..">
       </div>
     </div>

     <div class="row mt-4">
       <div class="col-md-5">
          <input type="text" name="description" class="form-control" value="<?= $value["description"]?>" placeholder="Description..">
       </div>

       <div class="col-md-5">
          <input type="file"  class="form-control-file" name="imagen"  value="<?= $value["img"]?>" id="file" onchange="previewImagen()">
          <img  class="mt-3 " id="preview" width="180px" src="<?= $value["img"]?>" >
       </div>
     </div>
    <?php }?>
     <div class="row mt-4">
       <div class="col-md-1">
            <button name="updatedata" type="submit" id="updata" class="btn btn-primary  ">Updata</button>
       </div>
       <div class="col-md-1">
            <a href="./product.php" id="cancelar" class="btn btn-danger">Cancelar</a>
       </div>
     </div>
   </div>
  </form>


  
  <script src="../assets/resource/jquery/jquery.js"></script>
  <script src="../assets/resource/js/bootstrap.min.js"></script>
  <script src="../assets/main.js"></script>
</body>
</html>