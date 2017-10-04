</section>




<script  src="js/index.js"></script>


<script>

$(function() {
$("#regiones").on('change', function() {


    // re-initialize material-select
    //$('#comunas').material_select();
    $("#comunas").material_select();

    //$('select').material_select();

});
});

  $(document).ready(function() {
    $('select').material_select();
    $('.tooltipped').tooltip();

  });



function reloadCaptcha()

{
document.getElementById('cap').src='secureimage/secureimage_show.php';
}

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
            © 2016 Derechos Reservados
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>



</html>
