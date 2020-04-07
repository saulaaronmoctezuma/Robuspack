<!doctype html>
<html>
 <head>
   <title>Entrada </title>
 </head>
 <body>
 
     
     
   
    <script>
function sumar(){
	m1 = document.getElementById("semail").innerText;
	m2 = document.getElementById("multiplicador").value;
	r = parseInt(m1)+ parseInt(m2);
	document.getElementById("qty").value = r;
        
        
        
         if (document.getElementById("qty").value === "Infinity") {
                document.getElementById("qty").value = " ";
            }
            if (document.getElementById("qty").value === "NaN") {
                document.getElementById("qty").value = " ";
            }
            
            if(document.getElementById("semail").innerText===" "){
                 document.getElementById("multiplicador").readOnly = false;
            }
            
           
                
	}
        
        

</script>
<form action="<?= base_url('Products/productModificar') ?>" method="post" align="center" onsubmit="return vali()">

    <br>
    <br><br>    
Selecciona un SKU  : <select id='sku'class="select_group" name="sku" class="form-control select_group"  onkeypress="sumar()" onChange="document.getElementById('multiplicador').value = '';document.getElementById('qty').value = ''" onselect="sumar()">
     <?php
     
     echo '<option>Selecciona una SKU</option>';
     foreach($users as $user){
         
	echo "<option value='".$user['sku']."' >".$user['sku']."</option>";
     }
     ?>
  </select>

  <!-- User details -->
  <div >
   Descripcion : <span id='suname'></span><br/>
   Precio : <span id='sname'></span><br/>
   Stock Existente  : <span id='semail' onkeypress="sumar()" onChange="sumar()" onselect="sumar()"></span><br/>
   
      
  </div>


  
  Nuevas Piezas : <input type="number" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  min="1"  max="5000" maxlength="4" id="multiplicador" name="multiplicador" onkeyup="sumar();" onChange="sumar();"> <br/><br>
  Total de Piezas : <input type="text" name="qty" style="background-color:#03E7F7;" readonly id="qty"><br><br>
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
       $('#suname,#sname,#semail').text('');
       if(len > 0){
         // Read values
         var uname = response[0].name;
         var name = response[0].price;
         var email = response[0].qty;
 
         $('#suname').text(uname);
         $('#sname').text(name);
         $('#semail').text(email);
 
       }
 
     }
   });
  });
 });
 </script>
 </body>
</html>