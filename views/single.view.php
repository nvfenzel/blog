<?php require 'views/header.php' ?>
<div class="contenedor">
    <div class="post">
        <article>
            <h2 class="titulo"><?php echo $post['titulo']; ?></h2>
            <p class="fecha">Creado el <?php echo fecha($post['fecha']); ?></p>
            <div class="thumb">
                <a href="#">
                    <img src="imagenes/<?php echo $post['thumb']; ?>" alt="">
                </a>
            </div>
            <p class="extracto">
                <?php echo $post['texto']; ?>
            </p>
        </article>
    </div>
</div>
<?php require 'footer.php'; ?>
</body>

</html>