<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>
        Daiwik Craftorium Detail | Daiwik - Admin & Dashboard Template
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.png" />
    {{-- calendar Css --}}
    <!-- Plugin css -->
    {{-- <link rel="stylesheet" href="/assets/libs/@fullcalendar/core/main.min.css" type="text/css" />
    <link rel="stylesheet" href="/assets/libs/@fullcalendar/daygrid/main.min.css" type="text/css" />
    <link rel="stylesheet" href="/assets/libs/@fullcalendar/bootstrap/main.min.css" type="text/css" />
    <link rel="stylesheet" href="/assets/libs/@fullcalendar/timegrid/main.min.css" type="text/css" /> --}}

    <!-- Bootstrap Css -->
    <link href="/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!--FontAwesome Css  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css" />
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.3/css/dataTables.dat">
</head>

<body data-sidebar="dark">
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        {{-- <h5 class="text-light text-center mt-4">
                                <span>Daiwik Craftorium</span>
                            </h5> --}}

                        <a href="/" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="/assets/images/logo-black.png" alt="logo-sm-dark" height="22" />
                            </span>
                            <span class="logo-lg">
                                <img src="/assets/images/logo-black.png" alt="logo-dark" height="20" />
                            </span>
                        </a>

                        <a href="/" class="logo logo-light">
                            <span class="logo-sm" style="margin-left: -25px">
                                <img src="/assets/images/logo-white.png" alt="logo-sm-light" height="75"
                                    width="205" />
                            </span>
                            <span class="logo-lg" style="margin-left: 25px;margin-right:15px">
                                <img src="/assets/images/logo-white.png" alt="logo-light" height="31"
                                    width="111" />
                            </span>
                        </a>

                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="ri-menu-2-line align-middle"></i>
                    </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search..." />
                            <span class="ri-search-line"></span>
                        </div>
                    </form>
                </div>

                <div class="d-flex">
                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="ri-search-line"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">
                            <form class="p-3">
                                <div class="mb-3 m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..." />
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">
                                                <i class="ri-search-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block user-dropdown">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{-- @isset($profile)
                                <img class="rounded-circle header-profile-user" src="/assets/images/images.jpg"
                                    alt="Header Avatar" width="50px" height="50px" />
                            @endisset --}}
                            <img class="rounded-circle header-profile-user" src="/assets/images/images.jpg"
                                alt="Header Avatar" width="50px" height="50px" />
                            <span class="d-none d-xl-inline-block ms-1">CountryCraft</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="/admin/account_setting/profile"><i
                                    class="ri-user-line align-middle me-1"></i>
                                Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                            <i class="ri-settings-2-line"></i>
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">
            <div data-simplebar class="h-100">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="/admin/dashboard" class="waves-effect">
                                <i class="ri-dashboard-line"></i><span
                                    class="badge rounded-pill bg-success float-end"></span>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        {{--
                            <li>
                                <a href="/admin/calendar" class="waves-effect">
                                    <i class="ri-calendar-2-line"></i>
                                    <span>Calendar</span>
                                </a>
                            </li>
                            --}}

                        <li>
                            <a href="javascript: void(0);" class=" has-arrow waves-effect">
                                <i class="mdi mdi-head-cog-outline"></i>
                                <span>Audience</span>
                                {{-- <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i> --}}
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li>
                                    <a href="/admin/audience/audience">Add Audience</a>
                                </li>
                                <li>
                                    <a href="/admin/audience/audiTable">View Audience</a>
                                </li>
                            </ul>

                        </li>

                        {{--
                            <li>
                                <a
                                    href="/admin/audience/audience"
                                    class="waves-effect"
                                >
                                    <i class="ri-dashboard"></i>
                                    <span>Audience</span>
                                </a>
                            </li>
                            --}}
                        <li>
                            <a href="javascript:void(0);" class="has-arrow waves-effect">
                                <i class="ri ri-store-3-line"></i>
                                <span>Inquiry</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li>
                                    <a href="/admin/inquiry/inquiry">Add Inquiry</a>
                                </li>
                                <li>
                                    <a href="/admin/inquiry/inqTable">View Inquiry</a>
                                </li>
                            </ul>
                        </li>

                        {{--
                            <li>
                                <a
                                    href="/admin/inquiry/inquiry"
                                    class="waves-effect"
                                >
                                    <i class="ri-dashboard"></i>
                                    <span>Inquiry</span>
                                </a>
                            </li>
                            --}}
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ri-store-2-line"></i>
                                <span>Slider</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li>
                                    <a href="/admin/slider">Add Slider</a>
                                </li>
                                <li>
                                    <a href="/admin/slider/sliderTable">View Slider</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ri-chat-1-line"></i>
                                <span>Pages </span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li>
                                    <a href="/admin/manage_page/about">About Us</a>
                                </li>
                                <li>
                                    <a href="/admin/manage_page/privacy_policy">Privacy policy</a>
                                </li>
                                <li>
                                    <a href="/admin/ManagePage/terms">Terms and condition</a>
                                </li>
                                <li>
                                    <a href="/admin/manage_page/return_policy">Return policy</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ri-store-2-line"></i>
                                <span>Category</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li>
                                    <a href="/admin/category/add">Add Category</a>
                                </li>
                                <li>
                                    <a href="/admin/category">View Category</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ri-artboard-2-line"></i>
                                <span>Product</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li>
                                    <a href="/admin/product/add">Add Product</a>
                                </li>
                                <li>
                                    <a href="/admin/product">View Product</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- Sidebar -->
        </div>
    </div>
    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    @yield('main')
    <!-- end main content-->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-sm-12">
                    Manage by TFour Tech Pvt. Ltd | All Rights Reserved by CountryCraftExports ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    {{-- <i class="mdi mdi-heart text-danger"></i> --}}
                </div>
            </div>
        </div>
    </footer>
    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center px-3 py-4">
                <h5 class="m-0 me-2">Settings</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <h6 class="text-center mb-0">Choose Layouts</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="/assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="layout-1" />
                </div>

                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked />
                    <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="/assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="layout-2" />
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch"
                        data-bsStyle="assets/css/bootstrap-dark.min.css"
                        data-appStyle="assets/css/app-dark.min.css" />
                    <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                </div>

                <div class="mb-2">
                    <img src="/assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="layout-3" />
                </div>
                <div class="form-check form-switch mb-5">
                    <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch"
                        data-appStyle="assets/css/app-rtl.min.css" />
                    <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                </div>
            </div>
        </div>
        <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="/assets/libs/jquery/jquery.min.js"></script>
    <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="/assets/libs/node-waves/waves.min.js"></script>
    <!--tinymce js-->
    <script src="assets/libs/tinymce/tinymce.min.js"></script>

    <!-- init js -->
    <script src="assets/js/pages/form-editor.init.js"></script>

    <script src="/assets/js/app.js"></script>
    {{-- calendar --}}
    <script src="/assets/js/pages/calendar.init.js"></script>
    <!-- plugin js -->
    <script src="/assets/libs/moment/min/moment.min.js"></script>
    <script src="/assets/libs/jquery-ui-dist/jquery-ui.min.js"></script>
    <script src="/assets/libs/@fullcalendar/core/main.min.js"></script>
    <script src="/assets/libs/@fullcalendar/bootstrap/main.min.js"></script>
    <script src="/assets/libs/@fullcalendar/daygrid/main.min.js"></script>
    <script src="/assets/libs/@fullcalendar/timegrid/main.min.js"></script>
    <script src="/assets/libs/@fullcalendar/interaction/main.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- Sorting Table --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>
    {{-- CKeditor --}}
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script> --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector("#editor")).catch(
            (error) => {
                console.error(error);
            }
        );
    </script>
    @stack('footer-script')
    @stack('add-input')
    @stack('Auditable')
    @stack('able_unable')
    @stack('pro-script')
    @stack('disable')
</body>

</html>
