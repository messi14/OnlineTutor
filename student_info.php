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

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel"><span class="sm-st-icon st-yellow" style="background-color: #39435C;"><img src="students_icon.png"></img></span>
                                <header class="panel-heading" style="background-color: #39435C;">
                                    <h4 style="color: #eee;">Student List</h4>
                                </header>
                                <!-- <div class="box-header"> -->
                                    <!-- <h3 class="box-title">Responsive Hover Table</h3> -->

                                <!-- </div> -->
                                <div class="panel-body table-responsive">
                                    <div class="box-tools m-b-15">
                                        <div class="input-group">
                                            <button id="messi" class="btn btn-primary btn-addon btn-sm pull-left">
                                        <i class="fa fa-plus"></i>
                                        Add to Batch
                                    </button>

                                    <div class="modal fade" id="addToBatch" tabindex="-1" role="dialog" 
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
                    Enter Batch Details
                </h4>
            </div>
            
            <!-- Modal Body -->
            <form class="form-horizontal" role="form" action="add_student_to_batch.php" method="POST">
            <div class="modal-body">
                
                
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Batch ID</label>
                    <div class="col-sm-6">
                        <input class="form-control" 
                        name="id" placeholder="Enter Batch ID"/>
                    </div>
                    <input type="hidden" name="student_ids" id="student_ids" /> 
                  </div>
                  
                
    
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">
                            Close
                </button>
                <button type="submit" class="btn btn-primary">
                    Add to Batch
                </button>
            </div>
            </form>
        </div>
    </div>
</div>


                                            <input type="text" name="table_search" id="search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-hover table-striped">
                                        <tr>
                                            <th><input type="checkbox" value="" id="allcb"></th>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Contact No.</th>
                                            <th>Edit</th>
                                        </tr>

                                        <?php  
   // Variables for the first page hit
 $start = 0;
 $page_counter = 0;
    $per_page = 5;
    $next = $page_counter + 1;
    $previous = $page_counter - 1;

    // Check the page location with start value sent by get request and change variable values accordingly
 if(isset($_GET['start'])){
  $start = $_GET['start'];
  $page_counter =  $_GET['start'];
  $start = $start *  $per_page;
  $next = $page_counter + 1;
  $previous = $page_counter - 1;
 }


                                        $sql = "select * from students order by student_id asc LIMIT $start, $per_page";
                                        $stmt = $dbh->prepare($sql);
                                        
                                        $stmt->execute();
                                        $products = array();
                                        if($stmt->rowCount() == 0){
                                         }else{

                                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                $products[] = $row;
                                            }
                                        }
                                        $str = "";
                                        //echo $products[0]['student_id'];
                                         foreach ($products as $product) {
                                             $str.="<tr><td><input type='checkbox' class='onecb' value='".$product['student_id']."'/></td><td class='clickableRow'><a>".$product['student_id']."</a></td><td>".$product['student_first_name']."</td><td>".$product['student_last_name']."</td><td>".$product['student_contact']."</td>
<td class='la_edit'><p data-placement='top' data-toggle='tooltip' title='Edit'><button class='btn btn-primary btn-xs'><span class='glyphicon glyphicon-pencil'></span></button></p></td>
    

                                             </tr>";
                                         }
                                        
