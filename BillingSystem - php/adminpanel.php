<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="Cssfile.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /*Header Section*/
        
        .dropbtn {
            background-color: #f9f9f9;
            color: black;
            padding: 16px 35px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            margin-right: 30px;
        }
        
        .dropdown {
            position: relative;
            display: inline-block;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
        
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
        }
        
        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
        /*Table Section*/
        
        .table-block {
            margin: 10px;
            padding: 5px;
            width: 90px;
            height: 80px;
            background: white;
            float: left;
            border: 1px solid black;
        }
        
        .manage {
            margin-top: 16px;
        }
        
        .online {
            background: green;
        }
        
        .empty {
            background: floralwhite;
        }
        
        .booked {
            background: gold;
        }
        
        .ex4 {
            background-color: lightblue;
            width: 100%;
            height: 300px;
            overflow: auto;
        }
        /*Bill Section*/
        
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <!--<div class="topdiv" >
		<div class="dropdown" style="float:right;">
		  <button class="dropbtn">Right</button>
		  <div class="dropdown-content">
		    <a href="manage_waiter.php">Add Waiter</a>
		    <a href="manage_waiter.php">Delete/Update Waiter</a>
		    <a href="manage_menu.php">Add Menu</a>
		    <a href="manage_menu.php">Delete/Update Menu</a>
		  </div>
		</div>
    </div>-->

    <!--Header Section-->

<div>
        <center>
        <div style="height: 130px;background-color: #3f83b1;margin-top: -20px;padding-top: 30px;">
            <h1 style="color: lightgray;">Hotel Name</h1>
             <ul class="nav navbar-nav" style="margin-left: 260px; font-size: 18px; ">
                <div class="dropdown" style="float:right; margin-left: 40px; margin-top: -50px; font-size: 18px; ">
                    <li><button class="dropbtn"> Manage Waiter</button></li>
                    <div class="dropdown-content">
                        <a href="manage_waiter.php">Add/Delete Waiter</a>
                        <a href="Update waiter.php">Update Waiter</a>
                    </div>
                </div>
                <div class="dropdown" style="float:right;margin-left: 630px; margin-top: -50px;font-size: 18px; ">
                    <li><button class="dropbtn">Manage Menu</button></li>
                    <div class="dropdown-content">
                        <a href="manage_menu.php">Add/Delete Menu</a>
                        <a href="Update Menu.php">Update Menu</a>
                    </div>
                </div>
            </ul>
        </div>
        </center>
</div>
    

    <!--Midal Section-->
    <div class="ex4">
        <button class="btn btn-default btn-success" style="width: 100px;margin-left: 8px;" id="btnAdd"><b>+</b></button>
        <div class="col-sm-12" id="table-container" style="min-height: 100px">
            <!--list of added tables-->

        </div>
       <!-- <div class="row col-sm-12">
            <button class="btn btn-success" id="btnAdd">Save Table Info</button>
        </div>-->

        <div class="modal" tabindex="-1" role="dialog" id="myModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Manage table</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                    </div>
                    <div class="modal-body">
                        <button type="button" id="btnOnline" class="btn btn-success btnManage" data-toggle="tooltip" data-placement="top" title="Online">
                    Online
                </button>
                        <button type="button" id="btnEmpty" class="btn btn-default btnManage" data-toggle="tooltip" data-placement="top" title="Empty">
                    Empty
                </button>
                        <button type="button" id="btnBooked" class="btn btn-warning btnManage" data-toggle="tooltip" data-placement="top" title="Booked">
                    Booked
                </button>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <!--Bill Format-->
    <center>
        <div style="height: auto;width:531px; padding-top: -40px;">


            <table align="center" width="500px">
                <tr>
                    <th>Table No</th>
                    <th>Bill.pdf</th>
                    <th>Update/Delete</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Bill 1</td>
                    <td><input type="button" value="Download" style="margin-left: 1px;"><input type="button" value="Print" style="margin-left: 2px"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Bill 2</td>
                    <td><input type="button" value="Download" style="margin-left: 1px;"><input type="button" value="Print" style="margin-left: 2px"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Bill 3</td>
                    <td><input type="button" value="Download" style="margin-left: 1px;"><input type="button" value="Print" style="margin-left: 2px"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Bill 4</td>
                    <td><input type="button" value="Download" style="margin-left: 1px;"><input type="button" value="Print" style="margin-left: 2px"></td>
                </tr>

            </table>
        </div>
    </center>
    <script type="text/javascript">
        var counter = 0;
        var tables = [];
        var selectedTable = '';
        var onAddTable = function() {
            var name = "Table" + ' - ' + ++counter;
            tables.push(counter);
            $('#table-container').append(`<div class='table-block' id='` + counter + `'> 
            <span> ` + name + `</span>
            <button type="button" onClick=onRemoveTable() class="close remove" ><span >&times;</span></button>
            <button style="width:50px;margin-left:10px;" class="manage btn btn-primary m-t-5" onClick="openManagePopup()">edit</button>
            </div>`);
        }

        function onRemoveTable() {
            $(event.target).parent().parent().remove();
        }
        $('#btnAdd').on('click', onAddTable);

        function openManagePopup() {
            selectedTable = $(event.target).parent();
            $('#myModal').modal('show');
        }

        function manageTable() {

            var currentBtn = $(event.target).attr('id'); //get id of clicked button

            switch (currentBtn) {
                case "btnOnline":
                    $(selectedTable).removeClass('empty booked');
                    $(selectedTable).addClass('online');
                    //do something
                    break;
                case "btnEmpty":
                    $(selectedTable).removeClass('online  booked');
                    $(selectedTable).addClass('empty');
                    //do something
                    break;
                case "btnBooked":
                    $(selectedTable).removeClass('empty online ');
                    $(selectedTable).addClass('booked');
                    //do something
                    break;
            }

            $('#myModal').modal('hide');
        }


        $('.btnManage').on('click', manageTable)

        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <?php require('footer.php') ?>
</body>

</html>