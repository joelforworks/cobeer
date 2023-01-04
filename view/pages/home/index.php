<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../layout/layout.css">
    <title>Cobeer</title>
</head>
<body>
<div class="layout">

    <header>
        <!-- Componente header -->
        <div ><?php include '../../../components/header/component.php'?></div>
    </header>

    <main>    
        <section>
            <?php include '../../../components/mapa/component.php'?>
            <!-- Componente artículos -->
            <?php include '../../../components/articulosDestacados/component.php' ?> 
    
        </section>

    
    
  
    <footer>
        <!-- Componente footer -->
        <div ><?php include '../../../components/footer/component.php'?></div>
    </footer>

</body>
</html>
