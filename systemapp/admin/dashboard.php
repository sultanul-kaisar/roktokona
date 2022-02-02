<?php require('include.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $fm->title();?></title>

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
   <!-- Start Global Mandatory Style
   =====================================================================-->
   <!-- jquery-ui css -->
   <link href="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
   <!-- Bootstrap -->
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <!-- Bootstrap rtl -->
   <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
   <!-- Lobipanel css -->
   <link href="assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css"/>
   <!-- Pace css -->
   <link href="assets/plugins/pace/flash.css" rel="stylesheet" type="text/css"/>
   <!-- Font Awesome -->
   <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <!-- Pe-icon -->
   <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
   <!-- Themify icons -->
   <link href="assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>
	<!-- End Global Mandatory Style
	=====================================================================-->
	<!-- Start page Label Plugins 
	=====================================================================-->
	<!-- Toastr css -->
	<link href="assets/plugins/toastr/toastr.css" rel="stylesheet" type="text/css"/>
	<!-- Emojionearea -->
	<link href="assets/plugins/emojionearea/emojionearea.min.css" rel="stylesheet" type="text/css"/>
	<!-- Monthly css -->
	<link href="assets/plugins/monthly/monthly.css" rel="stylesheet" type="text/css"/>
	<!-- End page Label Plugins 
	=====================================================================-->
	<!-- Start Theme Layout Style
	=====================================================================-->
	<!-- Theme style -->
	<link href="assets/dist/css/stylehealth.min.css" rel="stylesheet" type="text/css"/>
	<!--<link href="assets/dist/css/stylehealth-rtl.css" rel="stylesheet" type="text/css"/>-->
	<!-- End Theme Layout Style
	=====================================================================-->
</head>
    <body class="hold-transition sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <?php include('navbar.php');?>
            <!-- =============================================== -->
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                     <form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
                            <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button type="submit" name="search" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </form>   
                    <div class="header-icon">
                        <i class="fa fa-tachometer"></i>
                    </div>
                    <div class="header-title">
                        <h1> Dashboard</h1>
                        <small> Dashboard features</small>
                        <ol class="breadcrumb hidden-xs">
                            <li><a href="dashboard.php"><i class="pe-7s-home"></i> Home</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </section>
            <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">15</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                        <i class="fa fa-users fa-2x"></i>
                                        <h4>Active Doctors </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">19</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                        <i class="fa fa-users fa-2x"></i>
                                        <h4>Active Patients</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">05</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                        <i class="fa fa-user-circle fa-2x"></i>
                                        <h4>Representative</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">9</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                        <i class="fa fa-users fa-2x"></i>
                                        <h4>Active Nurses</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">6</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                        <i class="fa fa-user-circle fa-2x"></i>
                                        <h4> Pharmachist</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">3</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                    <i class="fa fa-users fa-2x"></i>
                                    <h4>Labratorist</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">4</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                    <i class="fa fa-users fa-2x"></i>
                                    <h4>Accountant</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">7</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                    <i class="fa fa-users fa-2x"></i>
                                    <h4>Receptionist</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row">
                        <!-- datamap -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 ">  
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Line chart</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="lineChart" height="150"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- calender -->
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                            <div class="panel panel-bd lobidisable">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Calender</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <!-- monthly calender -->
                                    <div class="monthly_calender">
                                        <div class="monthly" id="m_calendar"></div>
                                    </div>
                                </div>
                                 <div id="map1" class="hidden-xs hidden-sm hidden-md hidden-lg"></div>
                            </div>
                        </div>
                        <!-- Bar Chart -->
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="panel panel-bd lobidisable">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Bar chart</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="barChart" height="200"></canvas>
                                </div>
                            </div>
                        </div>
                         <!-- Radar Chart -->
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="panel panel-bd lobidisable">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Rader chart</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="radarChart" height="200"></canvas>
                                </div>
                            </div>
                        </div>
                         <!-- Basic data map -->
                        <div class="col-xs-12 col-sm-6">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Google Map</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="embed-container">
                                        <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387144.0075834208!2d-73.97800349999999!3d40.7056308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY!5e0!3m2!1sen!2sus!4v1394298866288' width='600' height='450' style='border:0'></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>DataTables </h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                         </div>
                    </div> <!-- /.row -->
                </section> <!-- /.content -->

            </div> <!-- /.content-wrapper -->
            <?php include('footer.php');?>
        </div> <!-- ./wrapper -->
        <!-- ./wrapper -->
         <!-- Start Core Plugins
        =====================================================================-->
        <!-- jQuery -->
        <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- jquery-ui --> 
        <script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- lobipanel -->
        <script src="assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
        <!-- Pace js -->
        <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
        <!-- SlimScroll -->
        <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- FastClick -->
        <script src="assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
        <!-- Hadmin frame -->
        <script src="assets/dist/js/custom1.js" type="text/javascript"></script>
        <!-- End Core Plugins
        =====================================================================-->
        <!-- Start Page Lavel Plugins
        =====================================================================-->
        <!-- Toastr js -->
        <script src="assets/plugins/toastr/toastr.min.js" type="text/javascript"></script>
        <!-- Sparkline js -->
        <script src="assets/plugins/sparkline/sparkline.min.js" type="text/javascript"></script>
        <!-- Data maps js -->
        <script src="assets/plugins/datamaps/d3.min.js" type="text/javascript"></script>
        <script src="assets/plugins/datamaps/topojson.min.js" type="text/javascript"></script>
        <script src="assets/plugins/datamaps/datamaps.all.min.js" type="text/javascript"></script>
        <!-- Counter js -->
        <script src="assets/plugins/counterup/waypoints.js" type="text/javascript"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <!-- ChartJs JavaScript -->
        <script src="assets/plugins/chartJs/Chart.min.js" type="text/javascript"></script>
        <script src="assets/plugins/emojionearea/emojionearea.min.js" type="text/javascript"></script>
        <!-- Monthly js -->
        <script src="assets/plugins/monthly/monthly.js" type="text/javascript"></script>
        <!-- Data maps -->
        <script src="assets/plugins/datamaps/d3.min.js" type="text/javascript"></script>
        <script src="assets/plugins/datamaps/topojson.min.js" type="text/javascript"></script>
        <script src="assets/plugins/datamaps/datamaps.all.min.js" type="text/javascript"></script>
      
        <!-- End Page Lavel Plugins
        =====================================================================-->
        <!-- Start Theme label Script
        =====================================================================-->
        <!-- Dashboard js -->
        <script src="assets/dist/js/custom.js" type="text/javascript"></script>

        <!-- End Theme label Script
        =====================================================================-->
         <script>
                "use strict"; // Start of use strict
                // notification
               // setTimeout(function () {
               //     toastr.options = {
               //         closeButton: true,
               //        progressBar: true,
               //         showMethod: 'slideDown',
               //         timeOut: 1000
               //     };
               //     toastr.success('Responsive Admin Theme', 'Welcome to Health Admin');

               // }, 1300);

                //counter
                $('.count-number').counterUp({
                    delay: 10,
                    time: 5000
                });

                //data maps
                var basic_choropleth = new Datamap({
                    element: document.getElementById("map1"),
                    projection: 'mercator',
                    fills: {
                        defaultFill: "#009688",
                        authorHasTraveledTo: "#fa0fa0"
                    },
                    data: {
                        USA: {fillKey: "authorHasTraveledTo"},
                        JPN: {fillKey: "authorHasTraveledTo"},
                        ITA: {fillKey: "authorHasTraveledTo"},
                        CRI: {fillKey: "authorHasTraveledTo"},
                        KOR: {fillKey: "authorHasTraveledTo"},
                        DEU: {fillKey: "authorHasTraveledTo"}
                    }
                });

                var colors = d3.scale.category10();

                window.setInterval(function () {
                    basic_choropleth.updateChoropleth({
                        USA: colors(Math.random() * 10),
                        RUS: colors(Math.random() * 100),
                        AUS: {fillKey: 'authorHasTraveledTo'},
                        BRA: colors(Math.random() * 50),
                        CAN: colors(Math.random() * 50),
                        ZAF: colors(Math.random() * 50),
                        IND: colors(Math.random() * 50)
                    });
                }, 2000);

        //bar chart
                var ctx = document.getElementById("barChart");
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                        datasets: [
                            {
                                label: "My First dataset",
                                data: [65, 59, 80, 81, 56, 55, 40, 25, 35, 51, 94, 16],
                                borderColor: "#009688",
                                borderWidth: "0",
                                backgroundColor: "#009688"
                            },
                            {
                                label: "My Second dataset",
                                data: [28, 48, 40, 19, 86, 27, 90, 91, 41, 25, 34, 47],
                                borderColor: "#009688",
                                borderWidth: "0",
                                backgroundColor: "#009688"
                            }
                        ]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                        }
                    }
                });
                      //radar chart
                var ctx = document.getElementById("radarChart");
                var myChart = new Chart(ctx, {
                    type: 'radar',
                    data: {
                        labels: [["Eating", "Dinner"], ["Drinking", "Water"], "Sleeping", ["Designing", "Graphics"], "Coding", "Cycling", "Running"],
                        datasets: [
                            {
                                label: "My First dataset",
                                data: [65, 59, 66, 45, 56, 55, 40],
                                borderColor: "#00968866",
                                borderWidth: "1",
                                backgroundColor: "rgba(0, 150, 136, 0.35)"
                            },
                            {
                                label: "My Second dataset",
                                data: [28, 12, 40, 19, 63, 27, 87],
                                borderColor: "rgba(55, 160, 0, 0.7",
                                borderWidth: "1",
                                backgroundColor: "rgba(0, 150, 136, 0.35)"
                            }
                        ]
                    },
                    options: {
                        legend: {
                            position: 'top'
                        },
                        scale: {
                            ticks: {
                                beginAtZero: true
                            }
                        }
                    }
                });

                // Message
                $('.message_inner').slimScroll({
                    size: '3px',
                    height: '320px'
                });

                //emojionearea
                $(".emojionearea").emojioneArea({
                    pickerPosition: "top",
                    tonesStyle: "radio"
                });

                //monthly calender
                $('#m_calendar').monthly({
                    mode: 'event',
                    //jsonUrl: 'events.json',
                    //dataType: 'json'
                    xmlUrl: 'events.xml'
                });
            
            
             //line chart
                var ctx = document.getElementById("lineChart");
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                        datasets: [
                            {
                                label: "My First dataset",
                                borderColor: "rgba(0,0,0,.09)",
                                borderWidth: "1",
                                backgroundColor: "rgba(0,0,0,.07)",
                                data: [22, 44, 67, 43, 76, 45, 12, 45, 65, 55, 42, 61, 73]
                            },
                            {
                                label: "My Second dataset",
                                borderColor: "#009688",
                                borderWidth: "1",
                                backgroundColor: "#009688",
                                pointHighlightStroke: "#009688",
                                data: [16, 32, 18, 26, 42, 33, 44, 24, 19, 16, 67, 71, 65]
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }

                    }
                });


        </script>

    </body>
</html>
<?php ob_flush();?>