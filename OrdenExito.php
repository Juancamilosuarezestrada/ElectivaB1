<?php
if (!isset($_REQUEST['id'])) {
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>Orden Completado</title>
  <meta charset="utf-8">
  <style>

    p {
      color: #34a853;
      font-size: 18px;
    }
  </style>
</head>
</head>

<body>
<?php include ("layouts/header.php") ?>

  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">

        <ul class="nav nav-pills">
          <li role="presentation" class="active"><a href="index.php">Volver</a></li>
        </ul>
      </div>

      <div class="panel-body">

        <h1>Estado de tu Requerimiento</h1>
        <p>La Orden se ha enviado exitósamente. El ID de tu pedido es <?php echo $_GET['id']; ?></p>
      </div>
    </div>
    <!--Panek cierra-->
  </div>
  <?php include ("layouts/footer.php") ?>

</body>

</html>