<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title> Hazz & Content Management </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.ico">

        <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets') }}/css/icons.css" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">
            <div class="card card-pages">

                <div class="card-body">
                    <div class="text-center m-t-20 m-b-30">
                        <a href="{{ url('admin/panel') }}" class="logo logo-admin">
                            Admin Panel
                        </a>
                    </div>

                    @yield("content")

                </div>
            </div>
        </div>



        <!-- jQuery  -->
        <script src="{{ asset('assets') }}/js/jquery.min.js"></script>
        <script src="{{ asset('assets') }}/js/popper.min.js"></script>
        <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
        <script src="{{ asset('assets') }}/js/modernizr.min.js"></script>
        <script src="{{ asset('assets') }}/js/detect.js"></script>
        <script src="{{ asset('assets') }}/js/fastclick.js"></script>
        <script src="{{ asset('assets') }}/js/jquery.slimscroll.js"></script>
        <script src="{{ asset('assets') }}/js/jquery.blockUI.js"></script>
        <script src="{{ asset('assets') }}/js/waves.js"></script>
        <script src="{{ asset('assets') }}/js/wow.min.js"></script>
        <script src="{{ asset('assets') }}/js/jquery.nicescroll.js"></script>
        <script src="{{ asset('assets') }}/js/jquery.scrollTo.min.js"></script>

        <script src="{{ asset('assets') }}/js/app.js"></script>

    </body>
</html>