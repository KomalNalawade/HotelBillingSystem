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
            <h2>Update Menu</h2>
            <div id="a" style="border:1px solid black;background-color:#CACFD2;">

                <h3>Add Waiter</h3>
                <form action="manage_menu.php">
                    <b style="position: absolute;">Type</b><select  style="width: 257px;height: 35px; margin-left: 125px;">
                        <option selected>Drinks</option>
                        <option>Starters</option>
                        <option>Main Course</option>                        
                        <option>BreakFast</option>
                        <option>Fast Food</option>                    
                    </select><br/><br/>
                    <label>Menu Name</label><input type="text"><br/><br/>
                    <label>Price</label><input type="text"><br/><br/>
                    <input type="submit" value="Update Menu"><br/><br/>
                </form>
            </div>
        </div>
    </center>
     <?php require('footer.php') ?>

</body>

</html>