<?php require 'views/header.php' ?>
<div class="contenedor">
    <div class="post">
        <article>
            <h2 class="titulo"><a href="#">Titulo Del Articulo</a></h2>
            <p class="fecha">1 de enero de 2016</p>
            <div class="thumb">
                <a href="#">
                    <img src="imagenes/1.jpg" alt="">
                </a>
            </div>
            <p class="extracto">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, iure.</p>
            <a href="#" class="continuar">
                <p>Continuar leyendo</p>
            </a>
        </article>
    </div>
    <div class="post">
        <article>
            <h2 class="titulo"><a href="#">Titulo Del Articulo</a></h2>
            <p class="fecha">1 de enero de 2016</p>
            <div class="thumb">
                <a href="#">
                    <img src="imagenes/2.jpg" alt="">
                </a>
            </div>
            <p class="extracto">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, iure.</p>
            <a href="#" class="continuar">
                <p>Continuar leyendo</p>
            </a>
        </article>
    </div>
    <?php require 'paginacion.php'; ?>
</div>
<?php require 'footer.php'; ?>
</body>

</html>