<?php

            
$servername = "localhost";
$username = "root";
$password = "";
$database = "Login_Details";

$conn = mysqli_connect($servername, $username, $password, $database);

$Username = $_POST['email_address'];
$password = $_POST['Password'];

$query = "SELECT * FROM info WHERE Email_address = '$Username' AND User_Password = '$password'";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_assoc($result);
    if($row['Email_address'] === $Username && $row['User_Password'] === $password){
        echo "Login Successful";
        header("Location: Main_Page.php");
    }
}
else{
    echo "Incorrect Login Info";
}


mysqli_close($conn);

?>