<!DOCTYPE html>
<html lang="es-mx">
<head>
	<meta charset="utf-8">
	<title>robuspack</title>
	
</head>
<body>
	<div class="container">
		<div class="col-sm-4 col-md-offset-4">
		<h4>Bitacora</h4>
			<form class="form-horizontal" id="submit">
				<div class="form-group">
					<input type="text" name="title" class="form-control" placeholder="grupo">
				</div>
                            <div class="form-group">
					<input type="text" name="cliente" class="form-control" placeholder="ingresa cliente">
				</div>
                             <div class="form-group">
					<input type="text" name="descripcion" class="form-control" placeholder="ingresa la descripcion">
				</div>
                            
				<div class="form-group">
					<input type="file" name="file">
				</div>

				<div class="form-group">
					<button class="btn btn-success" id="btn_upload" type="submit">Upload</button>
				</div>
			</form>	
		</div>
	</div>
<script src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>


<script type="text/javascript">
	$(document).ready(function(){

		$('#submit').submit(function(e){
		    e.preventDefault(); 
		         $.ajax({
		             url:'<?php echo base_url();?>index.php/upload/do_upload',
		             type:"post",
		             data:new FormData(this), //this is formData
		             processData:false,
		             contentType:false,
		             cache:false,
		             async:false,
		              success: function(data){
		                  alert("Archivo subido correctamente");
		           }
		         });
		});
		

	});
	
</script>
</body>
</html>