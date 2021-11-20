 <?php 
$conexion=mysqli_connect("localhost","root","","mydb");
mysqli_set_charset ($conexion,"utf8");

if(!empty($_POST)){

      $id_h=$_POST['id']; 
            $o=$_POST['odontograma'];
            $a=$_POST['antecedentes'];
            $p=$_POST['tratamiento'];
            $i=$_POST['radiografia'];
            $pr=$_POST['presupuesto'];
            $pro=$_POST['pronostico'];
            $e=$_POST['evolucion'];
            $ex=$_POST['examen'];
            $id_p=$_POST['id_p'];

$actualizar = "UPDATE historia_clinica SET Id_Historia='$id_h',Odontograma='$o',Antecedentes='$a',Plan_Tratamiento='$p',Interpretacion_Radiografica='$i',Presupuesto='$pr',Pronostico='$pro',Evolucion='$e',Examen_Estomatologico='$ex',Paciente_Id_Paciente='$id_p' WHERE Id_Historia='$id_h'";

$resultado=mysqli_query($conexion,$actualizar);

if($resultado){
    echo "<script>alert('Se han actualizado los cambios correctamente');</script>";
    header('location:ConsultarM.php');
} else {
    echo"<script>alert('No se pudieron modificar los datos'); window.history.go(-1); </script>";
    
}
}
?>

