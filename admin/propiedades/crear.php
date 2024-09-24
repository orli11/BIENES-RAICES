<?php 

    //Base de datos
    require '../../includes/config/database.php';
    $db = conectar_db();
    
    require '../../includes/funciones.php';
    incluir_template('header');
?>
    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/admin" class="boton-verde boton">Volver</a>

        <form action="" class="formulario">
            <fieldset>
                <legend>Información general de nuestra propiedad</legend>
                
                <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo de la propiedad">


                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio de la propiedad">


                <label for="imagen">Imagen:</label>
                <input type="file" id="titulo" accept="image/jpeg, image/png">

                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" id="descripcion"></textarea>

            </fieldset>

            <fieldset>
                <legend>Información de la propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej. 3" min="1" max="9">


                <label for="wc">Baños:</label>
                <input type="number" id="wc" name="wc" placeholder="Ej. 3" min="1" max="9">


                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej. 3" min="1" max="9">

            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="" id="">
                    <option value="1">Juan</option>
                    <option value="2">Karen</option>
                </select>
            </fieldset>

            <input type="submit" name="" id="" value="Crear propiedad" class="boton boton-verde">
        </form>
    </main>
<?php
    incluir_template('footer');
?>