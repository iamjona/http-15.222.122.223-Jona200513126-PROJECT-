<?php
//connect database//

$serverName = '172.31.22.43';
$dBUsername ='Jona200513126';
$dBPassword = 'yjvfakcJXW';
$dBName = 'Jona200513126';


$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName );

//check if the connection has failed//

if (!$conn){
    die("connection failed:" .mysqli_connect_error());
}
