<?php 
    require 'includes/funciones.php';    
    incluir_template('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen anuncio">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$ 3,000,000.00</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="Icono WC">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono habitaciones">
                    <p>4</p>
                </li>
            </ul>
            <p>
                Esta hermosa casa tiene 4 habitaciones y 3 baños,
                ideal para una familia que busca un lugar tranquilo y seguro.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius 
                reiciendis laudantium dignissimos, reprehenderit aliquam harum
                nisi, non rerum hic consectetur laboriosam at iste alias ipsam? 
                Consectetur quidem recusandae blanditiis aperiam. Lorem ipsum 
                dolor sit amet consectetur adipisicing elit. Dicta fuga dolores
                illo ratione ea quod soluta esse hic, id cupiditate. Eveniet ut
                provident qui aperiam sit, fugiat quasi saepe cumque?
            </p>
               
        </div>
    </main>
<?php 
     incluir_template('footer');
?>