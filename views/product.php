<?php
  include "../config/connection.php";
  include "../helper/conver.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product</title>
  <link rel="stylesheet" href="../assets/resource/css/style.css">
  <link rel="stylesheet" href="../assets/resource/css/bootstrap.min.css">
</head>
<body>
 
  <nav class="navbar navbar-dark bg-primary">
    <p>CRUD</p>
  </nav>

  <form action="saveproduct.php" method="post" enctype="multipart/form-data">
  <div class="container mt-5">
     <div class="row">
       <div class="col-md-5">
          <input type="text" name="name" class="form-control" placeholder="Name..">
       </div>

       <div class="col-md-5">
          <input type="text" name="price" class="form-control" placeholder="Price..">
       </div>
     </div>

     <div class="row mt-4">
       <div class="col-md-5">
          <input type="text" name="description" class="form-control" placeholder="Description..">
       </div>

       <div class="col-md-5">
          <input type="file"  class="form-control-file" name="imagen" id="file" onchange="previewImagen()">
          <img  class="mt-3 " id="preview" width="180px" >
       </div>
     </div>

     <div class="row mt-4">
       <div class="col-md-1">
            <button name="save" type="submit" id="save" class="btn btn-primary btn-sm btn-block">Add</button>
       </div>
     </div>
   </div>
  </form>

      <?php

        $sql = 'select * from product';
        $sentencia = $pdo->prepare($sql); 
        $sentencia->execute();
        $listproduct = $sentencia->fetchAll(PDO::FETCH_ASSOC);

      ?>

  <div class="container">
    <div class="row">
      <div class="col-md-12 mt-5">
       
        <table class="table mb-5">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Price</th>
              <th scope="col">Description</th>
              <th scope="col">image</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            
            <?php  foreach($listproduct as $product){?>

            <?php $price = conver($product['price']); ?> 
            <tr>
              <th scope="row"><?= $product["name"]?></th>
              <td><?= $price?></td>
              <td><?= $product["description"]?></td>
              <td><img src="<?=$product["img"] ?>" width="40px" height="50px"></td>
              <td>
                  <a href="update.php?id=<?= $product["id"] ?>" id="boton_update">Update</a>
                <form action="saveproduct.php" method="post">
                  <input type="hidden" name="id" value="<?= $product["id"]?>">
                  <button name="delete" type="submit" id="delete" class="btn btn-danger btn-sm ">Delete</button>
                </form>
              </td>
            </tr>
            
            <?php }?>
          </tbody>
        </table>

      </div>
    </div>
  </div>



  <script src="../assets/resource/jquery/jquery.js"></script>
  <script src="../assets/resource/js/bootstrap.min.js"></script>
  <script src="../assets/main.js"></script>

</body>
</html>