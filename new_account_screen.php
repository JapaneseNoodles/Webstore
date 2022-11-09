<!DOCTYPE html>
<html>

    <script>

        function login_validation(){

            let j = document.forms["Login"]["email_address"].value;
            const pattern = /[a-zA-Z0-9_.-]+@[a-zA-Z-]+\.[a-z]+/;
            let i = pattern.test(j)
        
            if (i == false) {
                alert("Please enter an acceptable email");
                document.Login.email_address.focus();
                return false;
            }

            let X = document.forms["Login"]["Password"].value;
            if (X == "") {
                alert("Please enter a password name");
                document.Login.Password.focus();
                return false;
            }
            
        }            

        function Visibility() {
            document.getElementById("Customer_Info").style.visibility = "visible";
        }

    </script>

    <style>

        body {
            background-color: grey;
        }

        .div_header{
            height: 75px;
            background-color: lightgray;
        }

        .title{
            font-family: 'Courier New', Courier, monospace;
            width: 150px;
            margin-left: 20px;
            font-size: x-large;
        }

        .div_name{
            margin: auto;
            background-color: lightgray;
            height: 40px;
            width: 250px;
            padding-top: 20px;
            margin-left: 547px;
            float:left;
        }

        .div_HC{
            background-color: lightgray;
            width: 370px;
            height: 75px;
            float: right;
        }

        .button{
            border-radius: 10px 10px 10px 10px;
            margin-left: 12px;
            margin-top: 20px;
            height: 30px;
            width: 100px;
            border-color: black;
        }

        .div_info{
            background-color: lightgray;
            border-radius: 25px 25px 25px 25px ;
            height: 250px;
            width: 400px;
            margin-top: 100px;
            margin-left: 50px;
        }

        .email_address{
            width: 350px;
            height: 30px;
            border-radius: 10px 10px 10px 10px;
            border-color: black;
            margin-left: 20px;
            margin-top: 50px;
        }

        .Password{
            width: 350px;
            height: 30px;
            border-radius: 10px 10px 10px 10px;
            border-color: black;
            margin-left: 20px;
            margin-top: 20px;
        }

        .submit{
            width: 300px;
            height: 25px;
            border-radius: 10px 10px 10px 10px;
            border-color: black;
            margin-left: 50px;
            margin-top: 15px;
        }

        .remail_address{
            width: 350px;
            height: 30px;
            border-radius: 10px 10px 10px 10px;
            border-color: black;
            margin-left: 70px;
            margin-top: 50px;
        }

        .username{
            width: 350px;
            height: 30px;
            border-radius: 10px 10px 10px 10px;
            border-color: black;
            margin-left: 70px;
            margin-top: 30px;
        }

        .username_phone_number{
            width: 350px;
            height: 30px;
            border-radius: 10px 10px 10px 10px;
            border-color: black;
            margin-left: 70px;
            margin-top: 30px;
        }

        .username_age{
            width: 350px;
            height: 30px;
            border-radius: 10px 10px 10px 10px;
            border-color: black;
            margin-left: 70px;
            margin-top: 30px;
        }

        .username_physical_address{
            width: 350px;
            height: 30px;
            border-radius: 10px 10px 10px 10px;
            border-color: black;
            margin-left: 70px;
            margin-top: 30px;
        }

        .rsubmit{
            width: 300px;
            height: 25px;
            border-radius: 10px 10px 10px 10px;
            border-color: black;
            margin-left: 105px;
            margin-top: 15px;
        }

        .New_Account{
            background-color: grey;
            margin: auto;
            margin-top: 70px;
            width: 500px;
            height: 300px;
            position: relative;
            z-index: 2;
        }

        .Customer_Info{
            visibility: hidden;
            background-color: lightgray;
            border-radius: 25px 25px 25px 25px;
            margin: auto;
            margin-top: -370px;
            width: 500px;
            height: 500px;
            position: relative;
            z-index: 3;
        }

    </style>

    <div class = "div_header">
        <div class = "div_name">
            <label class = "title">Ashmoore Studio</label>
        </div>

        <div class = "div_HC">
            <button type = "button" class = "button"><a href="Main_Page.php">Home</a></button>
            <button type = "button" class = "button"><a href="Login.php">Login</a></button>
            <button type = "button" class = "button"><a href="contact_page.php">Contact Us</a></button>
        </div>
    </div>
    
    <form class = "New_Account" name = "New_Account" action = "new_account.php" method = "post" onsubmit="login_validation()">

        <div class = "div_info">

            <input class = "email_address" name = "new_email_address" type = "text" id = "email_address" placeholder = "Enter Email Address"><br>
            <input class = "Password"  name = "new_Password" type = "text" id = "Password" placeholder = "Enter Password"><br>
            <button class = "submit" type="button" onclick = "Visibility()"> Create Account </button>

        </div>

        <div class = "Customer_Info" ID = "Customer_Info" name = "Customer_Info">

            <input class = "remail_address" name = "remail_address" type = "text" id = "email_address" placeholder = "Enter Email Address"><br>
            <input class = "username"  name = "rusername" type = "text" id = "username" placeholder = "Enter Username"><br>
            <input class = "username_phone_number"  name = "rusername_phone_number" type = "text" id = "username_phone_number" placeholder = "Enter Phone Number"><br>
            <input class = "username_age"  name = "rusername_age" type = "text" id = "username_age" placeholder = "Enter Age"><br>
            <input class = "username_physical_address"  name = "rusername_physical_address" type = "text" id = "username_physical_address" placeholder = "Enter Address"><br>
            <input class = "rsubmit" type="submit" value="Submit Info">

        </div>

    </form>

</html>