<?php
include('db.php');
/*** begin our session ***/

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Director | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="keywords" content="Admin, Bootstrap 3, Template, Theme, Responsive">
    <!-- bootstrap 3.0.2 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <!-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> -->
    <!-- Daterange picker -->
    <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="css/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <!-- <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> -->
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- Theme style -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          <![endif]-->

          <style type="text/css">

          </style>
      </head>
      <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="board_info.php" class="logo">
                Tutor
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span><i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                

                                


                                        <li class="divider"></li>

                                        <li>
                                            <a href="logout.php"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>

                <div class="wrapper row-offcanvas row-offcanvas-left">
                    <!-- Left side column. contains the logo and sidebar -->
                    <aside class="left-side sidebar-offcanvas">
                        <!-- sidebar: style can be found in sidebar.less -->
                        <section class="sidebar">
                            <!-- Sidebar user panel -->
                            <div class="user-panel">
                                <div class="pull-left image">
                                    <img src="hat.png" class="img-circle" alt="User Image" />
                                </div>
                                <div class="pull-left info">
                                    <h4>Hello</h4>

                                    
                                </div>
                            </div>
                            <!-- search form -->
                            
                            <!-- /.search form -->
                            <!-- sidebar menu: : style can be found in sidebar.less -->
                            <ul class="sidebar-menu">
                                <li class="active">
                                    <a href="board_info.php">
                                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="student_info.php">
                                        <i class="fa fa-gavel"></i> <span>Student Info</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="assessment_info.php">
                                        <i class="fa fa-gavel"></i> <span>Assessments</span>
                                    </a>
                                </li>
                            </ul>
                        </section>
                        <!-- /.sidebar -->
                    </aside>
                    <aside class="right-side">
                <section class="content">




                    <div class="row" style="margin-bottom:5px;">


                        <div class="col-md-3 ">
                            <div class="sm-st clearfix bg-violet">
                                <span class="sm-st-icon st-white"><img src="school_icon.png"></img></span>
                                <div class="sm-st-info">
                                    <span><?php 
                                    $sql = "select count(*) as count from boards";
                                        $stmt = $dbh->prepare($sql);
                                        $products = array();
                                        if ($stmt->execute()) {
                                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                $products[] = $row;
                                            }
                                        }
                                        
                                        echo $products[0]['count'];
                                         
                                    ?>
                                </span>
                                    Total Boards
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="sm-st clearfix bg-red">
                                <span class="sm-st-icon st-white"><img src="classes_icon.png"></img></span>
                                <div class="sm-st-info">
                                    <span><?php 
                                    $sql = "select count(*) as count from classes";
                                        $stmt = $dbh->prepare($sql);
                                        $products = array();
                                        if ($stmt->execute()) {
                                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                $products[] = $row;
                                            }
                                        }
                                        
                                        echo $products[0]['count'];
                                         
                                    ?></span>
                                    Total Classes
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="sm-st clearfix bg-green">
                                <span class="sm-st-icon st-white"><img src="batches_icon.png"></img></span>
                                <div class="sm-st-info">
                                    <span><?php 
                                    $sql = "select count(*) as count from batches";
                                        $stmt = $dbh->prepare($sql);
                                        $products = array();
                                        if ($stmt->execute()) {
                                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                $products[] = $row;
                                            }
                                        }
                                        
                                        echo $products[0]['count'];
                                         
                                    ?></span>
                                    Total Batches
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="sm-st clearfix bg-yellow">
                                <span class="sm-st-icon st-white"><img src="students_icon.png"></img></span>
                                <div class="sm-st-info">
                                    <span><?php 
                                    $sql = "select count(*) as count from students";
                                        $stmt = $dbh->prepare($sql);
                                        $products = array();
                                        if ($stmt->execute()) {
                                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                $products[] = $row;
                                            }
                                        }
                                        
                                        echo $products[0]['count'];
                                         
                                    ?></span>
                                    Total Students
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel">
                                <header class="panel-heading">
                                    <h4>Board List</h4>

                                </header>
                                <!-- <div class="box-header"> -->
                                    <!-- <h3 class="box-title">Responsive Hover Table</h3> -->

                                <!-- </div> -->
                                <div class="panel-body table-responsive">
                                    <div class="box-tools m-b-15">
                                        <div class="input-group">
                                            <input type="text" name="table_search" id="search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-hover table-striped">
                                        <tr>
                                            <th>ID</th>
                                            <th>Board Name</th>
                                            <th>Description</th>
                                            <th>Edit</th>
                                        </tr>

                                        <?php  
                                        $sql = "select * from boards order by board_id asc";
                                        $stmt = $dbh->prepare($sql);
                                        $products = array();
                                        if ($stmt->execute()) {
                                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                $products[] = $row;
                                            }
                                        }
                                        $str = "";
                                        //echo $products[0]['student_id'];
                                         foreach ($products as $product) {
                                             $str.="<tr><td class='clickableRow'><a>".$product['board_id']."</a></td><td>".$product['board_name']."</td><td>".$product['board_desc']."</td>
<td class='la_edit'><p data-placement='top' data-toggle='tooltip' title='Edit'><button class='btn btn-primary btn-xs'><span class='glyphicon glyphicon-pencil'></span></button></p></td>
                                             </tr>";
                                         }
                                        //$str='<tr class="head"><td>Firstname</td><td>Lastname</td><td>Domain</td><td>Email</td><td></td></tr>';
                                        /*if($data->num_rows>0){
                                        while( $row = $data->fetch_array(MYSQLI_ASSOC))
                                        {
                                            
                                        }
                                        }else{
                                         $str .= "<td colspan='5'>No Data Available</td>";
                                         }*/
                                        echo $str;
                                        ?>
                                        
                                    </table>
                                </div>
 <form method="POST" action="update_board.php">
      <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Edit Board Details</h4>
      </div>
          <div class="modal-body">
         
          <div class="form-group">
        <input class="form-control " type="text" name="edit_n" id="edit_n" placeholder="">
        </div>
        <input type="hidden" name="edit_id" id="edit_id">
        <div class="form-group">
        <input class="form-control " type="text" name="edit_de" id="edit_de" placeholder="">
        </div>

      </div>
          <div class="modal-footer ">
        <button type="submit" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>

        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
