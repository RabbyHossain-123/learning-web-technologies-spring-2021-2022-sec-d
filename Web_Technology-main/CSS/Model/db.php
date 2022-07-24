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
    function checklogin($conn,$tablename,$uname,$pass){
        $sqlstr="SELECT uname,password FROM $tablename WHERE uname='$uname' AND password='$pass'";
        return $conn->query($sqlstr);

    }
    function searchuser($conn,$tablename,$name){
        $sqlstr="SELECT * FROM $tablename WHERE name='$name'";
        return $conn->query($sqlstr);
    }
    function Searchuserbyuname($conn,$tablename,$uname){
        $sqlstr="SELECT * FROM $tablename WHERE uname='$uname'";
        return $conn->query($sqlstr);

    }
    function Updateprofile($conn,$tablename,$id,$name,$uname,$pass){
        
        $sqlstr="UPDATE $tablename SET id=$id,name='$name',uname='$uname',password='$pass'  WHERE uname='$uname'";
        return $conn->query($sqlstr);
        

    }



}
?>