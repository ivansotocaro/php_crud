<?php
  include "../config/connection.php";

  $url = '../assets/resource/img/';
  $base_url = "http://localhost/PHP/CRUD/views/product.php";

if(isset($_POST['save'])){
    
  $name = $_POST["name"];
  $price = $_POST["price"];
  $description = $_POST["description"];
  
  if(!empty($_FILES['imagen']['name'])){
    
    $imagen = $_FILES['imagen']['name'];
    $ruta = $url.$imagen;
    $tmp_name = $_FILES['imagen']['tmp_name'];
    
    echo $tmp_name;
      $sql = 'INSERT INTO product(name, price, description, img) values(?,?,?,?)';
      $sentence = $pdo->prepare($sql);
      $sentence->execute([$name,$price, $description, $ruta]);
     
    move_uploaded_file($tmp_name, $ruta);
  
    header('Location: '.$base_url);
  }

}

if(isset($_POST['updatedata'])){
    
  $id = $_POST['id'];
  $name = $_POST["name"];
  $price = $_POST["price"];
  $description = $_POST["description"];
  
  // echo $name. $price. $description. $id;
  if(!empty($_FILES['imagen']['name'])){
    
    $imagen = $_FILES['imagen']['name'];
    $ruta = $url.$imagen;
    $tmp_name = $_FILES['imagen']['tmp_name'];
    
      $sql = "UPDATE product SET name=?, price=?, description=?, img=? WHERE id = ?";
      $sentence = $pdo->prepare($sql);
      $sentence->execute([$name,$price, $description, $ruta, $id]);
     
    move_uploaded_file($tmp_name, $ruta);
  
    header('Location: '.$base_url);
  }


}

if(isset($_POST['delete'])){
      $id = $_POST['id'];

      $sql = "delete from product where id =".$id;
      $sentece = $pdo->prepare($sql);
      $sentece->execute();
      header('Location: '.$base_url);
}
?>