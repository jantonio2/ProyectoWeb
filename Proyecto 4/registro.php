<?php
    include("conexion.php");

    if(isset($_POST['register'])){
        if(strlen($_POST['Name']) >= 1 &&
           strlen($_POST['Last']) >= 1 &&
           strlen($_POST['Direccion']) >= 1 &&
           strlen($_POST['Edad']) >= 1 &&
           strlen($_POST['nac']) >= 1 &&
           strlen($_POST['cel']) >= 1 &&
           strlen($_POST['correo']) >= 1 &&
           strlen($_POST['ins']) >= 1 &&
           strlen($_POST['conclu']) >= 1 &&
           strlen($_POST['colegio']) >= 1 &&
           strlen($_POST['carrera']) >= 1 &&
           strlen($_POST['CI']) >= 1){

            $ci = $_POST['CI'];
            $nombre = $_POST['Name'];
            $apellido = $_POST['Last'];
            $direccion = $_POST['Direccion'];
            $edad = $_POST['Edad'];
            $nacimiento = $_POST['nac'];
            $celular = $_POST['cel'];
            $correo = $_POST['correo'];
            $inscripcion = $_POST['ins'];
            $conclusion = $_POST['conclu'];
            $colegio = $_POST['colegio'];
            $carrera = $_POST['carrera'];

            echo $nombre;
            echo $ci;
            echo $apellido;
            echo $direccion;
            echo $edad;
            echo $nacimiento;
            echo $celular;
            echo $correo;
            echo $inscripcion;
            echo $conclusion;
            echo $colegio;
            echo $carrera;

            $consulta = "INSERT INTO estudiante(ci, nombre, apellido, 
            direccion, edad, nacimiento, celular, correo, inscripcion,
             conclusion, colegio, carrera) VALUES ('$ci','$nombre','$apellido',
             '$direccion', '$edad', '$nacimiento', '$celular', '$correo', '$inscripcion',
             '$conclusion', '$colegio', '$carrera')";
            $resultado = mysqli_query($conex,$consulta);
            if($resultado){
                header('Location: index.php');
            }else{ 
                ?>
                <script>
                    alert("Ups error");
                </script>
                <?php
            }
           }else {
            ?>
                    <script>
                        alert("Complete los campos");
                    </script>
                    <?php
            } 
    }
?>