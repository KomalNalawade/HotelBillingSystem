<!DOCTYPE html>
<html>
   <head>
      <title>MENU</title>
      <link rel="stylesheet" type="text/css" href="Cssfile.css">
     <style>
         table, th, td {
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
         <center>
            <h1>Manage Menu</h1>
         </center>
         <div  class="bottom menu">
            <center>
               <h3>Add Menu</h3>
               <form action="#" method="post">
                  <b>Name</b><input type="text" name="aname"><br><br>
                  <b>Price</b><input type="text" name="aprice"><br><br>
                  <b style="position: absolute;">Type</b><select  style="width: 257px;height: 35px; margin-left: 107px;" name="aselect">
                     <option >Select</option>
                     <option>Vadapav</option>
                  </select>
                  <br><br><br><br>
                  <input type="submit" name="asubmit" value="Add" style="width: 100px;margin-left: 20px;">
               </form>
            </center>
         </div>
         <!--<div  class="bottom menu">
            <center>
               <h3>Delete/Update Menu</h3>
               
               <label>Search Items:</label><input type="text"><br/><br/>
               <label><b>Result</b></label>
            </center>
         </div>
         -->
         <div class="div" style="height: auto;width:531px ">

            <b>Search</b><input type="text" style="margin-top: 50px; margin-left: 20px;">
             <table align="center" style="width:500px;">
                  <tr>
                     <th>Sr.No</th>
                     <th>Name of menu</th>
                     <th>Update/Delete</th>
                  </tr>
                  <tr>
                     <td>1</td>
                     <td>Vadapav</td>
                     <td><a href="Update Menu.php"><button type="button" style="margin-left: 1px;">Update</button> </a>
                        <input type="button" value="Delete" style="margin-left: 2px"></td>                
                  </tr>
                  <tr>
                     <td>2</td>
                     <td>Misal</td>
                     <td><a href="Update Menu.php"><button type="button" style="margin-left: 1px;">Update</button> </a>
                        <input type="button" value="Delete" style="margin-left: 2px"></td>
                  </tr>
                  <tr>
                     <td>3</td>
                     <td>Poha</td>
                     <td><a href="Update Menu.php"><button type="button" style="margin-left: 1px;">Update</button> </a>
                        <input type="button" value="Delete" style="margin-left: 2px"></td>
                  </tr>
                  <tr>
                     <td>4</td>
                     <td>Dabeli</td>
                     <td><a href="Update Menu.php"><button type="button" style="margin-left: 1px;">Update</button> </a>
                        <input type="button" value="Delete" style="margin-left: 2px"></td>
                  </tr>
                
               </table>  

      </center>
      <?php require('footer.php') ?>
   </body>
</html>