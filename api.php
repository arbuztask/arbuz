<?php
$con = mysqli_connect("localhost","root","","API_DATA");
$response = array();
if($con){
    $sql = "select * from data";
    $result = mysqli_query($con,$sql);
    if($result){
        header("Content-Type: JSON");
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)){
            $response[$i]['id'] = $row['id'];
            $response[$i]['name'] = $row['name'];
            $response[$i]['surname'] = $row['surname'];
            $response[$i]['age'] = $row['age'];
            $response[$i]['city'] = $row['city'];
            $i++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}
else{
    echo "DB connection failed";
}

