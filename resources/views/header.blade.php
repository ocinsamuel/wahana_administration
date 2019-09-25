<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Version: 5.0.3
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <title>
            <?php if (isset($active)) { echo ucfirst($active); }?> | Admin NEXTGEN Sukawarna
        </title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!--end::Web font -->
        <!--begin::Base Styles -->
        <!--end::Page Vendors -->
        <link href="{{asset('css/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
        <!--end::Base Styles -->
        <link rel="shortcut icon" href="assets/demo/default/media/img/logo/favicon.ico" />

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    </head>
    <!-- end::Head -->
    <script type="text/javascript">
      var base_url = "{{ URL::to('/') }}";
    </script>
    <style type="text/css">
        #edit_event_modal th, #edit_event_modal td {
            text-align: center;
        }
    </style>
    <!-- end::Body -->
    <body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <!-- BEGIN: Header -->
            <header class="m-grid__item    m-header "  data-minimize-offset="200" data-minimize-mobile-offset="200" >
                <div class="m-container m-container--fluid m-container--full-height">
                    <div class="m-stack m-stack--ver m-stack--desktop">
                        <!-- BEGIN: Brand -->
                        <div class="m-stack__item m-brand  m-brand--skin-dark ">
                            <div class="m-stack m-stack--ver m-stack--general">
                                <div class="m-stack__item m-stack__item--middle m-brand__logo">
                                    <a href="index.html" class="m-brand__logo-wrapper">
                                        <img alt="GBI Sukawarna" width = "100%" src="{{ asset('img/logo-sukawarna.png') }}"/>
                                    </a>
                                </div>
                                <div class="m-stack__item m-stack__item--middle m-brand__tools">
                                    <!-- BEGIN: Left Aside Minimize Toggle -->
                                    <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block 
                     ">
                                        <span></span>
                                    </a>
                                    <!-- END -->
                                    <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                                    <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                        <span></span>
                                    </a>
                                    <!-- END -->
                                    <!-- BEGIN: Responsive Header Menu Toggler -->
                                    <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                        <span></span>
                                    </a>
                                    <!-- END -->
                                    <!-- BEGIN: Topbar Toggler -->
                                    <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                        <i class="flaticon-more"></i>
                                    </a>
                                    <!-- BEGIN: Topbar Toggler -->
                                </div>
                            </div>
                        </div>
                        <!-- END: Brand -->
                        <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                            <!-- BEGIN: Horizontal Menu -->
                            <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn">
                                <i class="la la-close"></i>
                            </button>
                            <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark "  >
                                <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
                                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
                                        <a  href="#" class="m-menu__link m-menu__toggle">
                                            <i class="m-menu__link-icon flaticon-add"></i>
                                            <span class="m-menu__link-text">
                                                Actions
                                            </span>
                                            <i class="m-menu__hor-arrow la la-angle-down"></i>
                                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                                        </a>
                                        <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
                                            <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                            <ul class="m-menu__subnav">
                                                <li class="m-menu__item "  aria-haspopup="true">
                                                    <a  href="#" class="m-menu__link generate_qrcode" data-toggle="modal" data-target="#qrcode_modal">
                                                        <i class="m-menu__link-icon la la-qrcode"></i>
                                                        <span class="m-menu__link-text">
                                                            Create New QR Code
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                    <a  href="header/actions.html" class="m-menu__link ">
                                                        <i class="m-menu__link-icon flaticon-diagram"></i>
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">
                                                                    Generate Reports
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                                <div class="m-stack__item m-topbar__nav-wrapper">
                                    <ul class="m-topbar__nav m-nav m-nav--inline">
                                        <li class="
                m-nav__item m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center m-dropdown--mobile-full-width m-dropdown--skin-light    m-list-search m-list-search--skin-light" 
                data-dropdown-toggle="click" data-dropdown-persistent="true" id="m_quicksearch" data-search-type="dropdown">
                                            <a href="{{ route('logout') }}" class="m-nav__link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                <span class="m-nav__link-icon">
                                                    <i class="flaticon-logout"></i>
                                                </span>
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- END: Horizontal Menu -->
                        </div>
                    </div>
                </div>
            </header>

            <!--begin::Modal-->
            <div class="modal fade" id="qrcode_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                New QR Code
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">
                                    &times;
                                </span>
                            </button>
                        </div>
                        <form type="GET" action="" target="_blank">
                            <div class="modal-body">
                                    <div class="form-group">
                                        <label for="recipient-name" class="form-control-label">
                                            Event:
                                        </label>
                                        <select class="form-control m-input" name="activity">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="form-control-label">
                                            Date:
                                        </label>
                                        <input class="form-control m-input" type="date" name="date">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    Generate
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--end::Modal-->
            <!-- END: Header -->