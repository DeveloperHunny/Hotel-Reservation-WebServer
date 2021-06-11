<?php 
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $dbname = "client";

    //Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //Check connection
    if($conn->connect_error){
        die("Connection failed : " . $conn->connect_error);
    }
    
    //Getting User id, pw

    $usr_id = $_POST['input_id'];
    $usr_pw = $_POST['input_pw'];


    $sql = "SELECT * FROM clients WHERE id = '$usr_id' AND password = '$usr_pw'";
    $result = $conn->query($sql);

    if($result->num_rows == 0){ //login failed
        echo("<script>alert('Login Failed!!')</script>");
        echo("<script>location.replace('../index.php')</script>");
    }
    else{ //login success
        echo("<script>location.replace('../client/home.php')</script>");
        $_SESSION['client_user'] = $usr_id;
    }


    $conn->close();
?>
