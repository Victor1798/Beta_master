<div class="modal fade" id="modalHorario" tabindex="-1" role="dialog" aria-labelledby="modalDatosCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document" >
    <div class="modal-content">
      <div class="modal-header" >
        <h5 class="modal-title" id="txtTitularHorario">Horarios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="#" method="post" id="frmHorario" data-action="agregar">
        <label for="" id="nombrePersonaH" hidden></label>
<div class="row">
      <div class="col-md-6">
      <div class="form-group ">
              <label for="turnoT" class="lblTitulo">Turno:</label>
              <select id="turnoT" class="select2" style="width: 100%" >
                <option value="Especial">Especial</option>
                <option value="Matutino">Matutino</option>
                <option value="Vespertino">Vespertino</option>
                <option value="Nocturno">Nocturno</option>
              </select>
          </div>
      </div>
</div>
    <div class="row">
          <div class="form-group col-sm-12 col-md-6 ">
          <input id="idPs" type="text" class="form-control" name="idPs" style="display: none;" />
              <label class="lblTitulo">Lunes Entrada:</label>
              <input type="time" id="LunEntrada" class="horasDia entradaT form-control" readonly required>
          </div>
          <div class="form-group col-sm-12 col-md-6">
              <label class="lblTitulo">Lunes Salida:</label>
              <input type="time" id="LunSalida" class="horasDia salidaT form-control" readonly required>
          </div>
          <div class="form-group col-sm-12 col-md-6">
              <label class="lblTitulo">Martes Entrada:</label>
              <input type="time" id="MarEntrada" class="horasDia entradaT form-control" readonly required>
          </div>
          <div class="form-group col-sm-12 col-md-6">
              <label class="lblTitulo">Martes Salida:</label>
              <input type="time" id="MarSalida" class="horasDia salidaT form-control" readonly required>
          </div>
          <div class="form-group col-sm-12 col-md-6">
              <label class="lblTitulo">Miercoles Entrada:</label>
              <input type="time" id="MierEntrada" class="horasDia entradaT form-control" readonly required>
          </div>
          <div class="form-group col-sm-12 col-md-6">
              <label class="lblTitulo">Miercoles Salida:</label>
              <input type="time" id="MierSalida" class="horasDia salidaT form-control" readonly required>
          </div>
          <div class="form-group col-sm-12 col-md-6">
              <label class="lblTitulo">Jueves Entrada:</label>
              <input type="time" id="JueEntrada" class="horasDia entradaT form-control" readonly required>
          </div>
          <div class="form-group col-sm-12 col-md-6">
              <label class="lblTitulo">Jueves Salida:</label>
              <input type="time" id="JueSalida" class="horasDia salidaT form-control" readonly required>
          </div>
          <div class="form-group col-sm-12 col-md-6">
              <label class="lblTitulo">Viernes Entrada:</label>
              <input type="time" id="VieEntrada" class="horasDia entradaT form-control" readonly required>
          </div>
          <div class="form-group col-sm-12 col-md-6">
              <label class="lblTitulo">Viernes Salida:</label>
              <input type="time" id="VieSalida" class="horasDia salidaT form-control" readonly required>
          </div>
          <div class="form-group col-sm-12 col-md-6">
              <label class="lblTitulo">Sabado Entrada:</label>
              <input type="time" id="SabEntrada" class="horasDia diaFinSemana form-control" readonly>
          </div>
          <div class="form-group col-sm-12 col-md-6">
              <label class="lblTitulo">Sabado Salida:</label>
              <input type="time" id="SabSalida" class="horasDia diaFinSemana form-control" readonly>
          </div>
          <div class="form-group col-sm-12 col-md-6">
              <label class="lblTitulo">Domingo Entrada:</label>
              <input type="time" id="DomEntrada" class="horasDia diaFinSemana form-control" readonly>
          </div>
          <div class="form-group col-sm-12 col-md-6">
              <label class="lblTitulo">Domingo Salida:</label>
              <input type="time" id="DomSalida" class="horasDia diaFinSemana form-control" readonly>
          </div>
          <div class="form-group col-sm-12 col-md-6">
            <label class="lblTitulo">Cantidad total de horas:</label>
            <input type="text" id="totalHorasT" class="form-control" readonly>

          </div>
    </div>
      <div class="modal-footer">
      <button type="submit" id="btnHorario" class="guardarHra btn btn-icon icon-left btn-success" disabled><i class="fas fa-save"></i> Guardar</button>
      <button id="cerrarModal" type="reset" class="btn btn-icon icon-left btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Cerrar</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div> 
