<?php
class db{
    function opencon(){
$servername="localhost";
$username="root";
$password="";
$dbname="sectionl";
//create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//connection check
if($conn->connect_error){
    echo "error connecting database";
}
return $conn;
    }
    function insertuser($name,$uname,$password,$table,$conn){

$sqlstr="INSERT into $table(name,uname,password) VALUES ('$name','$uname','$password')";
if($conn->query($sqlstr)){
    echo "data is being inserted";
}
else{
    echo "can't insert".$conn->error;//error debug using this property
}
    }
}
?>