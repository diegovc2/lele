

 <?php
 session_start(); // this MUST be called prior to any output including whitespaces and line breaks!
 $GLOBALS['ct_recipient']   = 'YOU@EXAMPLE.COM'; // Change to your email address!
 $GLOBALS['ct_msg_subject'] = 'Securimage Test Contact Form';
 $GLOBALS['DEBUG_MODE'] = 1;
 // CHANGE TO 0 TO TURN OFF DEBUG MODE
 // IN DEBUG MODE, ONLY THE CAPTCHA CODE IS VALIDATED, AND NO EMAIL IS SENT
 // Process the form, if it was submitted
 process_si_contact_form();
 ?>

 <!DOCTYPE HTML>
 <html>

 <head>

   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link rel="stylesheet" href="css/materialize.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <title>Formulario de Postulacion</title>
 <link rel="shortcut icon" href="http://atmspa.cl/wp-content/themes/atm-spa-theme/img/favicon.ico" type="image/x-icon">
 </head>

 <header>


 <div class="navbar-fixed transparentBG">
     <nav>
   <div class="nav-wrapper #eeeeee grey lighten-3
 ">

     <ul id="nav-mobile" class="left hide-on-med-and-down">
       <li><a href="http://www.atmspa.cl" class="brand-logo vertical">HOME</a></li>
     </ul>
   </div>
 </nav>
 </div>

 </header>

     <body>
       <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
         <script src="jquery.rut.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

           <div class="container">
             <!-- Page Content goes here -->

       <section class="body">



<br>
<br>

<div class="row valign-wrapper ">
<div  class="col offset-s2 valign">
<div class="card-panel yellow">

<p class="caption">
  Bienvenido a la página de postulación.
  Aca podras dejar tu Currículum. Una vez enviado quedará en nuestra
  base de datos. Si envia CV por segunda vez se editarán los datos iniciales
</p>

<div id="success_message" style="display: none">Your message has been sent!<br />We will contact you as soon as possible.</div>

</div>
</div>
</div>

<br>
<br>

      <form method="post" action="" id="contact_form" onsubmit="return processForm()" enctype="multipart/form-data">
        <input type="hidden" name="do" value="contact" />


        <div class="input-field col s12">

    <input type="text" name="name"  required>
    <label>Nombre</label>

  </div>

    <div class="input-field col s12">
 <input required type="text" id="rut" name="rut" class="tooltipped" data-tooltip="Minimo 7 Dígitos">
 <label>Rut</label>
</div>



    <br></br>




    <div class="input-field col s12">

    <input type="text" name="direccion" class="tooltipped" data-tooltip="Ingrese Calle y Número"  required>
    <label>Direccion</label>

  </div>

<br>


<div class="row">
    <div class="input-field col s12">

