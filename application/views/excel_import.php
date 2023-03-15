<html>
<head>
	<title>Excel</title>
</head>
<body>
	<h1>Exportar datos excel</h1>
	<?php
	echo form_open_multipart('excel_import/import_data');
	echo form_upload('file');
	echo '<br/>';
	echo form_submit(null, 'Upload');
	echo form_close();
	?>
	<h4>Total data : <?php echo $num_rows;?></h4>
</body>
</html>