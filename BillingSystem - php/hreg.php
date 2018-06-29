<!DOCTYPE html>
<html>
   <head>
      <title>Hotel Registration</title>
      <link rel="stylesheet" type="text/css" href="Cssfile.css">
      <style type="text/css">
         input[type="text"] ,input[type="password"],textarea ,input[type=number]{
            margin-left: -23px;
         }
          input[type="submit"]{
          margin-right: 23px;
          padding-top: 10px;
          padding: 10px;
        }
      </style>
   </head>
   <body>
      <center> 
      <?php require('header.php') ?>
         <div class="class1" style="padding-left:10px";>
            <br>
            <h2>Hotel Registration</h2>
            <br>
            <br>
            <form action="" method="post">
            <input type="text" name="Hotel_name" placeholder="Hotel Name"><br><br>
            <textarea rows="4" cols="22" placeholder="Address" ></textarea><br><br>
            <input type="text" name="Owners_name" placeholder="Owner's Name"><br><br>
            <input class="email" type="email" name="EmailID" placeholder="EmailID" style="margin-left: -20px;"><br><br>
            <input type="number" name="Mob_no" placeholder="Mobile Number"><br><br>
            <input type="text" name="Uname" placeholder="UserName"><br> <br>
            <input type="password" name="Password" placeholder="Password"><br><br>
            <input type="password" name="Password" placeholder="Confirm Password"><br><br>
            <a href="adminlogin.php"><input id="button1" type="submit" value="Create Account" style="padding: 10px;"></a>
            
            
         </div>
      </center>
        <?php require('footer.php') ?>
   </body>
</html>