<?php
    $user = 'root';
    $pass = '';
    $host = 'localhost';

    $connection = mysqli_connect($host,$pass,$user);

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $menssage=$_POST['menssage'];


    if($connection){
        header('Location: index.html');
    }
    else{
        echo "Conexion exitosa";
    }

    $datab = "registro";
    $db = mysqli_select_db($connection,$datab);


    $instruccion_SQL="INSERT INTO tabla (name,email,phone,menssage) 
                        VALUES ('$name','$email','$phone','$menssage')";

    $resultado=mysqli_query($connection,$instruccion_SQL);
?>