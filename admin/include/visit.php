<?php 
include 'conn.php';
ob_start();
system('ipconfig/all');
$mysys = ob_get_contents();
ob_clean();

$findp = "Physical";
$mymac =strpos($mysys, $findp);
$mac = substr($mysys, ($mymac+36),17);
// echo "your mac is :{$mac} <br>";

    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    // echo $ipaddress;
@$date = date("y-m-d");
$sql = "INSERT INTO visitor (`page_section`,`ip`, `mac`, `date`) VALUES ('$pageTitle', '$ipaddress', '$mac', '$date')";
    if(!$result = mysqli_query($conn, $sql )){
    	echo "err";
        exit();
    }


 ?>

