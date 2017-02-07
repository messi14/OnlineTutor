<?php
include('db.php');
/*** begin our session ***/

//$id = $_GET['id'];

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
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css" />

   <style type="text/css">
#bootstrapSelectForm .selectContainer .form-control-feedback {
    /* Adjust feedback icon position */
    right: -15px;

}
</style>
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
                 





                    <div class="row">

                        <div class="col-md-12 ">
                            <section class="panel">
                              <header class="panel-heading bg-blue">
                                  <h4>Assessment Tracking</h4>
                                <br/><br/>



                                  <form id="bootstrapSelectForm" method="post" action="#" class="form-horizontal">

    <div class="form-group">
        <div class="col-xs-5 selectContainer">
            <select name="language" class="form-control">
                <option value="">Select an assessment</option>
                <?php  
                                        $sql = "select * from assessments";
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

                                            if (isset($_POST['language'])){
                                                if ($_POST['language'] == $product['assessment_name']){
                                                    $str.="<option value='".$product['assessment_name']."' selected>".$product['assessment_name']."</option>";
                                                }else{
                                                    $str.="<option value='".$product['assessment_name']."'>".$product['assessment_name']."</option>";
                                                }
                                            }else{

                                             $str.="<option value='".$product['assessment_name']."'>".$product['assessment_name']."</option>";
                                         }
                                         }
                                        
                                        echo $str;
                                        ?>
            </select>
        </div>
        <div class="col-xs-3">
            <button type="submit" class="btn btn-default">Track</button>
        </div>
    </div>
    
</form>
                            </header>

                            <div class="panel-body table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <tr>
                                      <th>ID
                                      <th>Assessment Name</th>
                                      <th>Student ID</th>
                                      <th>First Name</th>
                                      <!-- <th>Client</th> -->
                                      <th>Last Name</th>
                                      <!-- <th>Price</th> -->
                                      <th>Status</th>
                                      
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php  
                                        
                                        if(isset($_POST['language'])) {
                                        $selected_val = $_POST['language'];  // Storing Selected Value In Variable
                                        //echo "You have selected :" .$selected_val;  // Displaying Selected Value
                                        
                                        $sql = "select * from assessments where assessment_name='".$selected_val."'";
                                        $stmt = $dbh->prepare($sql);
                                        $products = array();
                                        if ($stmt->execute()) {
                                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                $products[] = $row;
                                            }
                                        }
                                        
                                        $id = $products[0]['assessment_id'];


                                        $completed = 0;
                                        $pending = 0;


                                        $sql = "select * from student_assessment where assessment_id=".$id." order by student_id asc";
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
                                            
                                            $sql = "select * from students where student_id=".$product['student_id'];
                                        $stmt = $dbh->prepare($sql);
                                        $students = array();
                                        if ($stmt->execute()) {
                                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                $students[] = $row;
                                            }
                                        }
                                        
                                        //echo $products[0]['student_id'];
                                         foreach ($students as $student) {
$str.="<tr><td>".$id."</td><td>".$selected_val."</td><td>".$student['student_id']."</td><td>".$student['student_first_name']."</td><td>".$student['student_last_name']."</td>";
 
                                             if ($product['status'])
                                             {
                                                $completed++;
                                                $str.= "<td><span class='label label-success'>complete</span></td>";
                                             }else {
                                                $pending++;
                                                $str.= "<td><span class='label label-warning'>pending</span></td>";
                                             }
                                             $str.= "</tr>";
                                         }
                
                                         }
                                        
                                        echo $str;

                                        }
                                       
                                        ?>
                          </tbody>
                      </table>
                  </div>

                  <div class="panel-footer bg-white">
                                    <!-- <span class="pull-right badge badge-info">32</span> -->
                                    <button class="btn btn-primary btn-addon btn-sm" data-toggle="modal" data-target="#myHorizontal">
                                        <i class="fa fa-plus"></i>
                                        Add New Assessment
                                    </button>


        <!-- Modal -->
<div class="modal fade" id="myHorizontal" tabindex="-1" role="dialog" 
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
                    Enter Assessment Details
                </h4>
            </div>
            
            <!-- Modal Body -->
            <form class="form-horizontal" role="form" action="add_assessment.php" method="POST">
            <div class="modal-body">
                
                
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Assessment ID</label>
                    <div class="col-sm-6">
                        <input class="form-control" 
                        name="name" placeholder="Enter Assessment ID"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Student ID</label>
                    <div class="col-sm-6">
                        <input class="form-control" 
                        name="id" placeholder=Enter Student ID/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-10">
                        <input class="form-control"
                            name="status" placeholder="Enter true for complete or false for pending"/>
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
                    Add Assessment
                </button>
            </div>
            </form>
        </div>
    </div>
</div>

</div>

    </section>
            </div>
        </div>



</br></br></br>

 <div class="row">
                        <div class="col-md-6">
                            <div class="panel">
                                <header class="panel-heading bg-blue">
                                    <h4><?php if(isset($_POST['language'])) {echo $selected_val;} ?>
                                     
                                        <?php if(isset($_POST['language'])) {
                                            echo "<span class='label label-inverse pull-right'>ID: ".$id."</span>";
                                        }
                                        ?>
                                    </h4>
                                </header>
                                <!-- <div class="box-header"> -->
                                    <!-- <h3 class="box-title">Responsive Hover Table</h3> -->

                                <!-- </div> -->
                                <div class="panel-body">
                                    <table id="batch_data" class="table table-bordered">
                                        <tr>
                                            <td>Total Students </td>
                                        <td>
                                        <?php
                                        if(isset($_POST['language'])) {
                                        $sql = "select count(*) as count from student_assessment where assessment_id=".$id;
                                        $stmt = $dbh->prepare($sql);
                                        $products = array();
                                        if ($stmt->execute()) {
                                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                $products[] = $row;
                                            }
                                        }
                                        
                                        echo $products[0]['count'];

                                        }
                                        ?></td>
                                    <tr>
                                        <td>Assessments completed</td>
                                        <td><?php if(isset($_POST['language'])) {echo $completed;} ?></td>
                                    </tr>

                                    <tr>
                                        <td>Assessments pending</td>
                                        <td><?php if(isset($_POST['language'])) {echo $pending;} ?></td>
                                    </tr>                                   
                                </table>
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
        <script type="text/javascript" src="js/index.js"></script>
       <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/js/bootstrap-select.min.js"></script>

       <script>
$(document).ready(function() {
    $('#bootstrapSelectForm')
        .find('[name="language"]')
            .selectpicker()
            .change(function(e) {
                // revalidate the language when it is changed
                $('#bootstrapSelectForm').formValidation('revalidateField', 'language');
            })
            .end()
        .formValidation({
            framework: 'bootstrap',
            excluded: ':disabled',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                language: {
                    validators: {
                        notEmpty: {
                            message: 'Please select the assessment type'
                        }
                    }
                }
            }
        });
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