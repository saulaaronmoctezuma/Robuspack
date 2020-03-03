<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Robuspack</title>
        <meta charset='utf-8' />
      <!--  <link href="<?php echo base_url();?>assets/calendario/css/bootstrap.min.css" rel="stylesheet">-->
        <link href='<?php echo base_url();?>assets/calendario/css/fullcalendar.css' rel='stylesheet' />
        <link href="<?php echo base_url();?>assets/calendario/css/bootstrapValidator.min.css" rel="stylesheet" />        
        <link href="<?php echo base_url();?>assets/calendario/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
        <!-- Custom css  -->
        <link href="<?php echo base_url();?>assets/calendario/css/custom.css" rel="stylesheet" />

        <script src='<?php echo base_url();?>assets/calendario/js/moment.min.js'></script>
        <script src="<?php echo base_url();?>assets/calendario/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/calendario/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/calendario/js/bootstrapValidator.min.js"></script>
        <script src="<?php echo base_url();?>assets/calendario/js/fullcalendar.min.js"></script>
        <script src='<?php echo base_url();?>assets/calendario/js/bootstrap-colorpicker.min.js'></script>
      

        <script src='<?php echo base_url();?>assets/calendario/js/main.js'></script>
        
    </head>
    <body><center>
<form method="post" action="<?php echo base_url(); ?>ExportarExcel/crearExcelCalendario">

                <button  class="btn btn-info" title="Da clic para exportar los datos a Excel" style="font-size:16px;thor:white"><font thor="white">Exportar</font> <i class="fa fa-file-excel-o"></i></button>
</form> </center>
        <div class="container">
                <!-- Notification -->
                <div class="alert"></div>
            <div class="row clearfix">
                <div class="col-md-12 column">
                        <div id='calendar'></div>
                </div>
            </div>
        </div>
        <div class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <div class="error"></div>
                        <form class="form-horizontal" id="crud-form">
                        <input type="hidden" id="start">
                        <input type="hidden" id="end">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="title">Titulo</label>
                                <div class="col-md-4">
                                    <input id="title" name="title" type="text" class="form-control input-md" />
                                </div>
                            </div>                            
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="description">Descripción</label>
                                <div class="col-md-4">
                                    <textarea rows="6" cols="80" class="form-control" id="description" name="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="color">Color</label>
                                <div class="col-md-4">
                                    <input id="color" name="color" type="text" class="form-control input-md" readonly="readonly" />
                                    <span class="help-block">Elige Color</span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>



