<?php 

$server = "localhost";
$dbUsername = "root";
$dbPassword = "yes";
$dbName = "webmusic";
// Kết nối

    $dbconnect = mysqli_connect( $server , 
        $dbUsername , $dbPassword, $dbName);
if($dbconnect){
    echo"";
}
else{
    echo"unconnect";
}


mysqli_select_db( $dbconnect,  $dbName);

// return $dbconnect;
// ehco"Your are cornected";