<td class="cr25"><label class="active">País</label></td>
<td class="cr25"><select name="pais"class="drp" style="width:250;height:20" width=250>
<option value="">Seleccione</option>
<option value="argentina">Argentina</option>
<option value="20">Afganistán</option>
<option value="30">Albania</option>
<option value="40">Alemania</option>
<option value="50">Andorra</option>
<option value="60">Angola</option>
<option value="70">Anguilla</option>
<option value="80">Antártida Argentina</option>
<option value="90">Antigua y Barbuda</option>
<option value="100">Antillas Holandesas</option>
<option value="110">Arabia Saudita</option>
<option value="120">Argelia</option>
<option value="130">Armenia</option>
<option value="140">Aruba</option>
<option value="150">Australia</option>
<option value="160">Austria</option>
<option value="170">Azerbaiján</option>
<option value="180">Bahamas</option>
<option value="190">Bahrain</option>
<option value="200">Bangladesh</option>
<option value="210">Barbados</option>
<option value="220">Bélgica</option>
<option value="230">Belice</option>
<option value="240">Benin</option>
<option value="250">Bhutan</option>
<option value="260">Bielorusia</option>
<option value="bolivia">Bolivia</option>
<option value="280">Bosnia Herzegovina</option>
<option value="290">Botswana</option>
<option value="brasil">Brasil</option>
<option value="310">Brunei</option>
<option value="320">Bulgaria</option>
<option value="330">Burkina Faso</option>
<option value="340">Burundi</option>
<option value="350">Cabo Verde</option>
<option value="360">Camboya</option>
<option value="370">Camerún</option>
<option value="380">Canadá</option>
<option value="390">Chad</option>
<option selected="selected" value="chile">Chile</option>
<option value="410">China</option>
<option value="420">Chipre</option>
<option value="430">Colombia</option>
<option value="440">Comoros</option>
<option value="450">Congo</option>
<option value="460">Corea del Norte</option>
<option value="470">Corea del Sur</option>
<option value="480">Costa de Marfil</option>
<option value="490">Costa Rica</option>
<option value="500">Croacia</option>
<option value="510">Cuba</option>
<option value="520">Darussalam</option>
<option value="530">Dinamarca</option>
<option value="540">Djibouti</option>
<option value="550">Dominica</option>
<option value="560">Ecuador</option>
<option value="570">Egipto</option>
<option value="580">El Salvador</option>
<option value="590">Em. Arabes Un.</option>
<option value="600">Eritrea</option>
<option value="610">Eslovaquia</option>
<option value="620">Eslovenia</option>
<option value="espana">España</option>
<option value="640">Estados Unidos</option>
<option value="650">Estonia</option>
<option value="660">Etiopía</option>
<option value="670">Fiji</option>
<option value="680">Filipinas</option>
<option value="690">Finlandia</option>
<option value="700">Francia</option>
<option value="710">Gabón</option>
<option value="720">Gambia</option>
<option value="730">Georgia</option>
<option value="740">Ghana</option>
<option value="750">Gibraltar</option>
<option value="760">Grecia</option>
<option value="770">Grenada</option>
<option value="780">Groenlandia</option>
<option value="790">Guadalupe</option>
<option value="800">Guam</option>
<option value="810">Guatemala</option>
<option value="820">Guayana Francesa</option>
<option value="830">Guinea</option>
<option value="840">Guinea Ecuatorial</option>
<option value="850">Guinea-Bissau</option>
<option value="860">Guyana</option>
<option value="870">Haití</option>
<option value="880">Holanda</option>
<option value="890">Honduras</option>
<option value="900">Hong Kong</option>
<option value="910">Hungría</option>
<option value="920">India</option>
<option value="930">Indonesia</option>
<option value="940">Irak</option>
<option value="950">Irán</option>
<option value="960">Irlanda</option>
<option value="970">Islandia</option>
<option value="980">Islas Cayman</option>
<option value="990">Islas Cook</option>
<option value="1000">Islas Faroe</option>
<option value="1010">Islas Marianas del Norte</option>
<option value="1020">Islas Marshall</option>
<option value="1030">Islas Solomon</option>
<option value="1040">Islas Turcas y Caicos</option>
<option value="1050">Islas Vírgenes</option>
<option value="1060">Islas Wallis y Futuna</option>
<option value="1070">Israel</option>
<option value="1080">Italia</option>
<option value="1090">Jamaica</option>
<option value="1100">Japón</option>
<option value="1110">Jordania</option>
<option value="1120">Kazajstán</option>
<option value="1130">Kenya</option>
<option value="1140">Kirguistán</option>
<option value="1150">Kiribati</option>
<option value="1160">Kuwait</option>
<option value="1170">Laos</option>
<option value="1180">Lesotho</option>
<option value="1190">Letonia</option>
<option value="1200">Líbano</option>
<option value="1210">Liberia</option>
<option value="1220">Libia</option>
<option value="1230">Liechtenstein</option>
<option value="1240">Lituania</option>
<option value="1250">Luxemburgo</option>
<option value="1260">Macao</option>
<option value="1270">Macedonia</option>
<option value="1280">Madagascar</option>
<option value="1290">Malasia</option>
<option value="1300">Malawi</option>
<option value="1310">Mali</option>
<option value="1320">Malta</option>
<option value="1330">Marruecos</option>
<option value="1340">Martinica</option>
<option value="1350">Mauricio</option>
<option value="1360">Mauritania</option>
<option value="1370">Mayotte</option>
<option value="1380">México</option>
<option value="1390">Micronesia</option>
<option value="1400">Moldova</option>
<option value="1410">Mónaco</option>
<option value="1420">Mongolia</option>
<option value="1430">Montserrat</option>
<option value="1440">Mozambique</option>
<option value="1450">Myanmar</option>
<option value="1460">Namibia</option>
<option value="1470">Nauru</option>
<option value="1480">Nepal</option>
<option value="1490">Nicaragua</option>
<option value="1500">Níger</option>
<option value="1510">Nigeria</option>
<option value="1520">Noruega</option>
<option value="1530">Nueva Caledonia</option>
<option value="1540">Nueva Zelandia</option>
<option value="1550">Omán</option>
<option value="1570">Pakistán</option>
<option value="1580">Panamá</option>
<option value="1590">Papua Nueva Guinea</option>
<option value="paraguay">Paraguay</option>
<option value="1610">Perú</option>
<option value="1620">Pitcairn</option>
<option value="1630">Polinesia Francesa</option>
<option value="1640">Polonia</option>
<option value="1650">Portugal</option>
<option value="1660">Puerto Rico</option>
<option value="1670">Qatar</option>
<option value="1680">RD Congo</option>
<option value="1690">Reino Unido</option>
<option value="1700">República Centroafricana</option>
<option value="1710">República Checa</option>
<option value="1720">República Dominicana</option>
<option value="1730">Reunión</option>
<option value="1740">Rumania</option>
<option value="1750">Rusia</option>
<option value="1760">Rwanda</option>
<option value="1770">Sahara Occidental</option>
<option value="1780">Saint Pierre y Miquelon</option>
<option value="1790">Samoa</option>
<option value="1800">Samoa Americana</option>
<option value="1810">San Cristóbal y Nevis</option>
<option value="1820">San Marino</option>
<option value="1830">Santa Elena</option>
<option value="1840">Santa Lucía</option>
<option value="1850">Sao Tomé y Príncipe</option>
<option value="1860">Senegal</option>
<option value="1870">Serbia y Montenegro</option>
<option value="1880">Seychelles</option>
<option value="1890">Sierra Leona</option>
<option value="1900">Singapur</option>
<option value="1910">Siria</option>
<option value="1920">Somalia</option>
<option value="1930">Sri Lanka</option>
<option value="1940">Sudáfrica</option>
<option value="1950">Sudán</option>
<option value="1960">Suecia</option>
<option value="1970">Suiza</option>
<option value="1980">Suriname</option>
<option value="1990">Swazilandia</option>
<option value="2000">Taiwán</option>
<option value="uruguay">Uruguay</option>
</select>
</td>

