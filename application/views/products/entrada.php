    <!doctype html>
<html>
 <head>
   <title>Entrada </title>
 </head>
 <body>
 
     
     
   
  
    <form action="<?= base_url('Products/productModificar') ?>" method="post" align="center" onsubmit="return vali()">



    <br>
    <br><br>  
    <center>
        
        <style>
            td{
                font-size: 150%;
            }
            
        </style>  
        <h1>Entrada a  Inventario</h1>
    <table border="1" class="tablas table-bordered table-striped">
        <tr><td>
                Selecciona un SKU  :</td><td> <select required id='sku' data-live-search="true" data-live-search-style="startsWith" class="form-control selectpicker"  name="sku" class="form-control select_group"  onkeypress="sumar()" onChange="document.getElementById('multiplicador').value = '';document.getElementById('qty').value = ''" onselect="sumar()">
     <?php
     
     echo '<option>Selecciona una SKU</option>';
     foreach($users as $user){
         
	echo "<option value='".$user['sku']."' >".$user['sku']."</option>";
     }
     ?>
  </select>
            </td></tr>
  <!-- User details -->
  <div >
      
       <input type="hidden" name="sidproducto" id='sidproducto'>
      <tr>  <td> Descripcion :</td><td> <span id='sdescripcion'></span><br/></td></tr>
   <!--<tr> <td>Precio : </td><td><span id='sprecio'></span><br/></td></tr>-->
   <tr> <td>Stock Existente  :</td> <td><span id='sstock' onkeypress="sumar()" onChange="sumar()" onselect="sumar()"></span></td><br/></tr>
   
      
  </div>


  
  <tr><td> Nuevas Piezas :</td> <td  ><input onKeyPress="return soloNumeros(event)" required type="number" class="form-control" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  min="1"  max="5000" maxlength="4" id="multiplicador" name="multiplicador" onkeyup="sumar();" onChange="sumar();"> </td><br/><br></tr>
  <tr> <td>Total de Piezas :</td><td> <input type="text" class="form-control" name="qty" style="background-color:#03E7F7;" readonly id="qty"></td></tr>
  <tr><td> No. Pedimento  : </td> <td  ><input class="form-control"   maxlength="20" id="pedimento" name="pedimento" onkeyup="();" onChange="();"> </td><br/><br></tr>
 
   <tr><td colspan="2"><FONT FACE="Arial" SIZE=2 COLOR="red">Seleccione si no tiene pedimento</font>
   
<input type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent()"/></td></tr>
   
   
  <tr><td> <select name="tipo_de_documento" id="tipo_documento" required onchange="showInp()">
                                        <option value="">Tipo de documento</option>
                                        <option value="Compra">Compra</option>
                                        
                                        <option value="Devolución">Devolución</option> 
          </select> </td> <td> <input class="form-control" id="vacio" type="text"  disabled />
                                        <input class="form-control" id="factura" type="text" style="display: none" required name="numero_documento" placeholder="No Factura"/>
                                           <input class="form-control" id="vale_garantia" type="text" style="display: none" required  name="numero_documento"  placeholder="No Vale ó Garantía"/>
                                        
  
  
 

                                  

                                   
                                        
                                  
    </table>
    </center>
  <br><br>
 <input class="btn btn-success" type="submit" title="Da clic para guardar los datos" value="Guardar" data-toggle="tooltip" data-placement="right" title="Da clic para guardar los datos de la venta">


                <a title="Da clic para regresar al menú" href="javascript:window.history.go(-1);" class="btn btn-danger"><b> </b>Cancelar</a>
</form>

  <!--<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-3.2.1.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>-->
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/entrada_inventario.js' ?>"></script>
                       
  <!-- Script 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.css" />
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js"></script>
    
    
    <script>
        
        function soloNumeros(e){
	var key = window.Event ? e.which : e.keyCode
	return (key >= 48 && key <= 57)
}


window.onload = function() {
  var myInput = document.getElementById('multiplicador');
  myInput.onpaste = function(e) {
    e.preventDefault();
    //alert("esta acción está prohibida");
  }
  
  myInput.oncopy = function(e) {
    e.preventDefault();
   // alert("esta acción está prohibida");
  }
}
    </script>
 </body>
</html>