$count_query = "SELECT * FROM students";

 $query = $dbh->prepare($count_query);

 $query->execute();

 $count = $num_rows = $query->rowCount();
    
    // calculate number of paginations required based on row count 
 $paginations = ceil($count / $per_page);


                                        echo $str;
                                        ?>
                                        
                                    </table>
                                </br>
                                  <!-- Render pagination based on messages-->
      <div class="pagination-wrap">
                <ul class="pagination pull-right">


                  <?PHP

                    if($page_counter == 0){
                        echo "<li><a href=?start='0' class='active'>0</a></li>";
                       for ($j=1; $j < $paginations; $j++) { 
                          echo "<li><a href=?start=$j>".$j."</a></li>";
                       }
                    }else{
                        echo "<li><a href=?start=$previous>«</a></li>"; 
                        for ($j=0; $j < $paginations; $j++) {
                         if ($j == $page_counter) {
                            echo "<li><a href=?start=$j class='active'>".$j."</a></li>";
                         }else{
                            echo "<li><a href=?start=$j>".$j."</a></li>";
                         } 
                      }if($j != $page_counter+1)
                        echo "<li><a href=?start=$next>»</a></li>"; 
                    } 
                    
                  ?>
                </ul>
      </div></div>


      <form method="POST" action="update_student.php">
      <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Edit Student Details</h4>
      </div>
          <div class="modal-body">
         
          <div class="form-group">
        <input class="form-control " type="text" name="edit_fn" id="edit_fn" placeholder="">
        </div>
        <input type="hidden" name="edit_id" id="edit_id">
        <div class="form-group">
        <input class="form-control " type="text" name="edit_ln" id="edit_ln" placeholder="">
        </div>
        <div class="form-group">
        <input class="form-control" type="text" name="edit_co" id="edit_co" placeholder="">
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


                                </br>
                                    <div class="panel-footer bg-white">
                                    <!-- <span class="pull-right badge badge-info">32</span> -->
                                    <button class="btn btn-primary btn-addon btn-sm" data-toggle="modal" data-target="#myModalHorizontal">
                                        <i class="fa fa-plus"></i>
                                        Add New Student
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
                    Enter Student Details
                </h4>
            </div>
            
            <!-- Modal Body -->
            <form class="form-horizontal" role="form" action="add_student.php" method="POST">
            <div class="modal-body">
                
                
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">First Name</label>
                    <div class="col-sm-6">
                        <input class="form-control" 
                        name="first_name" placeholder="First name"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Last Name</label>
                    <div class="col-sm-6">
                        <input class="form-control" 
                        name="last_name" placeholder="Last name"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Contact</label>
                    <div class="col-sm-10">
                        <input class="form-control"
                            name="contact" placeholder="Contact no."/>
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
                    Add Student
                </button>
            </div>
            </form>
        </div>
    </div>
</div>






<!---->

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

        <!-- Director for demo purposes -->
        <script type="text/javascript">
        $('table tr td.la_edit').on('click',function(){

    $("#edit").modal("show");
    $("#edit_id").val($(this).parent().children()[1].textContent);
    $("#edit_fn").val($(this).parent().children()[2].textContent);
    $("#edit_ln").val($(this).parent().children()[3].textContent);
    $("#edit_co").val($(this).parent().children()[4].textContent);
});

        $('#messi').on('click',function(){

    $("#addToBatch").modal("show");
    var str = "";
    $("input:checkbox[class=onecb]:checked").each(function() {
       console.log($(this).val());
       str += $(this).val() + ",";
  });
    console.log(str);

    $("#student_ids").val(str);
});
        </script>



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
                console.log("hey there");
                $("table").find("tr").each(function(index) {
                    if (index === 0) return;
                    var id = $(this).find("td").text().toLowerCase();
                    $(this).toggle(id.indexOf(value) !== -1);
                });
            });

            $('.clickableRow').on("click", function() {
                        var anchorId = $(this).eq(0).text();
                        //alert(anchorId);
                          location.href="student_page.php?id=" + anchorId;

                  });


$('#allcb').change(function(){
    if($(this).prop('checked')){
        $('tr td input[type="checkbox"]').each(function(){
            $(this).prop('checked', true);
        });
        $('#messi').show();
    }else{
        $('tr td input[type="checkbox"]').each(function(){
            $(this).prop('checked', false);
        });
        $('#messi').hide();
    }

    
});

$('.onecb').on("change", function() {
                        if($(this).prop('checked')){
        $('#messi').show();
    }else{
        if ($('input:checkbox:checked').length > 0){
    $('#messi').show();
  }
  else{
   $('#messi').hide();
  }
    }
});

        </script>

        <script>
$(document).ready(function() {
        $('#messi').hide();

});

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

</body>
</html>