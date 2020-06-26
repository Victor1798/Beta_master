<?php
//Variable de Nombre
$varGral="-TS";
?>
<form id="frmActualizar<?php echo $varGral?>">

<input type="hidden"  id="eId">

    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="form-group">
                <label for="eNombreTema">Nombre del tema:</label>
                <input type="text" class="form-control " id="eNombreTema" autofocus required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="form-group">
                <label for="eLetraTema">Color de la letra:</label>
                <input type="text" class="form-control input-lg" id="eLetraTema" value="" required/>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="form-group">
                <label for="eBaseTema">Color base:</label>
                <input type="text" class="form-control input-lg" id="eBaseTema" value="" required/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="form-group">
                <label for="eBaseFuerte">Color base fuerte:</label>
                <input type="text" class="form-control input-lg" id="eBaseFuerte" value="" required/>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="form-group">
                <label for="eBorde">Color del borde:</label>
                <input type="text" class="form-control input-lg" id="eBorde" value="" required/>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col text-left">
                    <button  type="button" class="btn btn-outline-danger activo btnEspacio" id="btnCancelarA<?php echo $varGral?>">
                        <i class='fa fa-ban fa-lg'></i>
                        Cancelar
                    </button>
                </div>
                <div class="col text-center">
                    <button type="button" class="btn btn-outline-primary activo btnEspacio" id="">
                    <i class="fa fa-tint fa-lg" aria-hidden="true"></i>
                        Probar tema
                    </button>
                </div>
                <div class="col text-right">
                    <button  type="submit" class="btn btn-outline-success activo btnEspacio" id="btnActualizar<?php echo $varGral?>">
                        <i class='fa fa-bolt fa-lg'></i>
                        Actualizar tema
                    </button>
                </div>
            </div>
        </div>
    </div>

</form> 
