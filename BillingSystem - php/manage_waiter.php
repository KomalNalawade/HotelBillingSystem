<!DOCTYPE html>
<html>

<head>
    <title>Waiter</title>
    <link rel="stylesheet" type="text/css" href="Cssfile.css">
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            margin-top: 100px;
        }
    </style>
</head>

<body>

<center>
        <!--<div class="topdiv" >
          <h1 style="color: lightgray;">Hotel Name</h1>
      </div>-->
<?php 
require('header.php');
?>
    

        <div class="DIV1" style=" margin-top: 50px; ">
            <h2>Mannage Waiter</h2>
            <div id="a" style="border:1px solid black;background-color:#a3bace;">

                <h3>Add Waiter</h3>
                <label>Waiter Name</label><input type="text"><br/><br/>
                <label>ID</label><input type="text"><br/><br/>
                <label>Password</label><input type="password"><br/><br/>
                <label>Email ID</label><input type="email" name="email"><br/><br/>
                <label>Phone No</label><input type="text"><br/><br/>
                <label>Address</label><input type="text"><br/><br/><br/><br/>
                <input type="submit" value="Add Waiter"><br/><br/>
            </div>



            <center>
                <div class="div" style="height: auto;width:531px;margin-top: 80px;">

                    <br/>
                    <table align="center" width="500px">
                        <tr>
                            <th>Sr.No</th>
                            <th>Name of waiter</th>
                            <th>Update/Delete</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Simran Parwani</td>
                            <td>
                                <a href="Update waiter.php"><button style="margin-left: 1px;">Update</button></a>
                                <a href=""><button style="margin-left: 2px">Delete</button></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Harshala Chavan</td>
                            <td>
                                <a href="Update waiter.php"><button style="margin-left: 1px;">Update</button></a>
                                <a href=""><button style="margin-left: 2px">Delete</button></a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Adesh Dandawate</td>
                            <td>
                                <a href="Update waiter.php"><button style="margin-left: 1px;">Update</button></a>
                                <a href=""><button style="margin-left: 2px">Delete</button></a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Komal Nalawade</td>
                            <td>
                                <a href="Update waiter.php"><button style="margin-left: 1px;">Update</button></a>
                                <a href=""><button style="margin-left: 2px">Delete</button></a>
                            </td>
                        </tr>

                    </table>
                </div>
            </center>



        </div>
    </center>
    <?php 
    require('footer.php');
    ?>
</body>

</html>