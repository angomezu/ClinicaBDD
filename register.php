<?php
    session_start();
    $con= mysqli_connect('localhost','root');
    if($con){
        echo "Conexión Exitosa";
    }
    else{
        echo "Error en la Conexión";
    }
    mysqli_select_db($con,'Clinica_LBD')
    $name = $_POST['email'];
    $pass = $_POST['password'];
    
    $quer = "select * from userdata where username = '$name' && password = '$pass'";
    $result = mysqli_query($con,$quer);
    $num = mysqli_num_rows($result);
    if($num==1)
    {
        echo "Datos Duplicados";
    }
    else
    {
        $querr="insert into userdata(username,password) values('$name','$pass')";
        mysqli_query($con, $querr);
    }

?>