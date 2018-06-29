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
      <?php require('header.php') ?>
        <div class="DIV1" style=" margin-top: 50px; ">
            <h2>Update Waiter</h2>
            <div id="a" style="border:1px solid black;background-color:#a3bace;">
                <form action="manage_waiter.php">
                    <h3>Add Waiter</h3>
                    <label>Waiter Name</label><input type="text"><br/><br/>
                    <label>ID</label><input type="text"><br/><br/>
                    <label>Password</label><input type="password"><br/><br/>
                    <label>Email ID</label><input type="email" name="email"><br/><br/>
                    <label>Phone No</label><input type="text"><br/><br/>
                    <label>Address</label><input type="text"><br/><br/><br/><br/>
                    <input type="submit" value="Update Waiter"><br/><br/>
                </form>
            </div>
        </div>
    </center>
     <?php require('footer.php') ?>

</body>

</html>