$(document).ready(function(){

/////////////////////////////////////////////////////
////////////////////////////////////////////////////

//busca para el rol administrador

//////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////

    $(document).on("keyup","#filtro",function(){
        //captura el valor que llega en el input
        let buscar=$(this).val();
        //atributo de la quiteta html
        let url= $(this).attr('data-url');
        
        $.ajax({
            url:url,
            data:"busca="+buscar,
            data:"buscar="+buscar,
            type:"POST",
            success:function(resp){
                $('tbody').html(resp);
            }
        })
    })

    $(document).on("keyup","#filtro_2",function(){
        //captura el valor que llega en el input
        let buscar=$(this).val();
        //atributo de la quiteta html
        let url= $(this).attr('data-url_2');
        
        $.ajax({
            url:url,
            data:"busca="+buscar,
            data:"buscar="+buscar,
            type:"POST",
            success:function(resp){
                $('tbody').html(resp);
            }
        })
    })



    $(document).on("click","#cambiarImagen",function(){
        let url_imagen = $("#imagen").attr('src');

       $("#imagen").css("display","none");
    //    $("#imagen").remove();
        $(this).css("display","none");  

        $("#nuevaImagen").html(
            "<input type='file' name='imagenProduc'>"
            +"<input type='hidden' name='imagenVieja' value='"+url_imagen+"'>"
        );
    });


})