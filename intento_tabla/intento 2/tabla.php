<?php
include("../conexion.php");

$sql="SELECT comida, usuarios FROM prueba";
$query=mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="../jquery-3.5.1.min.js"></script>
</head>
<body>

<script>
    $(function(){
        $(".input_viaje").hide();          

        // COMO AQUI TENGO PUESTO DOCUMENT CUALQUIER CLIC QUE HAGA EN TODO EL DOCUMENTO DESENCADENARA EL EVENTO. (HAY QUE CAMBIARLO)
       $(document).click(function(event)  { 
            var target = $(event.target); 
            var id = target.attr("id"); 

                if (id){
                    var id2 = id.split("_");
                    var id3 = id2[1];
                    var input = $("#i_"+id3).val(); 
                    var usuario = $("#u_"+id3).text();

                    console.log(id3);
                    console.log(input);
                    console.log(usuario);
                             
                    $("#p_"+id3).hide(); 
                    $("#i_"+id3).show();

                    $("#i_"+id3).on("blur", function(){
                        $("#i_"+id3).hide(); 
                                        
                        $("#p_"+id3).text(input);
                        $("#p_"+id3).show(); 
                        

                        var enlace="update.php?input="+input+"&usuario="+usuario+" ";
                        $("#resultado").load(enlace);
                    });
                                                                         
                }
                
        });
        var i = 0;
        $("#añadir").click(function(){
            i++;
            var prueba1 = '<tr>'+ '<td><p id="p_nuevo'+i+'"></p> <input id="input_nuevo'+i+'" type="text"></td>' + '<td></td>' + '<tr>';
            $("#p_nuevo").hide();
            $("table").append(prueba1);

        });
        $(document).click(function(){
            var i_nuevo = $("#input_nuevo"+i).val();
        
            $("#input_nuevo"+i).on("change", function(){
                $("#p_nuevo"+i).text(i_nuevo);
                $("#input_nuevo"+i).hide();
                $("#p_nuevo"+i).show();
                var usuario2="pablo";
                var enlace="insert.php?input_nuevo="+i_nuevo+"&usuario_nuevo="+usuario2+" ";
                $("#resultado").load(enlace);

            });    
                
        });



        
    }); 


</script>
   
    <table class="table table-hover" id="">
        <tr>
            <th>Comida</th>
            <th>Usuario</th>
        </tr>
<?php
$k=1;
while($array=mysqli_fetch_array($query)){
?>
<div id="resultado"></div>
    
        <tr>
            <td><p class="p_viaje" id="p_<?php echo $k; ?>"><?php echo $array["comida"];?></p><input type="text" id="i_<?php echo $k; ?>"  class="input_viaje" value="<?php echo $array["comida"];?>"></td>                       
            <td><p id="u_<?php echo $k; ?>" value="<?php echo $array["usuarios"];?>"><?php echo $array["usuarios"];?></p></td>
        </tr>    
<?php
$k=$k+1;
}
?>
    
    </table>
    

    <button class="btn btn-primary" id="añadir">Añadir</button>

</body>
</html>