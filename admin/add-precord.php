<?php

    session_start();

    if(isset($_SESSION["user"])){
        if(($_SESSION["user"])=="" or $_SESSION['usertype']!='a'){
            header("location: ../login.php");
        }

    }else{
        header("location: ../login.php");
    }
    
    
    if($_POST){
        //import database
        include("../connection.php");
        $id=$_POST["id"];
        $docid=$_POST["docid"];
        $symptoms=$_POST["symptoms"];
        $diagnosis=$_POST["diagnosis"];
        $prescription=$_POST["prescription"];
        $date=$_POST["date"];
        $sql="insert into precords (pid,docid,symptoms,diagnosis,prescription,prescription_date) values ($id,'$docid','$symptoms','$diagnosis','$prescription','$date');";
        $result= $database->query($sql);
        header("location: patient.php?action=precord-added&title=$prescription_date");
        
    }


?>