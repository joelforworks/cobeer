<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../../layout/layout.css">
    <title>Document</title>
</head>

<body>

    <section class="layout">

        <header>
            <?php include '..\..\..\components\header\component.php' ?>
        </header>
        <main>

            <div class="articulosDestacados">
                <?php include '..\..\..\components\articulosDestacados\component.php' ?>
                <button type="submit" class="imgEdit"><img src="https://cdn-icons-png.flaticon.com/512/17/17340.png" id='img'></button>
                <button type="submit" class="imgEdit"><img src="https://cdn-icons-png.flaticon.com/512/25/25359.png" id='img'></button>
            </div>

            <div class='articuloDepartamento'>
                <div>º
                    <?php include '../../../components/editarArticulo/component.php' 
                    ?>
                </div>

                <div>
                    <?php include '../../../components/editarArticulo/component.php' 
                    ?>
                </div>
            </div>

        </main>
        <footer>
            <?php include '../../../components/footer/component.php' ?>
        </footer>

    </section>

</body>

</html>