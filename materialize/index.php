<?php
  include_once "header.php";
 ?>

<section class="main-container">
  <div class="main-wrapper">
    <h2>Home</h2>
  </div>

  <?php
  if (isset($_GET['login'])){


  if($_GET['login']==='empty'){
    echo 'uno de tus campos esta vacío';
  }
  if($_GET['login']==='error'){

    echo 'usuario o contraseña no existen';
  }

  if($_GET['login']==='block'){

    echo 'usuario BLOQUEADO';
  }

}

  if(isset($_SESSION['admin'])){
    if($_SESSION['admin']==1){

    ?>

    <h2>Bienvenido
    <?php echo $_SESSION['u_first'];
    ?>
  </h2>

    <br>
<div class="menulog">
    <button  onclick="window.location.href='listarcv.php'">POSTULACIONES</button>
        <button   onclick="window.location.href='listusr.php'">USUARIOS</button>
</div>
    <?php
  }
  else{

  ?>

  <h2>Bienvenido USUARIO
  <?php echo $_SESSION['u_first'];
  ?>
</h2>

  <br>


    <ul class="collapsible" data-collapsible="accordion">
      <li>
        <div class="collapsible-header"><i class="material-icons">beach_access</i>Vacaciones</div>
        <div class="collapsible-body">
          <p class="center-align"><b><?php echo $_SESSION['vacaciones']?> días disponibles</b></p>

            <label class="black-text">Fecha de Inicio</label>
          <input name="fechainicio" id="fechainicio" type="text" class="datepicker"  placeholder="Fecha de Inicio" required>
          <input type="hidden" name="cpu_fechainicio" id="cpu_fechainicio">
          <label class="black-text">Fecha de Término</label>
          <input name=fechatermino id="fechatermino" type="text" class="datepicker"  placeholder="Fecha de Termino" required>
          <input type="hidden" name="cpu_fechatermino" id="cpu_fechatermino">
          <button data-target="modal1" class="btn modal-trigger">Agregar</button>


          <!-- Modal Structure -->
          <div id="modal1" class="modal">
            <div class="modal-content">
              <h4>Confirmacion</h4>
              <p><b>Desde</b></p>
              <p id="inicio"></p>
              <p><b>Hasta</b></p>
              <p id="fin"></p>
            </div>
            <div class="modal-footer">
              <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
            </div>
            <div class="modal-footer">
              <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Aceptar</a>
            </div>
          </div>

                </form>
                </div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
              </li>
            </ul>


<div class="menulog">
  <button  onclick="window.location.href='listarcv.php'">CERTIFICADOS</button>
      <button   onclick="window.location.href='listusr.php'">VACACIONES</button>
</div>


  <?php
  }
  }


$var="index";

   ?>
</section>
<script>
var fechaT=true;

$('.datepicker').pickadate({
min: fechaT,
format: 'dd/mm/yyyy',
hiddenPrefix: 'cpu_',
formatSubmit: 'yyyy/mm/dd',
selectMonths: true, // Creates a dropdown to control month
selectYears: 15, // Creates a dropdown of 15 years to control year,
today: 'Hoy',
clear: 'Limpiar',
close: 'Ok',
closeOnSelect: false, // Close upon selecting a date,
onClose: function() {
  var  fechaInicio= document.getElementById("fechainicio").value;

  },
  onOpen: function(){

      var  fechaInicio= document.getElementById("fechainicio").value;
      if(fechaInicio){

        var fechaFormat=fechaInicio.split("/");
        var arrFecha=[fechaFormat[2],fechaFormat[1],fechaFormat[0]];
        fechaT=arrFecha;
        var $input = $('#fechatermino').pickadate();
        var picker = $input.pickadate('picker');
        picker.set('min', fechaT);

      }

  }
});





  $('.modal').modal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      inDuration: 300, // Transition in duration
      outDuration: 200, // Transition out duration
      startingTop: '4%', // Starting top style attribute
      endingTop: '10%', // Ending top style attribute
      ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
              var dias=<?php echo $_SESSION['vacaciones']?>;
              var  fechaInicio= document.getElementById("fechainicio").value;
              var  fechatermino=  document.getElementById("fechatermino").value;



      document.getElementById("inicio").innerHTML=fechaInicio;
      document.getElementById("fin").innerHTML=fechatermino;

        console.log(modal, trigger);
      },

      complete: function() {

              var  fechaInicio= document.getElementById("fechainicio").value;
              var  fechatermino=  document.getElementById("fechatermino").value;

        var nombre= "<?php echo $_SESSION['u_first'] ?>";
        var apellido= "<?php echo $_SESSION['u_last'] ?>";
        var namae= nombre+" "+apellido;

        var mensaje= "del "+fechaInicio+" hasta "+fechatermino;

        /*var date_components = fechainicio.split("/");
        var current_year = date_components[2];
        var current_month= date_components[1];
        var current_day = date_components[0];

        current = current_year+"-"+current_month+"-"+current_day;
        var dateInicio =new Date(current);

         date_components = fechatermino.split("/");
         current_year = date_components[2];
         current_month= date_components[1];
         current_day = date_components[0];

        current = current_year+"-"+current_month+"-"+current_day;
        var dateTermino =new Date(current);
        dateInicio.setHours(0,0,0,0);
        dateTermino.setHours(0,0,0,0);


        var timeDiff = Math.abs(dateInicio.getTime() - dateTermino.getTime());
        var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));

*/

        emailjs.send("default_service","vacaciones",{from_name: namae,message_html: mensaje, notes: "Check this out!"});

         alert('Fecha Postulada');

       } // Callback for Modal close
    }
  );




</script>

<?php
  include_once "footer.php";
 ?>
