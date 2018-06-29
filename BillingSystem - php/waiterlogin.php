<!DOCTYPE html>
<html>

<head>
    <title>Waiter Login</title>
    <link rel="stylesheet" type="text/css" href="Cssfile.css">
    <style type="text/css">
        button,
        input[type="submit"] {
            padding: 10px;
            border-radius: 10px;
        }
        
        <!-- input[type="text"],
        input[type="password"],
        input[type=number],
        input [type="email"] {
            margin-left: -19px;
        }
        
        -->input[type="submit"] {
            width: 270px;
            margin-left: -19px;
            background-color: #30B1E0;
            color: white;
        }
        
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <center>
        <?php require('header.php') ?>
        <div class="divadmin">
            <h1 style="margin-left: -10px;">Waiter Login</h1>
            <div id="Maindiv">
                <form action="adminpanel.php" method="post">
                    <input type="text" name="username" id="username" placeholder="Enter Your UserName Or ID">
                    <br/>
                    <br/>
                    <input type="password" name="password" id="password" placeholder="Enter Password">

                    <br/>
                    <br/>

                    <input value="Login" type="submit" name="Submit"></input>
                    <br/>
                    <br/>
                    <a href="#" onclick="myFunction()" style="">Forgot Password?</a>
                    <br/>
                    <br/>
                </form>

            </div>
            <div style="display:none;" id="myDIV">
                <input class="email" type="email" name="email" id="email" placeholder="Enter Ur Email-ID" style="margin-left: -20px;">
                <br/>
                <br/>
                <a href="adminlogin.php"><input value="Send" type="submit" name="Submit"></input>
                </a>
            </div>
        </div>




    </center>
    <script>
        function myFunction() {
            var x = document.getElementById("myDIV");
            var y = document.getElementById("Maindiv");
            if (x.style.display === "block") {
                x.style.display = "none";
                y.style.display = "block";
            } else {
                x.style.display = "block";
                y.style.display = "none";

            }
        }
    </script>    
    </div>
    </center>



<?php require('footer.php') ?>
</body>

</html>