<?php
include('dbconnection.php');
//retrieve student information
$sql ="SELECT * FROM student";
$result = $conn->query($sql);
if($result->num_rows>0){
    $data= array();
    while($row=$result->fetch_assoc()){
        $data[]=$row;
    }
}

//returning JSON format data as response to ajax call
echo json_encode($data)
?>