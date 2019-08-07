 </div><!--row-->   
   <!--
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */
--> 
   <!-- Para traerse el rol que esta registrado-->
      

<!-- Smartsupp Live Chat script 
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = 'bb88f9ad19c9ad2ca084ef3765d1b072ab789fbb';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>-->
<!-- Smartsupp Live Chat script -->
<!-- Smartsupp Live Chat script
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = 'f0a91349ba244ba297a4df9c04b4eecc44651837';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
 -->






    <footer>
        <div class="col-md-12" style="text-align:center;">
            <hr>
            
              
                    <h5 class="text-center " style="color:black">&#169;   Copyright Robuspack <?php echo date("Y"); ?> </h5>
                <meta name="description" content="sistema de control de robuspack" />
                
                
        </div>
    </footer>
    </div><!-- /container -->  
    
    
    
    
    <!-- Fecha para subir -->  
     <div id="toTop" style="display: block;"><span class="glyphicon glyphicon-chevron-up"></span></div>
     <script>
        $(document).ready(function($) { 
            $(window).scroll(function() {
                if($(this).scrollTop() != 0) {
                    $("#toTop").fadeIn();   
                } else {
                    $("#toTop").fadeOut();
                }
            });
            
            $("#toTop").click(function() {
                $("body,html").animate({scrollTop:0},800);
            });            
        });
    </script>
    <!-- /Fecha para subir --> 
    
    
    
    <!-- /Load Js -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
    
     <script src="<?php echo base_url();?>assets/js/jquery-1.11.3.min.js"></script>
	
	<script src="<?php echo base_url();?>assets/js/imagenes.js"></script>
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
            
 
        <span id="liveclock" style="position:absolute;left:0;top:0;"></span>
       
        
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
         
     
 
 <!--    
<script>

$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#example tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Buscar '+title+'" />' );
    } );
 
    // DataTable
    var table = $('#example').DataTable();
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
} );

</script>-->


<script>
  $('#example').DataTable({
    "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
       
    }
    
  });
  
</script>


<!--Para Buscar-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.2.1/jquery.quicksearch.js"></script>
<script>
    $(function () {
        $('#buscandoIguales').quicksearch('table tbody tr');
    });
</script> 

       
       
    </body>
</html>