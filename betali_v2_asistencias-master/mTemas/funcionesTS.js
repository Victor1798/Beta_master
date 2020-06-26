var nombreModulo_TS = "Temas";

function llenar_lista_TS(){
    abrirModalCarga('Cargando Lista');
    $("#frmGuardar-TS")[0].reset();
    $("#Listado-TS").hide();
    $.ajax({
        url:"../mTemas/lista.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#Listado-TS").html(respuesta);
            $("#Listado-TS").fadeIn("slow");
            cerrarModalCarga();      
        },
        error:function(xhr,status){
            alert("Error en metodo AJAX"); 
        },
    });
}

function llenar_temas_editar(id,nombreTema,cLetra,cBase,basefuerte,cBorde){
    $("#eId").val(id);
    $("#eNombreTema").val(nombreTema);
    $("#eLetraTema").val(cLetra);
    $("#eBaseTema").val(cBase);
    $("#eBaseFuerte").val(basefuerte);
    $("#eBorde").val(cBorde);

    $("#lblTitular").text(nombreModulo_TS);
    $("#badgeInfo").text("Modificar datos");

    $("#guardar-TS").hide();
    $("#Listado-TS").hide();
    $("#editar-TS").fadeIn();
    $("#enombre").focus();
}

function modalImportarTema(){
    console.log("Se abrio el modal para importar el tema");
    $("#modalTema").modal("show");
}

function nuevo_tema(){
    $("#lblTitular").text(nombreModulo_TS);
    $("#badgeInfo").text("Nuevo tema");

    $("#Listado-TS").hide();
    $("#guardar-TS").fadeIn();
    $('#frmGuardar-TS')[0].reset();
    $("#nombre").focus();
}

$("#btnCancelarG-TS , #btnCancelarA-TS").click(function(){
    $("#editar-TS").hide();
    $("#guardar-TS").hide();
    $("#lblTitular").text(nombreModulo_TS);
    $("#badgeInfo").text("Lista");

    $("#Listado-TS").fadeIn();

});

