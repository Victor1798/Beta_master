<?php
//Var de formulario
$varGral="-TS";
?>
<form id="frmGuardar<?php echo $varGral?>">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="form-group">
                <label for="nombreTema">Nombre del tema:</label>
                <input type="text" class="form-control " id="nombreTema" autofocus required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="form-group">
                <label for="letraTema">Color de la letra:</label>
                <input type="text" class="form-control" id="letraTema" required/>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="form-group">
                <label for="cBaseTema">Color base:</label>
                <input type="text" class="form-control" id="cBaseTema" required/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="form-group">
                <label for="cBaseFuerte">Color base fuerte:</label>
                <input type="text" class="form-control input-lg" id="cBaseFuerte" required/>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="form-group">
                <label for="cBorde">Color del borde:</label>
                <input type="text" class="form-control input-lg" id="cBorde" required/>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col text-left">
                    <button  type="button" class="btn btn-outline-danger  activo btnEspacio" id="btnCancelarG<?php echo $varGral?>">
                        <i class='fa fa-ban fa-lg'></i>
                        Cancelar
                    </button>
                </div>

                <div class="col text-center">
                    <button type="button" class="btn btn-outline-primary activo btnEspacio" id="btnProbarG<?php echo $varGral?>">
                    <i class="fa fa-tint fa-lg" aria-hidden="true"></i>
                        Probar tema
                    </button>
                </div>

                <div class="col text-right">
                    <button  type="submit" class="btn btn-outline-success  activo btnEspacio" id="btnGuardar<?php echo $varGral?>">
                        <i class='fa fa-save fa-lg'></i>
                        Guardar tema
                    </button>
                </div>
            </div>
        </div>

    </div>
</form> 
