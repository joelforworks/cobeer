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
            <img src="http://localhost/cobeer3/cobeer/assets/imagenes/mosto-1.png" heigh="80" width="80" alt="" title="loreipsum">
            <img src="https://images.pexels.com/photos/1447092/pexels-photo-1447092.png?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="texto alternativo" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tempus felis id quam suscipit fringilla. Vivamus non magna sit amet odio laoreet ultrices eget non lorem. Vestibulum condimentum a lacus vitae blandit. Duis rutrum sapien non erat vulputate dignissim. Duis eget maximus felis. Suspendisse tincidunt viverra auctor. Aliquam mollis, nisi eget aliquet pharetra, metus turpis venenatis ipsum, ac tempor diam mauris eget libero. Vestibulum quis egestas ante, ut gravida nisl." /> 

        </div>

       </section> 

    </main>
    
    <footer>
        <!-- Componente footer -->
        <div ><?php include dirname(__DIR__, 1).'\footer\component.php'?></div>
    </footer>

</body>
</html>
