<?php
include "conexion.php";
$query = mysqli_query($conexion, "SELECT * FROM producto");
$result = mysqli_num_rows($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/grid.css">
</head>
<body>
<?php include ("layouts/header.php") ?>

<div class="cards">
<?php 
if ($result > 0) {
while ($data = mysqli_fetch_assoc($query)) { ?>
<div class="card">
  <div class="card__image-holder">
    <img class="card__image" src="https://source.unsplash.com/300x225/?wave" alt="wave" />
  </div>
  <div class="card-title">
    <a href="#" class="toggle-info btn">
      <span class="left"></span>
      <span class="right"></span>
    </a>
    <h2>
    <?php echo $data['descripcion']; ?>
        <small><?php echo $data['descripcion']; ?></small>
    </h2>
  </div>
  <div class="card-flap flap1">
    <div class="card-description">
    <?php echo $data['descripcion']; ?>
    </div>
    <div class="card-flap flap2">
      <div class="card-actions">$ <?php echo $data['precio']; ?>
        <a href="#" class="btn">Agregar al carrito</a>
      </div>
    </div>
  </div>
</div><?php }}?>


</div>



<?php include ("layouts/footer.php") ?>
<script src="js/grid.js"></script>
</body>
</html>