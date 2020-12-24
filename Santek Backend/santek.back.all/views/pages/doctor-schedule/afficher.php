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
                <a class="pl-0 ml-0 text-center" href="../../index-2.html"> <img src="../../assets/img/logo.png" alt="logo"> </a>
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
                        <li> <a href="participant.php">Ajouter un participant</a> </li>
                        <li> <a href="afficherTri.php">Trier les évenements</a> </li>
<<<<<<< HEAD
                        <li> <a href="chercher.php">Chercher un évenement</a> </li>
=======
                        <li> <a href="chercher.html">Chercher un évenement</a> </li>
>>>>>>> 4ecf84758bd905c40109806f555a39b9e49d5b94
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
                <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="../../index-2.html"><img src="../../assets/img/logo.png" alt="logo"> </a>
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
<<<<<<< HEAD
<!--------------------------------------------------Ajout------------------------------------------------------------------------->        
=======
<!--------------------------------------------------AFFICHAGE------------------------------------------------------------------------->        
>>>>>>> 4ecf84758bd905c40109806f555a39b9e49d5b94
        <form name="e" method="POST" action="ajoutEvent.php">
                 
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
<<<<<<< HEAD
<!--------------------------------------- Affichage + SUPPRIMER + MODIFIER ------------------------------------------------------>            
=======
<!--------------------------------------- SUPPRIMER + MODIFIER ------------------------------------------------------>            
>>>>>>> 4ecf84758bd905c40109806f555a39b9e49d5b94
            <?PHP
            include "../../../controller/eventC.php";
            include "../../../config.php";
            
            $event1C=new eventC();
            $listeEvent=$event1C->afficherEvents();
            
            //var_dump($listeEmployes->fetchAll());
            ?>
            <div class="row">
            <div class="col-md-12">
            <div class="content-panel">
            <h4><i class="fa fa-angle-right"></i>Les evenements :</h4>
            <hr>
            <table class="table">
            
            <thead>
            <tr>
              <th>Nom</th>
              <th>Lieu</th>
              <th>Date debut</th>
              <th>Date fin</th>
            
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
                      <form method="POST" action="supprimerEvent.php"><a href='afficher.php'><input type="submit" name="supprimer" value="supprimer"></a>
                          <input type="hidden" value="<?PHP echo $row['nom_event']; ?>" name="nom_event">
                         </form>
                    </td>
                    <td><a href="modifierEvent.php?id_event=<?PHP echo $row['id_event']; ?>">Modifier</a></td>
                </tr>
              </tbody>
                <?PHP
            }
            ?>
<<<<<<< HEAD


=======
>>>>>>> 4ecf84758bd905c40109806f555a39b9e49d5b94
<!-------------------------------------------- END Suprimer +Modifier ------------------------------------------------->




            <!-- js placed at the end of the document so the pages load faster -->
            
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
