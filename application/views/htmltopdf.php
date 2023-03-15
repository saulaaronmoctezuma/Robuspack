<<<<<<< HEAD
<!--
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */
-->
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
<html lang="es-mx">
    <head>
        <title>Robuspack</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
          <link rel="icon" href="<?= base_url('assets/images/robuspack_icon.png') ?>">
    </head>
    <body>
        <div class="container box">
            <br />
<<<<<<< HEAD
            <h1 align="rigth">Ficha Técnica del Cliente</h1>
            
       
=======
            <h3 align="rigth">Ficha Técnica del Cliente</h3>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            <br />
            <?php
            if (isset($customer_data)) {
                ?>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" border>
                        <tr>
                             <th>Id</th>
                <th>Grupo</th>
                <th>Cliente</th>
                <th>Cliente SAE</th>
                <th>Razón Social</th>
                <th>RFC</th>
                <th>Dirección</th>
                <th style="text-align: center">Teléfono Celular</th>
               
                <th>Extensión</th>
                <th>Correo</th>
                 <th style="text-align: center">Moneda</th>
                <th style="text-align: center">Cuenta Bancaria</th>
                <th style="text-align: center">Vendedor Refacciones</th>
                <th style="text-align: center" >Vendedor Maquinaria</th>
                            <th>Ver</th>
                            <th>Ver en PDF</th>
                        </tr>
                        <?php
                        foreach ($customer_data->result() as $row) {
                            echo '
				<tr>
					<td>' . $row->id_cliente . '</td>
					<td>' . $row->grupo . '</td>
                                        <td>' . $row->cliente . '</td>
                                        <td>' . $row->cliente_sae . '</td>
                                        <td>' . $row->razon_soc . '</td>
                                        <td>' . $row->rfc . '</td>
                                        <td>' . $row->direccion . '</td>
                                        <td>' . $row->tel_cel . '</td>
                                        <td>' . $row->extension . '</td>
                                        <td>' . $row->correo . '</td>     
                                        <td>' . $row->moneda . '</td>
                                        <td>' . $row->cta_banc . '</td>
                                        <td>' . $row->vendedor_refacciones . '</td>
                                        <td>' . $row->vendedor_maquinaria . '</td>
					<td><a href="' . base_url() . 'htmltopdf/details/' . $row->id_cliente . '">Ver solo este</a></td>
					<td><a target="_blank" href="' . base_url() . 'htmltopdf/pdfdetails/' . $row->id_cliente . '">Ver en pdf</a></td>
				</tr>
				';
                        }
                        ?>
                    </table>
                </div>
                <?php
            }
            if (isset($customer_details)) {
                echo $customer_details;
            }
            ?>
        </div>
    </body>
</html>
