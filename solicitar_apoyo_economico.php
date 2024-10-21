<form action="procesar_apoyo.php" method="post" class="form_solicitud_apoyo" enctype="multipart/form-data">

    <!-- Requisitos para el Apoyo -->
    <h3>Requisitos para solicitar este apoyo</h3>
    <input type="checkbox" name="mayor_edad" required> Soy mayor de 18 años.<br>
    <input type="checkbox" name="residencia" required> Resido en el municipio de Mérida.<br>
    <input type="checkbox" name="ingresos" required> Mis ingresos son menores a dos salarios mínimos.<br>
    <input type="checkbox" name="identificacion_vigente" required> Cuento con identificación oficial vigente (INE, pasaporte).<br>

    <!-- Información Personal -->
    <h3>Información Personal</h3>
    <input type="text" name="nombre" class="elemento_inp2" placeholder="Nombre Completo" required>
    <br>
    <input type="date" name="fecha_nacimiento" class="elemento_inp2" required>
    <br>
    <input type="tel" name="telefono" class="elemento_inp2" placeholder="Teléfono de Contacto" required>
    <br>
    <input type="email" name="email" class="elemento_inp2" placeholder="Correo Electrónico" required>
    <br>
    <input type="text" name="direccion" class="elemento_inp2" placeholder="Dirección Completa" required>
    <br>
    <select name="estado_civil" class="elemento_inp2" required>
        <option value="" disabled selected>Estado Civil</option>
        <option value="soltero">Soltero/a</option>
        <option value="casado">Casado/a</option>
        <option value="divorciado">Divorciado/a</option>
        <option value="viudo">Viudo/a</option>
    </select>
    <br>

    <!-- Información Socioeconómica -->
    <h3>Información Socioeconómica</h3>
    <input type="text" name="ocupacion" class="elemento_inp2" placeholder="Ocupación" required>
    <br>
    <input type="number" name="ingresos" class="elemento_inp2" placeholder="Ingresos Mensuales en pesos" min="0" required>
    <br>
    <input type="number" name="dependientes" class="elemento_inp2" placeholder="Número de Dependientes" min="0" required>
    <br>
    <select name="seguro_medico" class="elemento_inp2" required>
        <option value="" disabled selected>¿Cuenta con seguro médico?</option>
        <option value="si">Sí</option>
        <option value="no">No</option>
    </select>
    <br>
    <select name="nivel_educativo" class="elemento_inp2" required>
        <option value="" disabled selected>Nivel Educativo</option>
        <option value="primaria">Primaria</option>
        <option value="secundaria">Secundaria</option>
        <option value="bachillerato">Bachillerato</option>
        <option value="universidad">Universidad</option>
    </select>
    <br>
    <select name="tipo_vivienda" class="elemento_inp2" required>
        <option value="" disabled selected>Tipo de Vivienda</option>
        <option value="propia">Propia</option>
        <option value="rentada">Rentada</option>
        <option value="prestada">Prestada</option>
    </select>
    <br>

    <!-- Tipo de Apoyo Solicitado -->
    <h3>Situacion </h3>
    <textarea name="descripcion" placeholder="Describa su situación actual" class="elemento_inp2 textdesc" required></textarea>
    <br>

    <!-- Documentación Requerida -->
    <h3>Documentación Adjunta</h3>
    <p>Subir copia de identificación oficial (INE, pasaporte):</p>
    <input type="file" name="identificacion" class="elemento_inp2" accept=".pdf,.jpg,.jpeg,.png" required>
    <br>
    <p>Subir comprobante de domicilio (no mayor a 3 meses):</p>
    <input type="file" name="comprobante_domicilio" class="elemento_inp2" accept=".pdf,.jpg,.jpeg,.png" required>
    <br>
    <p>Subir último comprobante de ingresos o carta bajo protesta de decir verdad:</p>
    <input type="file" name="comprobante_ingresos" class="elemento_inp2" accept=".pdf,.jpg,.jpeg,.png" required>
    <br>

    <!-- Consentimiento -->
    <h3>Consentimiento</h3>
    <input type="checkbox" name="consentimiento" required> Autorizo la verificación de la información.<br>
    <input type="checkbox" name="terminos" required> Acepto los términos y condiciones.<br>

    <!-- Botones -->
    <br>
    <button class="btn_amarillo2" type="submit">Enviar Solicitud</button>

</form>
