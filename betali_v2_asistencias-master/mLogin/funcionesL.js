//Hace la validacion del usuario y la contraseña
$("#frmLogin").submit(function(e){
    $("#btnActualizar").attr("disabled","disabled");
    var usuario    = $("#loginUsuario").val();
    var contra     = $("#loginContra").val();

    $.ajax({
        url:"../mLogin/validar_login.php",
        type:"POST",
        dateType:"json",
        data:{usuario,contra},
        success:function(respuesta){
            var dataArray = JSON.parse(respuesta);
            console.log(respuesta);
            var registros=dataArray.cRegistros;
            var dias=dataArray.dias;
            
            if (registros !=0 ) {//existe el usuario
                if(dias < 0){//caducidad
                    swal({
                        title: "Mensaje!",
                        text: "A caducado tu suscripción al sistema",
                        type: "error",
                        confirmButtonClass: "btn-dark",
                        confirmButtonText: "Enterado"
                    }, function (isConfirm) {
                        $("#btnIngresar").attr("disabled","disabled");
                        var h_sidebar="#c0392b";
                        var color_base="#e74c3c";
                        var letra_color="#fff";
                        var color_borde="#e74c3c";
                        cssTema(h_sidebar,color_base,letra_color,color_borde);
                        $("#icoLogin").removeClass("fas fa-unlock");
                        $("#icoLogin").addClass("fas fa-lock");
                        $("#frmLogin")[0].reset();
                        $("#loginUsuario").focus();
                    });
                }else{
                    if (document.getElementById('check').checked == true) {
                        $('#passModal').modal();
                        $('#btnActualizar').on("click",function (){
                            
                            var pass = $("#nuevaPass").val();
                            var id = dataArray.result.id_usuario;
                            console.log(id);
                            $.ajax({
                                url:"../mLogin/cambiar_pass.php",
                                type:"POST",
                                dateType:"html",
                                data:{id,pass},
                                success:function(respuesta){
                                    
                                    $("#contentLogin").hide();
                                    $("#passModal").modal('hide');
                                    $("#contentSistema").show();

                                    persona=dataArray.result.persona;
                                    idUsuario=dataArray.result.id_usuario;
                                    idDato=dataArray.result.id_dato;
                                    
                                    $("#titular").text(persona);
                                    $('#sidebar').toggleClass('active');
                                    permisos(dataArray.result.permiso_datos_persona,dataArray.result.permiso_ecivil,dataArray.result.permiso_usuario,dataArray.result.permiso_temas);
                                    preloader(1,'Asitencia del personal');
                                    actividad  ="Ingreso al sistema";
                                    log(actividad,dataArray.result.id_usuario);
                                    verAsistencias();
                                    
                                },
                                error:function(xhr,status){
                                    console.log("Error al actualizar la contraseña"); 
                                },
                            });
                                
                            e.preventDefault();
                            return false;

                        });
                       
                    } else {
                        
                        $("#contentLogin").hide();
                        $("#contentSistema").show();

                        persona=dataArray.result.persona;
                        idUsuario=dataArray.result.id_usuario;
                        idDato=dataArray.result.id_dato;
                        
                        $("#titular").text(persona);

                        $('#sidebar').toggleClass('active');
                        permisos(dataArray.result.permiso_datos_persona,dataArray.result.permiso_ecivil,dataArray.result.permiso_usuario,dataArray.result.permiso_temas);
                        preloader(1,'Asitencia del personal');
                        actividad  ="Ingreso al sistema";
                        log(actividad,dataArray.result.id_usuario);
                        verAsistencias();
                    }

                }
            }else{
                swal({
                    title: "Mensaje!",
                    text: "La contraseña es incorrecta.",
                    type: "error",
                    confirmButtonClass: "btn-dark",
                    confirmButtonText: "Enterado"
                }, function (isConfirm) {
                    $("#btnIngresar").attr("disabled","disabled");
                    var h_sidebar="#c0392b";
                    var color_base="#e74c3c";
                    var letra_color="#fff";
                    var color_borde="#e74c3c";
                    cssTema(h_sidebar,color_base,letra_color,color_borde);
                    $("#icoLogin").removeClass("fas fa-unlock");
                    $("#icoLogin").addClass("fas fa-lock");
                    $("#frmLogin")[0].reset();
                    $("#loginUsuario").focus();
                });
            }
        },
        error:function(xhr,status){
            alert("Error en metodo AJAX"); 
        },
    });   
    e.preventDefault();
    return false;
});

//Generar contraseña random
function passRandom(numero) {
    var caracteres = "abcdefghijkmnpqrtuvwxyzABCDEFGHIJKLMNPQRTUVWXYZ2346789";
    var contraseña = "";
    for (i=0; i<numero; i++) contraseña += caracteres.charAt(Math.floor(Math.random()*caracteres.length));
    $("#nuevaPass").val(contraseña);
    $("#rePass").val(contraseña);
    validarPass();
    swal("Nueva contraseña generada", " "+contraseña, "success");
}


//Validacion de contraseñas
$("#nuevaPass").keyup(function(){
    validarPass();
});
$("#rePass").keyup(function(){
    validarPass();
});
function validarPass() {
    var pass = document.getElementById("nuevaPass").value;
    var rePass = document.getElementById("rePass").value;
    if (pass.length > 7 && rePass.length > 7 && pass == rePass) {
        $('#btnActualizar').removeAttr("disabled");
    } else {
        $("#btnActualizar").attr("disabled","disabled");
    }
}

//Limpiar campos
function limpiarNuevaPass(params) {
    $("#nuevaPass").val("");
    $("#rePass").val("");
}


//permisos a las partes del menu
function permisos(datos,ecivil,usuarios,temas){
    if(datos=='si'){
        $("#liDatos").show();
    }else{
        $("#liDatos").hide();
    }

    if(ecivil=='si'){
        $("#liEcivil").show();
    }else{
        $("#liEcivil").hide();
    }

    if(usuarios=='si'){
        $("#liUsuarios").show();
    }else{
        $("#liUsuarios").hide();
    }

    if(temas=='si'){
        $("#liTemas").show();
    }else{
        $("#liTemas").hide();
    }
}


//Revisa si existe el usuario y aplica el tema del mismo
$("#loginUsuario").keyup(function(){
    valor=$(this).val();
    $.ajax({
        url:"../mLogin/rUsuario.php",
        type:"POST",
        dateType:"json",
        data:{valor},
        success:function(respuesta){
            var dataArray = JSON.parse(respuesta);
            //console.log(respuesta);
            var registros=dataArray.cRegistros;
            if (registros !=0 ) {
                //$("#frmLogin").hide();
                idTema=dataArray.result.id_tema;
                aplicarTema(idTema,'login');
                $("#btnIngresar").removeAttr("disabled");
                $("#icoLogin").removeClass("fas fa-lock");
                $("#icoLogin").addClass("fas fa-unlock");
                $("#inicioIdusuario").val(dataArray.result.id_usuario);
                $("#inicioIdDato").val(dataArray.result.id_dato);
                $("#inicioIdTema").val(dataArray.result.id_tema);
                //$("#frmLogin").fadeIn();
            }else{
                //colores default
                $("#icoLogin").removeClass("fas fa-unlock");
                $("#icoLogin").addClass("fas fa-lock");
                $("#btnIngresar").attr("disabled","disabled");
                var h_sidebar="#2f3640";
                var color_base="#353b48";
                var letra_color="#fff";
                var color_borde="#40739e";
                cssTema(h_sidebar,color_base,letra_color,color_borde);
            }

        },
        error:function(xhr,status){
            alert("Error en metodo AJAX"); 
        },
    });
});