</div>
</div>

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

  <input
 type="tel" id="codigo" name="codigo" placeholder="+569" pattern="[\+][0-9]{3}"  required  maxlength="4">
 <label class="active">Codigo</label>

</div>

<div class="input-field col s4 ">

      <input id="telefono" data-tooltip="8 Dígitos" class="tooltipped" title="Sólo Números y un m�nimo de 8 caracteres" type="tel" name="telefono" placeholder="1111111" pattern="[0-9]{8}"  required  maxlength="8"/>
      <label class="active">Telefono</label>

</div>

</div>

<div class="row">

<div class="input-field col s12">
    <label>Email</label>
    <input name="email" type="email" class="tooltipped" data-tooltip="ejemplo@dominio.com"required>
</div>

</div>

<h2>DATOS ACADEMICOS</h2>

<label>Enseñanza Básica y Media</label>
<div class="row">
 <div class="input-field col s6 align-center">
   <i class="material-icons prefix">mode_edit</i>
<textarea data-length="400" data-tooltip="Ingresar escuela y año de egreso" class="tooltipped materialize-textarea" name="colegio" maxlength="400"></textarea>
</div>
</div>

<label>Enseñanza Superior</label>

<div class="row">
<div class="input-field col s6 ">
  <i class="material-icons prefix">mode_edit</i>
<textarea data-length="400" data-tooltip="Ingresar nombre de universidad/instituto y su año de egreso"  class="tooltipped materialize-textarea " name="media"  maxlength="400"></textarea>
</div>
</div>


<label>Titulos</label>

<div class="row">
<div class="input-field col s6 ">
  <i class="material-icons prefix">mode_edit</i>
<textarea data-length="400"  class="tooltipped materialize-textarea " name="titulos" data-tooltip="Especificar por favor grado académico" maxlength="400"></textarea>
</div>
</div>

<label>Cursos y diplomados</label>

<div class="row">

<div class="input-field col s6 ">
  <i class="material-icons prefix">mode_edit</i>
<textarea data-length="400"  class="tooltipped materialize-textarea " name="cursos" data-tooltip="Especificar año e institución" maxlength="400"></textarea>
</div>
</div>


<h2>EXPERIENCIA PROFESIONAL</h2>

<div class="row">

<div class="input-field col s6 ">
  <i class="material-icons prefix">mode_edit</i>
<textarea data-length="400"  class="tooltipped materialize-textarea " name="experiencia" data-tooltip="Indicar nombre de Empresa y años trabajados" maxlength="400"></textarea>
</div>
</div>


<h2>INFORMACION ADICIONAL</h2>

<div class="row">

    <div class="input-field col s6 ">
      <i class="material-icons prefix">mode_edit</i>
    <textarea data-length="400"  class="tooltipped materialize-textarea " name="message" data-tooltip="Describa Aquí" maxlength="200"></textarea>
    </div>
</div>


<label>Adjunte su CV (soporta archivos .doc, .pdf, .docx  )</label>
<br>
<br>
<div class="file-field input-field">
   <div class="btn #e65100 orange darken-4">
     <span>Subir Archivo</span>
     <input type="file" name="fileToUpload" id="fileToUpload">
   </div>
   <div class="file-path-wrapper">
     <input class="file-path validate"  name ="path" type="text">
   </div>
 </div>
<br></br>
    <label>Ingrese el codigo de seguridad</label>
