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
                event.preventDefault();
                return false;
            }

            let X = document.forms["Login"]["Password"].value;
            if (X == "") {
                alert("Please enter a password name");
                document.Login.Password.focus();
                event.preventDefault();
                return false;
            }
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
            margin-left: 0px;
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
        
        .Login{
            background-color: grey;
            margin: auto;
            margin-top: 70px;
            width: 500px;
            height: 300px;
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

    </style>

    <div class = "div_header">
        <div class = "div_name">
            <label class = "title">Ashmoore Studio</label>
        </div>

        <div class = "div_HC">
            <button type = "button" class = "button"><a href="Main_Page.php">Home</a></button>
            <button type = "button" class = "button"><a href="new_account_screen.php">Register</a></button>
            <button type = "button" class = "button"><a href="contact_page.php">Contact Us</a></button>
        </div>
    </div>
    
    <form class = "Login" name = "Login" action = "login_test.php" method = "post" onsubmit="login_validation()">

        <div class = "div_info">

            <input class = "email_address" name = "email_address" type = "text" id = "email_address" placeholder = "Enter Email Address"><br>
            <input class = "Password"  name = "Password" type = "text" id = "Password" placeholder = "Enter Password"><br>
            <input class = "submit" type="submit" value="Login">

        </div>

    </form>

</html>