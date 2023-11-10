<?php


$conn = mysqli_connect("localhost","root","","testdb");
if($conn){

    $sql="select * from users";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row['name']." - ".$row['age']."<br>";
        }
    }else{
        echo "no data found";
    }
}else{
    echo mysqli_error($conn);
}

?>