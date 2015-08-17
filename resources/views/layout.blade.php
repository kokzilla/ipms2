<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>IPMS-@yield('title')</title>
        {!! HTML::style('/css/app.css') !!}

        <!-- Bootstrap Core CSS -->
        {!! HTML::style('/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}

        <!-- MetisMenu CSS -->
        <link href="/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="/dist/css/timeline.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="/dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="/bower_components/morrisjs/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        {!! HTML::style('/css/custom.css') !!}
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->



    </head>

    <body>s

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                @include('layout-navbar-header')
                <!-- /.navbar-header -->

                @section('navbar-toplink')
                @include('layout-navbar-toplink')
                @show
                <!-- /.navbar-top-links -->

                <!-- side bar menu -->
                @section('sidebar-menu')
                @include('layout-sidebar-menu')
                @show
                <!-- /.sidebar-collapse -->

                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                @if (Session::has('message'))
                <div class="flash alert-info">
                    <p>{{ Session::get('message') }}</p>
                </div>  R
                @endif

                @if ($errors->any())
                <div class='flash alert-danger'>
                    @foreach ( $errors->all() as $error )
                    <p>{{ $error }}</p>
                    @endforeach
                </div>
                @endif

                @yield('content')
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

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
        <script scr="/js/form-validate-custom-lang.js"></script>
        <script src="/bower_components/jQuery-Form-Validator/form-validator/jquery.form-validator.min.js"></script>
        <script>
            var myLanguage = {
                errorTitle: 'Form submission failed!',
                requiredFields: 'You have not answered all required fields',
                badTime: 'You have not given a correct time',
                badEmail: 'You have not given a correct e-mail address',
                badTelephone: 'You have not given a correct phone number',
                badSecurityAnswer: 'You have not given a correct answer to the security question',
                badDate: 'You have not given a correct date',
                lengthBadStart: 'กรอกตัวเลข ',
                lengthBadEnd: ' หลัก',
                lengthTooLongStart: 'The input value is longer than ',
                lengthTooShortStart: 'The input value is shorter than ',
                notConfirmed: 'Input values could not be confirmed',
                badDomain: 'Incorrect domain value',
                badUrl: 'The input value is not a correct URL',
                badCustomVal: 'The input value is incorrect',
                andSpaces: ' and spaces ',
                badInt: 'ข้อมูลเป็นตัวเลข',
                badSecurityNumber: 'Your social security number was incorrect',
                badUKVatAnswer: 'Incorrect UK VAT Number',
                badStrength: 'The password isn\'t strong enough',
                badNumberOfSelectedOptionsStart: 'You have to choose at least ',
                badNumberOfSelectedOptionsEnd: ' answers',
                badAlphaNumeric: 'The input value can only contain alphanumeric characters ',
                badAlphaNumericExtra: ' and ',
                wrongFileSize: 'The file you are trying to upload is too large (max %s)',
                wrongFileType: 'Only files of type %s is allowed',
                groupCheckedRangeStart: 'Please choose between ',
                groupCheckedTooFewStart: 'Please choose at least ',
                groupCheckedTooManyStart: 'Please choose a maximum of ',
                groupCheckedEnd: ' item(s)',
                badCreditCard: 'The credit card number is not correct',
                badCVV: 'The CVV number was not correct',
                wrongFileDim: 'Incorrect image dimensions,',
                imageTooTall: 'the image can not be taller than',
                imageTooWide: 'the image can not be wider than',
                imageTooSmall: 'the image was too small',
                min: 'min',
                max: 'max',
                imageRatioNotAccepted: 'Image ratio is not accepted'
            };
            $.validate({
                language: myLanguage
            });
        </script>
    </body>

</html>
