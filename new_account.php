<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "Login_Details";

$conn = mysqli_connect($servername, $username, $password, $database);

$Email_address = $_POST['new_email_address'];
$password = $_POST['new_Password'];

$Email_address_link = $_POST['remail_address'];
$Username = $_POST['rusername'];
$User_Phone_Number = $_POST['rusername_phone_number'];
$User_Age = $_POST['rusername_age'];
$User_Physical_Address = $_POST['rusername_physical_address'];

$query = "SELECT * FROM info WHERE Email_address = '$Username' AND User_Password = '$password'";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) == 0){
    
    $query = "INSERT INTO info VALUES ('$Email_address', '$password')";
    $query2 = "INSERT INTO customer_info VALUES
                ('$Email_address_link', '$Username', '$User_Phone_Number', $User_Age, '$User_Physical_Address')";
    
    mysqli_query($conn, $query);
    mysqli_query($conn, $query2);
    mysqli_close($conn);

    header("Location: Main_Page.php");
}
else{
    echo "This account already exists";
}

?>