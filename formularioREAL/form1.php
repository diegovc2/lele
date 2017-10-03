
<?php
  include_once "header.php";
 ?>

<br>
<br>

      <form method="post" action="valid.php" enctype="multipart/form-data">



    <label>Nombre</label>
    <input name="name" placeholder="Escriba Aqui" required>
    <label>RUT</label>
    <input class="validate" name="rut" id="rut" type="text" placeholder="111.111.111-1"required/>

    <br></br>

    <label>Direccion</label>
    <input name="direccion" placeholder="Ej: Camino el Pozo 1234" required>

<div class="row">
    <div class="input-field col s6">
      <label class="active">Region</label>

    <select id="regiones" name="regiones">
    </select>
  </div>

      <div class="input-field col s6 ">
        <label class="active">Comuna</label>

      <select id="comunas" name="comunas"></select>
    </div>

  </div>
<div class="row">

<div class="input-field col s1">

  <input class="#ffb74d orange lighten-2"
 type="tel" id="codigo" name="codigo" placeholder="+569" pattern="[\+][0-9]{3}"  required  maxlength="4">
 <label class="active">Codigo</label>

</div>

<div class="input-field col s4 ">

      <input id="telefono" class="#ffb74d orange lighten-2" title="Sólo Números y un m�nimo de 8 caracteres" type="tel" name="telefono" placeholder="1111111" pattern="[0-9]{8}"  required  maxlength="8"/>
      <label class="active">Telefono</label>

</div>

</div>
    <label>Email</label>
    <input name="email" type="email" placeholder="ejemplo@dominio.com"required>

<h2>DATOS ACADEMICOS</h2>

<label>Enseñanza Básica y Media</label>

 <div class="input-field col s12 ">
   <i class="material-icons prefix">mode_edit</i>
<textarea data-length="400"  class="materialize-textarea #ffe082 amber lighten-3" name="colegio" placeholder="Ingresar nombre de escuela y año de egreso" maxlength="400"></textarea>
</div>

<label>Enseñanza Superior</label>

<div class="input-field col s12 ">
  <i class="material-icons prefix">mode_edit</i>
<textarea data-length="400"  class="materialize-textarea #ffe082 amber lighten-3" name="media" placeholder="Ingresar nombre de Universidad/Instituto y año de egreso" maxlength="400"></textarea>
</div>



<label>Titulos</label>

<div class="input-field col s12 ">
  <i class="material-icons prefix">mode_edit</i>
<textarea data-length="400"  class="materialize-textarea #ffe082 amber lighten-3" name="titulos" placeholder="Especificar por favor grado académico" maxlength="400"></textarea>
</div>

<label>Cursos y diplomados</label>

<div class="input-field col s12 ">
  <i class="material-icons prefix">mode_edit</i>
<textarea data-length="400"  class="materialize-textarea #ffe082 amber lighten-3" name="cursos" placeholder="Especificar año e institución" maxlength="400"></textarea>
</div>


<h2>EXPERIENCIA PROFESIONAL</h2>

<div class="input-field col s12 ">
  <i class="material-icons prefix">mode_edit</i>
<textarea data-length="400"  class="materialize-textarea #ffe082 amber lighten-3" name="experiencia" placeholder="Indicar nombre de Empresa y años trabajados" maxlength="400"></textarea>
</div>


<h2>INFORMACION ADICIONAL</h2>


    <label>Comentarios</label>
    <div class="input-field col s12 ">
      <i class="material-icons prefix">mode_edit</i>
    <textarea data-length="400"  class="materialize-textarea #ffe082 amber lighten-3" name="message" placeholder="Describa Aquí" maxlength="200"></textarea>
    </div>



<label>Adjunte su CV (soporta archivos word,pdf y txt)</label>
<br>
<br>
<div class="file-field input-field">
   <div class="btn #e65100 orange darken-4">
     <span>Subir Archivo</span>
     <input type="file" name="fileToUpload" id="fileToUpload">
   </div>
   <div class="file-path-wrapper">
     <input class="file-path validate" type="text">
   </div>
 </div>
<br></br>
    <label>Ingrese el codigo de seguridad</label>
<br>
<br>

<iframe frameborder="0" width="215px" height="80px" id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image"></iframe>
    <div class="row">
    <input class="input-field col s3" type="text" name="captcha_code" size="10" maxlength="6" required/>
    <a href="#" class="waves-effect waves-light btn #e65100 orange darken-4
" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false"><i class="material-icons left">autorenew</i>Renovar</a>

  </div>

<br></br>
<div class="row">
    <button class="btn waves-effect waves-light center-align #e65100 orange darken-4
"  type="submit" id="submit" name="submit">Enviar
      <i class="material-icons right">send</i>
    </button>
  </div>
</form>

<?php    include_once 'footer.php';
?>
