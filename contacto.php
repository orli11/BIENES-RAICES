<?php 
    require 'includes/funciones.php';    
    incluir_template('header');
?>
    <main class="contenedor seccion">
        <h1>Contacto</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen contacto">
        </picture>

        <h2>Llene el formulario de contacto</h2>

        <form action="" class="formulario">
            <fieldset>
                <legend>Información personal</legend>

                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Nombre" id="nombre">

                <label for="email">E-mail</label>
                <input type="email" placeholder="E-mail" id="email">


                <label for="telefono">Telefono</label>
                <input type="tell" placeholder="Telefono" id="telefono">

                <label for="mensaje">Mensaje</label>
                <textarea name="mensaje" id="mensaje"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información sobre la propiedad</legend>

                <label for="opciones">Vende o Compra</label>
                <select name="opciones" id="opciones">
                    <option value="" disabled selected>-- selecciona --</option>
                    <option value="compra">Compra</option>
                    <option value="vende">Vende</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="number" placeholder="Precio o Presupuesto" id="presupuesto">
            </fieldset>

            <fieldset>
                <legend>Conctacto</legend>
                <p>Como desea ser contactado: </p>

                <div class="forma-contacto">
                    <label for="contactar-telefono">Teléfono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

                    <label for="contactar-email">E-mail</label>
                    <input name="contacto" type="radio" value="email" id="contactar-email">
                </div>

                <p>Sí eligió teléfono, elija la feca y la hora</p>

                <label for="fecha">Fecha: </label>
                <input type="date" id="fecha">

                <label for="hora">Hora: </label>
                <input type="time" id="hora" min="09:00" max="18:00">
            </fieldset>

            <input type="submit" value="enviar" class="boton-verde">
        </form>
    </main>

<?php 
    incluir_template('footer');
?>