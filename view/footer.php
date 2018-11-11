<footer class="page-footer white z-depth-5">
          <div class="container">
            <div class="row">
              <div class="col s12 m6 l6 ">
                <h5 class="black-text">Nombre de Empresa</h5>
                <p class="black-text text-lighten-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non amet obcaecati ipsum ad quasi et accusantium? Quis nostrum, eveniet odio, eos incidunt adipisci neque, quisquam impedit non qui corporis obcaecati?</p>
                <p class="black-text text-lighten-4">Telefono : 948426521</p>
                <p class="black-text text-lighten-4">Dirección : </p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="black-text">Redes Sociales</h5>
                <ul>
                  <li ><a class="black-text text-lighten-3 valign-wrapper" href="#!"><i class="fab fa-3x fa-facebook " style="color:#0d47a1;margin-right:0.1em;"></i> Nombre Facebook</a></li>
                  <li><a class="black-text text-lighten-3 valign-wrapper" href="#!"><i class="fab fa-3x fa-instagram" style="color:#d81b60;margin-right:0.1em;" ></i>Instagram</a></li>
                  <li><a class="black-text text-lighten-3 valign-wrapper" href="#!"><i class="fab fa-3x fa-twitter-square"  style="color:#42a5f5;margin-right:0.1em;"></i>Twitter</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright  grey darken-4">
            <div class="container">
            © 2018 Copyright
            <a class=" text-lighten-4 right white-text" href="?c=pagina&a=login">Intranet</a>
            </div>
          </div>
  </footer>


<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="recursos/js/materialize.js"></script>
<script src="recursos/js/all.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
  });

// document.addEventListener('DOMContentLoaded', function() {
//     document.querySelectorAll('input#input_text, textarea#textarea1').characterCounter();
//   });


 $(document).ready(function() {
    $('input#input_text, textarea#textarea1').characterCounter();
  });
//   duration 	Number 	200 	Transition duration in milliseconds.
// dist 	Number 	-100 	Perspective zoom. If 0, all items are the same size.
// shift 	Number 	0 	Set the spacing of the center item.
// padding 	Number 	0 	Set the padding between non center items.
// numVisible 	Number 	5 	Set the number of visible items.
// fullWidth 	Boolean 	false 	Make the carousel a full width slider like the second example.
// indicators 	Boolean 	false 	Set to true to show indicators.
// noWrap 	Boolean 	false 	Don't wrap around and cycle through items.
// onCycleTo 	Function 	null 	Callback for when a new slide is cycled to.
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.carousel');
    var instances = M.Carousel.init(elems,{
        fullWidth:true,
        indicators:true,
        padding:0
    });
  });


    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.parallax');
    var instances = M.Parallax.init(elems);
  });


</script>
</body>
</html>