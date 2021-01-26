        //COMIDA
    $(function(){
        $(".input_viaje").hide(); 
        $(".p_oculto").hide();         

        // COMO AQUI TENGO PUESTO DOCUMENT CUALQUIER CLIC QUE HAGA EN TODO EL DOCUMENTO DESENCADENARA EL EVENTO. (HAY QUE CAMBIARLO)
       $("#tabla").click(function(event)  { 
            var target = $(event.target); 
            var id = target.attr("id"); 

                if (id){
                    var id2 = id.split("_");
                    var id3 = id2[1];
                    var input = $("#i_"+id3).val(); 
                    //var usuario = $("#u_"+id3).text();
                    var id_oculto = $("#id_oculto_"+id3).text();

 
                    console.log(id_oculto);
                             
                    $("#p_"+id3).hide(); 
                    $("#i_"+id3).show();

                    $("#i_"+id3).on("blur", function(){
                        $("#i_"+id3).hide(); 
                                        
                        $("#p_"+id3).text(input);
                        $("#p_"+id3).show(); 
                        

                        //var enlace="update.php?input="+input+"&usuario="+usuario+" ";
                        //$("#resultado").load(enlace);
                    });                                                        
                }       
        });
        var i = 0;
        $("#añadir").click(function(){
            
            i++;
            var prueba1 = '<tr>'+ '<td><p id="p_nuevo'+i+'"></p> <input id="input_nuevo'+i+'" type="text"></td>' + '<td> </td>' + '<tr>';
            $("#p_nuevo").hide();
            $("#tabla").append(prueba1);

        });
        $(document).click(function(){
            var i_nuevo = $("#input_nuevo"+i).val();
        
            $("#input_nuevo"+i).on("change", function(){
                $("#p_nuevo"+i).text(i_nuevo);
                $("#input_nuevo"+i).hide();
                $("#p_nuevo"+i).show();
                
                var enlace="insert.php?input_nuevo="+i_nuevo+"&usuario_nuevo="+usuario2+" ";
                $("#resultado").load(enlace);
            });         
        });
    }); 



