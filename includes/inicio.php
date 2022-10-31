<?php
    require_once("../conections/conection.php");
    session_start();
?>

<?php
    
    if ($_POST["ingresar"])
    {
       
        $nom =      $_POST["nom_usu"];
        $cel =      $_POST["cel_usu"];
        $id=        $_POST["id_usu"];
    
        $con="SELECT * FROM usuario WHERE nom_usu= '$nom' and cel_usu='$cel' and id_usu= '$id' ";
        $query=mysqli_query($mysql, $con);
        $fila=mysqli_fetch_assoc ($query);
        
        if($fila)
        {
            $_SESSION['nombre'] =       $fila['nom_usu'];
            $_SESSION['tipo'] =         $fila['id_tipo_usu'];
            $_SESSION['celular'] =      $fila['cel_usu'];
            $_SESSION['id'] =           $fila['id_usu'];

            if($_SESSION['tipo'] ==1){
                header("Location: ../Administrador/index.php");
                exit();
            }

            if($_SESSION['tipo'] ==2){
                header("Location: ../Expendedor/index.php");
                exit();
            }


            if($_SESSION['tipo'] ==3){
                header("Location: ../Cliente/index.php");
                exit();
            }

        }
        

        else if ( $nom== "" || $cel == "" || $id == "" )
        {
            echo'<script> alert ("existen datos vacios");</script>';
             
            exit();
                
        }
        else
        {
            header("Location: ../loginerror.php");
            exit();
        }
    }

?>