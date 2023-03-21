<?php
if(isset($_POST['submit'])){

    if(isset($_POST['usr'])){

        include_once('ClassPoo.php');
        $user = $_POST['usr'];
        $pass = $_POST['pss'];
        $loguin = new Loguin();
        $loguin->entrarDatos($user,$pass);
        $loguin->Loguear();
        $response = $loguin->Loguear();

        if($response === "true"){
            header("Location: ../home.php?me");
        }
        else{
            echo '<script language="javascript">alert("Error en datos");</script>';
        }

    }
}