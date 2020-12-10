<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from androthemes.com/themes/html/medjestic/pages/doctor-schedule/add-schedule.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Nov 2020 13:45:29 GMT -->
<head>
    <link href="../../pages/calendar.php">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Medjestic</title>
        <!-- Iconic Fonts -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../../vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../../vendors/iconic-fonts/flat-icons/flaticon.css">
        <link rel="stylesheet" href="../../vendors/iconic-fonts/cryptocoins/cryptocoins.css">
        <link rel="stylesheet" href="../../vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css">
        <!-- Bootstrap core CSS -->
        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- jQuery UI -->
        <link href="../../assets/css/jquery-ui.min.css" rel="stylesheet">
        <!-- Page Specific CSS (Slick Slider.css) -->
        <link href="../../assets/css/slick.css" rel="stylesheet">
        <!-- Medjestic styles -->
        <link href="../../assets/css/style.css" rel="stylesheet">

        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="32x32" href="../../favicon.ico">
        <style>
            body{
                margin:0;
                color:#444;
                background-color:#98c2c2;
                font:300 18px/18px Roboto, sans-serif;
                transition:background-color .4s ease-in-out 0s;
            }
            *,:after,:before{box-sizing:border-box}
            {background-color: #039BE5;}
            .pull-left{float:left}
            .pull-right{float:right}
            .clearfix:after,.clearfix:before{content:'';display:table}
            .clearfix:after{clear:both;display:block}
            
            .calendar{width:300px;font-size:100%;margin:50px auto 0;perspective:1000px;cursor:default;position:relative}
            .calendar .header{height:100px;position:relative;color:#fff}
            .calendar .header .text{position:absolute;top:0;left:0;right:0;bottom:0;background-color:#308ff0;padding:15px;transform:rotateX(90deg);transform-origin:bottom;backface-visibility:hidden;transition:.4s ease-in-out 0s;box-shadow:0 6px 20px 0 rgba(0,0,0,.19), 0 8px 17px 0 rgba(0,0,0,.2);opacity:0}
            .calendar .header .text>span{text-align:center;padding:26px;display:block}
            .calendar .header.active .text{transform:rotateX(0deg);opacity:1}
            .months{width:100%;height:280px;position:relative}
            .months .hr{height:1px;margin:15px 0;background:#ccc}
            .month{padding:15px;width:inherit;height:inherit;background:#fff;position:absolute;backface-visibility:hidden;transition:all .4s ease-in-out 0s;box-shadow:0 6px 20px 0 rgba(0,0,0,.19),0 8px 17px 0 rgba(0,0,0,.2)}
            .months[data-flow="left"] .month{transform:rotateY(-180deg)}
            .months[data-flow="right"] .month{transform:rotateY(180deg)}
            .table{width:100%;font-size:10px;font-weight:400;display:table}
            .table .row{display:table-row}
            .table .row.head{color:#308ff0;text-transform:uppercase}
            .table .row .cell{width:14.28%;padding:5px;text-align:center;display:table-cell}
            .table .row .cell.disable{color:#ccc}
            .table .row .cell span{display:block;width:28px;height:28px;line-height:28px;transition:color,background .4s ease-in-out 0s}
            .table .row .cell.active span{color:#fff;background-color:#308ff0}
            .months .month[data-active="true"]{transform:rotateY(0)}
            .header [data-action]{color:inherit;position:absolute;top:50%;margin-top:-20px;width:40px;height:40px;z-index:1;opacity:0;transition:all .4s ease-in-out 0s}
            .header [data-action]>i{width:20px;height:20px;display:block;position:absolute;left:50%;top:50%;margin-top:-10px;margin-left:-10px}
            .header [data-action]>i:before,.header [data-action]>i:after{top:50%;margin-top:-1px;content:'';position:absolute;height:2px;width:20px;border-top:2px solid;border-radius:2px}
            .header [data-action*="prev"]{left:15px}
            .header [data-action*="next"]{right:15px}
            .header [data-action*="prev"]>i:before,.header [data-action*="prev"]>i:after{left:0}
            .header [data-action*="prev"]>i:before{top:3px;transform:rotate(-45deg)}
            .header [data-action*="prev"]>i:after{top:auto;bottom:3px;transform:rotate(45deg)}
            .header [data-action*="next"]>i:before,.header [data-action*="next"]>i:after{right:0}
            .header [data-action*="next"]>i:before{top:auto;bottom:3px;transform:rotate(-45deg)}
            .header [data-action*="next"]>i:after{top:3px;transform:rotate(45deg)}
            .header.active [data-action]{opacity:1}
            
            
            [data-theme="jan"]{background-color:#90CAF9}
            [data-theme="jan"] .row.head{color:#1E88E5}
            [data-theme="jan"] .header .text,
            [data-theme="jan"] .table .row .cell.active span{background-color:#1E88E5}
            
            [data-theme="feb"]{background-color:#81D4FA}
            [data-theme="feb"] .row.head{color:#039BE5}
            [data-theme="feb"] .header .text,
            [data-theme="feb"] .table .row .cell.active span{background-color:#039BE5}
            
            [data-theme="mar"]{background-color:#80CBC4}
            [data-theme="mar"] .row.head{color:#00897B}
            [data-theme="mar"] .header .text,
            [data-theme="mar"] .table .row .cell.active span{background-color:#00897B}
            
            [data-theme="apr"]{background-color:#C5E1A5}
            [data-theme="apr"] .row.head{color:#7CB342}
            [data-theme="apr"] .header .text,
            [data-theme="apr"] .table .row .cell.active span{background-color:#7CB342}
            
            [data-theme="may"]{background-color:#FFE082}
            [data-theme="may"] .row.head{color:#FFB300}
            [data-theme="may"] .header .text,
            [data-theme="may"] .table .row .cell.active span{background-color:#FFB300}
            
            [data-theme="jun"]{background-color:#FFAB91}
            [data-theme="jun"] .row.head{color:#F4511E}
            [data-theme="jun"] .header .text,
            [data-theme="jun"] .table .row .cell.active span{background-color:#F4511E}
            
            [data-theme="jul"]{background-color:#CE93D8}
            [data-theme="jul"] .row.head{color:#8E24AA}
            [data-theme="jul"] .header .text,
            [data-theme="jul"] .table .row .cell.active span{background-color:#8E24AA}
            
            [data-theme="aug"]{background-color:#B39DDB}
            [data-theme="aug"] .row.head{color:#5E35B1}
            [data-theme="aug"] .header .text,
            [data-theme="aug"] .table .row .cell.active span{background-color:#5E35B1}
            
            [data-theme="sep"]{background-color:#EF9A9A}
            [data-theme="sep"] .row.head{color:#E53935}
            [data-theme="sep"] .header .text,
            [data-theme="sep"] .table .row .cell.active span{background-color:#E53935}
            
            [data-theme="oct"]{background-color:#CE93D8}
            [data-theme="oct"] .row.head{color:#8E24AA}
            [data-theme="oct"] .header .text,
            [data-theme="oct"] .table .row .cell.active span{background-color:#8E24AA}
            
            [data-theme="nov"]{background-color:#BCAAA4}
            [data-theme="nov"] .row.head{color:#6D4C41}
            [data-theme="nov"] .header .text,
            [data-theme="nov"] .table .row .cell.active span{background-color:#6D4C41}
            
            [data-theme="dec"]{background-color:#B0BEC5}
            [data-theme="dec"] .row.head{color:#546E7A}
            [data-theme="dec"] .header .text,
            [data-theme="dec"] .table .row .cell.active span{background-color:#546E7A}
            </style>
    
</head>
    <body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
        <!-- Setting Panel -->
        <div class="ms-toggler ms-settings-toggle ms-d-block-lg">
            <i class="flaticon-gear"></i>
        </div>
        <div class="ms-settings-panel ms-d-block-lg">
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <h4 class="section-title">Customize</h4>
                    <div>
                        <label class="ms-switch">
                        <input type="checkbox" id="dark-mode">
                        <span class="ms-switch-slider round"></span>
                        </label>
                        <span> Dark Mode </span>
                    </div>

                </div>
                <div class="col-xl-4 col-md-4">
                    <h4 class="section-title">Keyboard Shortcuts</h4>
                    <p class="ms-directions mb-0"><code>Esc</code> Close Quick Bar</p>
                    <p class="ms-directions mb-0"><code>Alt + (1 -> 6)</code> Open Quick Bar Tab</p>
                    <p class="ms-directions mb-0"><code>Alt + Q</code> Enable Quick Bar Configure Mode</p>
                </div>
            </div>
        </div>
        <!-- Preloader -->
        <div id="preloader-wrap">
            <div class="spinner spinner-8">
                <div class="ms-circle1 ms-child"></div>
                <div class="ms-circle2 ms-child"></div>
                <div class="ms-circle3 ms-child"></div>
                <div class="ms-circle4 ms-child"></div>
                <div class="ms-circle5 ms-child"></div>
                <div class="ms-circle6 ms-child"></div>
                <div class="ms-circle7 ms-child"></div>
                <div class="ms-circle8 ms-child"></div>
                <div class="ms-circle9 ms-child"></div>
                <div class="ms-circle10 ms-child"></div>
                <div class="ms-circle11 ms-child"></div>
                <div class="ms-circle12 ms-child"></div>
            </div>
        </div>
        <!-- Overlays -->
        <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
        <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>
        <!-- Sidebar Navigation Left -->
        <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
            <!-- Logo -->
            <div class="logo-sn ms-d-block-lg">
                <a class="pl-0 ml-0 text-center" href="../../index-2.html"> <img src="../../assets/img/medjestic-logo-216x62.png" alt="logo"> </a>
                <a href="#" class="text-center ms-logo-img-link"> <img src="../../assets/img/dashboard/me.png" alt="logo"></a>
                <h5 class="text-center text-white mt-2">Mariem NACIB</h5>
                <h6 class="text-center text-white mb-3">Admin</h6>
            </div>
            <!-- Navigation -->
            <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
                <!-- Dashboard -->
                <li class="menu-item">
                    <a href="#" class="has-chevron" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                    <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
                    </a>
                    <ul id="dashboard" class="collapse" aria-labelledby="dashboard" data-parent="#side-nav-accordion">
                        <li> <a href="../../index-2.html">Medjestic</a> </li>
                    </ul>
                </li>
                <!-- /Dashboard -->
                <!-- Doctor -->
                <li class="menu-item">
                    <a href="#" class="has-chevron" data-toggle="collapse" data-target="#doctor" aria-expanded="false" aria-controls="doctor">
                    <span><i class="fas fa-stethoscope"></i>Doctor</span>
                    </a>
                    <ul id="doctor" class="collapse" aria-labelledby="doctor" data-parent="#side-nav-accordion">
                        <li> <a href="../doctor/add-doctor.html">Add Doctor</a> </li>
                        <li> <a href="../doctor/doctor-list.html">Doctor List</a> </li>
                    </ul>
                </li>
                <!-- Doctor -->
                <!-- Patient -->
                <li class="menu-item">
                    <a href="#" class="has-chevron" data-toggle="collapse" data-target="#patient" aria-expanded="false" aria-controls="patient">
                    <span><i class="fas fa-user"></i>Patient</span>
                    </a>
                    <ul id="patient" class="collapse" aria-labelledby="patient" data-parent="#side-nav-accordion">
                        <li> <a href="../patient/add-patient.html">Add Patient</a> </li>
                        <li> <a href="../patient/patient-list.html">Patient List</a> </li>
                    </ul>
                </li>
                <!-- /Patient -->
                <!-- Department -->
                <li class="menu-item">
                    <a href="#" class="has-chevron" data-toggle="collapse" data-target="#department" aria-expanded="false" aria-controls="department">
                    <span><i class="fas fa-sitemap"></i>Department</span>
                    </a>
                    <ul id="department" class="collapse" aria-labelledby="department" data-parent="#side-nav-accordion">
                        <li> <a href="../department/add-department.html">Add Department</a> </li>
                        <li> <a href="../department/department-list.html">Department List</a> </li>
                    </ul>
                </li>
                <!-- /Department -->
                <!-- Schedule -->
                <li class="menu-item">
                    <a href="#" class="has-chevron" data-toggle="collapse" data-target="#schedule" aria-expanded="false" aria-controls="schedule">
                    <span><i class="fas fa-list-alt"></i>Doctor Schedule</span>
                    </a>
                    <ul id="schedule" class="collapse" aria-labelledby="schedule" data-parent="#side-nav-accordion">
                        <li> <a href="add-schedule.html">Ajouter un évenement</a> </li>
                        <li> <a href="afficher.php">afficher tous les évenements</a> </li>
                        <li> <a href="calandar.html">Consulter tous les évenements dans votre calendrier</a> </li>
                        <li> <a href="afficherTri.php">Trier les évenements</a> </li>
                        <li> <a href="chercher.php">Chercher un évenement</a> </li>
                    </ul>
                </li>
                <!-- /Schedule -->
                <!-- Appointment -->
                <li class="menu-item">
                    <a href="#" class="has-chevron" data-toggle="collapse" data-target="#appointment" aria-expanded="false" aria-controls="appointment">
                    <span><i class="far fa-check-square"></i>Appointment</span>
                    </a>
                    <ul id="appointment" class="collapse" aria-labelledby="appointment" data-parent="#side-nav-accordion">
                        <li> <a href="../appointment/add-appointment.html">Add Appointment</a> </li>
                        <li> <a href="../appointment/appointment-list.html">Appointment List</a> </li>
                    </ul>
                </li>
                <!-- /Appointment -->
                <!-- Payment -->
                <li class="menu-item">
                    <a href="#" class="has-chevron" data-toggle="collapse" data-target="#payment" aria-expanded="false" aria-controls="payment">
                    <span><i class="fas fa-credit-card"></i>Payment</span>
                    </a>
                    <ul id="payment" class="collapse" aria-labelledby="payment" data-parent="#side-nav-accordion">
                        <li> <a href="../payment/add-payment.html">Add Payment</a> </li>
                        <li> <a href="../payment/payment-list.html">Payment List</a> </li>
                        <li> <a href="../payment/payment-invoice.html">Payment Invoice</a> </li>
                    </ul>
                </li>
                <!-- /Payment -->
                <!-- Report -->
                <li class="menu-item">
                    <a href="#" class="has-chevron" data-toggle="collapse" data-target="#report" aria-expanded="false" aria-controls="report">
                    <span><i class="fas fa-file-alt"></i>Report</span>
                    </a>
                    <ul id="report" class="collapse" aria-labelledby="report" data-parent="#side-nav-accordion">
                        <li> <a href="../report/patient-report.html">Patient Wise Report</a> </li>
                        <li> <a href="../report/doctor-report.html">Doctor Wise Report</a> </li>
                        <li> <a href="../report/total-report.html">Total Report</a> </li>
                    </ul>
                </li>
                <!-- /Report -->
                <!-- Human Resource -->
                <li class="menu-item">
                    <a href="#" class="has-chevron" data-toggle="collapse" data-target="#human-resource" aria-expanded="false" aria-controls="human-resource">
                    <span><i class="far fa-user-circle"></i>Human Resource</span>
                    </a>
                    <ul id="human-resource" class="collapse" aria-labelledby="human-resource" data-parent="#side-nav-accordion">
                        <li> <a href="../human-resource/add-employee.html">Add Employee</a> </li>
                        <li> <a href="../human-resource/employee-list.html">Employee List</a> </li>
                        <li> <a href="../human-resource/add-nurse.html">Add Nurse</a> </li>
                        <li> <a href="../human-resource/nurse-list.html">Nurse List</a> </li>
                        <li> <a href="../human-resource/add-pharmacist.html">Add Pharmacist</a> </li>
                        <li> <a href="../human-resource/pharmacist-list.html">Pharmacist List</a> </li>
                        <li> <a href="../human-resource/add-representative.html">Add Representative</a> </li>
                        <li> <a href="../human-resource/representative-list.html">Representative List</a> </li>
                    </ul>
                </li>
                <!-- /Human Resource -->
                <!-- Bed -->
                <li class="menu-item">
                    <a href="#" class="has-chevron" data-toggle="collapse" data-target="#bed" aria-expanded="false" aria-controls="bed">
                    <span><i class="fas fa-bed"></i>Bed Manager</span>
                    </a>
                    <ul id="bed" class="collapse" aria-labelledby="bed" data-parent="#side-nav-accordion">
                        <li> <a href="../bed-manager/add-bed.html">Add Bed</a> </li>
                        <li> <a href="../bed-manager/bed-list.html">Bed List</a> </li>
                    </ul>
                </li>
                <!-- /Bed-->
                <!-- Notice -->
                <li class="menu-item">
                    <a href="#" class="has-chevron" data-toggle="collapse" data-target="#notice" aria-expanded="false" aria-controls="notice">
                    <span><i class="far fa-file-alt"></i>Notice</span>
                    </a>
                    <ul id="notice" class="collapse" aria-labelledby="notice" data-parent="#side-nav-accordion">
                        <li> <a href="../notice/add-notice.html">Add Notice</a> </li>
                        <li> <a href="../notice/notice-list.html">Notice List</a> </li>
                    </ul>
                </li>
                <!-- /Notice -->
                <li class="menu-item">
                    <a href="../widgets.html">
                    <span><i class="material-icons fs-16">widgets</i>Widgets</span>
                    </a>
                </li>
                <!-- Basic UI Elements -->
                <li class="menu-item">
                    <a href="#" class="has-chevron" data-toggle="collapse" data-target="#basic-elements" aria-expanded="false" aria-controls="basic-elements">
                    <span><i class="material-icons fs-16">filter_list</i>Basic UI Elements</span>
                    </a>
                    <ul id="basic-elements" class="collapse" aria-labelledby="basic-elements" data-parent="#side-nav-accordion">
                        <li> <a href="../ui-basic/accordions.html">Accordions</a> </li>
                        <li> <a href="../ui-basic/alerts.html">Alerts</a> </li>
                        <li> <a href="../ui-basic/buttons.html">Buttons</a> </li>
                        <li> <a href="../ui-basic/breadcrumbs.html">Breadcrumbs</a> </li>
                        <li> <a href="../ui-basic/badges.html">Badges</a> </li>
                        <li> <a href="../ui-basic/cards.html">Cards</a> </li>
                        <li> <a href="../ui-basic/progress-bars.html">Progress Bars</a> </li>
                        <li> <a href="../ui-basic/preloaders.html">Pre-loaders</a> </li>
                        <li> <a href="../ui-basic/pagination.html">Pagination</a> </li>
                        <li> <a href="../ui-basic/tabs.html">Tabs</a> </li>
                        <li> <a href="../ui-basic/typography.html">Typography</a> </li>
                    </ul>
                </li>
                <!-- /Basic UI Elements -->
                <!-- Advanced UI Elements -->
                <li class="menu-item">
                    <a href="#" class="has-chevron" data-toggle="collapse" data-target="#advanced-elements" aria-expanded="false" aria-controls="advanced-elements">
                    <span><i class="material-icons fs-16">code</i>Advanced UI Elements</span>
                    </a>
                    <ul id="advanced-elements" class="collapse" aria-labelledby="advanced-elements" data-parent="#side-nav-accordion">
                        <li> <a href="../ui-advanced/draggables.html">Draggables</a> </li>
                        <li> <a href="../ui-advanced/sliders.html">Sliders</a> </li>
                        <li> <a href="../ui-advanced/modals.html">Modals</a> </li>
                        <li> <a href="../ui-advanced/rating.html">Rating</a> </li>
                        <li> <a href="../ui-advanced/tour.html">Tour</a> </li>
                        <li> <a href="../ui-advanced/cropper.html">Cropper</a> </li>
                        <li> <a href="../ui-advanced/range-slider.html">Range Slider</a> </li>
                    </ul>
                </li>
                <!-- /Advanced UI Elements -->
                <li class="menu-item">
                    <a href="../animation.html">
                    <span><i class="material-icons fs-16">format_paint</i>Animations</span>
                    </a>
                </li>
                <!-- Form Elements -->
                <li class="menu-item">
                    <a href="#" class="has-chevron" data-toggle="collapse" data-target="#form-elements" aria-expanded="false" aria-controls="form-elements">
                    <span><i class="material-icons fs-16">input</i>Form Elements</span>
                    </a>
                    <ul id="form-elements" class="collapse" aria-labelledby="form-elements" data-parent="#side-nav-accordion">
                        <li> <a href="../form/form-elements.html">Form Elements</a> </li>
                        <li> <a href="../form/form-layout.html">Form Layouts</a> </li>
                        <li> <a href="../form/form-validation.html">Form Validation</a> </li>
                        <li> <a href="../form/form-wizard.html">Form Wizard</a> </li>
                    </ul>
                </li>
                <!-- /Form Elements -->
                <!-- Charts -->
                <li class="menu-item">
                    <a href="#" class="has-chevron" data-toggle="collapse" data-target="#charts" aria-expanded="false" aria-controls="charts">
                    <span><i class="material-icons fs-16">equalizer</i>Charts</span>
                    </a>
                    <ul id="charts" class="collapse" aria-labelledby="charts" data-parent="#side-nav-accordion">
                        <li> <a href="../charts/chartjs.html">Chart JS</a> </li>
                        <li> <a href="../charts/morris-charts.html">Morris Chart</a> </li>
                    </ul>
                </li>
                <!-- /Charts -->
                <!-- Tables -->
                <li class="menu-item">
                    <a href="#" class="has-chevron" data-toggle="collapse" data-target="#tables" aria-expanded="false" aria-controls="tables">
                    <span><i class="material-icons fs-16">tune</i>Tables</span>
                    </a>
                    <ul id="tables" class="collapse" aria-labelledby="tables" data-parent="#side-nav-accordion">
                        <li> <a href="../tables/basic-tables.html">Basic Tables</a> </li>
                        <li> <a href="../tables/data-tables.html">Data tables</a> </li>
                    </ul>
                </li>
                <!-- /Tables -->
                <!-- Popups -->
                <li class="menu-item">
                    <a href="#" class="has-chevron" data-toggle="collapse" data-target="#popups" aria-expanded="false" aria-controls="popups">
                    <span><i class="material-icons fs-16">message</i>Popups</span>
                    </a>
                    <ul id="popups" class="collapse" aria-labelledby="popups" data-parent="#side-nav-accordion">
                        <li> <a href="../popups/sweet-alerts.html">Sweet Alerts</a> </li>
                        <li> <a href="../popups/toast.html">Toast</a> </li>
                    </ul>
                </li>
                <!-- /Popups -->
                <!-- Icons -->
                <li class="menu-item">
                    <a href="#" class="has-chevron" data-toggle="collapse" data-target="#icons" aria-expanded="false" aria-controls="icons">
                    <span><i class="material-icons fs-16">border_color</i>Icons</span>
                    </a>
                    <ul id="icons" class="collapse" aria-labelledby="icons" data-parent="#side-nav-accordion">
                        <li> <a href="../icons/fontawesome.html">Fontawesome</a> </li>
                        <li> <a href="../icons/flaticons.html">Flaticons</a> </li>
                        <li> <a href="../icons/materialize.html">Materialize</a> </li>
                    </ul>
                </li>
                <!-- /Icons -->
                <!-- Maps -->
                <li class="menu-item">
                    <a href="#" class="has-chevron" data-toggle="collapse" data-target="#maps" aria-expanded="false" aria-controls="maps">
                    <span><i class="material-icons fs-16">map</i>Maps</span>
                    </a>
                    <ul id="maps" class="collapse" aria-labelledby="maps" data-parent="#side-nav-accordion">
                        <li> <a href="../maps/google-maps.html">Google Maps</a> </li>
                        <li> <a href="../maps/vector-maps.html">Vector Maps</a> </li>
                    </ul>
                </li>
                <!-- /Maps -->
                <!-- Pages -->
                <li class="menu-item">
                    <a href="#" class="has-chevron" data-toggle="collapse" data-target="#pages" aria-expanded="false" aria-controls="pages">
                    <span><i class="material-icons fs-16">insert_drive_file</i>Pages</span>
                    </a>
                    <ul id="pages" class="collapse" aria-labelledby="pages" data-parent="#side-nav-accordion">
                        <li class="menu-item">
                            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#authentication" aria-expanded="false" aria-controls="authentication">Authentication</a>
                            <ul id="authentication" class="collapse" aria-labelledby="authentication" data-parent="#pages">
                                <li> <a href="../prebuilt-pages/default-login.html">Default Login</a> </li>
                                <li> <a href="../prebuilt-pages/modal-login.html">Modal Login</a> </li>
                                <li> <a href="../prebuilt-pages/default-register.html">Default Registration</a> </li>
                                <li> <a href="../prebuilt-pages/modal-register.html">Modal Registration</a> </li>
                                <li> <a href="../prebuilt-pages/lock-screen.html">Lock Screen</a> </li>
                            </ul>
                        </li>
                        <li> <a href="../prebuilt-pages/coming-soon.html">Coming Soon</a> </li>
                        <li> <a href="../prebuilt-pages/error.html">Error Page</a> </li>
                        <li class="menu-item"> <a href="../prebuilt-pages/faq.html"> FAQ </a> </li>
                        <li class="menu-item"> <a href="../prebuilt-pages/portfolio.html"> Portfolio </a> </li>
                        <li class="menu-item"> <a href="../prebuilt-pages/user-profile.html"> User Profile </a> </li>
                        <li class="menu-item"> <a href="../prebuilt-pages/invoice.html"> Invoice </a> </li>
                    </ul>
                </li>
                <!-- /Pages -->
                <!-- Bonus Pages -->
                <li class="menu-item">
                    <a href="#" class="has-chevron" data-toggle="collapse" data-target="#bonus" aria-expanded="false">
                    <span><i class="material-icons fs-16">dashboard</i>Bonus Pages </span>
                    </a>
                    <ul id="bonus" class="collapse"  data-parent="#side-nav-accordion">
                        <li> <a href="../dashboard/web-analytics.html"> Web Analytics </a> </li>
                        <li> <a href="../dashboard/social-media.html">Social Media Management</a> </li>
                        <li> <a href="../dashboard/project-management.html">Department Management</a> </li>
                        <li> <a href="../dashboard/client-management.html">Patient Management</a> </li>
                    </ul>
                </li>
                <!-- /Bonus Pages -->
                <!-- Apps -->
                <li class="menu-item">
                    <a href="#" class="has-chevron" data-toggle="collapse" data-target="#apps" aria-expanded="false" aria-controls="apps">
                    <span><i class="material-icons fs-16">phone_iphone</i>Apps</span>
                    </a>
                    <ul id="apps" class="collapse" aria-labelledby="apps" data-parent="#side-nav-accordion">
                        <li> <a href="../apps/chat.html">Chat</a> </li>
                        <li> <a href="../apps/email.html">Email</a> </li>
                        <li> <a href="../apps/to-do-list.html">To-do List</a> </li>
                    </ul>
                </li>
                <!-- /Apps -->
            </ul>
        </aside>
        <!-- Sidebar Right -->
        <aside id="ms-recent-activity" class="side-nav fixed ms-aside-right ms-scrollable">
            <div class="ms-aside-header">
                <ul class="nav nav-tabs tabs-bordered d-flex nav-justified mb-3" role="tablist">
                    <li role="presentation" class="fs-12"><a href="#activityLog" aria-controls="activityLog" class="active" role="tab" data-toggle="tab"> Activity Log</a></li>
                    <li role="presentation" class="fs-12"><a href="#recentPosts" aria-controls="recentPosts" role="tab" data-toggle="tab"> Settings </a></li>
                    <li><button type="button" class="close ms-toggler text-center" data-target="#ms-recent-activity" data-toggle="slideRight"><span aria-hidden="true">&times;</span></button></li>
                </ul>
            </div>
            <div class="ms-aside-body">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active fade show" id="activityLog">
                        <ul class="ms-activity-log">
                            <li>
                                <div class="ms-btn-icon btn-pill icon btn-light">
                                    <i class="flaticon-gear"></i>
                                </div>
                                <h6>Update 1.0.0 Pushed</h6>
                                <span> <i class="material-icons">event</i>1 January, 2019</span>
                                <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                            </li>
                            <li>
                                <div class="ms-btn-icon btn-pill icon btn-success">
                                    <i class="flaticon-tick-inside-circle"></i>
                                </div>
                                <h6>Profile Updated</h6>
                                <span> <i class="material-icons">event</i>4 March, 2018</span>
                                <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                            </li>
                            <li>
                                <div class="ms-btn-icon btn-pill icon btn-warning">
                                    <i class="flaticon-alert-1"></i>
                                </div>
                                <h6>Your payment is due</h6>
                                <span> <i class="material-icons">event</i>1 January, 2019</span>
                                <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                            </li>
                            <li>
                                <div class="ms-btn-icon btn-pill icon btn-danger">
                                    <i class="flaticon-alert"></i>
                                </div>
                                <h6>Database Error</h6>
                                <span> <i class="material-icons">event</i>4 March, 2018</span>
                                <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                            </li>
                            <li>
                                <div class="ms-btn-icon btn-pill icon btn-info">
                                    <i class="flaticon-information"></i>
                                </div>
                                <h6>Checkout what's Trending</h6>
                                <span> <i class="material-icons">event</i>1 January, 2019</span>
                                <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                            </li>
                            <li>
                                <div class="ms-btn-icon btn-pill icon btn-secondary">
                                    <i class="flaticon-diamond"></i>
                                </div>
                                <h6>Your Dashboard is ready</h6>
                                <span> <i class="material-icons">event</i>4 March, 2018</span>
                                <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-primary d-block"> View All </a>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="recentPosts">
                        <h6>General Settings</h6>
                        <div class="ms-form-group">
                            <span class="ms-option-name fs-14">Location Tracking</span>
                            <label class="ms-switch float-right">
                            <input type="checkbox">
                            <span class="ms-switch-slider round"></span>
                            </label>
                        </div>
                        <div class="ms-form-group">
                            <span class="ms-option-name fs-14">Allow Notifications</span>
                            <label class="ms-switch float-right">
                            <input type="checkbox">
                            <span class="ms-switch-slider round"></span>
                            </label>
                        </div>
                        <div class="ms-form-group">
                            <span class="ms-option-name fs-14">Allow Popups</span>
                            <label class="ms-switch float-right">
                            <input type="checkbox" checked>
                            <span class="ms-switch-slider round"></span>
                            </label>
                        </div>
                        <h6>Log Settings</h6>
                        <div class="ms-form-group">
                            <span class="ms-option-name fs-14">Enable Logging</span>
                            <label class="ms-switch float-right">
                            <input type="checkbox" checked>
                            <span class="ms-switch-slider round"></span>
                            </label>
                        </div>
                        <div class="ms-form-group">
                            <span class="ms-option-name fs-14">Audit Logs</span>
                            <label class="ms-switch float-right">
                            <input type="checkbox">
                            <span class="ms-switch-slider round"></span>
                            </label>
                        </div>
                        <div class="ms-form-group">
                            <span class="ms-option-name fs-14">Error Logs</span>
                            <label class="ms-switch float-right">
                            <input type="checkbox" checked>
                            <span class="ms-switch-slider round"></span>
                            </label>
                        </div>
                        <h6>Advanced Settings</h6>
                        <div class="ms-form-group">
                            <span class="ms-option-name fs-14">Enable Logging</span>
                            <label class="ms-switch float-right">
                            <input type="checkbox" checked>
                            <span class="ms-switch-slider round"></span>
                            </label>
                        </div>
                        <div class="ms-form-group">
                            <span class="ms-option-name fs-14">Audit Logs</span>
                            <label class="ms-switch float-right">
                            <input type="checkbox">
                            <span class="ms-switch-slider round"></span>
                            </label>
                        </div>
                        <div class="ms-form-group">
                            <span class="ms-option-name fs-14">Error Logs</span>
                            <label class="ms-switch float-right">
                            <input type="checkbox" checked>
                            <span class="ms-switch-slider round"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="body-content">
            <!-- Navigation Bar -->
            <nav class="navbar ms-navbar">
              <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
                <span class="ms-toggler-bar bg-white"></span>
                <span class="ms-toggler-bar bg-white"></span>
                <span class="ms-toggler-bar bg-white"></span>
              </div>
              <div class="logo-sn logo-sm ms-d-block-sm">
                <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="../../index-2.html"><img src="../../assets/img/medjestic-logo-84x41.png" alt="logo"> </a>
              </div>
              <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">


                <li class="ms-nav-item dropdown">
                  <a href="#" class="text-disabled ms-has-notification" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-bell"></i></a>
                  <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="notificationDropdown">
                    <li class="dropdown-menu-header">
                      <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Notifications</span></h6>
                      <span class="badge badge-pill badge-info">4 New</span>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="ms-scrollable ms-dropdown-list">
                      <a class="media p-2" href="#">
                        <div class="media-body">
                          <span>12 ways to improve your crypto dashboard</span>
                          <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 30 seconds ago</p>
                        </div>
                      </a>
                      <a class="media p-2" href="#">
                        <div class="media-body">
                          <span>You have newly registered users</span>
                          <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 45 minutes ago</p>
                        </div>
                      </a>
                      <a class="media p-2" href="#">
                        <div class="media-body">
                          <span>Your account was logged in from an unauthorized IP</span>
                          <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 2 hours ago</p>
                        </div>
                      </a>
                      <a class="media p-2" href="#">
                        <div class="media-body">
                          <span>An application form has been submitted</span>
                          <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 1 day ago</p>
                        </div>
                      </a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-menu-footer text-center">
                      <a href="#">View all Notifications</a>
                    </li>
                  </ul>
                </li>
                <li class="ms-nav-item ms-nav-user dropdown">
                  <a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="ms-user-img ms-img-round float-right" src="../../assets/img/dashboard/me.png" alt="people"> </a>
                  <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
                    <li class="dropdown-menu-header">
                      <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Welcome, Dr NACIB</span></h6>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="ms-dropdown-list">
                      <a class="media fs-14 p-2" href="../prebuilt-pages/user-profile.html"> <span><i class="flaticon-user mr-2"></i> Profile</span> </a>
                      <a class="media fs-14 p-2" href="../apps/email.html"> <span><i class="flaticon-mail mr-2"></i> Inbox</span> <span class="badge badge-pill badge-info">3</span> </a>
                      <a class="media fs-14 p-2" href="../prebuilt-pages/user-profile.html"> <span><i class="flaticon-gear mr-2"></i> Account Settings</span> </a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-menu-footer">
                      <a class="media fs-14 p-2" href="../prebuilt-pages/lock-screen.html"> <span><i class="flaticon-security mr-2"></i> Lock</span> </a>
                    </li>
                    <li class="dropdown-menu-footer">
                      <a class="media fs-14 p-2" href="../prebuilt-pages/default-login.html"> <span><i class="flaticon-shut-down mr-2"></i> Logout</span> </a>
                    </li>
                  </ul>
                </li>
              </ul>
              <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options">
                <span class="ms-toggler-bar bg-white"></span>
                <span class="ms-toggler-bar bg-white"></span>
                <span class="ms-toggler-bar bg-white"></span>
              </div>
            </nav>
            <!-- Body Content Wrapper -->
            <div class="ms-content-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb pl-0">
                                <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Doctor Schedule</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Ajouter un évenement</li>
                            </ol>
                        </nav>
                    </div>
<div class="col-xl-12 col-md-12">
    <!-- Notes Modal -->
        <div class="modal fade" id="notes-modal" tabindex="-1" role="dialog" aria-labelledby="notes-modal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-secondary">
                        <h5 class="modal-title has-icon text-white" id="NoteModal">New Note</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="ms-form-group">
                                <label>Note Title</label>
                                <input type="text" class="form-control" name="note-title" value="">
                            </div>
                            <div class="ms-form-group">
                                <label>Note Description</label>
                                <textarea class="form-control" name="note-description"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add Note</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <form name="e" method="POST" action="ajoutEvent.php">
            <div id='cssmenu'>
          <ul>     
             <li class='active'><a href='#'>Ajouter un évenement</a></li>
             <li><a href='afficher.php'>afficher tous les évenements</a></li>
             <li><a href='participant.php'>Ajouter un Participant</a></li>
             <li><a href='afficherEventri.php'>Trier les évenements</a></li>
             <li><a href='recherche.php'>Chercher un évenement</a></li>


          </ul>
          </div>
                    
          <div class="controls">
              <label class="control-label">Nom de l'évenement</label>
              <input class=" form-control" style="width: 45%" id="nom_event" type="text" name="nom_event">
              <div class="error-message"></div>
              <p>
          </div>
          <br>
          <div class="form-group">
          <label for="pays">Lieu <span class="controls"></label>               
          <select class=" form-control" style="width: 100%" class="controls" name="lieu_event" id="lieu_event">
              <option>Select un lieu</option>    
              <option value="Sfax">Sfax</option>    
              <option value="Ariana">Ariana</option>    
              <option value="Cité ghazala">Cité ghazala</option>    
              <option value="Soukra">Soukra </option>    
              <option value="Ben Arous">Ben Arous</option>    
              <option value="Nabeul">Nabeul</option>    
              <option value="Gabes">Gabes</option>    
              <option value="Zaghouan">Zaghouan</option>
              <option value="Bizerte">Bizerte</option>
              <option value="Béja">Béja</option>
              <option value="Gafsa">Gafsa</option>
              <option value="Djerba">Bjerba</option>
              <option value="sousse">Sousse</option>
              <option value="Monastir">Monastir</option>
              <option value="Tozeur">Tozeur</option>  
          </select>
           <div class="error-message"></div>
          </div>
          
          <div>
            <label for="pays">Date debut</label>
          <input type="date" id="date_debut" name="date_debut" min="2019-01-01" class=" form-control" style="width: 30%" />
           <div class="error-message"></div>
          </div>
          <br>
          
          <div>
            <label for="pays">Date fin</label>
          <input type="date" id="fin" name="date_fin" min="2019-01-01" class=" form-control" style="width: 30%" />
           <div class="error-message"></div>
          </div>
          <br>
          
          <div>
          <input type="submit" value="Valider" name="ajouter" class="btn btn-primary" id="ajouter"/>
          <input type="button" value="Reset" class="btn btn-primary" onclick="reset()"/>
          </div>
          
              <p>
          </div>
          <br/>
          
          
              </form>
                    </div>
                    <!-- /col-lg-6 -->
                  </div>
                  <!--/ row -->
                </section>
                <!-- /wrapper -->
              </section>
              <!-- /MAIN CONTENT -->
              <!--main content end-->
              <!--footer start-->
             
            </section>


            <?PHP
            include "../../../controller/eventC.php";
            include "../../../config.php";
            
            $event1C=new EventC();
            $listeEvent=$event1C->trierEvents();
            
            //var_dump($listeEmployes->fetchAll());
            ?>
            <div class="row">
            <div class="col-md-12">
            <div class="content-panel">
            <h4><i class="fa fa-angle-right"></i>Les évenements :</h4>
            <hr>
            <table class="table">
            
            <thead>
            <tr>
              <th>Nom d'évenement</th>
              <th>Lieu d'évenement</th>
              <th>Date de début d'évenement</th>
              <th>Date de fin d'évenement</th>
              <th><i class="fas fa-trash-alt"></i></th>
              <th><i class="fas fa-edit"></i></th>
            </tr>
            </thead>
            
            <?PHP
            foreach($listeEvent as $row){
            
                ?>
              <tbody>
              <tr>
                <td><?PHP echo $row['nom_event']; ?></td>
                <td><?PHP echo $row['lieu_event']; ?></td>
                
                <td><?PHP echo $row['date_debut']; ?></td>
                <td><?PHP echo $row['date_fin']; ?></td>
            
                <td>
                      <form method="POST" action="supprimerEvent.php"><a href='ajoutEvent.html'><input type="submit" name="supprimer" value="supprimer"></a>
                          <input type="hidden" value="<?PHP echo $row['nom_event']; ?>" name="nom_event">
                         </form>
                    </td>
              <td><a href="modifierEvent.php?id_event=<?PHP echo $row['id_event']; ?>">Modifier</a></td>
              </tr>
              </tbody>
            <?php
            }
            ?>
            </table>
            </div>
            </div>
            </div>
            
                <p>
            </div>
            <br/>
            

            <!-- js placed at the end of the document so the pages load faster -->
            <script src="lib/jquery/jquery.min.js"></script>
          <script>
          $(function(){
               $("#ajouter").click(function()
               {
                 var today = new Date();
          var dd = today.getDate();
          
          var mm = today.getMonth()+1; 
          var yyyy = today.getFullYear();
          if(dd<10) 
          {
              dd='0'+dd;
          } 
          
          if(mm<10) 
          {
              mm='0'+mm;
          } 
          today = yyyy+'-'+mm+'-'+dd;
          var inputDateText=$("#fin").val();
           var inputToDate = Date.parse(inputDateText);
           var todayToDate = Date.parse(today);    
               valid=true;
                   if($("#nom_event").val() == ""){
                       $("#nom_event").next(".error-message").fadeIn().text("Veuillez entrer nom");
                       valid= false;
                   }
                   else if(!$("#nom_event").val().match(/^[a-z]+$/i))
                   {
                  $("#nom_event").next(".error-message").fadeIn().text("champ alphabetique");
                       valid= false;
                   }
                   else{
                    $("#nom_event").next(".error-message").fadeOut();
                   }
          if($("#lieu_event").val()== "Select un lieu_event"){
                       $("#lieu_event").next(".error-message").fadeIn().text("choisir un lieu_event");
                       valid= false;
                   }
                    else{
                    $("#lieu_event").next(".error-message").fadeOut();
                   }
                 if($("#fin").val()== ""){
                       $("#fin").next(".error-message").fadeIn().text("choisir date");
                       valid= false;
                   }
                  else if(inputToDate < todayToDate)
                   {
                  $("#fin").next(".error-message").fadeIn().text("date earlier than today");
                       valid= false;
                   }
                   
                    else{
                    $("#fin").next(".error-message").fadeOut();
                   }  
          
          return valid;
               }
                   );
               });
          </script>
                  <div class="calendar">
                    <div class="header">
                        <a data-action="prev-month" href="javascript:void(0)" title="Previous Month"><i></i></a>
                        <div class="text" data-render="month-year"></div>
                        <a data-action="next-month" href="javascript:void(0)" title="Next Month"><i></i></a>
                    </div>
                    <div class="months" data-flow="left">
                        <div class="month month-a">
                            <div class="render render-a"></div>
                        </div>
                        <div class="month month-b">
                            <div class="render render-b"></div>
                        </div>
                    </div>
                    <script>
                        var Calendar = function(t) {
                            this.divId = t.RenderID ? t.RenderID : '[data-render="calendar"]', this.DaysOfWeek = t.DaysOfWeek ? t.DaysOfWeek : ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"], this.Months = t.Months ? t.Months : ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
                            var e = new Date;
                            this.CurrentMonth = e.getMonth(), this.CurrentYear = e.getFullYear();
                            var r = t.Format;
                            this.f = "string" == typeof r ? r.charAt(0).toUpperCase() : "M"
                        };
                        Calendar.prototype.nextMonth = function() {
                            11 == this.CurrentMonth ? (this.CurrentMonth = 0, this.CurrentYear = this.CurrentYear + 1) : this.CurrentMonth = this.CurrentMonth + 1, this.divId = '[data-active="false"] .render', this.showCurrent()
                        }, Calendar.prototype.prevMonth = function() {
                            0 == this.CurrentMonth ? (this.CurrentMonth = 11, this.CurrentYear = this.CurrentYear - 1) : this.CurrentMonth = this.CurrentMonth - 1, this.divId = '[data-active="false"] .render', this.showCurrent()
                        }, Calendar.prototype.previousYear = function() {
                            this.CurrentYear = this.CurrentYear - 1, this.showCurrent()
                        }, Calendar.prototype.nextYear = function() {
                            this.CurrentYear = this.CurrentYear + 1, this.showCurrent()
                        }, Calendar.prototype.showCurrent = function() {
                            this.Calendar(this.CurrentYear, this.CurrentMonth)
                        }, Calendar.prototype.checkActive = function() {
                            1 == document.querySelector(".months").getAttribute("class").includes("active") ? document.querySelector(".months").setAttribute("class", "months") : document.querySelector(".months").setAttribute("class", "months active"), "true" == document.querySelector(".month-a").getAttribute("data-active") ? (document.querySelector(".month-a").setAttribute("data-active", !1), document.querySelector(".month-b").setAttribute("data-active", !0)) : (document.querySelector(".month-a").setAttribute("data-active", !0), document.querySelector(".month-b").setAttribute("data-active", !1)), setTimeout(function() {
                                document.querySelector(".calendar .header").setAttribute("class", "header active")
                            }, 200), document.querySelector("body").setAttribute("data-theme", this.Months[document.querySelector('[data-active="true"] .render').getAttribute("data-month")].toLowerCase())
                        }, Calendar.prototype.Calendar = function(t, e) {
                            "number" == typeof t && (this.CurrentYear = t), "number" == typeof t && (this.CurrentMonth = e);
                            var r = (new Date).getDate(),
                                n = (new Date).getMonth(),
                                a = (new Date).getFullYear(),
                                o = new Date(t, e, 1).getDay(),
                                i = new Date(t, e + 1, 0).getDate(),
                                u = 0 == e ? new Date(t - 1, 11, 0).getDate() : new Date(t, e, 0).getDate(),
                                s = "<span>" + this.Months[e] + " &nbsp; " + t + "</span>",
                                d = '<div class="table">';
                            d += '<div class="row head">';
                            for (var c = 0; c < 7; c++) d += '<div class="cell">' + this.DaysOfWeek[c] + "</div>";
                            d += "</div>";
                            for (var h, l = dm = "M" == this.f ? 1 : 0 == o ? -5 : 2, v = (c = 0, 0); v < 6; v++) {
                                d += '<div class="row">';
                                for (var m = 0; m < 7; m++) {
                                    if ((h = c + dm - o) < 1) d += '<div class="cell disable">' + (u - o + l++) + "</div>";
                                    else if (h > i) d += '<div class="cell disable">' + l++ + "</div>";
                                    else {
                                        d += '<div class="cell' + (r == h && this.CurrentMonth == n && this.CurrentYear == a ? " active" : "") + '"><span>' + h + "</span></div>", l = 1
                                    }
                                    c % 7 == 6 && h >= i && (v = 10), c++
                                }
                                d += "</div>"
                            }
                            d += "</div>", document.querySelector('[data-render="month-year"]').innerHTML = s, document.querySelector(this.divId).innerHTML = d, document.querySelector(this.divId).setAttribute("data-date", this.Months[e] + " - " + t), document.querySelector(this.divId).setAttribute("data-month", e)
                        }, window.onload = function() {
                            var t = new Calendar({
                                RenderID: ".render-a",
                                Format: "M"
                            });
                            t.showCurrent(), t.checkActive();
                            var e = document.querySelectorAll(".header [data-action]");
                            for (i = 0; i < e.length; i++) e[i].onclick = function() {
                                if (document.querySelector(".calendar .header").setAttribute("class", "header"), "true" == document.querySelector(".months").getAttribute("data-loading")) return document.querySelector(".calendar .header").setAttribute("class", "header active"), !1;
                                var e;
                                document.querySelector(".months").setAttribute("data-loading", "true"), this.getAttribute("data-action").includes("prev") ? (t.prevMonth(), e = "left") : (t.nextMonth(), e = "right"), t.checkActive(), document.querySelector(".months").setAttribute("data-flow", e), document.querySelector('.month[data-active="true"]').addEventListener("webkitTransitionEnd", function() {
                                    document.querySelector(".months").removeAttribute("data-loading")
                                }), document.querySelector('.month[data-active="true"]').addEventListener("transitionend", function() {
                                    document.querySelector(".months").removeAttribute("data-loading")
                                })
                            }
                        };
                        </script>
                </div>
                <br><br><br>
            
                

        <!--
            <div class="content-body">
           

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Créer Evenement</h4>
                            </div>
                            <div class="card-body">
                                <div class="create-event-form">
                                    <form action="#">
                                        <h5 class="mb-3">Info génerale</h5>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label for="title">titre d'évenements</label>
                                            <input type="title" class="form-control" id="title" placeholder="">
                                            </div>
                                            <div class="form-group col-md-6">
                                            <label for="name">Organisateur</label>
                                            <input type="name" class="form-control" id="name" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputCity">Type</label>
                                                <select id="inputState" class="form-control">
                                                    <option value="19">Appearance or Signing</option>
                                                    <option value="17">Attraction</option>
                                                    <option value="18">Camp, Trip, or Retreat</option>
                                                    <option value="9">Class, Training, or Workshop</option>
                                                    <option value="6">Concert or Performance</option>
                                                    <option value="1">Conference</option>
                                                    <option value="4">Convention</option>
                                                    <option value="8">Dinner or Gala</option>
                                                    <option value="5">Festival </option>
                                                    <option value="14">Game or Competition</option>
                                                    <option value="10">Meeting or Networking Event</option>
                                                    <option value="100">Other</option>
                                                    <option value="11">Party or Social Gathering</option>
                                                    <option value="15">Race or Endurance Event</option>
                                                    <option value="12">Rally</option>
                                                    <option value="7">Screening</option>
                                                    <option value="2">Seminar or Talk</option>
                                                    <option value="16">Tour</option>
                                                    <option value="13">Tournament</option>
                                                    <option value="3">Tradeshow, Consumer Show, or Expo</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                            <label for="inputState">Catégorie</label>
                                            <select id="inputState" class="form-control">
                                                <option value="118">Auto, Boat &amp; Air</option>
                                                <option value="101">Business &amp; Professional</option>
                                                <option value="111">Charity &amp; Causes</option>
                                                <option value="113">Community &amp; Culture</option>
                                                <option value="115">Family &amp; Education</option>
                                                <option value="106">Fashion &amp; Beauty</option>
                                                <option value="104">Film, Media &amp; Entertainment</option>
                                                <option value="110">Food &amp; Drink</option>
                                                <option value="112">Government &amp; Politics</option>
                                                <option value="107">Health &amp; Wellness</option>
                                                <option value="119">Hobbies &amp; Special Interest</option>
                                                <option value="117">Home &amp; Lifestyle</option>
                                                <option value="103">Music</option>
                                                <option value="199">Other</option>
                                                <option value="105">Performing &amp; Visual Arts</option>
                                                <option value="114">Religion &amp; Spirituality</option>
                                                <option value="120">School Activities</option>
                                                <option value="102">Science &amp; Technology</option>
                                                <option value="116">Seasonal &amp; Holiday</option>
                                                <option value="108">Sports &amp; Fitness</option>
                                                <option value="109">Travel &amp; Outdoor</option>
                                            </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputCity">Localisation</label>
                                            <select id="inputState" class="form-control">
                                                <option selected value="online">Evenement en ligne</option>

                                                <option value="tba">To be announced</option>
                                            </select>
                                            </select>
                                        </div>

                                        <h5 class="my-4">Date et horaire</h5>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputCity">Début d'évenements</label>
                                                <input type="datetime" class="form-control" id="datetime" placeholder="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputState">Commance à(heur)</label>
                                                <input type="datetime" class="form-control" id="datetime" placeholder="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputCity">Fin d'évenements</label>
                                                <input type="datetime" class="form-control" id="datetime" placeholder="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputState">Termine à(heur)</label>
                                                <input type="datetime" class="form-control" id="datetime" placeholder="">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                rappelle-moi
                                            </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- SCRIPTS -->
        <!-- Global Required Scripts Start -->
        <script src="../../assets/js/jquery-3.3.1.min.js"></script>
        <script src="../../assets/js/popper.min.js"></script>
        <script src="../../assets/js/bootstrap.min.js"></script>
        <script src="../../assets/js/perfect-scrollbar.js"> </script>
        <script src="../../assets/js/jquery-ui.min.js"> </script>
        <!-- Global Required Scripts End -->
        <!-- Page Specific Scripts Start -->
        <script src="../../assets/js/slick.min.js"> </script>
        <script src="../../assets/js/moment.js"> </script>
        <script src="../../assets/js/jquery.webticker.min.js"> </script>
        <!-- Page Specific Scripts Finish -->
        <!-- Medjestic core JavaScript -->
        <script src="../../assets/js/framework.js"></script>
        <!-- Settings -->
        <script src="../../assets/js/settings.js"></script>
    </body>

<!-- Mirrored from androthemes.com/themes/html/medjestic/pages/doctor-schedule/add-schedule.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Nov 2020 13:45:29 GMT -->
</html>
