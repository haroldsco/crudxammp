<?php
    $id=$_GET['id'];
    include("conexion.php");

    $sql="delete from usuarios where id='".$id."'";
    $resultado = mysqli_query($conexion, $sql);

    if($resultado){
        echo "
            <script language  = 'javascript'>
            alert('los datos se eliminaron');
            location.assign('index.php');
            </script>
        ";
    }else{
        echo "
            <script language  = 'javascript'>
            alert('los datos NO se eliminaron');
            location.assign('index.php');
            </script>
        ";
    }
?>