<br>
<br>


  <p>
    <?php require_once 'securimage/securimage.php'; echo Securimage::getCaptchaHtml(array('input_name' => 'ct_captcha')); ?>
  </p>


<br></br>
<div class="row">
    <button class="btn waves-effect waves-light center-align #e65100 orange darken-4
"  type="submit" id="submit" name="submit">Enviar
      <i class="material-icons right">send</i>
    </button>
  </div>
</form>


<script type="text/javascript">
    $.noConflict();

    function reloadCaptcha()
    {

      if (typeof window.captcha_image_audioObj !== 'undefined') captcha_image_audioObj.refresh(); document.getElementById('captcha_image').src = '/gitHub/formularioREAL/securimage/securimage_show.php?' + Math.random();
      this.blur();
       return false
        //jQuery('#siimage').prop('src', '/gitHub/formularioREAL/securimage/securimage_show.php?' + Math.random());
    }

    function processForm()
    {
        jQuery.ajax({
            url: '/gitHub/formularioREAL/form1.php',
            type: 'POST',
            data: jQuery('#contact_form').serialize(),
            dataType: 'json',
        }).done(function(data) {
            if (data.error === 0) {

              alert("Datos ENVIADOS");

  jQuery('#success_message').show();
    jQuery('#contact_form')[0].reset();
    reloadCaptcha();
              //document.getElementById(#contact_form).submit();

            } else {
                alert("There was an error with your submission.\n\n" + data.message);

                if (data.message.indexOf('Incorrect security code') >= 0) {
                    jQuery('#captcha_code').val('');
                }
                reloadCaptcha();

            }
        });

        return false;
    }
</script>

</section>



<script  src="js/index.js"></script>


<script>


(function($){
    // your code

  $(document).ready(function() {
    $('select').material_select();
    $('.tooltipped').tooltip();



  });

  $(function() {
  $("#regiones").on('change', function() {


      // re-initialize material-select
      //$('#comunas').material_select();
      $("#comunas").material_select();

      //$('select').material_select();

  });
  });




  $(function() {

    var rut=document.getElementById('rut');
    $("input#rut").rut({
         formatOn: 'keyup',
        minimumLength: 7, // validar largo mínimo; default: 2
          validateOn: 'change' // si no se quiere validar, pasar null
        });


      $("input#rut").rut().on('rutValido', function(e, rut, dv) {

        this.setCustomValidity("");

      });

      $("input#rut").rut().on('rutInvalido', function(e) {

        rut.setCustomValidity("RUT Invalido");
});

  });

})(jQuery);

</script>

</div>
</body>

<footer class="page-footer #f5f5f5 orange">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="grey-text">ATM</h5>
                <img src="imgs/atmspa-logo-r.svg">
                  </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="grey-text">Links</h5>
                <ul>
                  <li><a class="grey-text" href="#!">Link 1</a></li>
                  <li><a class="grey-text" href="#!">Link 2</a></li>
                  <li><a class="grey-text" href="#!">Link 3</a></li>
                  <li><a class="grey-text" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="footer-copyright">
            <div class="container grey-text">
            © 2017 Derechos Reservados
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>



</html>

<?php
// The form processor PHP code
function process_si_contact_form()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && @$_POST['do'] == 'contact') {
        // if the form has been submitted
        foreach($_POST as $key => $value) {
            if (!is_array($key)) {
                // sanitize the input data
                if ($key != 'ct_message') $value = strip_tags($value);
                $_POST[$key] = htmlspecialchars(stripslashes(trim($value)));
            }
        }
        $captcha = @$_POST['ct_captcha']; // the user's entry for the captcha code

        $errors = array();  // initialize empty error array

        // Only try to validate the captcha if the form has no errors
        // This is especially important for ajax calls
        $path     = @$_POST['path'];     // url from the form


        if($path===""){

          $errors['file_error'] = "NO HAY ARCHIVO";

        }


        if (sizeof($errors) == 0) {
            require_once dirname(__FILE__) . '/securimage/securimage.php';
            $securimage = new Securimage();
            if ($securimage->check($captcha) == false) {
                $errors['captcha_error'] = 'Codigo incorrecto';
            }
        }

        if (sizeof($errors) == 0) {

            if (isset($GLOBALS['DEBUG_MODE']) && $GLOBALS['DEBUG_MODE'] == false) {
                // send the message with mail()
            }
            print_r($_FILES);

            require("valid.php");

            //require_once("valid.php");
            $return = array('error' => 0, 'message' => 'OK');

            die(json_encode($return));
        } else {

            $errmsg = '';
            foreach($errors as $key => $error) {
                // set up error messages to display with each field
                $errmsg .= " - {$error}\n";
            }

            $return = array('error' => 1, 'message' => $errmsg);
            die(json_encode($return));
        }
    } // POST

} // function process_si_contact_form()
?>
