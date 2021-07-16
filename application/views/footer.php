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
<!-- 

Smartsupp Live Chat script 


 
-->
<!-- Para traerse el rol que esta registrado-->
<?php
//check user level
$dataLevel = $this->userlevel->checkLevel($role);
$id_del_usuario = $this->userlevel->id($id);

//check user level
?>

<?php
//compara si es administrador
if ($dataLevel == 'is_admin') {
  
} else if ($id_del_usuario == 17) {
    
} else {
      ?>

    <?php
}
?>


<footer>
    <div class="col-md-12" style="text-align:center;">
        <hr>


        <h5 class="text-center " style="color:black">&#169;   Copyright Robuspack <?php echo date("Y"); ?> </h5>
        <meta name="description" content="sistema de control de robuspack src" />


    </div>
</footer>
</div><!-- /container -->  




<!-- Fecha para subir -->  
<div id="toTop" style="display: block;"><span class="glyphicon glyphicon-chevron-up"></span></div>
<script>
    $(document).ready(function($) {
        $(window).scroll(function() {
            if ($(this).scrollTop() != 0) {
                $("#toTop").fadeIn();
            } else {
                $("#toTop").fadeOut();
            }
        });

        $("#toTop").click(function() {
            $("body,html").animate({scrollTop: 0}, 800);
        });
    });
</script>
<!-- /Fecha para subir --> 



<!-- /Load Js -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.3.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/imagenes.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>




<span id="liveclock" style="position:absolute;left:0;top:0;"></span>


<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<!--<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>-->
<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js "></script>

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
         "scrollX": true,   
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"

        }
       
        

    });

</script>

<script>
    $('#sic').DataTable({
         
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"

        }
       
        

    });

</script>

 
<script>
     
    
   $('#example2').DataTable( {
        scrollY:        490,
        scrollX:        true,
        scrollCollapse: true,
        paging:         false,
        fixedColumns:   true,
        select:         true,
         "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json",
            
          

        }
    } );

</script>

<script>
$('#mydatatable tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Filtrar.." />' );
    } );

    var table = $('#mydatatable').DataTable({
        "dom": 'B<"float-left"i><"float-right"f>t<"float-left"l><"float-right"p><"clearfix">',
        "responsive": false,
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
        },
        "order": [[ 0, "desc" ]],
        "initComplete": function () {
            this.api().columns().every( function () {
                var that = this;

                $( 'input', this.footer() ).on( 'keyup change', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                        }
                });
            })
        }
    });

</script>

<!--Para Buscar-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.2.1/jquery.quicksearch.js"></script>
<script>
    $(function() {
        $('#buscandoIguales').quicksearch('table tbody tr');
    });
</script> 


 <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"><b>Sistema de Control Robuspack</b></h4>
          </div>
          <div class="modal-body">
            <h2>Versión 1.0</h2>
            <p>El sistema está en línea desde el día 29/10/2018.</p>
            <h2>Dudas</h2>
           <!--<p>Attendance login system is based on the <a href="https://github.com/bcit-ci/CodeIgniter">codeigniter</a>.-->
            <p>Si tienes dudas o comentarios comunícate con nosotros al correo : <font color="orange" size="1">desarrollador.tics@robuspack.com</font>
                o al correo <font color="red" size="2">desarrollador.ti@robuspack.com</font> tambien puedes marcarnos al <font color="red">442-183-1879</font> Ext <font color="red">4979</font>.
            </p>
            
            <p><font color="black" size="1">Desarolladores de Software </font><br>
            <font color="red">Ing. Ana Karen González Palma</font> <br>
              <font color="orange">  Ing. Saúl Aarón González Moctezuma</font></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
 
 
 
 <!-- Start of HubSpot Embed Code 
  <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/19997234.js"></script>
 End of HubSpot Embed Code -->
  <!-- Modal -->
  
<!--  
  <script>

    $('#example').DataTable( {
        scrollY:        300,
        scrollX:        true,
        scrollCollapse: true,
        paging:         false,
        fixedColumns:   {
            leftColumns: 2
        },
        columnDefs: [ {
            orderable: false,
            className: 'select-checkbox',
            targets:   0
        } ],
        select: {
            style:    'os',
            selector: 'td:first-child'
        },
        order: [[ 1, 'asc' ]]
    } );

</script>-->

<script scr="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script scr="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
<script scr=""></script>
</body>
      <!--<div style="text-align: center;"><a style= "@media screen and (max-width: 980px) display: none; left: 0px; height: 200px; width: 70px; position: fixed; top: 0px;"><img src="http://www.imagenesanimadas.net/Navidad/Adornos/adornos-01.gif" title=" Hola <?php echo $first_name; ?> te deseamos una Feliz Navidad " _fcksavedurl="" alt="" /></a></div> 
-->
</html><script scr="https://cdn.datatables.net/fixedcolumns/3.3.0/js/dataTables.fixedColumns.min.js"></script>

<!--    
   <div style="text-align: center;"><a style= "@media screen and (max-width: 980px) display: none; left: 0px; height: 400px; width: 70px; position: fixed; top: 60px;"><img src="http://www.imagenesanimadas.net/Mundial/Mexico/Mexico-02.gif" title=" Hola <?php echo $first_name; ?> te deseamos una Feliz Navidad " _fcksavedurl="" alt="" /></a></div>-->