<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location:index.php");
}
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>HOTEL WILOW LAKE</title>
        <!-- Bootstrap Styles-->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FontAwesome Styles-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
        <link href="assets/css/custom-styles.css" rel="stylesheet" />
        <!-- Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default top-navbar" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="home.php">MAIN MENU </a>
                </div>

                <ul class="nav navbar-top-links navbar-right">

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>

                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
            </nav>
            <!--/. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">

                        <li>
                            <a  href="settings.php"><i class="fa fa-dashboard"></i>Rooms Status</a>
                        </li>
                        <li>
                            <a  class="active-menu" href="room.php"><i class="fa fa-plus-circle"></i>Add Room</a>
                        </li>
                        <li>
                            <a  href="roomdel.php"><i class="fa fa-desktop"></i> Delete Room</a>
                        </li>



                </div>

            </nav>
            <!-- /. NAV SIDE  -->



            <div id="page-wrapper" >
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="page-header">
                                NEW ROOM <small></small>
                            </h1>
                        </div>
                    </div> 


                    <div class="row">

                        <div class="col-md-5 col-sm-5">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    ADD NEW ROOM
                                </div>
                                <div class="panel-body">
                                    <form name="form" method="post" enctype="multipart/form-data">
                                        <table class="table table-bordered">

                                            <tr>	
                                                <th>Room No</th>
                                                <td><input type="text" name="rno"  class="form-control"/>
                                                </td>
                                            </tr>

                                            <tr>	
                                                <th>Room Type</th>
                                                <td><input type="text" name="type"  class="form-control"/>
                                                </td>
                                            </tr>

                                            <tr>	
                                                <th>Price</th>
                                                <td><input type="text" name="price"  class="form-control"/>
                                                </td>
                                            </tr>



                                            <tr>	
                                                <th>Images</th>
                                                <td><input type="file" name="img"  class="form-control"/>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">
                                                    <input type="submit" class="btn btn-primary" value="Add Room Details" name="add"/>
                                                </td>
                                            </tr>
                                        </table> 
                                    </form>
                                    <?php
                                    if (isset($add)) {
                                        $sql = mysqli_query($con, "select * from rooms where room_no='$rno'");
                                        if (mysqli_num_rows($sql)) {
                                            echo "This room is already added";
                                        } else {
                                            $img = "../upload/" . $_FILES['img']['name'];
                                            mysqli_query($con, "insert into rooms values('','$rno','$type','$price','$img')");
                                            move_uploaded_file($_FILES['img']['tmp_name'], $img);
                                            echo "Rooms added successfully";
                                        }
                                    }
                                    ?>

                                </div>

                            </div>
                        </div>


                        <div class = "row">
                            <div class = "col-md-6 col-sm-6">
                                <div class = "panel panel-primary">
                                    <div class = "panel-heading">
                                        ROOMS INFORMATION
                                    </div>
                                    <div class = "panel-body">
                                        <!--Advanced Tables -->
                                        <div class = "panel panel-default">

                                            <div class = "panel-body">
                                                <div class = "table-responsive">
                                                    <table class = "table table-striped table-bordered table-hover" id = "dataTables-example">
                                                        <thead>
                                                            <tr style="height:40">
                                                                <th>Sr No</th>
                                                                <th>Image</th>
                                                                <th>Room No</th>
                                                                <th>Type</th>
                                                                <th>Price</th>


                                                            </tr>
                                                            <?php
                                                            $i = 1;
                                                            $sql = mysqli_query($con, "select * from rooms");
                                                            while ($res = mysqli_fetch_assoc($sql)) {
                                                                $id = $res['room_id'];
                                                                $type = $res['type'];

                                                                $img = $res['image'];
                                                                $path = "../upload/$img";
                                                                ?>
                                                                <tr>
                                                                    <td><?php
                                                                        echo $i;
                                                                        $i++;
                                                                        ?></td>
                                                                    <td><img src="<?php echo $path; ?>" width="90" height="60"/></td>
                                                                    <td><?php echo $res['room_no']; ?></td>
                                                                    <td><?php echo $res['type']; ?></td>
                                                                    <td><?php echo $res['price']; ?></td>

                                                                    <?php
                                                                }
                                                                ?>

                                                                </tbody>
                                                                </table>
                                                                </div>

                                                                </div>
                                                                </div>
                                                                <!--End Advanced Tables -->









                                                                </div>

                                                                </div>
                                                                </div>


                                                                </div>



                                                                </div>
                                                                <!-- /. PAGE INNER  -->
                                                                </div>
                                                                <!-- /. PAGE WRAPPER  -->
                                                                </div>
                                                                <!-- /. WRAPPER  -->
                                                                <!-- JS Scripts-->
                                                                <!-- jQuery Js -->
                                                                <script src="assets/js/jquery-1.10.2.js"></script>
                                                                <!-- Bootstrap Js -->
                                                                <script src="assets/js/bootstrap.min.js"></script>
                                                                <!-- Metis Menu Js -->
                                                                <script src="assets/js/jquery.metisMenu.js"></script>
                                                                <!-- Custom Js -->
                                                                <script src="assets/js/custom-scripts.js"></script>


                                                                </body>
                                                                </html>
