<?php

include "include/databse.php";
?>


<!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title>Lion's Den Gym | Coach Registration</title>
        
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
        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/summernote-master/summernote.css" rel="stylesheet" type="text/css"/>
        <!-- <link href="assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css"/> -->
        <link href="assets/plugins/bootstrap-colorpicker/css/colorpicker.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css"/>
        
        <!-- Theme Styles -->
        <link href="assets/css/modern.css" rel="stylesheet" type="text/css"/>
        <!-- <link href="assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/> -->
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
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
                    <h3>Registration</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Registration</a></li>
                            <li class="active">Coach Registration Form</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                       
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Coach Registration</h4>
                                </div>
                                <div class="panel-body">

                                    <form class="form-horizontal" method="POST">
                                        
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 control-label">First Name</label>
                                                    <div class="col-sm-10">
                                                        <!-- <div class="col-md-2">
                                                            <input type="text" class="form-control" placeholder=".col-md-2">
                                                        </div> -->
                                                        <!-- <div class="col-md-3">
                                                            <input type="text" class="form-control" placeholder=".col-md-3">
                                                        </div> -->
                                                        <div class="col-md-4">
                                                            <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter First Name" onkeyup="checkfname()" required >
                                                            <span id="fnameError"></span>
                                                        </div>

                                                        <label class="col-sm-2 control-label">Last Name</label>
                                                    
                                                        <div class="col-md-4">
                                                            <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter Last Name" onkeyup="checklname()" required >
                                                            <span id="lnameError"></span>
                                                        </div>                                                    
                                                    </div>                                               
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">Gender</label>
                                                <div class="gender-details">
                                                    //id="gender"               
                                                    <input type="radio" name="gender" id="gender" value="Male" >
                                                    <input type="radio" name="gender" id="gender" value="Female">
                                                    <!-- <span class="gender-title">Gender</span> -->
                                                    <div class="category">
                                                        <label for="dot-1">
                                                            <span class="dot one"></span>
                                                            <span class="gender">Male</span>
                                                        </label>
                                                        <label for="dot-2">
                                                            <span class="dot two"></span>
                                                            <span class="gender">Female</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="age" class="col-sm-2 control-label">Age</label>
                                                <div class="col-md-3">
                                                    <input type="text" name="age"class="form-control" id="age" placeholder="Enter Age" onkeyup="checkage()" required >
                                                    <span id="ageError"></span> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Registration Date</label>
                                                <div class="col-sm-10 col-md-2">
                                                    <input type="date" name="regdate" id="regdate" class="form-control " onkeyup="checkRegDate()" required >
                                                    <span id="regdateError"></span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="nic" class="col-sm-2 control-label">NIC no</label>
                                                <div class="col-md-3">
                                                    <input type="text" name="nic" class="form-control" id="nic" placeholder="Enter NIC Number" onkeyup="checkNic()" required >
                                                    <span id="nicError"></span>
                                                </div>
                                            </div>
                                        
                                            
                                            <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">Mobile No</label>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Contact Number" onkeyup="checkmobile()" required >
                                                    <span id="mobileError"></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">Address</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="adrs" id="adrs" placeholder="Enter Address" onkeyup="checkAdress()" required >
                                                    <span id="adrsError"></span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">Qualifications</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="qlfc" class="form-control" id="qlfc" placeholder="Enter Qualifications" onkeyup="checkQuali()" required >
                                                    <span id="qualiError" ></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">Special Notes</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="specialn" class="form-control" id="specialn" placeholder="Enter Special Notes" onkeyup="checkNotes()" >
                                                    <span id="notesError"></span>
                                                </div>
                                            </div>
                                
                                        
                                            <div class="row">
                                                <div class="col-sm-6" style="margin-left:40%;">
                                                    
                                                    <div class="col-md-3">
                                                        <button type="submit" name="addcoach" id="addcoach" class="btn btn-primary btn-rounded">Add</button>
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

        const form      = document.getElementById('form');
        const gender    = document.getElementById('gender');  
        // gets the values from the inputs      
        const genderValue= gender.value.trim();     
        // output of errors               
        let genderError =   document.getElementById("genderError");
        

        function checkfname() {
            const fname     = document.getElementById('fname');
            const fnameValue = fname.value.trim();  
            let fnameError  =   document.getElementById("fnameError");

            //First name validation
            if (fnameValue === ''){
            //enters a valid character
                fnameError.textContent = "First name cannot be blank!";
                fnameError.style.color = "#ff1617";
                return false;
            }
            else if (!/[^a-zA-Z]/.test(fnameValue)){
            //enters a valid character
                fnameError.textContent = "";
                return true;
            }
            else{
                //enters an invalid character
                fnameError.style.color = "#ff1617";
                fnameError.textContent = "First name cannot have Numbers!";
                return false;
            }
            
        }

        function checklname() {
            const lname     = document.getElementById('lname');
            const lnameValue = lname.value.trim(); 
            let lnameError  =   document.getElementById("lnameError");

            //Last name validation
            if (lnameValue === ''){
            // if input field is blank
                lnameError.textContent = "Last name cannot be blank!";
                lnameError.style.color = "#ff1617";
                return false;
            }
            else if (!/[^a-zA-Z]/.test(lnameValue)){
            //enters a valid character
                lnameError.textContent = "";
                return true;
            }
            else{
                //enters an invalid character
                lnameError.style.color = "#ff1617";
                lnameError.textContent = "Last name cannot have Numbers!";
                return false;
            }
           
        }

        function checkage() {
            const age       = document.getElementById('age');
            const ageValue   = age.value.trim();
            let ageError    =   document.getElementById("ageError");

            let agelength = ageValue.length;

            //Mobile number validation
            if (ageValue === ''){
            //enters a valid character
                ageError.textContent = "Age cannot be blank!";
                ageError.style.color = "#ff1617";
                return false;
            }
            else if (!/[^0-9]/.test(ageValue)){               
                //enters an invalid character
                if( agelength > 3 || ageValue > 200 ){
                    ageError.style.color = "#ff1617";
                    ageError.textContent = "Age is invalid!";
                    return false;
                }
                else{
                    //enters a valid character
                    ageError.textContent = "";
                    return true;
                }
            }
            else{
                //enters an invalid character
                ageError.style.color = "#ff1617";
                ageError.textContent = "Age cannot have Letters!";
                return false;
            }
        }

        function checkRegDate() {
            const regdate   = document.getElementById('regdate');
            const regdateValue = regdate.value.trim(); 
            let regdateError =   document.getElementById("regdateError");

            if (regdateValue.length > 0) {
                return true;
            }
            else {
                regdateError.style.color = "#ff1617";
                regdateError.textContent = "Select a registration date!";
                return false;
            }

        }

        function checkNic(){
            const nic  = document.getElementById('nic');
            const nicValue = nic.value.trim(); 
            let nicError    =   document.getElementById("nicError");
            let niclength = nicValue.length;

            if (niclength == 0) {
                nicError.textContent = "NIC field is required!";
                nicError.style.color = "#ff1617";
                return false;
            }
            else if (niclength == 10) {
                //pattern1
                //let rgx = /^\d{9}[vxVX]{1}$/ 
               // if (nicValue.match(rgx)) {     
                if (/^\d{9}[vxVX]{1}$/.test(nicValue)){
                    nicError.textContent = "";
                    return true;
                }
                else {
                    nicError.textContent = "Invalid NIC number";
                    nicError.style.color = "#ff1617";
                    return false;
                }
            }

            else if (niclength == 12) {
                //pattern 2
                //var rgx = /^\d{12}$/; 
                //if (nicValue.match(rgx)) {   
                if (/^\d{12}$/.test(nicValue)){
                    nicError.textContent = "";
                    return true;
                }
                else {
                    nicError.textContent = "Invalid NIC number";
                    nicError.style.color = "#ff1617";
                    return false;
                }
            }
            else {
                //empty
                nicError.textContent = "Invalid NIC number";
                nicError.style.color = "#ff1617";
                return false;
            }
        }

                
        function checkmobile() {
            const mobile  = document.getElementById('mobile');
            const mobileValue = mobile.value.trim(); 
            let mobileError =   document.getElementById("mobileError");
            let moblength = mobileValue.length;

            //Mobile number validation
            if (mobileValue === ''){
            //enters a valid character
                mobileError.textContent = "Mobile cannot be blank!";
                mobileError.style.color = "#ff1617";
                return false;
            }
            else if (!/[^0-9+]/.test(mobileValue)){               
                //enters an invalid number
                if( moblength != 10 && moblength != 12 ){
                    mobileError.style.color = "#ff1617";
                    mobileError.textContent = "Mobile Number is invalid!";
                    return false;
                }
                else{
                    //enters a valid character
                    mobileError.textContent = "";
                    return true;
                }
            }
            else{
                //enters an invalid character
                mobileError.style.color = "#ff1617";
                mobileError.textContent = "Mobile Number cannot have Letters!";
                return false;
            }
            
        }

        function checkAdress(){
            const adrs      = document.getElementById('adrs');
            const adrsValue =  adrs.value.trim(); 
            let adrsError   =   document.getElementById("adrsError");

             // Address validation
            if (adrsValue === ''){
            // if blank
                adrsError.textContent = "Address cannot be blank!";
                adrsError.style.color = "#ff1617";
                return false;
                console.log('address blank');
             }
            else if (/^[a-zA-Z0-9\/\s,.]+$/.test(adrsValue)){
            // enters a valid character
                adrsError.textContent = "";
                return true;
            }
            else{
                //enters an invalid character
                adrsError.style.color = "#ff1617";
                adrsError.textContent = "Address cannot have special characters!";
                return false;
            }
        }

        function checkQuali(){
            const quali   = document.getElementById('qlfc');
            const qualiValue = quali.value.trim(); 
            let qualiError    =   document.getElementById("qualiError"); 

             // Notes validation
             if (qualiValue === ''){
            // if blank
                qualiError.textContent = "Qualifications cannot be blank!";
                qualiError.style.color = "#ff1617";
                return false;
            }
            else if (!/[^a-zA-Z ]/.test(qualiValue)){
            // enters a valid character
                qualiError.textContent = "";
                return true;
            }
            else{
                //enters an invalid character
                qualiError.style.color = "#ff1617";
                qualiError.textContent = "Qualifications cannot have special characters!!";
                return false;
            }
        }

        function checkNotes(){
            const notes   = document.getElementById('specialn');
            const notesValue = notes.value.trim(); 
            let notesError    =   document.getElementById("notesError"); 

             // Notes validation
             if (notesValue === ''){
            // if blank
                notesError.textContent = "Special notes cannot be blank!";
                notesError.style.color = "#ff1617";
                return false;
            }
            else if (!/[^a-zA-Z ]/.test(notesValue)){
            // enters a valid character
                notesError.textContent = "";
                return true;
            }
            else{
                //enters an invalid character
                notesError.style.color = "#ff1617";
                notesError.textContent = "Special notes cannot have special characters!!";
                return false;
            }
        }
    </script>     

    <script>
            const submit = document.querySelector('#addcoach');
            function isValid(){

                if(checkfname() && checklname() && checkage() && checkRegDate() && checkNic() && checkWeight() && checkHeight() && checkmobile() && checkAdress() && checkQuali() && checkNotes() ) {
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
                        alert("Coach didn't Add. Please enter valid inputs.");
                    } else {
                        e.returnValue = false;
                    }
                }
                console.log(isValid());
            }
    </script>
        

    <?php
        if(isset($_POST['addcoach'])){

            $fname = $_POST['fname'];
            $lname= $_POST['lname'];
            $age= $_POST['age'];
            //$gender= $_POST['gender'];
            $contactNo= $_POST['mobile'];
            $nic= $_POST['nic'];
            $address= $_POST['adrs'];
            $reg_date= $_POST['regdate'];
            $qualification= $_POST['qlfc'];
            $special_notes= $_POST['specialn'];
            

            $memreg = "INSERT INTO `coach_rej` ( `fname`, `lname`, `age`,`nic`,  `contact_no`, `address`, `reg_date`, `qualification`, `special_notes`) 
                                VALUES ('$fname','$lname','$age','$nic','$contactNo','$address','$reg_date','$qualification','$special_notes')";

                
                $run_staff = mysqli_query($conn, $memreg );

            if ($run_staff) {
                    echo "<script> alert('Coach Added successfully ')</script>";
                    echo "<script> window.open('dashboard.php')</script>"; 
            }
            else{
                    echo "<script> alert('Coach didn't Add  ')</script>";

            }
        }

   ?>