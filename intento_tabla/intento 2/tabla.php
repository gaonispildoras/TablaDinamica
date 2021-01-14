<?php
include("../conexion.php");

$sql="SELECT nombre_viaje, id_usuario FROM viajes";
$query=mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="../jquery-3.5.1.min.js"></script>
</head>
<body>

<script>
    $(function(){
        $(".input_viaje").hide();   
        $(".input").hide();

        // COMO AQUI TENGO PUESTO DOCUMENT CUALQUIER CLIC QUE HAGA EN TODO EL DOCUMENTO DESENCADENARA EL EVENTO. (HAY QUE CAMBIARLO)
        $(document).click(function(event)  { 
            var target = $(event.target); 
            var id = target.attr("id"); 

                if (id){
                    var id2 = id.split("_");
                    var id3 = id2[1];
                    var input = $("#i_"+id3).val();         

                    $("#mostrar").hide();
                    $('.input').show();
                             
                    $("#p_"+id3).hide(); 
                    $("#i_"+id3).show();

                    console.log(id);  
                    console.log(input); 

                    $("#i_"+id3).on("blur", function(){
                        $("#i_"+id3).hide(); 
                                                    
                        $("#p_"+id3).show(); 
                        $("#p_"+id3).text(input);
                    });
                                                                         
                }
                
                /*else if(!target.closest('.input' && ".input_viaje").length && $('.input' && ".input_viaje").is(":visible")) {
                    $(".input_viaje").hide(); 
                                                    
                    $(".p_viaje").show(); 
                    $("#p_"+id3).text(input);

                    console.log(input);
                
                }*/
                /*else{ 
                    if(!target.closest('.input' && ".input_viaje").length && $('.input' && ".input_viaje").is(":visible")) { // SI CLICO EN OTRO LADO, ESCONDE EL INPUT Y ENSEÑA EL P   
                                                                       
                        $(".input_viaje").hide(); 
                                                    
                        $(".p_viaje").show(); 
                        $("#p_"+id3).text(input);
                        
                                                                                                                   
                    }
                        
                } */   
        });
    });

</script>
   
    <table class="table table-hover">
        <tr>
            <th>Nombre del Viaje</th>
            <th>Id_Usuario</th>
        </tr>
<?php
$k=1;
while($array=mysqli_fetch_array($query)){
?>
        <tr>
            <td><p class="p_viaje" id="p_<?php echo $k; ?>"><?php echo $array["nombre_viaje"];?></p><input type="text" id="i_<?php echo $k; ?>"  class="input_viaje" value="<?php echo $array["nombre_viaje"];?>"></td>                       
            <td><p><?php echo $array["id_usuario"];?></p></td>
        </tr>    
<?php
$k=$k+1;
}
?>
        <tr>
            <td class="" height="35"><p id="mostrar"></p><input class="input" type="text"></td>    
            <td class="" height="35"></td>
        
        </tr>

        <tr>
            <td></td>
            <td></td>
        </tr>

    </table>


</body>
</html>