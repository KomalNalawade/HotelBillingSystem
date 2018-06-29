<!DOCTYPE html>
<html>
   <head>
      <title>Waiter Panel</title>
      <link rel="stylesheet" type="text/css" href="Cssfile.css">
   </head>
   <body>
      <center>
         <?php require('header.php') ?>
        <div style="margin-top:60px;width:800px;border:1px solid black;background-color:#CACFD2;">
            <h2>Waiter Panel</h2>
            <p>
               <select id="button2" name="Type">
                  <option value="-1" selected>Select Type</option>
                  <option value="mumbai">Breakfast</option>
                  <option value="mumbai">Soups</option>
                  <option value="pune">Vegetarian Starters</option>
                  <option value="pune">Non-Vegetarian Starters</option>
                  <option value="pune">Vegetarian</option>
                  <option value="pune">Non-Vegetarian</option>
                  <option value="mumbai">Juices & Shakes</option>
                  <option value="mumbai">Desserts</option>
               </select>
               <br><br>
               <b style="margin-left:-320px">Search Item:</b><input type="text" name="Search_Item"><br><br>
               <b style="margin-right:500px">Result:</b><br><br><br><br><br><br>
               <input class="button4" type="submit" value="Add Item"><br><br>
               <b style="margin-right:500px">Added Items:</b><br><br><br><br><br><br>
               
            <center>
               <input class="button4" type="submit" value="Submit"><br><br>
               <input class="button4" type="submit" value="Edit Order">
            </center>
            </p>
         </div>
      </center>
      <?php require('footer.php') ?>
   </body>
</html>
