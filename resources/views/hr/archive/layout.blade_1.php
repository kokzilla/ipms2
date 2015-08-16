<!DOCTYPE html>
<?xml version="1.0" encoding="ISO-8859-1"?>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>PO-Oil Information System</title>
        {!! HTML::style('/css/app.css') !!}
        

        <!-- Bootstrap Core CSS -->
        {!! HTML::style('/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}

        <!-- MetisMenu CSS -->
        <link href="/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="/dist/css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="/dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="/bower_components/morrisjs/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- calendar -->
        <link rel="stylesheet" href="/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
        
        {!! HTML::style('/css/custom.css') !!}
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- jQuery -->
        <script src="/bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="/bower_components/metisMenu/dist/metisMenu.min.js"></script>


        <!-- Morris Charts JavaScript -->
        <script src="/bower_components/raphael/raphael-min.js"></script>
        <script src="/bower_components/morrisjs/morris.min.js"></script>


        <!-- Custom Theme JavaScript -->
        <script src="/dist/js/sb-admin-2.js"></script>

        <!-- DataTables JavaScript -->
        <script src="/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
        <script src="/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

        <!-- Calendar -->
        <script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
        <script type="text/javascript" src="/bower_components/moment/locale/th.js"></script>
        <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

        <!-- customer js -->

        <script src="/js/custom.js"></script>


    </head>

    <body>
        <!--#include file="/xml/app.xml" -->
        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                @include('layout-navbar-header')
                <!-- /.navbar-header -->

                @include('layout-navbar-toplink')
                <!-- /.navbar-top-links -->

                @include('hr/layout-sidebar-hr')
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <div class="row">
                    @if (Session::has('message'))       
                    <div class="alert alert-info">          
                        <p>{{ Session::get('message') }}</p>        
                    </div>  
                    @endif

                    @if ($errors->any())        
                    <div class='alert alert-danger'>            
                        @foreach ( $errors->all() as $error )               
                        <p>{{ $error }}</p>         
                        @endforeach     
                    </div>  
                    @endif
                </div>

                @yield('content')            
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

    </body>

</html>
