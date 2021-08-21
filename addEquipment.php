<?php

include "include/databse.php";
?>

<!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title>Lion's Den Gym | Add Equipments</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Lion's Den Gym Dashboard" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Code busters 2021" />
        
        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
        <!-- <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/> -->
        <link href="assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/summernote-master/summernote.css" rel="stylesheet" type="text/css"/>
        <!-- <link href="assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css"/> -->
        <link href="assets/plugins/bootstrap-colorpicker/css/colorpicker.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>
        
        
        <!-- Theme Styles -->
        <link href="assets/css/modern.css" rel="stylesheet" type="text/css"/>
        <!-- <link href="assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/> -->
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
        
       
        
    </head>
    <body class="page-header-fixed">
        <div class="overlay"></div>
        
        
        <div class="menu-wrap">
            <nav class="profile-menu">
                <div class="profile"><img src="assets/images/profile-menu-image.png" width="60" alt="David Green"/><span>David Green</span></div>
                
            </nav>
            
        </div>
        <form class="search-form" action="#" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control search-input" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default close-search" type="button"><i class="fa fa-times"></i></button>
                </span>
            </div><!-- Input Group -->
        </form><!-- Search Form -->

        <main class="page-content content-wrap">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class=" push-sidebar">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="logo-box">
                        <a href="index.html" class="logo-text"><span>Lion's Den</span></a>
                    </div><!-- Logo Box -->
                    <div class="search-button">
                        <a href="javascript:void(0);" class=" show-search"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="topmenu-outer">
                        <div class="top-menu">
                            <ul class="nav navbar-nav navbar-left">
                                <li>		
                                    <a href="javascript:void(0);" class="sidebar-toggle"><i class="fa fa-bars"></i></a>
                                </li>
                                
                                <li>		
                                    <a href="javascript:void(0);" class="toggle-fullscreen"><i class="fa fa-expand"></i></a>
                                </li>
                               
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li>	
                                    <a href="javascript:void(0);" class="show-search"><i class="fa fa-search"></i></a>
                                </li>
                              
                               
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <span class="user-name">David<i class="fa fa-angle-down"></i></span>
                                        <img class="img-circle avatar" src="assets/images/avatar1.png" width="40" height="40" alt="">
                                    </a>
                                    <ul class="dropdown-menu dropdown-list" role="menu">
                                        <!-- <li role="presentation"><a href="profile.html"><i class="fa fa-user"></i>Profile</a></li> -->
                                        <li role="presentation"><a href="calendar.html"><i class="fa fa-calendar"></i>Calendar</a></li>
                                       
                                        <li role="presentation" class="divider"></li>
                                        <li role="presentation"><a href="lock-screen.html"><i class="fa fa-lock"></i>Lock screen</a></li>
                                        <li role="presentation"><a href="login.html"><i class="fa fa-sign-out m-r-xs"></i>Log out</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="login.html" class="log-out">
                                        <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                                    </a>
                                </li>
                               
                            </ul><!-- Nav -->
                        </div><!-- Top Menu -->
                    </div>
                </div>
            </div><!-- Navbar -->
            <div class="page-sidebar sidebar">
                <div class="page-sidebar-inner slimscroll">
                    <div class="sidebar-header">
                        <div class="sidebar-profile">
                            <a href="javascript:void(0);" id="profile-menu-link">
                                <div class="sidebar-profile-image">
                                    <img src="assets/images/profile-menu-image.png" class="img-circle img-responsive" alt="">
                                </div>
                                <div class="sidebar-profile-details">
                                    <span>David Green<br><small>Art Director</small></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <ul class="menu accordion-menu">
                        <li class="active"><a href="index.html" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
                        <li><a href="profile.html" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span><p>Profile</p></a></li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-envelope"></span><p>Mailbox</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="inbox.html">Member Registration</a></li>
                                <li><a href="inbox-alt.html">Coach Registration</a></li>
                                
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-briefcase"></span><p>UI Kits</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="ui-alerts.html">Alerts</a></li>
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-icons.html">Icons</a></li>
                                <li><a href="ui-typography.html">Typography</a></li>
                                <li><a href="ui-notifications.html">Notifications</a></li>
                                <li><a href="ui-grid.html">Grid</a></li>
                                <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-panels.html">Panels</a></li>
                                <li><a href="ui-progress.html">Progress Bars</a></li>
                                <li><a href="ui-sliders.html">Sliders</a></li>
                                <li><a href="ui-nestable.html">Nestable</a></li>
                                <li><a href="ui-tree-view.html">Tree View</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-th"></span><p>Layouts</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="layout-blank.html">Blank Page</a></li>
                                <li><a href="layout-boxed.html">Boxed Page</a></li>
                                <li><a href="layout-horizontal-menu.html">Horizontal Menu</a></li>
                                <li><a href="layout-horizontal-menu-boxed.html">Boxed &amp; Horizontal Menu</a></li>
                                <li><a href="layout-horizontal-menu-minimal.html">Horizontal Menu Minimal</a></li>
                                <li><a href="layout-fixed-sidebar.html">Fixed Sidebar</a></li>
                                <li><a href="layout-static-header.html">Static Header</a></li>
                                <li><a href="layout-collapsed-sidebar.html">Collapsed Sidebar</a></li>
                                <li><a href="layout-compact-menu.html">Compact Menu</a></li>
                                <li><a href="layout-hover-menu.html">Hover Menu</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-list"></span><p>Tables</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="table-static.html">Static Tables</a></li>
                                <li><a href="table-responsive.html">Responsive Tables</a></li>
                                <li><a href="table-data.html">Data Tables</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-edit"></span><p>Forms</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="form-elements.html">Form Elements</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                                <li><a href="form-upload.html">File Upload</a></li>
                                <li><a href="form-image-crop.html">Image Crop</a></li>
                                <li><a href="form-image-zoom.html">Image Zoom</a></li>
                                <li><a href="form-select2.html">Select2</a></li>
                                <li><a href="form-x-editable.html">X-editable</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-stats"></span><p>Charts</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="charts-sparkline.html">Sparkline</a></li>
                                <li><a href="charts-rickshaw.html">Rickshaw</a></li>
                                <li><a href="charts-morris.html">Morris</a></li>
                                <li><a href="charts-flotchart.html">Flotchart</a></li>
                                <li><a href="charts-chartjs.html">Chart.js</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-log-in"></span><p>Login</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="login.html">Login Form</a></li>
                                <li><a href="login-alt.html">Login Alt</a></li>
                                <li><a href="register.html">Register Form</a></li>
                                <li><a href="register-alt.html">Register Alt</a></li>
                                <li><a href="forgot.html">Forgot Password</a></li>
                                <li><a href="lock-screen.html">Lock Screen</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-map-marker"></span><p>Maps</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="maps-google.html">Google Maps</a></li>
                                <li><a href="maps-vector.html">Vector Maps</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-gift"></span><p>Extra</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="404.html">404 Page</a></li>
                                <li><a href="500.html">500 Page</a></li>
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="calendar.html">Calendar</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="todo.html">Todo</a></li>
                                <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="timeline.html">Timeline</a></li>
                                <li><a href="search.html">Search Results</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->


            <div class="page-inner">
                <div class="page-title">
                    <h3>Equipments</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Equipments</a></li>
                            <li class="active">Add Equipments Form</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                       
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Add Equipments</h4>
                                </div>
                                <div class="panel-body">
                                    <form class="form-horizontal" method="POST">                                        
                                    
                                        <div class="form-group">
                                            <label for="ename" class="col-sm-2 control-label">Equipment Name</label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" name="ename" id="ename" placeholder="Enter Equipment Name" onkeyup="checkEqName()" required >
                                                <span id="eqNameError"></span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="amount" class="col-sm-2 control-label">Amount</label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" name="amount" id="amount" placeholder="Enter Amount" onkeyup="checkAmount()" required >
                                                <span id="amountError"></span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Date </label>
                                            <div class="col-sm-10 col-md-2">
                                                <input type="date" name="date" id="date" class="form-control " onkeyup="checkRegDate()" required >
                                                <span id="regDateError"></span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="description" class="col-sm-2 control-label">Description</label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" name="description" id="description" placeholder="Enter Description" onkeyup="checkDescription()" required >
                                                <span id="descriptError"></span>
                                            </div>
                                        </div>        
                                        
                                        <div class="row">
                                            <div class="col-sm-6" style="margin-left:40%;">
                                                <div class="col-md-3">
                                                    <button type="submit" name="addeq" id="addeq" class="btn btn-primary btn-rounded">Add</button>
                                                </div>
                                                <div class="col-md-3">
                                                    <button type="button" class="btn btn-primary btn-rounded">Reset</button>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                    <p class="no-s">2021 &copy; Lion's Den  by Code-Busters.</p>
                </div>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
        

        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>
        <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="assets/plugins/pace-master/pace.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/main.js"></script>
        <script src="assets/plugins/waves/waves.min.js"></script>
        <script src="assets/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="assets/plugins/summernote-master/summernote.min.js"></script>
        <!-- <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script> -->
        <script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
        <script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
        <!-- <script src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script> -->
        <script src="assets/js/modern.min.js"></script>
        <script src="assets/js/pages/form-elements.js"></script>
        
    </body>
