<!DOCTYPE html>
<html>

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
            background-color: lightgray;
            width: 200px;
            margin-left: 20px;
            font-size: x-large;
        }

        .div_name{
            background-color: lightgray;
            height: 40px;
            width: 250px;
            float: left;
            margin-top: 23px;
        }

        .div_LRC{
            background-color: lightgray;
            width: 350px;
            height: 75px;
            float: right;
        }

        .button{
            border-radius: 10px 10px 10px 10px;
            margin-left: 10px;
            margin-top: 20px;
            height: 30px;
            width: 100px;
            border-color: black;
        }

        .item_container{
            background-color: gainsboro;
            height: 1200px;
            width: 1250px;
            margin: auto;
            position: relative;
            z-index: 2;
        }

        .item{
            background-color: lightgray;
            height: 350px;
            width: 250px;
            border-radius: 10px 10px 10px 10px;
            border-style: solid;
            border-width: 2px;
            border-color: black;
            margin-top: 30px;
            margin-left: 125px;
            float: left;
            position: relative;
            z-index: 2;
        }

        .image{
            background-color: white;
            border-radius: 10px 10px 10px 10px;
            border-style: solid;
            border-width: 0px;
            border-color: black;
            width: 200px;
            height: 250px;
            margin-left: 25px;
            margin-top: 20px;
            position: relative;
            z-index: 2;
        }

        .row_1{
            float: left;
            z-index: 2;
        }

        
        .row_2{
            float: left;
            z-index: 2;
        }

        
        .row_3{
            float: left;
            z-index: 2;
        }

        .description{
            background-color: white;
            border-radius: 10px 10px 10px 10px;
            border-style: solid;
            border-width: 2px;
            border-color: black;
            height: 50px;
            width: 200px;
            margin-top: 15px;
            margin-left: 25px;
            z-index: 2;
        }

        .footer{
            background-color: lightgray;
            height: 75px;
            position: relative;
            z-index: 1;
        }

        .contact{
            margin-left: 5px;
            font-family: 'Courier New', Courier, monospace;
        }

        .cant_info{
            float: left;
        }

        .social{
            float: right;
        }

        .image_view{
            visibility: hidden;
            float: left;
            background-color: gainsboro;
            margin: auto;
            margin-top: -1152px;
            width: 1250px;
            height: 1200px;
            position: relative;
            z-index: 3;
        }

        .view_image{
            margin-top: 50px;
            margin-left: 100px;
            float: left;
            background-color: gainsboro;
            border-radius: 10px 10px 10px 10px;
            height: 750px;
            width: 500px;
            position: relative;
            z-index: 3;
        }

        .description_view{
            margin-top: 50px;
            margin-left: 150px;
            float: left;
            background-color: white;
            border-radius: 10px 10px 10px 10px;
            border-style: solid;
            border-width: 2px;
            border-color: black;;
            height: 100px;
            width: 400px;
            position: relative;
            z-index: 3;
        }

    </style>

    <script>

        function close_image_view(){

            document.getElementById("image_view").style.visibility = "hidden";

        }

        function Image_Enlarge(img_name, title, price){
            
            document.getElementById("image_view").style.visibility = "visible";
            document.getElementById("img_display").src = img_name;
            document.getElementById("name_placeholder").innerHTML = title;
            document.getElementById("description_placeholder").innerHTML = title;
            document.getElementById("price").innerHTML = 'R ' + price;

        }

    </script>

    <div class = "div_header">
        <div class = "div_name">
            <label class = "title">Ashmoore Studio</label>
        </div>

        <div class = "div_LRC">
            <button type = "button" class = "button"><a href="Login.php">Login</a></button>
            <button type = "button" class = "button"><a href="new_account_screen.php">Register</a></button>
            <button type = "button" class = "button"><a href="contact_page.php">Contact Us</a></button>
        </div>
    </div>

    <div class = "item_container">

        <div class = "row_1">
            <div class = "item">
                <div class = "image" style = "background-color: lightgray;">
                    <img style="height: 250px; margin-left: 12px; border-radius: 10px 10px 10px 10px;" class = "img_portrait" src="img/Portrait.png">
                </div>
                <div class = "description" onclick = "Image_Enlarge('img/Portrait.png', 'The New', '1200')">
                    <label style="margin-left: 10px; font-family: 'Courier New', Courier, monospace;">The New   </label>
                </div>
            </div>

            <div class = "item">
                <div class = "image">
                    <img style="height: 180px; margin-top: 20px; margin-left: 20px;" class = "img_dracula" src="img/dracula.png">
                </div>
                <div class = "description" onclick = "Image_Enlarge('img/dracula.png', 'The Dracula', '800')">
                    <label style="margin-left: 10px; font-family: 'Courier New', Courier, monospace;">The Dracula</label>
                </div>
            </div>

            <div class = "item">
                <div class = "image">
                    <img style="height: 190px; margin-top: 5px; margin-left: 5px;" class = "img_frankie" src="img/frankie.png">
                </div>
                <div class = "description" onclick = "Image_Enlarge('img/frankie.png', 'Frankenstein Monster', '800')">
                    <label style="margin-left: 10px; font-family: 'Courier New', Courier, monospace;">Frankenstein's Monster</label>
                </div>
            </div>

        </div>
        <br>

        <div class = "row_2">
            <div class = "item">
                <div class = "image">
                    <img style="height: 150px; margin-top: 20px; margin-left: 5px;" class = "img_lake" src="img/lake.png">
                </div>
                <div class = "description" onclick = "Image_Enlarge('img/lake.png', 'The Beast From The Lake' , '800')">
                        <label style="margin-left: 10px; font-family: 'Courier New', Courier, monospace;">The Beast From The Lake</label>
                </div>
            </div>

            <div class = "item">
                <div class = "image">
                    <img style="height: 180px; margin-top: 20px; margin-left: 8px;" class = "img_bee" src="img/bee.jpg">
                </div>
                <div class = "description" onclick = "Image_Enlarge('img/bee.jpg', 'Bee Up Close' , '2500')">
                    <label style="margin-left: 10px; font-family: 'Courier New', Courier, monospace;">Bee Up Close</label>
                </div>
            </div>

            <div class = "item">
                <div class = "image">
                    <img style="height: 180px; margin-top: 20px; margin-left: 5px;" class = "img_FIJ" src="img/FIJ.jpg">
                </div>
                <div class = "description" onclick = "Image_Enlarge('img/FIJ.jpg', 'The Jar', '1200')">
                    <label style="margin-left: 10px; font-family: 'Courier New', Courier, monospace;">The Jar</label>
                </div>
            </div>

        </div>
        <br>

        <div class = "row_3">

            <div class = "item">
                <div class = "image">
                    <img style="height: 180px; margin-top: 20px; margin-left: 5px;" class = "img_flower" src="img/flower.jpg">
                </div>
                <div class = "description" onclick = "Image_Enlarge('img/flower.jpg', 'The Flower', '2500')">
                    <label style="margin-left: 10px; font-family: 'Courier New', Courier, monospace;">The Flower</label>
                </div>
            </div>

            <div class = "item">
                <div class = "image">
                    <img style="height: 220px; margin-top: 5px; margin-left: 20px;" class = "img_hand1" src="img/hand1.jpg">
                </div>
                <div class = "description" onclick = "Image_Enlarge('img/hand1.jpg', 'Third Eye', '1800')">
                    <label style="margin-left: 10px; font-family: 'Courier New', Courier, monospace;">Third Eye</label>
                </div>
            </div>

            <div class = "item">
                <div class = "image">
                    <img style="height: 220px; margin-top: 10px; margin-left: 20px;" class = "img_mask1" src="img/mask1.jpg">
                </div>
                <div class = "description" onclick = "Image_Enlarge('img/mask1.jpg', 'The Mask', '1800')">
                    <label style="margin-left: 10px; font-family: 'Courier New', Courier, monospace;">The Mask</label>
                </div>
            </div>

        </div>
        <br>

        <div class = "image_view" id = "image_view" name = "image_view">

            <div class = "view_image">
                <img style="height: 500px; margin-left: 15px; border-radius: 10px 10px 10px 10px;
                            border-style: solid; border-width: 2px; border-color: black;" id = "img_display">
            </div>

            <div class = "description_view">
                <label style = "font-family: 'Courier New', Courier, monospace; 
                            font-size: x-large;
                            margin-top:5px;
                            margin-left: 5px;" id = "name_placeholder">
                            name placeholder
                            </label> <br>
                <label style = "font-family: 'Courier New', Courier, monospace; 
                            font-size: medium;
                            margin-top:5px;
                            margin-left: 5px;" id = "description_placeholder">
                            description placeholder
                            </label> <br>
                 <label style = "font-family: 'Courier New', Courier, monospace; 
                            font-size: large;
                            margin-top:5px;
                            margin-left: 5px;" id = "price">
                            price
                            </label> <br>

                    <button style = "height: 20px; margin-top: 13.6px; width: 400px; border-radius: 3px;">Buy</button>
            </div>
            
            <button onclick = "close_image_view()" style = "height: 20px; width: 90px; border-radius: 5px; float: right;">
                <- Back </button>

        </div>

    </div>

    <div class = "footer">
        <div>
            <div class = "cant_info">
                <label class = "contact">Phone Number: +27 43 653 2342</label> <br>
                <label class = "contact">Email Address: ashmoorestudios@gmail.com</label> <br>
            </div>

            <div class = "social">
                <label class = "contact">Instagram: @ashmoore_studios</label> <br>
                <label class = "contact">Twitter: @ashmoore_studios</label> <br>
            </div>
        </div>
    </div>



</html>