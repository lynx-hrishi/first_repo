<?php
    $con = mysqli_connect('localhost','root','hrishikesh@230','htmlfirst');
    $name = $_POST['username'];
    $email = $_POST['email'];
    $query = "INSERT INTO logindetails(Name, Email) VALUES('$name','$email')";
    $result = mysqli_query($con,$query);

    if($result){
        echo "Registered";
    }
    else{
        echo "Registration Failed!";
    }
        
    mysqli_close($con);     
?>