<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../layout/layout.css">
    <link rel="stylesheet" href="style.css">
    <title>Cobeer</title>
</head>
<body>
<div class="layout">


        <!-- Componente header -->
        <?php include '../../../components/header/component.php' ?>


    <main>
        <!-- Componente buscador -->
        <?php include '../../../components/buscador/component.php' ?>
        
        <section>
            <!-- Componente artículos -->
            <?php include //'../../../components/articulosDestacados/component.php' ?>
        </section>

       <section>
        <div class="mapa">
            <img src="/assets/imagenes/mosto-1.png" heigh="80" width="80" alt="">

            <div id="infoBottle">
                <h2>titulo</h2>
                <p>
                    fklbjdfklbjdkflbjdfkbjdf
                </p>
            </div>
        </div>

       </section> 

    </main>
    
    <footer>
        <!-- Componente footer -->
        <?php include '../../../components/footer/component.php' ?>
    </footer>

</body>
</html>
