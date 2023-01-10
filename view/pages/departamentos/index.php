<!DOCTYPE html>
<html lang="en">

<!-- <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="../../layout/layout.css">
  <title>DEPARTAMENTOS</title>
</head> -->

<body>
  <div class="layout">

    <header>
    <div><?php include '../../../components/header/component.php'?></div>
    </header>

    <main>
     
      <div class="aside">
        <?php include '../../../components/articulosDestacados/component.php' ?>
      </div>

      <div class="articulos">
        <div>
          <?php include '../../../components/articuloDepartamento/component.php' ?>
        </div>

        <div>
          <?php include '../../../components/articuloDepartamento/component.php' ?>
        </div>
      </div>
    </main>

    <footer>
      <?php include '../../../components/footer/component.php' ?>
    </footer>
  </div>
</body>

</html>
