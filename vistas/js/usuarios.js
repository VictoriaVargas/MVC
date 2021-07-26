$(".nuevaFoto").change(function(){

    var imagen = this.files[0];
    

    
    /*=============================================
    =            
    VALIDAMOS QUE EL FORMATO DE LA IMAGEN SEA JPG O PNG            =
    =============================================*/
    
        if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){

            $(".nuevaFoto").val("");

            Swal.fire({
                title: "Error al subir la imagen",
                text: "¡La imagen debe estar en formato PNG o JPG!",
                icon: "error",
                confirmButtonText: "Cerrar",
            });

        }else if(imagen["size"] > 2000000){


            $(".nuevaFoto").val("");

            Swal.fire({
                title: "Error al subir la imagen",
                text: "¡La imagen NO debe pesar mas de 2 MB",
                icon: "error",
                confirmButtonText: "¡Cerrar!",
            });

        }else{

            var datosImagen = new FileReader;
            datosImagen.readAsDataURL(imagen);

            $(datosImagen).on("load", function(event){

                var rutaImagen = event.target.result;

                $(".previsualizar").attr("src", rutaImagen); 
                

            })

        }
    
    /*=====  End of 
    VALIDAMOS QUE EL FORMATO DE LA IMAGEN SEA JPG O PNG  ======*/
    
    

})
