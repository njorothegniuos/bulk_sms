<?php
/**
 * Created by PhpStorm.
 * User: KITCHEN STORE
 * Date: 4/27/2016
 * Time: 8:34 PM
 */
include 'DbConnection.php';

$conn=DatabaseConnection::connect();

if($conn){
    echo "Ready to Roll!!!";
}else{
    echo "connection Error".$conn->errorInfo();
}
