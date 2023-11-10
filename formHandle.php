<html>

<head>
    <title>form handling</title>
</head>

<body>

<!-- testsite.ir?name="ali"&age=22-->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">

    <label for="name">name</label>
    <input id="name" type="text" name="name" placeholder="enter your name">
    <br>
    <br>
    <label for=age">age</label>
    <input id="age" type="number" name="age" placeholder="enter your age">
    <br>
    <br>
    <input type="submit" value="insert">

</form>


</body>

</html>


<?php


//if($_SERVER['REQUEST_METHOD'] == 'POST'){
if($_SERVER['REQUEST_METHOD'] == 'POST'){

//    echo $name . ' - '.$age;

    // mysqli , sqlsrv

    $conn = mysqli_connect("localhost","root","","testdb");
    if($conn){

        $name = $_POST['name'];
        $age = $_POST['age'];

        $sql = "insert into users (name,age) values ('".$name."',".$age.")";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo " inserted successfully";
        }




    }else{
        echo mysqli_error($conn);
    }

}

//echo "<h1>".$_SERVER['PHP_SELF']."</h1>";


?>