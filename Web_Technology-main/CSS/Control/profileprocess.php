<?php

if(isset($_POST["Search"])){
    $name=$_POST["searchdata"];
    $mydb=new db();
    $conobj=$mydb->opencon();
    $results=$mydb->searchuser($conobj,"user",$name);
    if($results->num_rows>0){
        echo "<table>";
        while($myrows=$results->fetch_assoc()){
            echo "<tr>";
            echo "<td>".$myrows["id"]."</td>";
            echo  "<td>".$myrows["name"]."</td>";
            echo  "<td>".$myrows["uname"]."</td>";
            echo "</tr>";
        }
        echo "</table>";

    }
    else{
        echo "no data found";
    }
}
?>