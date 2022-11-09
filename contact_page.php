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

        .cant_info{
            background-color: lightgray;
            border-radius: 10px 10px 10px 10px;
            height: 120px;
            width: 500px;
            margin: auto;
            margin-top: 100px;
        }

        .contact{
            font-family: 'Courier New', Courier, monospace;
            display: block;
            text-align: center;
            background-color: lightgray;
            border-radius: 10px 10px 10px 10px;
        }

    </style>

    <div class = "div_header">
        <div class = "div_name">
            <label class = "title">Ashmoore Studio</label>
        </div>

        <div class = "div_HC">
            <button type = "button" class = "button"><a href="Main_Page.php">Home</a></button>
            <button type = "button" class = "button"><a href="new_account_screen.php">Register</a></button>
        </div>
    </div>
  
    <div class = "cant_info">
        <label class = "contact">Phone Number: +27 43 653 2342</label> <br>
        <label class = "contact">Email Address: ashmoorestudios@gmail.com</label> <br>
        <label class = "contact">Instagram: @ashmoore_studios</label> <br>
        <label class = "contact">Twitter: @ashmoore_studios</label> <br>
    </div>

</html>