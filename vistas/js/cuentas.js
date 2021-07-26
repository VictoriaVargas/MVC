$(document).ready(function(){
    var maxField = 999; // Numero maximo de campos
    

    var addButton = $(".add_button"); // Selector del boton de Insertar
    
    

    var wrapper = $(".field_wrapper"); // Contenedor de campos
    


    var fieldHTML = '<div class="row field_wrapper"><a href="javascript:void(0);" class="remove_button" title="Remove field">Eliminar Partida</a><div class="col-md-6 col-12"><label>Ubicacion</label><select class="form-control" name="field_name[]" value=""><?php echo $option;?></select></div><div class="col-md-6 col-12"><label>Sub-Ubicacion</label><input type="text" class="form-control" name="sub_name[]" value="" placeholder="Sub Ubicacion"/></div></div>'; //New input field html 
    
    

    var x = 1; // Iniciamos el contador a 1
    

    $(addButton).click(function(){ // Una vez que se haga clic en el boton
        if(x < maxField){ //Comprobamos el maximo
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); // Añadimos el HTML
        }
    });

   

    

    $(wrapper).on("click", ".remove_button", function(e){ // Una vez se ha hecho clic en el boton de eliminar
        e.preventDefault();
        $(this).parent(wrapper).remove(); //Eliminamos el div 
       
        x--; // Reducimos el contador a 1
    });
});


$(".btnEditarCuenta").click(function(){


    var idCuenta = $(this).attr("idCuenta");

    var datos = new FormData();
    datos.append("idCuenta", idCuenta);

    $.ajax({


        url: "ajax/cuentas.ajax.php",
        method: "POST",
        data:datos,
        cache:false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(data){

                window.location = "editarcuenta"

                $("#estatus").val(data["estatus"]);
                $("#nombrecomercial").val(data["estatus"]);

           /*  console.log("respuesta", respuesta);
 */

        }

    })


})