</html>

    <script>
    
        //Equiname check
        function checkEqName(){
            const ename      = document.getElementById('ename');
            const enameValue =  ename.value.trim(); 
            let enameError   =   document.getElementById("eqNameError");

             // Equiname validation
            if (enameValue === ''){
            // if blank
                enameError.textContent = "Equipment name cannot be blank!";
                enameError.style.color = "#ff1617";
                return false;
                console.log('Equipment name blank');
             }
            else if (/^[a-zA-Z0-9\/\s,.]+$/.test(enameValue)){
            // enters a valid character
                enameError.textContent = "";
                return true;
            }
            else{
                //enters an invalid character
                enameError.style.color = "#ff1617";
                enameError.textContent = "Equipment name cannot have special characters!";
                return false;
            }
        }

        //Amount validation
        function checkAmount(){
            const amount    = document.getElementById('amount');
            const amountValue =  amount.value.trim(); 
            let amountError =   document.getElementById("amountError");
            //let weightlength = ageValue.length;

            //Mobile number validation
            if (amountValue === ''){
            //enters a valid character
                amountError.textContent = "Amount is required*!";
                amountError.style.color = "#ff1617";
                return false;
            }
            else if (!/[^0-9]/.test(amountValue)){    
                // enters a valid character
                amountError.textContent = "";
                return true;
            }
            else{
                //enters an invalid character
                amountError.style.color = "#ff1617";
                amountError.textContent = "Amount cannot have Letters!";
                return false;
            }
        }

        //regdate
        function checkRegDate() {
            const regdate   = document.getElementById('date');
            const regdateValue = regdate.value.trim(); 
            let regdateError =   document.getElementById("regDateError");

            if (regdateValue.length > 0) {
                return true;
            }
            else {
                regdateError.style.color = "#ff1617";
                regdateError.textContent = "Select a registration date!";
                return false;
            }
        }

        //description
        function checkDescription(){
            const descrip      = document.getElementById('description');
            const descripValue =  descrip.value.trim(); 
            let descripError   =   document.getElementById("descriptError");

             // Address validation
            if (descripValue === ''){
            // if blank
                descripError.textContent = "Description is required*!";
                descripError.style.color = "#ff1617";
                return false;
                console.log('descript. blank');
             }
            else if (/^[a-zA-Z0-9\/\s,.]+$/.test(descripValue)){
            // enters a valid character
                descripError.textContent = "";
                return true;
            }
            else{
                //enters an invalid character
                descripError.style.color = "#ff1617";
                descripError.textContent = "Description cannot have special characters!";
                return false;
            }
        }

    </script>

    <script>
            const submit = document.querySelector('#addeq');
            function isValid(){

                if( checkEqName() && checkAmount() && checkRegDate() && checkDescription() ) {
                    return true;
                }
                else{
                    return false;
                }
            }

            if(submit.addEventListener) {
                submit.addEventListener('click', returnToPrevious);
            } else {
                submit.attachEvent('onclick', returnToPrevious);
            }

            function returnToPrevious (e) {
                e = e || window.event;

                if(!isValid()) {
                    //if(true) {
                    if(e.preventDefault) {
                        e.preventDefault();
                        alert("Equipment didn't Add. Please enter valid inputs.");
                    } else {
                        e.returnValue = false;
                    }
                }
                console.log(isValid());
            }
        </script>



    <?php
        if(isset($_POST['addeq'])){

        $ename = $_POST['ename'];
        $amount= $_POST['amount'];
        $date= $_POST['date'];
        $description= $_POST['description'];
        

        $memreg = "INSERT INTO `equipment` ( `ename`,  `amount`, `date`, `description`) 
                            VALUES ('$ename','$amount','$date','$description')";

            
            $run_staff = mysqli_query($conn, $memreg );

        if ($run_staff) {
                echo "<script> alert('ITEM Added successfully ')</script>";
                echo "<script> window.open('dashboard.php')</script>"; 
            }
            else{
                echo "<script> alert('Item Didnt Added  ')</script>";
                //   echo "Error: " . $run_staff . "<br>" . $conn->error;
            }
        }

    ?>