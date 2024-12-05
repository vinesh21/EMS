<?php
 
 $server -"sql305.infinityfree.com";
 $username = "	if0_37856612";
 $password= "Rt7IOcNLBT";
 $dbname = "if0_37856612_expensetrackersystem";

 $conn = mysqli_connect($server,$username, $password, $dbname);


if(!$conn){
    die("Connection Failed:".mysqli_connect_error());

}



?>