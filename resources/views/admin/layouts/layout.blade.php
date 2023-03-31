<!DOCTYPE html>
<!--
Template Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://1.envato.market/vuexy_admin
Renew Support: https://1.envato.market/vuexy_admin
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  
<!-- Mirrored from pixinvent.com/demo/vuexy-html-bootstrap-admin-template/html/ltr/vertical-menu-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 11:57:06 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>{{ env('APP_NAME') }} > @yield('page-title')</title>
    <link rel="apple-touch-icon" href="{{asset('admin')}}/app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin')}}/app-assets/images/ico/favicon.ico">
    <link href="{{asset('admin')}}/fonts.googleapis.com/css219a5.css?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/app-assets/vendors/css/extensions/toastr.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/app-assets/css/themes/bordered-layout.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/app-assets/css/themes/semi-dark-layout.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/app-assets/css/pages/dashboard-ecommerce.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/app-assets/css/plugins/charts/chart-apex.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/app-assets/css/plugins/extensions/ext-component-toastr.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    {{ view('admin.layouts.topbar') }}

    {{ view('admin.layouts.leftbar') }}

     <!-- BEGIN: Content-->
     <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">

            {{-- {{ view('app.layout.alerts') }} --}}

            @if (!request()->routeIs('dashboard'))
                <div class="content-header row">
                    @yield('breadcrumbs')

                    <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                        <div class="mb-1 breadcrumb-right">
                            <div class="dropdown">
                            
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <div class="content-header row">
            </div>
            <div class="content-body">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- END: Content-->
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    {{ view('admin.layouts.footer') }}


   