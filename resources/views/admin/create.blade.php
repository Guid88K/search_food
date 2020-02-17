<!doctype html>
<html lang="en" class="no-focus">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Codebase - Bootstrap 4 Admin Template &amp; UI Framework</title>

    <meta name="description"
          content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description"
          content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{asset('assets/media/favicons/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/media/favicons/favicon-192x192.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/media/favicons/apple-touch-icon-180x180.png')}}">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
    <link rel="stylesheet" id="css-main" href="{{asset('assets/css/codebase.min.css')}}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body>

<!-- Page Container -->
<!--
    Available classes for #page-container:

GENERIC

    'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

SIDEBAR & SIDE OVERLAY

    'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
    'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
    'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
    'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
    'sidebar-inverse'                           Dark themed sidebar

    'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
    'side-overlay-o'                            Visible Side Overlay by default

    'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

    'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

HEADER

    ''                                          Static Header if no class is added
    'page-header-fixed'                         Fixed Header

HEADER STYLE

    ''                                          Classic Header style if no class is added
    'page-header-modern'                        Modern Header style
    'page-header-inverse'                       Dark themed Header (works only with classic Header style)
    'page-header-glass'                         Light themed Header with transparency by default
                                                (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
    'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

MAIN CONTENT LAYOUT

    ''                                          Full width Main Content if no class is added
    'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
    'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
-->
<div id="page-container"
     class="sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-fixed main-content-narrow">
    <!-- Side Overlay-->
    <aside id="side-overlay">
        <!-- Side Header -->
        <div class="content-header content-header-fullrow">
            <div class="content-header-section align-parent">
                <!-- Close Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout"
                        data-action="side_overlay_close">
                    <i class="fa fa-times text-danger"></i>
                </button>
                <!-- END Close Side Overlay -->

                <!-- User Info -->
                <div class="content-header-item">
                    <a class="img-link mr-5" href="be_pages_generic_profile.html">
                        <img class="img-avatar img-avatar32" src="{{asset('assets/media/avatars/avatar15.jpg')}}"
                             alt="">
                    </a>
                    <a class="align-middle link-effect text-primary-dark font-w600"
                       href="be_pages_generic_profile.html">John Smith</a>
                </div>
                <!-- END User Info -->
            </div>
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="content-side">
            <!-- Search -->
            <div class="block pull-t pull-r-l">
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <form action="be_pages_generic_search.html" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" id="side-overlay-search" name="side-overlay-search"
                                   placeholder="Search..">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary px-10">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Search -->

            <!-- Mini Stats -->
            <div class="block pull-r-l">
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="row">
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Clients</div>
                            <div class="font-size-h4">460</div>
                        </div>
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                            <div class="font-size-h4">728</div>
                        </div>
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                            <div class="font-size-h4">$7,860</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Mini Stats -->

            <!-- Friends -->
            <div class="block pull-r-l">
                <div class="block-header bg-body-light">
                    <h3 class="block-title"><i class="fa fa-fw fa-users font-size-default mr-5"></i>Friends</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <ul class="nav-users push">
                        <li>
                            <a href="be_pages_generic_profile.html">
                                <img class="img-avatar" src="{{asset('assets/media/avatars/avatar6.jpg')}}" alt="">
                                <i class="fa fa-circle text-success"></i> Melissa Rice
                                <div class="font-w400 font-size-xs text-muted">Photographer</div>
                            </a>
                        </li>
                        <li>
                            <a href="be_pages_generic_profile.html">
                                <img class="img-avatar" src="{{asset('assets/media/avatars/avatar10.jpg')}}" alt="">
                                <i class="fa fa-circle text-success"></i> Ryan Flores
                                <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                            </a>
                        </li>
                        <li>
                            <a href="be_pages_generic_profile.html">
                                <img class="img-avatar" src="{{asset('assets/media/avatars/avatar1.jpg')}}" alt="">
                                <i class="fa fa-circle text-warning"></i> Danielle Jones
                                <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                            </a>
                        </li>
                        <li>
                            <a href="be_pages_generic_profile.html">
                                <img class="img-avatar" src="{{asset('assets/media/avatars/avatar16.jpg')}}" alt="">
                                <i class="fa fa-circle text-danger"></i> Henry Harrison
                                <div class="font-w400 font-size-xs text-muted">Copywriter</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Friends -->

            <!-- Activity -->
            <div class="block pull-r-l">
                <div class="block-header bg-body-light">
                    <h3 class="block-title">
                        <i class="fa fa-fw fa-clock-o font-size-default mr-5"></i>Activity
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <ul class="list list-activity">
                        <li>
                            <i class="si si-wallet text-success"></i>
                            <div class="font-w600">+$29 New sale</div>
                            <div>
                                <a href="javascript:void(0)">Admin Template</a>
                            </div>
                            <div class="font-size-xs text-muted">5 min ago</div>
                        </li>
                        <li>
                            <i class="si si-close text-danger"></i>
                            <div class="font-w600">Project removed</div>
                            <div>
                                <a href="javascript:void(0)">Best Icon Set</a>
                            </div>
                            <div class="font-size-xs text-muted">26 min ago</div>
                        </li>
                        <li>
                            <i class="si si-pencil text-info"></i>
                            <div class="font-w600">You edited the file</div>
                            <div>
                                <a href="javascript:void(0)">
                                    <i class="fa fa-file-text-o"></i> Docs.doc
                                </a>
                            </div>
                            <div class="font-size-xs text-muted">3 hours ago</div>
                        </li>
                        <li>
                            <i class="si si-plus text-success"></i>
                            <div class="font-w600">New user</div>
                            <div>
                                <a href="javascript:void(0)">StudioWeb - View Profile</a>
                            </div>
                            <div class="font-size-xs text-muted">5 hours ago</div>
                        </li>
                        <li>
                            <i class="si si-wrench text-warning"></i>
                            <div class="font-w600">App v5.5 is available</div>
                            <div>
                                <a href="javascript:void(0)">Update now</a>
                            </div>
                            <div class="font-size-xs text-muted">8 hours ago</div>
                        </li>
                        <li>
                            <i class="si si-user-follow text-pulse"></i>
                            <div class="font-w600">+1 Friend Request</div>
                            <div>
                                <a href="javascript:void(0)">Accept</a>
                            </div>
                            <div class="font-size-xs text-muted">1 day ago</div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Activity -->
            <div class="block pull-r-l">
                <div class="block-header bg-body-light">
                    <h3 class="block-title">
                        <i class="fa fa-fw fa-pencil font-size-default mr-5"></i>Profile
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="be_pages_dashboard.html" method="post" onsubmit="return false;">
                        <div class="form-group mb-15">
                            <label for="side-overlay-profile-name">Name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="side-overlay-profile-name"
                                       name="side-overlay-profile-name" placeholder="Your name.." value="John Smith">
                                <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-user"></i>
                                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-15">
                            <label for="side-overlay-profile-email">Email</label>
                            <div class="input-group">
                                <input type="email" class="form-control" id="side-overlay-profile-email"
                                       name="side-overlay-profile-email" placeholder="Your email.."
                                       value="john.smith@example.com">
                                <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-15">
                            <label for="side-overlay-profile-password">New Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="side-overlay-profile-password"
                                       name="side-overlay-profile-password" placeholder="New Password..">
                                <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-asterisk"></i>
                                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-15">
                            <label for="side-overlay-profile-password-confirm">Confirm New Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="side-overlay-profile-password-confirm"
                                       name="side-overlay-profile-password-confirm"
                                       placeholder="Confirm New Password..">

                                <!-- Profile -->
                                <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-asterisk"></i>
                                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-block btn-alt-primary">
                                    <i class="fa fa-refresh mr-5"></i> Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Profile -->

            <!-- Settings -->
            <div class="block pull-r-l">
                <div class="block-header bg-body-light">
                    <h3 class="block-title">
                        <i class="fa fa-fw fa-wrench font-size-default mr-5"></i>Settings
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="row gutters-tiny">
                        <div class="col-6">
                            <div class="custom-control custom-checkbox mb-5">
                                <input type="checkbox" class="custom-control-input" id="side-overlay-settings-status"
                                       name="side-overlay-settings-status" value="1" checked>
                                <label class="custom-control-label" for="side-overlay-settings-status">Online
                                    Status</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-5">
                                <input type="checkbox" class="custom-control-input"
                                       id="side-overlay-settings-public-profile"
                                       name="side-overlay-settings-public-profile" value="1">
                                <label class="custom-control-label" for="side-overlay-settings-public-profile">Public
                                    Profile</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-5">
                                <input type="checkbox" class="custom-control-input"
                                       id="side-overlay-settings-notifications"
                                       name="side-overlay-settings-notifications" value="1" checked>
                                <label class="custom-control-label" for="side-overlay-settings-notifications">Notifications</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="custom-control custom-checkbox mb-5">
                                <input type="checkbox" class="custom-control-input" id="side-overlay-settings-updates"
                                       name="side-overlay-settings-updates" value="1">
                                <label class="custom-control-label" for="side-overlay-settings-updates">Auto
                                    updates</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-5">
                                <input type="checkbox" class="custom-control-input"
                                       id="side-overlay-settings-api-access" name="side-overlay-settings-api-access"
                                       value="1" checked>
                                <label class="custom-control-label" for="side-overlay-settings-api-access">API
                                    Access</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-5">
                                <input type="checkbox" class="custom-control-input"
                                       id="side-overlay-settings-limit-requests"
                                       name="side-overlay-settings-limit-requests" value="1">
                                <label class="custom-control-label" for="side-overlay-settings-limit-requests">API
                                    Requests</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Settings -->
        </div>
        <!-- END Side Content -->
    </aside>
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    <!--
        Helper classes

        Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
        Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
            If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

        Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
        Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
            - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
    -->
    <nav id="sidebar">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Side Header -->
            <div class="content-header content-header-fullrow px-15">
                <!-- Mini Mode -->
                <div class="content-header-section sidebar-mini-visible-b">
                    <!-- Logo -->
                    <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                            </span>
                    <!-- END Logo -->
                </div>
                <!-- END Mini Mode -->

                <!-- Normal Mode -->
                <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r"
                            data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times text-danger"></i>
                    </button>
                    <!-- END Close Sidebar -->

                    <!-- Logo -->
                    <div class="content-header-item">
                        <a class="link-effect font-w700" href="index.html">
                            <i class="si si-fire text-primary"></i>
                            <span class="font-size-xl text-dual-primary-dark">code</span><span
                                class="font-size-xl text-primary">base</span>
                        </a>
                    </div>
                    <!-- END Logo -->
                </div>
                <!-- END Normal Mode -->
            </div>
            <!-- END Side Header -->

            <!-- Side User -->
            <div class="content-side content-side-full content-side-user px-10 align-parent">
                <!-- Visible only in mini mode -->
                <div class="sidebar-mini-visible-b align-v animated fadeIn">
                    <img class="img-avatar img-avatar32" src="{{asset('assets/media/avatars/avatar15.jpg')}}" alt="">
                </div>
                <!-- END Visible only in mini mode -->

                <!-- Visible only in normal mode -->
                <div class="sidebar-mini-hidden-b text-center">
                    <a class="img-link" href="be_pages_generic_profile.html">
                        <img class="img-avatar" src="{{asset('assets/media/avatars/avatar15.jpg')}}" alt="">
                    </a>
                    <ul class="list-inline mt-10">
                        <li class="list-inline-item">
                            <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase"
                               href="be_pages_generic_profile.html">
                                {{--                                {{$user->name}}--}}
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <a class="link-effect text-dual-primary-dark" data-toggle="layout"
                               data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                                <i class="si si-drop"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="link-effect text-dual-primary-dark" href="op_auth_signin.html">
                                <i class="si si-logout"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- END Visible only in normal mode -->
            </div>
            <!-- END Side User -->

            <!-- Side Navigation -->
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li>
                        <a href="{{url('/recipe')}}"><i class="si si-cup"></i><span
                                class="sidebar-mini-hide">Сайт</span></a>
                    </li>
                    <li>
                        <a href="{{url('/admin/recipe/create')}}"><i class="si si-plus"></i><span
                                class="sidebar-mini-hide">Добавити рецепт</span></a>
                    </li>
                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- Sidebar Content -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="content-header-section">
                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout"
                        data-action="sidebar_toggle">
                    <i class="fa fa-navicon"></i>
                </button>
                <!-- END Toggle Sidebar -->

                <!-- Open Search Section -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout"
                        data-action="header_search_on">
                    <i class="fa fa-search"></i>
                </button>
                <!-- END Open Search Section -->

                <!-- Layout Options (used just for demonstration) -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-options-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-wrench"></i>
                    </button>
                    <div class="dropdown-menu min-width-300" aria-labelledby="page-header-options-dropdown">
                        <h5 class="h6 text-center py-10 mb-10 border-b text-uppercase">Settings</h5>
                        <h6 class="dropdown-header">Color Themes</h6>
                        <div class="row no-gutters text-center mb-5">
                            <div class="col-2 mb-5">
                                <a class="text-default" data-toggle="theme" data-theme="default"
                                   href="javascript:void(0)">
                                    <i class="fa fa-2x fa-circle"></i>
                                </a>
                            </div>
                            <div class="col-2 mb-5">
                                <a class="text-elegance" data-toggle="theme"
                                   data-theme="assets/css/themes/elegance.min.css" href="javascript:void(0)">
                                    <i class="fa fa-2x fa-circle"></i>
                                </a>
                            </div>
                            <div class="col-2 mb-5">
                                <a class="text-pulse" data-toggle="theme" data-theme="assets/css/themes/pulse.min.css"
                                   href="javascript:void(0)">
                                    <i class="fa fa-2x fa-circle"></i>
                                </a>
                            </div>
                            <div class="col-2 mb-5">
                                <a class="text-flat" data-toggle="theme" data-theme="assets/css/themes/flat.min.css"
                                   href="javascript:void(0)">
                                    <i class="fa fa-2x fa-circle"></i>
                                </a>
                            </div>
                            <div class="col-2 mb-5">
                                <a class="text-corporate" data-toggle="theme"
                                   data-theme="assets/css/themes/corporate.min.css" href="javascript:void(0)">
                                    <i class="fa fa-2x fa-circle"></i>
                                </a>
                            </div>
                            <div class="col-2 mb-5">
                                <a class="text-earth" data-toggle="theme" data-theme="assets/css/themes/earth.min.css"
                                   href="javascript:void(0)">
                                    <i class="fa fa-2x fa-circle"></i>
                                </a>
                            </div>
                        </div>
                        <h6 class="dropdown-header">Header</h6>
                        <div class="row gutters-tiny text-center mb-5">
                            <div class="col-6">
                                <button type="button" class="btn btn-sm btn-block btn-alt-secondary"
                                        data-toggle="layout" data-action="header_fixed_toggle">Fixed Mode
                                </button>
                            </div>
                            <div class="col-6">
                                <button type="button"
                                        class="btn btn-sm btn-block btn-alt-secondary d-none d-lg-block mb-10"
                                        data-toggle="layout" data-action="header_style_classic">Classic Style
                                </button>
                            </div>
                        </div>
                        <h6 class="dropdown-header">Sidebar</h6>
                        <div class="row gutters-tiny text-center mb-5">
                            <div class="col-6">
                                <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10"
                                        data-toggle="layout" data-action="sidebar_style_inverse_off">Light
                                </button>
                            </div>
                            <div class="col-6">
                                <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10"
                                        data-toggle="layout" data-action="sidebar_style_inverse_on">Dark
                                </button>
                            </div>
                        </div>
                        <div class="d-none d-xl-block">
                            <h6 class="dropdown-header">Main Content</h6>
                            <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10"
                                    data-toggle="layout" data-action="content_layout_toggle">Toggle Layout
                            </button>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="row gutters-tiny text-center">
                            <div class="col-6">
                                <a class="dropdown-item mb-0" href="be_layout_api.html">
                                    <i class="si si-chemistry mr-5"></i> Layout API
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="dropdown-item mb-0" href="be_ui_color_themes.html">
                                    <i class="fa fa-paint-brush mr-5"></i> Color Themes
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Layout Options -->
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div class="content-header-section">
                <!-- User Dropdown -->
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user d-sm-none"></i>
                        <span class="d-none d-sm-inline-block">
{{--                            {{$user->name}}--}}
                        </span>
                        <i class="fa fa-angle-down ml-5"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right min-width-200"
                         aria-labelledby="page-header-user-dropdown">
                        <h5 class="h6 text-center py-10 mb-5 border-b text-uppercase">User</h5>
                        <a class="dropdown-item" href="be_pages_generic_profile.html">
                            <i class="si si-user mr-5"></i> Profile
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                           href="be_pages_generic_inbox.html">
                            <span><i class="si si-envelope-open mr-5"></i> Inbox</span>
                            <span class="badge badge-primary">3</span>
                        </a>
                        <a class="dropdown-item" href="be_pages_generic_invoice.html">
                            <i class="si si-note mr-5"></i> Invoices
                        </a>
                        <div class="dropdown-divider"></div>

                        <!-- Toggle Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout"
                           data-action="side_overlay_toggle">
                            <i class="si si-wrench mr-5"></i> Settings
                        </a>
                        <!-- END Side Overlay -->

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="op_auth_signin.html">
                            <i class="si si-logout mr-5"></i> Sign Out
                        </a>
                    </div>
                </div>
                <!-- END User Dropdown -->

                <!-- Notifications -->
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-notifications"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-flag"></i>
                        <span class="badge badge-primary badge-pill">5</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right min-width-300"
                         aria-labelledby="page-header-notifications">
                        <h5 class="h6 text-center py-10 mb-0 border-b text-uppercase">Notifications</h5>
                        <ul class="list-unstyled my-20">
                            <li>
                                <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                    <div class="ml-5 mr-15">
                                        <i class="fa fa-fw fa-check text-success"></i>
                                    </div>
                                    <div class="media-body pr-10">
                                        <p class="mb-0">You’ve upgraded to a VIP account successfully!</p>
                                        <div class="text-muted font-size-sm font-italic">15 min ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                    <div class="ml-5 mr-15">
                                        <i class="fa fa-fw fa-exclamation-triangle text-warning"></i>
                                    </div>
                                    <div class="media-body pr-10">
                                        <p class="mb-0">Please check your payment info since we can’t validate them!</p>
                                        <div class="text-muted font-size-sm font-italic">50 min ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                    <div class="ml-5 mr-15">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </div>
                                    <div class="media-body pr-10">
                                        <p class="mb-0">Web server stopped responding and it was automatically
                                            restarted!</p>
                                        <div class="text-muted font-size-sm font-italic">4 hours ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                    <div class="ml-5 mr-15">
                                        <i class="fa fa-fw fa-exclamation-triangle text-warning"></i>
                                    </div>
                                    <div class="media-body pr-10">
                                        <p class="mb-0">Please consider upgrading your plan. You are running out of
                                            space.</p>
                                        <div class="text-muted font-size-sm font-italic">16 hours ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                    <div class="ml-5 mr-15">
                                        <i class="fa fa-fw fa-plus text-primary"></i>
                                    </div>
                                    <div class="media-body pr-10">
                                        <p class="mb-0">New purchases! +$250</p>
                                        <div class="text-muted font-size-sm font-italic">1 day ago</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-center mb-0" href="javascript:void(0)">
                            <i class="fa fa-flag mr-5"></i> View All
                        </a>
                    </div>
                </div>
                <!-- END Notifications -->

                <!-- Toggle Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout"
                        data-action="side_overlay_toggle">
                    <i class="fa fa-tasks"></i>
                </button>
                <!-- END Toggle Side Overlay -->
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header">
            <div class="content-header content-header-fullrow">
                <form action="be_pages_generic_search.html" method="post">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <!-- Close Search Section -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-secondary" data-toggle="layout"
                                    data-action="header_search_off">
                                <i class="fa fa-times"></i>
                            </button>
                            <!-- END Close Search Section -->
                        </div>
                        <input type="text" class="form-control" placeholder="Search or hit ESC.."
                               id="page-header-search-input" name="page-header-search-input">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-primary">
            <div class="content-header content-header-fullrow text-center">
                <div class="content-header-item">
                    <i class="fa fa-sun-o fa-spin text-white"></i>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
{{--    <main id="main-container">--}}

{{--        <!-- Page Content -->--}}
{{--        <div class="content">--}}
{{--            <div class="row gutters-tiny invisible" data-toggle="appear">--}}
{{--                <!-- Row #1 -->--}}
{{--                <div class="col-6 col-md-4 col-xl-2">--}}
{{--                    <a class="block text-center" href="javascript:void(0)">--}}
{{--                        <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-dusk">--}}
{{--                            <div class="ribbon-box">750</div>--}}
{{--                            <p class="mt-5">--}}
{{--                                <i class="si si-book-open fa-3x text-white-op"></i>--}}
{{--                            </p>--}}
{{--                            <p class="font-w600 text-white">Articles</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--                <div class="col-6 col-md-4 col-xl-2">--}}
{{--                    <a class="block text-center" href="{{url('/admin/sto/create')}} ">--}}
{{--                        --}}{{--                        <a href="{{url('/admin/sto/create')}}">--}}
{{--                        <div class="block-content bg-gd-primary">--}}
{{--                            <p class="mt-5">--}}
{{--                                <i class="si si-plus fa-3x text-white-op"></i>--}}
{{--                            </p>--}}
{{--                            <p class="font-w600 text-white">New Article</p>--}}
{{--                        </div>--}}
{{--                        --}}{{--                        </a>--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--                <div class="col-6 col-md-4 col-xl-2">--}}
{{--                    <a class="block text-center" href="be_pages_forum_categories.html">--}}
{{--                        <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-sea">--}}
{{--                            <div class="ribbon-box">16</div>--}}
{{--                            <p class="mt-5">--}}
{{--                                <i class="si si-bubbles fa-3x text-white-op"></i>--}}
{{--                            </p>--}}
{{--                            <p class="font-w600 text-white">Comments</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-6 col-md-4 col-xl-2">--}}
{{--                    <a class="block text-center" href="be_pages_generic_search.html">--}}
{{--                        <div class="block-content bg-gd-lake">--}}
{{--                            <p class="mt-5">--}}
{{--                                <i class="si si-magnifier fa-3x text-white-op"></i>--}}
{{--                            </p>--}}
{{--                            <p class="font-w600 text-white">Search</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-6 col-md-4 col-xl-2">--}}
{{--                    <a class="block text-center" href="be_comp_charts.html">--}}
{{--                        <div class="block-content bg-gd-emerald">--}}
{{--                            <p class="mt-5">--}}
{{--                                <i class="si si-bar-chart fa-3x text-white-op"></i>--}}
{{--                            </p>--}}
{{--                            <p class="font-w600 text-white">Statistics</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-6 col-md-4 col-xl-2">--}}
{{--                    <a class="block text-center" href="javascript:void(0)">--}}
{{--                        <div class="block-content bg-gd-corporate">--}}
{{--                            <p class="mt-5">--}}
{{--                                <i class="si si-settings fa-3x text-white-op"></i>--}}
{{--                            </p>--}}
{{--                            <p class="font-w600 text-white">Settings</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <!-- END Row #1 -->--}}
{{--            </div>--}}
{{--            <div class="row row-deck gutters-tiny invisible" data-toggle="appear">--}}
{{--                <!-- Row #2 -->--}}
{{--                <div class="col-xl-4">--}}
{{--                    <a class="block block-transparent bg-image d-flex align-items-stretch" href="javascript:void(0)"--}}
{{--                       style="background-image: url('assets/media/photos/photo24@2x.jpg');">--}}
{{--                        <div class="block-content block-sticky-options pt-100 bg-black-op">--}}
{{--                            <div class="block-options block-options-left text-white">--}}
{{--                                <div class="block-options-item">--}}
{{--                                    <i class="si si-book-open text-white-op"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="block-options text-white">--}}
{{--                                <div class="block-options-item">--}}
{{--                                    <i class="si si-bubbles"></i> 15--}}
{{--                                </div>--}}
{{--                                <div class="block-options-item">--}}
{{--                                    <i class="si si-eye"></i> 3800--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <h2 class="h3 font-w700 text-white mb-5">Travel the world</h2>--}}
{{--                            <h3 class="h5 text-white-op">Explore and achieve great things</h3>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-sm-6 col-xl-4">--}}
{{--                    <a class="block block-transparent bg-image d-flex align-items-stretch" href="javascript:void(0)"--}}
{{--                       style="background-image: url('assets/media/photos/photo32@2x.jpg');">--}}
{{--                        <div class="block-content block-sticky-options pt-100 bg-primary-dark-op">--}}
{{--                            <div class="block-options block-options-left text-white">--}}
{{--                                <div class="block-options-item">--}}
{{--                                    <i class="si si-book-open text-white-op"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="block-options text-white">--}}
{{--                                <div class="block-options-item">--}}
{{--                                    <i class="si si-bubbles"></i> 4--}}
{{--                                </div>--}}
{{--                                <div class="block-options-item">--}}
{{--                                    <i class="si si-eye"></i> 1680--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <h2 class="h3 font-w700 text-white mb-5">Inspiring Solutions</h2>--}}
{{--                            <h3 class="h5 text-white-op">10 things you should do today</h3>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-sm-6 col-xl-4">--}}
{{--                    <a class="block block-transparent bg-image d-flex align-items-stretch" href="javascript:void(0)"--}}
{{--                       style="background-image: url('assets/media/photos/photo10@2x.jpg');">--}}
{{--                        <div class="block-content block-sticky-options pt-100 bg-primary-op">--}}
{{--                            <div class="block-options block-options-left text-white">--}}
{{--                                <div class="block-options-item">--}}
{{--                                    <i class="si si-book-open text-white-op"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="block-options text-white">--}}
{{--                                <div class="block-options-item">--}}
{{--                                    <i class="si si-bubbles"></i> 16--}}
{{--                                </div>--}}
{{--                                <div class="block-options-item">--}}
{{--                                    <i class="si si-eye"></i> 4450--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <h2 class="h3 font-w700 text-white mb-5">Alternative Road</h2>--}}
{{--                            <h3 class="h5 text-white-op">Don't let anything disorient you</h3>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <!-- END Row #2 -->--}}
{{--            </div>--}}
{{--            <div class="row gutters-tiny invisible" data-toggle="appear">--}}
{{--                <!-- Row #3 -->--}}
{{--                <div class="col-xl-8 d-flex align-items-stretch">--}}
{{--                    <div class="block block-themed block-mode-loading-inverse block-transparent bg-image w-100"--}}
{{--                         style="background-image: url('assets/media/photos/photo34@2x.jpg');">--}}
{{--                        <div class="block-header bg-black-op">--}}
{{--                            <h3 class="block-title">--}}
{{--                                Sales <small>This week</small>--}}
{{--                            </h3>--}}
{{--                            <div class="block-options">--}}
{{--                                <button type="button" class="btn-block-option" data-toggle="block-option"--}}
{{--                                        data-action="state_toggle" data-action-mode="demo">--}}
{{--                                    <i class="si si-refresh"></i>--}}
{{--                                </button>--}}
{{--                                <button type="button" class="btn-block-option">--}}
{{--                                    <i class="si si-wrench"></i>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="block-content bg-black-op">--}}
{{--                            <div class="pull-r-l">--}}
{{--                                <!-- Lines Chart Container functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _es6/pages/be_pages_dashboard.js -->--}}
{{--                                <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->--}}
{{--                                <canvas class="js-chartjs-dashboard-lines"></canvas>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-4 d-flex align-items-stretch">--}}
{{--                    <div class="block block-transparent bg-primary-dark d-flex align-items-center w-100">--}}
{{--                        <div class="block-content block-content-full">--}}
{{--                            <div class="py-15 px-20 clearfix border-black-op-b">--}}
{{--                                <div class="float-right mt-15 d-none d-sm-block">--}}
{{--                                    <i class="si si-book-open fa-2x text-success"></i>--}}
{{--                                </div>--}}
{{--                                <div class="font-size-h3 font-w600 text-success" data-toggle="countTo" data-speed="1000"--}}
{{--                                     data-to="750">0--}}
{{--                                </div>--}}
{{--                                <div class="font-size-sm font-w600 text-uppercase text-success-light">Articles</div>--}}
{{--                            </div>--}}
{{--                            <div class="py-15 px-20 clearfix border-black-op-b">--}}
{{--                                <div class="float-right mt-15 d-none d-sm-block">--}}
{{--                                    <i class="si si-wallet fa-2x text-danger"></i>--}}
{{--                                </div>--}}
{{--                                <div class="font-size-h3 font-w600 text-danger">$<span data-toggle="countTo"--}}
{{--                                                                                       data-speed="1000"--}}
{{--                                                                                       data-to="980">0</span></div>--}}
{{--                                <div class="font-size-sm font-w600 text-uppercase text-danger-light">Earnings</div>--}}
{{--                            </div>--}}
{{--                            <div class="py-15 px-20 clearfix border-black-op-b">--}}
{{--                                <div class="float-right mt-15 d-none d-sm-block">--}}
{{--                                    <i class="si si-envelope-open fa-2x text-warning"></i>--}}
{{--                                </div>--}}
{{--                                <div class="font-size-h3 font-w600 text-warning" data-toggle="countTo" data-speed="1000"--}}
{{--                                     data-to="38">0--}}
{{--                                </div>--}}
{{--                                <div class="font-size-sm font-w600 text-uppercase text-warning-light">Messages</div>--}}
{{--                            </div>--}}
{{--                            <div class="py-15 px-20 clearfix border-black-op-b">--}}
{{--                                <div class="float-right mt-15 d-none d-sm-block">--}}
{{--                                    <i class="si si-users fa-2x text-info"></i>--}}
{{--                                </div>--}}
{{--                                <div class="font-size-h3 font-w600 text-info" data-toggle="countTo" data-speed="1000"--}}
{{--                                     data-to="260">0--}}
{{--                                </div>--}}
{{--                                <div class="font-size-sm font-w600 text-uppercase text-info-light">Online</div>--}}
{{--                            </div>--}}
{{--                            <div class="py-15 px-20 clearfix">--}}
{{--                                <div class="float-right mt-15 d-none d-sm-block">--}}
{{--                                    <i class="si si-drop fa-2x text-elegance"></i>--}}
{{--                                </div>--}}
{{--                                <div class="font-size-h3 font-w600 text-elegance" data-toggle="countTo"--}}
{{--                                     data-speed="1000" data-to="59">0--}}
{{--                                </div>--}}
{{--                                <div class="font-size-sm font-w600 text-uppercase text-elegance-light">Themes</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- END Row #3 -->--}}
{{--            </div>--}}
{{--            <div class="row gutters-tiny invisible" data-toggle="appear">--}}
{{--                <!-- Row #4 -->--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="block block-transparent bg-primary">--}}
{{--                        <div class="block-content block-content-full">--}}
{{--                            <div class="py-20 text-center">--}}
{{--                                <div class="mb-20">--}}
{{--                                    <i class="fa fa-envelope-open fa-4x text-primary-light"></i>--}}
{{--                                </div>--}}
{{--                                <div class="font-size-h4 font-w600 text-white">19.5k Subscribers</div>--}}
{{--                                <div class="text-white-op">Your main list is growing!</div>--}}
{{--                                <div class="pt-20">--}}
{{--                                    <a class="btn btn-rounded btn-alt-primary" href="javascript:void(0)">--}}
{{--                                        <i class="fa fa-cog mr-5"></i> Manage list--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="block block-transparent bg-info">--}}
{{--                        <div class="block-content block-content-full">--}}
{{--                            <div class="py-20 text-center">--}}
{{--                                <div class="mb-20">--}}
{{--                                    <i class="fa fa-twitter fa-4x text-info-light"></i>--}}
{{--                                </div>--}}
{{--                                <div class="font-size-h4 font-w600 text-white">+98 followers</div>--}}
{{--                                <div class="text-white-op">You are doing great!</div>--}}
{{--                                <div class="pt-20">--}}
{{--                                    <a class="btn btn-rounded btn-alt-info" href="javascript:void(0)">--}}
{{--                                        <i class="fa fa-users mr-5"></i> Check them out--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="block block-transparent bg-success">--}}
{{--                        <div class="block-content block-content-full">--}}
{{--                            <div class="py-20 text-center">--}}
{{--                                <div class="mb-20">--}}
{{--                                    <i class="fa fa-check fa-4x text-success-light"></i>--}}
{{--                                </div>--}}
{{--                                <div class="font-size-h4 font-w600 text-white">Personal Plan</div>--}}
{{--                                <div class=" text-white-op">This is your current active plan</div>--}}
{{--                                <div class="pt-20">--}}
{{--                                    <a class="btn btn-rounded btn-alt-success" href="javascript:void(0)">--}}
{{--                                        <i class="fa fa-arrow-up mr-5"></i> Upgrade to VIP--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- END Row #4 -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- END Page Content -->--}}

{{--    </main>--}}
<!-- END Main Container -->
    <main id="main-container">

        <!-- Page Content -->
        <div class="content">
            <div class="my-50 text-center">
                <h2 class="font-w700 text-black mb-10">
                    <i class="fa fa-plus text-muted mr-5"></i> Створення нового рецепту
                </h2>
{{--                <h3 class="h5 text-muted mb-0">--}}
{{--                    This is the 7th property you are adding to your portfolio.--}}
{{--                </h3> --}}
            </div>
            <div class="block block-rounded block-fx-shadow">
                <div class="block-content">
                    <form method="post" action="{{ route('recipe.store') }}" enctype="multipart/form-data">
                        <!-- Photos -->
                        <h2 class="content-heading text-black">Фото</h2>
                        <div class="row items-push">

                            <div class="col-lg-3">
                                <p class="text-muted">
                                    Додайте приємні фотографії, щоб краще продемонструвати рецепт
                                </p>
                            </div>
                            <div class="col-lg-7 offset-lg-1">
                                <div class="form-group">
                                    <div class="custom-file form">
                                    @csrf

                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                        <!-- When multiple files are selected, we use the word 'Files'. You can easily change it to your own language by adding the following to the input, eg for DE: data-lang-files="Dateien" -->

                                        <input type="file" class="custom-file-input" id="re-listing-photos"
                                               name="main_image"
                                               data-toggle="custom-file-input" multiple>
                                        <label class="custom-file-label" for="re-listing-photos">Choose files</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- END Photos -->

                        <!-- Vital Info -->

                            <h2 class="content-heading text-black">Назва рецепту</h2>
                        <div class="row items-push">
                            <div class="col-lg-3">
                                <p class="text-muted">
                                    Введіть назву свого рецепта
                                </p>
                            </div>
                            <div class="col-lg-7 offset-lg-1">
                                <div class="form-group">
                                    <label for="re-listing-name">Назва</label>
                                    <input type="text" class="form-control form-control-lg" id="re-listing-name"
                                           name="name">
                                </div>
                            </div>
                        </div>

                        <h2 class="content-heading text-black">Категорія</h2>
                        <div class="row items-push">
                            <div class="col-lg-3">
                                <p class="text-muted">
                                    Введіть категорію свого рецепту
                                </p>
                            </div>
                            <div class="col-lg-7 offset-lg-1">
                                <div class="form-group">
                                    <label for="re-listing-name">Категорія</label>
                                    <select class="form-control" id="kind_of_recipe" name="kind_of_recipe">
                                        <option value="first_dish">Перші страви</option>
                                        <option value="second_dish">Другі страви</option>
                                        <option value="salad">Салати</option>
                                        <option value="snack">Закуска</option>
                                        <option value="baking">Випічка</option>
                                        <option value="dessert">Десерти</option>
                                        <option value="drinks">Напої</option>
                                    </select>

                                </div>
                            </div>
                        </div>

                        <h2 class="content-heading text-black">Опис рецепту</h2>
                        <div class="row items-push">
                            <div class="col-lg-3">
                                <p class="text-muted">
                                    Додайте опис, щоб зацікавити рецептом
                                </p>
                            </div>
                            <div class="col-lg-7 offset-lg-1">
                                <div class="form-group">
                                    <label for="re-listing-description">Опис</label>
                                    <textarea class="form-control form-control-lg" id="re-listing-description"
                                              name="description_for_recipe" rows="8"></textarea>
                                </div>

                            </div>
                        </div>
                        <!-- Additional Info -->

                        <!-- END Additional Info -->

                        <!-- Contact Info -->
                        <h2 class="content-heading text-black">Інгредієнти</h2>
                        <div class="row items-push">
                            <div class="col-lg-3">
                                <p class="text-muted">
                                    Які потрібно інгредієнти для вашого рецепту
                                </p>
                            </div>
                            <div class="col-lg-6  offset-lg-1 container2">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Інгредієнти:</label>
                                    <div class="input-group mb-3">
                                        <div class="col-md-7 p-0">
                                            {{--                                            <input type="text" class="form-control"--}}
                                            {{--                                                   aria-label="Text input with checkbox" name="ing[]"/>--}}
                                            <input
                                                type="text" class="form-control" list="ing"
                                                aria-label="Text input with checkbox" name="ing[]"/>
                                        </div>
                                        <datalist id="ing">
                                            @foreach($ingredient as $i)
                                                <option value="{{$i->name}}">{{$i->name}}</option>
                                            @endforeach
                                        </datalist>
                                        <input
                                            type="text" class="form-control col-xs-2 ml-3"
                                            aria-label="Text input with checkbox" name="count[]"/>
                                        <input
                                            type="text" class="form-control col-xs-2 ml-3 mr-3"
                                            aria-label="Text input with checkbox" name="kind[]"/>

                                        <div class="input-group-prepend">
                                            <div class="input-group-text  add_form_field_copy ">
                                                <i class="fa fa-plus text-dark"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2 class="content-heading text-black">Інструкція</h2>
                        <div class="row items-push  container3">
                            <div class="div">
                                <div class="div">
{{--                                    <input type="file" accept="image/*" onchange="loadFile(event)" name="image[]">--}}
                                    <div class="form-group">
                                        <div class="custom-file form">
                                            <input type="file" accept="image/*" onchange="loadFile(event)"
                                                   class="custom-file-input" name="image[]"
                                                   data-toggle="custom-file-input" multiple>
                                            <label class="custom-file-label" for="re-listing-photos">Choose files</label>
                                        </div>
                                        <div class="div">

                                            <img width="300" height="200" id="output"/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-7 offset-lg-1">
                                <div class="form-group">

                                    <div class="input-group mb-3">
                                    <textarea class="form-control" id="re-listing-description"
                                              name="description[]" rows="11"></textarea>
                                        <div class="input-group-prepend">
                                            <div class="input-group-text  add_form_field_copy1 ">
                                                <i class="fa fa-plus text-dark"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    {{--                        <h2 class="content-heading text-black">Working hours</h2>--}}
                    {{--                        <div class="row items-push">--}}
                    {{--                            <div class="col-lg-3">--}}
                    {{--                                <p class="text-muted">--}}
                    {{--                                    Hours when you work--}}
                    {{--                                </p>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="col-lg-7 offset-lg-1">--}}
                    {{--                                <div class="form-group">--}}
                    {{--                                    <label for="re-listing-name">Година відкриття</label>--}}
                    {{--                                    <input class="form-control form-control-lg" type="time" value="09:00"--}}
                    {{--                                           name="start_hour" id="start_hour">--}}
                    {{--                                </div>--}}
                    {{--                                <div class="form-group">--}}
                    {{--                                    <label for="re-listing-name">Година закриття</label>--}}
                    {{--                                    <input class="form-control form-control-lg" type="time" value="18:00"--}}
                    {{--                                           name="end_hour" id="end_hour">--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    <!-- END Contact Info -->

                        <!-- Form Submission -->
                        <div class="row items-push">
                            <div class="col-lg-7 offset-lg-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-alt-success">
                                        <i class="fa fa-plus mr-5"></i>
                                        Add Listing
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- END Form Submission -->
                    </form>
                </div>
            </div>
        </div>
        <!-- END Page Content -->

    </main>
    <!-- Footer -->
    <footer id="page-footer" class="opacity-0">
        <div class="content py-20 font-size-xs clearfix">
            <div class="float-right">
                Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600"
                                                                          href="https://1.envato.market/ydb"
                                                                          target="_blank">pixelcave</a>
            </div>
            <div class="float-left">
                <a class="font-w600" href="https://1.envato.market/95j" target="_blank">Codebase 3.1</a> &copy; <span
                    class="js-year-copy"></span>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!--
    Codebase JS Core

    Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
    to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

    If you like, you could also include them separately directly from the assets/js/core folder in the following
    order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

    assets/js/core/jquery.min.js
    assets/js/core/bootstrap.bundle.min.js
    assets/js/core/simplebar.min.js
    assets/js/core/jquery-scrollLock.min.js
    assets/js/core/jquery.appear.min.js
    assets/js/core/jquery.countTo.min.js
    assets/js/core/js.cookie.min.js
-->
<script src="{{asset('assets/js/codebase.core.min.js')}}"></script>

<!--
    Codebase JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at assets/_es6/main/app.js
-->
<script src="{{asset('assets/js/codebase.app.min.js')}}"></script>

<!-- Page JS Plugins -->
<script src="{{asset('assets/js/plugins/chartjs/Chart.bundle.min.js')}}"></script>

<!-- Page JS Code -->
<script src="{{asset('assets/js/pages/be_pages_dashboard.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        var max_fields = 40;
        var wrapper2 = $(".container2");
        var add_button1 = $(".add_form_field_copy");

        var wrapper = $(".container3");
        var add_button = $(".add_form_field_copy1");

        var y = 1;
        $(add_button1).click(function (e) {
            e.preventDefault();
            if (y < max_fields) {
                y++;
                $(wrapper2).append('\n' +
                    '<div class="form-group">\n' +
                    '<div class="input-group mb-3">\n' +
                    '<div class="col-md-7 p-0">\n' +
                    '<input type="text" class="form-control"\n' +
                    'aria-label="Text input with checkbox" list="ing" name="ing[]"/>\n' +
                    '</div>\n' +
                    '<datalist id="ing">\n' +
                    '                                            @foreach($ingredient as $i)\n' +
                    '                                                <option value="{{$i->name}}">{{$i->name}}</option>\n' +
                    '                                            @endforeach\n' +
                    '                                        </datalist>'+
                    '<input\n' +
                    'type="text" class="form-control col-xs-2 ml-3"\n' +
                    'aria-label="Text input with checkbox" name="count[]"/>\n' +
                    '<input\n' +
                    'type="text" class="form-control col-xs-2 ml-3 mr-3"\n' +
                    'aria-label="Text input with checkbox" name="kind[]"/>\n' +
                    '<div class="input-group-prepend delete">\n' +
                    '<div class="input-group-text  ">\n' +
                    '<i class="fa fa-minus text-dark"></i>\n' +
                    '</div>\n' +
                    '</div>\n' +
                    '</div>                                    ' +
                    '</div>' +
                    ''
                ); //add input box
            } else {
                alert('You Reached the limits')
            }
        });
        $(wrapper2).on("click", ".delete", function (e) {
            e.preventDefault();
            $(this).parent('div').remove();
            y--;
        });

        var x = 1;
        $(add_button).click(function (e) {
            e.preventDefault();
            if (x < max_fields) {
                x++;
                $(wrapper).append(' <div class="block-content">' +
                    '<div class="row items-push  container3" id="div">\n' +
                    '<div class="div">\n' +
                    '                                <div class="div">\n' +
                    '                                    <div class="form-group">\n' +
                    '                                        <div class="custom-file form">\n' +
                    '                                            <input type="file" accept="image/*" onchange="loadFile(event)"\n' +
                    '                                                   class="custom-file-input" name="image[]"\n' +
                    '                                                   data-toggle="custom-file-input" multiple>\n' +
                    '                                            <label class="custom-file-label" for="re-listing-photos">Choose files</label>\n' +
                    '                                        </div>\n' +
                    '                                        <div class="div">\n' +
                    '                                            <img width="300" height="200" id="output"/>\n' +
                    '                                        </div>\n' +
                    '                                    </div>\n' +
                    '                                </div>\n' +
                    '                            </div>\n' +
                    '                            <div class="col-lg-7 offset-lg-1">\n' +
                    '                                <div class="form-group">\n' +
                    '                                    <div class="input-group mb-3">\n' +
                    '                                    <textarea class="form-control" id="re-listing-description"\n' +
                    '                                              name="description[]" rows="11"></textarea>\n' +
                    '                                        <div class="input-group-prepend delete">\n' +
                    '                                            <div class="input-group-text  add_form_field_copy1 ">\n' +
                    '                                                <i class="fa fa-minus text-dark"></i>\n' +
                    '                                            </div>\n' +
                    '                                        </div>\n' +
                    '                                    </div>\n' +
                    '                                </div>\n' +
                    '                            </div>' +
                    '                        </div>' +
                    '                        </div>' +
                    ''
                ); //add input box
            } else {
                alert('You Reached the limits')
            }
        });
        $(wrapper).on("click", ".delete", function (e) {
            e.preventDefault();
            $(this).parent('div').parent('div').parent('div').parent('div').remove();
            x--;
        });
    });
</script>
<script>
    var loadFile = function (event) {
        var reader = new FileReader();
        reader.onload = function () {
            var output = document.getElementById('output');
            output.src = reader.result;
            document.getElementById('output').id = 'two';
        };
        reader.readAsDataURL(event.target.files[0]);

    };
</script>
</body>
</html>

