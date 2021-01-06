<?php
include("conexion.php");

$sql="SELECT idviaje, nombre_viaje FROM viajes";
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
    <script src="jquery-3.5.1.min.js"></script>
</head>
<body>
<script>


</script>

<script>
    $(function(){
              
        $(document).click(function(event) { 
            var $target = $(event.target);
                if(!$target.closest('.input').length && 
                    $('.input').is(":visible")) {
                        $('.input').hide();
                    
                }
                else{
                    $('.input').show();
                }        
                });

    });
</script>
    
    <table class="table table-hover">
        <tr>
            <th>Id_Viaje</th>
            <th>Id_Usuario</th>
        </tr>
        <?php
            while($array=mysqli_fetch_array($query)){
                ?>
                    <tr>
                        <td><input type="text" class="valor" value="<?php echo $array["idviaje"];?>"></td>
                        <td><input type="text" class="valor" value="<?php echo $array["nombre_viaje"];?>"></td>
                    </tr>    
        <?php
            }
        ?>
        <tr>
            <td class="td" height="40"><input class="input" type="text"></td>
            <td class="td" height="40"><input class="input" type="text"></td>
        
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>

    </table>


</body>
</html>