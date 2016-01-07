<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>HELLO WORLD</h1>
    <?php echo $data ?>

    <?php foreach($data as $escuela){ ?>
        <li>ID  : <?php echo $escuela['id'] ?> </li>
        <li>Nombre : <?php echo $escuela['nombre'] ?></li>
        <li>Edad : <?php echo $escuela['edad']?> </li>
        <li>Estado : <?php echo $escuela['estado']?> </li>
    <?php }?>
  </body>
</html>
