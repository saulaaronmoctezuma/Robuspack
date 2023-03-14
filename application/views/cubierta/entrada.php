    <!doctype html>
<html>
 <head>
   <title>Entrada </title>
 </head>
 <body>
 
     
     
   
    <script>
        
        function showInp() {
            getSelectValue = document.getElementById("tipo_documento").value;
            if (getSelectValue === "") {
                document.getElementById("vacio").style.display = "inline-block";
                document.getElementById("vale_garantia").style.display = "none";
                document.getElementById("bill_no").disabled = true;
                document.getElementById("factura").style.display = "none"
                document.getElementById("factura").disabled = true;
                
            } else if (getSelectValue === "Compra") {
                document.getElementById("factura").disabled = false;
                document.getElementById("vale_garantia").disabled = true;
                document.getElementById("factura").style.display = "inline-block";
                document.getElementById("vacio").style.display = "none";
                document.getElementById("vale_garantia").style.display = "none";
                
            } else if (getSelectValue === "Devolución") {
                document.getElementById("factura").disabled = true;
                document.getElementById("vale_garantia").disabled = false;
                document.getElementById("vacio").style.display = "none";       
                document.getElementById("factura").style.display = "none";
                document.getElementById("vale_garantia").style.display = "inline-block";
                
            } else if (getSelectValue === "Préstamo") {
                document.getElementById("vacio").style.display = "none";
                document.getElementById("factura").disabled = true;
                document.getElementById("vale_garantia").disabled = true;
                document.getElementById("factura").style.display = "none";
                document.getElementById("vale_garantia").style.display = "none";
             
            }

            

        }
        
        
function sumar(){
	m1 = document.getElementById("sstock").innerText;
	m2 = document.getElementById("multiplicador").value;
	r = parseInt(m1)+ parseInt(m2);
	document.getElementById("qty").value = r;
        
        
        
         if (document.getElementById("qty").value === "Infinity") {
                document.getElementById("qty").value = " ";
            }
            if (document.getElementById("qty").value === "NaN") {
                document.getElementById("qty").value = " ";
            }
            
            if(document.getElementById("sstock").innerText===" "){
                 document.getElementById("multiplicador").readOnly = false;
            }
            
           
                
	}
        
        

</script>
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
   <tr> <td>Precio : </td><td><span id='sprecio'></span><br/></td></tr>
   <tr> <td>Stock Existente  :</td> <td><span id='sstock' onkeypress="sumar()" onChange="sumar()" onselect="sumar()"></span></td><br/></tr>
   
      
  </div>


  
  <tr><td> Nuevas Piezas :</td> <td  ><input required type="number" class="form-control" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  min="1"  max="5000" maxlength="4" id="multiplicador" name="multiplicador" onkeyup="sumar();" onChange="sumar();"> </td><br/><br></tr>
  <tr> <td>Total de Piezas :</td><td> <input type="text" class="form-control" name="qty" style="background-color:#03E7F7;" readonly id="qty"></td></tr>
   <tr><td> Nu Pedimento </td> <td  ><input class="form-control"   maxlength="20" id="" name="pedimento" onkeyup="();" onChange="();"> </td><br/><br></tr>
  <tr><td> <select name="tipo_de_documento" id="tipo_documento" required onchange="showInp()">
                                        <option value="">Tipo de documento</option>
                                        <option value="Compra">Compra</option>
                                        
                                        <option value="Devolución">Devolución</option> 
          </select> </td> <td> <input class="form-control" id="vacio" type="text"  disabled />
                                        <input class="form-control" id="factura" type="text" style="display: none" required name="numero_documento" placeholder="No Factura"/>
                                           <input class="form-control" id="vale_garantia" type="text" style="display: none" required  name="bill_no"  placeholder="No Vale ó Garantía"/>
                                        
  
  
 

                                  

                                   
                                        
                                  
    </table>
    </center>
  <br><br>
 <input class="btn btn-success" type="submit" title="Da clic para guardar los datos" value="Guardar" data-toggle="tooltip" data-placement="right" title="Da clic para guardar los datos de la venta">


                <a title="Da clic para regresar al menú" href="javascript:window.history.go(-1);" class="btn btn-danger"><b> </b>Cancelar</a>
</form>
                       
  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type='text/javascript'>
  $(document).ready(function(){
 
   $('#sku').change(function(){
    var sku = $(this).val();
    $.ajax({
     url:'<?=base_url()?>index.php/Products/productsDetails',
     method: 'post',
     data: {sku: sku},
     dataType: 'json',
     success: function(response){
       var len = response.length;
       $('#sidproducto,#sdescripcion,#sprecio,#sstock').text('');
       if(len > 0){
         // Read values
           var idproducto = response[0].id;
         var descripcion = response[0].description;
         var precio = response[0].price;
         var stock = response[0].qty;
 
 
 
         $('#sidproducto').val(idproducto);
         $('#sdescripcion').text(descripcion);
         $('#sprecio').text(precio);
         $('#sstock').text(stock);
 
       }
 
     }
   });
  });
 });
 </script>
 </body>
</html>