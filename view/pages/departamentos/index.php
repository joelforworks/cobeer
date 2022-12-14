<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="../../layout/layout.css">
  <title>DEPARTAMENTOS</title>
</head>

<body>
  <div class="layout">
    <header>pàgina departaments
    <div><?php include dirname(__DIR__, 1).'\header\component.php'?></div>
    </header>

    <main>
      <div>
        <h1>NOM DEL DEPARTAMENT</h1>
      </div>

      <div>
        <h5>ARTICLES DESTACATS</h5>
      </div>
      <div class="aside">
        <?php include '../../../components/articulosDestacados/component.php' ?>
      </div>

      <div class="articulos">
        <div>
          <?php include '../../../components/articulo_departamento/component.php' ?>
        </div>

        <div>
          <?php include '../../../components/articulo_departamento/component.php' ?>
        </div>
      </div>
    </main>

    <footer>
      <?php include '../../../components/footer/component.php' ?>
    </footer>
  </div>
</body>

</html>
