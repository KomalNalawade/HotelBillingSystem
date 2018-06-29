<!DOCTYPE html>
<html>

<head>
    <title>Billing System</title>
    <link rel="stylesheet" type="text/css" href="Cssfile.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <style type="text/css">
        button {
            margin-right: 0px;
        }
    </style>
</head>


<body>
    <div>
        <div class="divh">
            <div style="width: 135px; height: 95px;">
                <img src="logo.png" class="img"></img>
            </div>
            <div style=" margin-left: 90px; margin-top: -65px;position:fixed;">
                <a href="#home" class="decoration" style="margin-left: 80px;"><b>Home</b></a>
                <a href="#service" class="decoration"><b>Services</b></a>
                <a href="#contact" class="decoration"><b>Contact us</b></a>
                <!--<a href="adminlogin.php" class="decoration"><button><b>Admin Login</b></button></a>
           <a href="waiterlogin.php" class="decoration"><button><b>Waiter Login</b></button></a>-->
                <a href="adminlogin.php" class="decoration" ><button type="button" style="width: 150px;margin-left: 50px" class="btn btn-outline-success btn-lg"><b>Admin Login</b></button></a>
                <a href="waiterlogin.php" class="decoration"><button style="width: 150px;" type="button"   class="btn btn-outline-success btn-lg" ><b>Waiter Login</b></button></a>
            </div>
        </div>
        <!--This Is Home-->
        <section id="home">

            <br/>
            <br/>
            <br/>
            <br/>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="height: 690px">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/hotel.jpg" alt="First slide" style="height: 690px">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/hotel1.jpg" alt="Second slide" style="height: 690px">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/hotel3.jpg" alt="Third slide" style="height: 690px">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/hotel2.jpg" alt="Second slide" style="height: 690px">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/hotel4.jpg" alt="Third slide" style="height: 690px">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/hotel5.jpg" alt="Second slide" style="height: 690px">
                    </div>
                </div>
            </div>
    </div>
    </section>
    <!--This Is Services-->
    <section id="service">
        <!--<div class="service">
        </div>-->
    </section>
    <!--This Is Contact-->
    <section id="contact">
    </section>
    </div>
    <div style="
    height: 70px;background-color:#3587bf;padding: 5px;position: relative;">
        <footer>
           <b><p style="text-align: center;padding-top: 20px; color: white">&copy; 2018 Hotel Billing System.All rights reserved. 
                <br/>
            </p></b> 
        </footer>
    </div>
</body>

</html>