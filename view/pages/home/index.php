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


        <!-- Componente header -->
        <div ><?php include dirname(__DIR__, 1).'\header\component.php'?></div>


    <main>    
        <section>
            <!-- Componente artículos -->
            <div><?php include dirname(__DIR__, 1).'\articulosDestacados\component.php'?></div>
        </section>

       <!-- <section>
        <div class="mapa">
            <img src="http://localhost/cobeer/assets/imagenes/mosto-1.png" heigh="80" width="80" alt="">
        </div> -->

       </section> 

    </main>
    
    <footer>
        <!-- Componente footer -->
        <div ><?php include dirname(__DIR__, 1).'\footer\component.php'?></div>
    </footer>

</body>
</html>