<?php
    if(isset($_POST['submit'])){
        $name = $_POST['cusName'];
        $email = $_POST['cusEmail'];
        $message = $_POST['cusMessage'];
        $phone = $_POST['cusphone'];  // Fix: Change $_POSt to $_POST
    
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "week4";

        $conn = mysqli_connect($host, $username, $password, $dbname);

        if(!$conn){
            die("Connection Failed! ". mysqli_connect_error());
        }

        $sql = "INSERT INTO customers(cus_name, cus_email, cus_message, cus_phone) VALUES('$name', '$email', '$message','$phone')";

        $result = mysqli_query($conn, $sql);

        if($result){
            echo "Entries added!";
        }

        mysqli_close($conn);
        header("refresh:3;url=index.html");
    }
?>
