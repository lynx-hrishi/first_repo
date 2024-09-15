<?php
try{
     $conn = mysqli_connect('localhost', 'root', 'hrishikesh@230', 'htmlfirst');

    //  if($conn){
    //     echo "Connection Established";
    //  }
}
catch(mysqli_sql_exception){
    echo "Not Connected to the database";
}

// $query = "DELETE FROM logindetails WHERE Name = 'Hrishikesh'";
// mysqli_query($conn, $query)
?>