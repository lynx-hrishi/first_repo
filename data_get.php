<?php
    include("database.php");
    // $conn = mysqli_connect('localhost', 'root', 'hrishikesh@230', 'htmlfirst');

    $name = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    // $name = mysqli_real_escape_string($conn, $_POST["btn"]);
    // echo $name;
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
     
    if(empty($name)){
        echo "<script>alert('This is an alert message from PHP!');</script>";
    }
    elseif(empty($email)){
        echo"Please Enter Email";
    }
    else{
        $sql = "SELECT * FROM logindetails WHERE Name = '$name' and Email = '$email'";

        $result = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result) > 0){
            // $name_row = mysqli_fetch_assoc($result);
            // echo $name_row["Name"] . "<br>";
            // echo $name_row["Email"];

            session_start();
            $row = mysqli_fetch_assoc($result);
            $_SESSION['email'] = $row['Email'];
            // echo $_SESSION['email'];
            header("Location: logout.html");
            exit();
        }
        else{
            echo "Not Found";
        }
    }
?>