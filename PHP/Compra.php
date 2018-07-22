<!DOCTYPE HTML>
<html>
    <head>
        <title>Air Go</title>
        <link rel="icon" type="image/gif" href="../images/icono.png" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="../assets/css/main.css" />
        <link rel="stylesheet" href="../assets/css/font-lombok.css" />
        <noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
    </head>
    <body class="is-preload">
    <section id="banner">
        <a href="../index.php">Regresar</a>
        <header>
            <h6>AIR GO</h6>
            <h2>$ 1500</h2>
        </header>
        <footer>
            <?
                if(isset($_GET['color']))
                    echo '<img src="../images/'.$_GET["color"].'.png">';
                else
                    echo '<img src="../images/gris-obscuro.png">'
            ?>
            <h2>Seleccione el color:</h2>
            <ul class="icons">
                <?
                if(isset($_GET['color'])){
                    if($_GET['color'] == 'gris-obscuro'){
                        echo "<li><a href=\"?color=gris-obscuro\" style=\"border-radius: 50%; background: rgb(55, 60, 63)\"><img id=\"chaleco1\" src=\"../images/icono.png\" height=\"40%\"/></img></a></li>
                              <li><a href=\"?color=azul\" style=\"border-radius: 50%; background: rgb(47, 52, 81)\"><img id=\"chaleco2\" style=\"visibility: hidden\" src=\"../images/icono.png\" height=\"40%\"/></a></li>
                              <li><a href=\"?color=rojo\" style=\"border-radius: 50%; background: rgb(195, 8, 39)\"><img id=\"chaleco3\" style=\"visibility: hidden\" src=\"../images/icono.png\" height=\"40%\"/></a></li>
                              <li><a href=\"?color=gris\" style=\"border-radius: 50%; background: rgb(81, 86, 92)\"><img id=\"chaleco4\" style=\"visibility: hidden\" src=\"../images/icono.png\" height=\"40%\"/></a></li>
                              <li><a href=\"?color=azul-claro\" style=\"border-radius: 50%; background: rgb(0, 50, 255)\"><img id=\"chaleco5\" style=\"visibility: hidden\" src=\"../images/icono.png\" height=\"40%\"/></a></li>";
                    }
                    if($_GET['color'] == 'azul'){
                        echo "<li><a href=\"?color=gris-obscuro\" style=\"border-radius: 50%; background: rgb(55, 60, 63)\"><img id=\"chaleco1\" style=\"visibility: hidden\" src=\"../images/icono.png\" height=\"40%\"/></img></a></li>
                              <li><a href=\"?color=azul\" style=\"border-radius: 50%; background: rgb(47, 52, 81)\"><img id=\"chaleco2\" src=\"../images/icono.png\" height=\"40%\"/></a></li>
                              <li><a href=\"?color=rojo\" style=\"border-radius: 50%; background: rgb(195, 8, 39)\"><img id=\"chaleco3\" style=\"visibility: hidden\" src=\"../images/icono.png\" height=\"40%\"/></a></li>
                              <li><a href=\"?color=gris\" style=\"border-radius: 50%; background: rgb(81, 86, 92)\"><img id=\"chaleco4\" style=\"visibility: hidden\" src=\"../images/icono.png\" height=\"40%\"/></a></li>
                              <li><a href=\"?color=azul-claro\" style=\"border-radius: 50%; background: rgb(0, 50, 255)\"><img id=\"chaleco5\" style=\"visibility: hidden\" src=\"../images/icono.png\" height=\"40%\"/></a></li>";
                    }
                    if($_GET['color'] == 'rojo'){
                        echo "<li><a href=\"?color=gris-obscuro\" style=\"border-radius: 50%; background: rgb(55, 60, 63)\"><img id=\"chaleco1\" style=\"visibility: hidden\" src=\"../images/icono.png\" height=\"40%\"/></img></a></li>
                              <li><a href=\"?color=azul\" style=\"border-radius: 50%; background: rgb(47, 52, 81)\"><img id=\"chaleco2\" style=\"visibility: hidden\" src=\"../images/icono.png\" height=\"40%\"/></a></li>
                              <li><a href=\"?color=rojo\" style=\"border-radius: 50%; background: rgb(195, 8, 39)\"><img id=\"chaleco3\" src=\"../images/icono.png\" height=\"40%\"/></a></li>
                              <li><a href=\"?color=gris\" style=\"border-radius: 50%; background: rgb(81, 86, 92)\"><img id=\"chaleco4\" style=\"visibility: hidden\" src=\"../images/icono.png\" height=\"40%\"/></a></li>
                              <li><a href=\"?color=azul-claro\" style=\"border-radius: 50%; background: rgb(0, 50, 255)\"><img id=\"chaleco5\" style=\"visibility: hidden\" src=\"../images/icono.png\" height=\"40%\"/></a></li>";
                    }
                    if($_GET['color'] == 'gris'){
                        echo "<li><a href=\"?color=gris-obscuro\" style=\"border-radius: 50%; background: rgb(55, 60, 63)\"><img id=\"chaleco1\" style=\"visibility: hidden\" src=\"../images/icono.png\" height=\"40%\"/></img></a></li>
                              <li><a href=\"?color=azul\" style=\"border-radius: 50%; background: rgb(47, 52, 81)\"><img id=\"chaleco2\" style=\"visibility: hidden\" src=\"../images/icono.png\" height=\"40%\"/></a></li>
                              <li><a href=\"?color=rojo\" style=\"border-radius: 50%; background: rgb(195, 8, 39)\"><img id=\"chaleco3\" style=\"visibility: hidden\" src=\"../images/icono.png\" height=\"40%\"/></a></li>
                              <li><a href=\"?color=gris\" style=\"border-radius: 50%; background: rgb(81, 86, 92)\"><img id=\"chaleco4\" src=\"../images/icono.png\" height=\"40%\"/></a></li>
                              <li><a href=\"?color=azul-claro\" style=\"border-radius: 50%; background: rgb(0, 50, 255)\"><img id=\"chaleco5\" style=\"visibility: hidden\" src=\"../images/icono.png\" height=\"40%\"/></a></li>";
                    }
                    if($_GET['color'] == 'azul-claro'){
                        echo "<li><a href=\"?color=gris-obscuro\" style=\"border-radius: 50%; background: rgb(55, 60, 63)\"><img id=\"chaleco1\" style=\"visibility: hidden\" src=\"../images/icono.png\" height=\"40%\"/></img></a></li>
                              <li><a href=\"?color=azul\" style=\"border-radius: 50%; background: rgb(47, 52, 81)\"><img id=\"chaleco2\" style=\"visibility: hidden\" src=\"../images/icono.png\" height=\"40%\"/></a></li>
                              <li><a href=\"?color=rojo\" style=\"border-radius: 50%; background: rgb(195, 8, 39)\"><img id=\"chaleco3\" style=\"visibility: hidden\" src=\"../images/icono.png\" height=\"40%\"/></a></li>
                              <li><a href=\"?color=gris\" style=\"border-radius: 50%; background: rgb(81, 86, 92)\"><img id=\"chaleco4\" style=\"visibility: hidden\" src=\"../images/icono.png\" height=\"40%\"/></a></li>
                              <li><a href=\"?color=azul-claro\" style=\"border-radius: 50%; background: rgb(0, 50, 255)\"><img id=\"chaleco5\" src=\"../images/icono.png\" height=\"40%\"/></a></li>";
                    }
                }
                else{
                    echo "<li><a href=\"?color=gris-obscuro\" style=\"border-radius: 50%; background: rgb(55, 60, 63)\"><img id=\"chaleco1\" src=\"../images/icono.png\" height=\"40%\"/></img></a></li>
                              <li><a href=\"?color=azul\" style=\"border-radius: 50%; background: rgb(47, 52, 81)\"><img id=\"chaleco2\" style=\"visibility: hidden\" src=\"../images/icono.png\" height=\"40%\"/></a></li>
                              <li><a href=\"?color=rojo\" style=\"border-radius: 50%; background: rgb(195, 8, 39)\"><img id=\"chaleco3\" style=\"visibility: hidden\" src=\"../images/icono.png\" height=\"40%\"/></a></li>
                              <li><a href=\"?color=gris\" style=\"border-radius: 50%; background: rgb(81, 86, 92)\"><img id=\"chaleco4\" style=\"visibility: hidden\" src=\"../images/icono.png\" height=\"40%\"/></a></li>
                              <li><a href=\"?color=azul-claro\" style=\"border-radius: 50%; background: rgb(0, 50, 255)\"><img id=\"chaleco5\" style=\"visibility: hidden\" src=\"../images/icono.png\" height=\"40%\"/></a></li>";
                }
                ?>

            </ul>
            <form method="post" action="EnviarCorreo.php?tipo=1">
                <div class="row gtr-50">
                    <div class="col-3"></div>
                    <div class="col-6">
                        <h2>Selecciona la cantidad de productos:</h2>
                        <select name="cant">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row gtr-50">
                    <div class="col-3"></div>
                    <div class="col-6">
                        <input type="text" name="nombre" class="text" placeholder="Nombre"/>
                    </div>
                    <div class="col-3"></div>
                    <div class="col-3"></div>
                    <div class="col-6">
                        <input type="text" name="domicilio" class="text" placeholder="Domicilio"/>
                    </div>
                    <div class="col-3"></div>
                    <div class="col-3"></div>
                    <div class="col-6">
                        <input type="text" name="email" class="text" placeholder="Correo"/>
                    </div>
                </div>
                <br>
                <div class="col-12">
                    <ul class="actions">
                        <li><input type="submit" value="Comprar 💸" /></li>
                    </ul>
                </div>
            </form>
        </footer>
    </section>
    <!-- Scripts -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/jquery.scrolly.min.js"></script>
    <script src="../assets/js/jquery.poptrox.min.js"></script>
    <script src="../assets/js/browser.min.js"></script>
    <script src="../assets/js/breakpoints.min.js"></script>
    <script src="../assets/js/util.js"></script>
    <script src="../assets/js/main.js"></script>

    </body>
</html>