</form>

                                </br></br>
                                    <div class="panel-footer bg-white">
                                    <!-- <span class="pull-right badge badge-info">32</span> -->
                                    <button class="btn btn-primary btn-addon btn-sm" data-toggle="modal" data-target="#myModalHorizontal">
                                        <i class="fa fa-plus"></i>
                                        Add New Board
                                    </button>


        <!-- Modal -->
<div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Enter Board Details
                </h4>
            </div>
            
            <!-- Modal Body -->
            <form class="form-horizontal" role="form" action="add_board.php" method="POST">
            <div class="modal-body">
                
                
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Board Name</label>
                    <div class="col-sm-6">
                        <input class="form-control" 
                        name="name" placeholder="Board name"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-6">
                        <input class="form-control" 
                        name="desc" placeholder="Describe the board"/>
                    </div>
                  </div>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">
                            Close
                </button>
                <button type="submit" class="btn btn-primary">
                    Add Board
                </button>
            </div>
            </form>
        </div>
    </div>
</div>

                                </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                </section>


            </aside>
        </div><!-- ./wrapper -->



        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>

        <!-- jQuery UI 1.10.3 -->
        <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

        <script src="js/plugins/chart.js" type="text/javascript"></script>

        <!-- datepicker
        <script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>-->
        <!-- Bootstrap WYSIHTML5
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>-->
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <!-- calendar -->
        <script src="js/plugins/fullcalendar/fullcalendar.js" type="text/javascript"></script>

        <!-- Director App -->
        <script src="js/Director/app.js" type="text/javascript"></script>

        <!-- Director dashboard demo (This is only for demo purposes) -->
        <script src="js/Director/dashboard.js" type="text/javascript"></script>
        
        <script type="text/javascript">
        $('table tr td.la_edit').on('click',function(){

    $("#edit").modal("show");
    $("#edit_id").val($(this).parent().children()[0].textContent);
    $("#edit_n").val($(this).parent().children()[1].textContent);
    $("#edit_de").val($(this).parent().children()[2].textContent);
});
        </script>

        <!-- Director for demo purposes -->
        <script type="text/javascript">
            $('input').on('ifChecked', function(event) {
                // var element = $(this).parent().find('input:checkbox:first');
                // element.parent().parent().parent().addClass('highlight');
                $(this).parents('li').addClass("task-done");
                console.log('ok');
            });
            $('input').on('ifUnchecked', function(event) {
                // var element = $(this).parent().find('input:checkbox:first');
                // element.parent().parent().parent().removeClass('highlight');
                $(this).parents('li').removeClass("task-done");
                console.log('not');
            });

            $('#search').keyup(function() {
    var value = this.value.toLowerCase();

    $("table").find("tr").each(function(index) {
        if (index === 0) return;
        var id = $(this).find("td").text().toLowerCase();
        $(this).toggle(id.indexOf(value) !== -1);
    });
});

$('.clickableRow').on("click", function() {
            var anchorId = $(this).eq(0).text();
            //alert(anchorId);
              location.href="board_page.php?id=" + anchorId;

      });
        </script>
        <script>
            $('#noti-box').slimScroll({
                height: '400px',
                size: '5px',
                BorderRadius: '5px'
            });

            $('input[type="checkbox"].flat-grey, input[type="radio"].flat-grey').iCheck({
                checkboxClass: 'icheckbox_flat-grey',
                radioClass: 'iradio_flat-grey'
            });
</script>
<script type="text/javascript">
    $(function() {
                "use strict";
                //BAR CHART
                var data = {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [
                        {
                            label: "My First dataset",
                            fillColor: "rgba(220,220,220,0.2)",
                            strokeColor: "rgba(220,220,220,1)",
                            pointColor: "rgba(220,220,220,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                            data: [65, 59, 80, 81, 56, 55, 40]
                        },
                        {
                            label: "My Second dataset",
                            fillColor: "rgba(151,187,205,0.2)",
                            strokeColor: "rgba(151,187,205,1)",
                            pointColor: "rgba(151,187,205,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(151,187,205,1)",
                            data: [28, 48, 40, 19, 86, 27, 90]
                        }
                    ]
                };
            new Chart(document.getElementById("linechart").getContext("2d")).Line(data,{
                responsive : true,
                maintainAspectRatio: false,
            });

            });
            // Chart.defaults.global.responsive = true;
</script>
</body>
</html>