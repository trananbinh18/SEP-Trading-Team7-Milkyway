<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Trang quản lí tài khoản của admin</title>

        <!-- Bootstrap Core CSS -->
        <link href="resources/assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="resources/assets/css/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="resources/assets/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="resources/assets/css/dataTables/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="resources/assets/css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="resources/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            
                           
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Tin nhắn
                                        <span class="pull-right text-muted small">4 phút trước</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> Công việc mới
                                        <span class="pull-right text-muted small">4 phút trước</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>Xem tất cả thông báo</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> Pet <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> Thông tin người dùng</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Cài đặt</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Thoát</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Tìm kiếm">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-table fa-fw"></i> Bảng dữ liệu</a>
                            </li> 
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Bảng Dữ liệu</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              Bảng dữ liệu được cập nhật
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Số thứ tự</th>
                                                <th>Email</th>
                                                <th>Mật khẩu</th>                                                
                                                <th>Ghi chú</th>
                                                <th>Tùy chọn</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>1</td>
                                                <td>Pet@gmail.com</td>
                                                <td>12222222</td>
                                                <td class="center">tài khoản giới hạn</td>
                                              <td class="center"><a href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> <a href="#"><span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> </td>
                                            </tr>
                                            <tr class="even gradeC">
                                                <td>2</td>
                                                <td>pet@gmail.com</td>
                                                <td>1412312</td>
                                                <td class="center">tài khoản giới hạn</td>
                                                 <td class="center"><a href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> <a href="#"><span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> </td>
                                            </tr>
                                            <tr class="odd gradeA">
                                                <td>3</td>
                                                <td>pet@gmail.com</td>
                                                <td>12412535</td>
                                                <td class="center">tài khoản giới hạn</td>
                                                 <td class="center"><a href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> <a href="#"><span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> </td>
                                            </tr>
                                            <tr class="even gradeA">
                                                <td>4</td>
                                                <td>pet@gmail.com</td>
                                                <td>1421213</td>
                                                <td class="center">tài khoản giới hạn</td>
                                                 <td class="center"><a href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> <a href="#"><span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> </td>
                                            </tr>
                                            <tr class="odd gradeA">
                                                <td>5</td>
                                                <td>pet@gmail.com</td>
                                                <td>1421213</td>
                                                <td class="center">tài khoản giới hạn</td>
                                                <td class="center"><a href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> <a href="#"><span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> </td>
                                            </tr>
                                            <tr class="even gradeA">
                                                <td>6</td>
                                                <td>pet@gmail.com</td>
                                                <td>12421312</td>
                                                <td class="center">tài khoản giới hạn</td>
                                                <td class="center"><a href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> <a href="#"><span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>1</td>
                                                <td>pet@gmail.com</td>
                                                <td>12421321</td>
                                                <td class="center">tài khoản giới hạn</td>
                                               <td class="center"><a href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> <a href="#"><span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>2</td>
                                                <td>pet@gmail.com</td>
                                                <td>12421321</td>
                                                <td class="center">tài khoản giới hạn</td>
                                               <td class="center"><a href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> <a href="#"><span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>3</td>
                                                <td>pet@gmail.com</td>
                                                <td>12421321</td>
                                                <td class="center">assets</td>
                                                <td class="center"><a href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> <a href="#"><span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>4</td>
                                                <td>pet@gmail.com</td>
                                                <td>12421321</td>
                                                <td class="center">assets</td>
                                                 <td class="center"><a href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> <a href="#"><span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>5</td>
                                                <td>pet@gmail.com</td>
                                                <td>12421321</td>
                                                <td class="center">assets</td>
                                                <td class="center"><a href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> <a href="#"><span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>6</td>
                                                <td>pet@gmail.com</td>
                                                <td>12421321</td>
                                                <td class="center">assets.</td>
                                                <td class="center"><a href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> <a href="#"><span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>7</td>
                                                <td>pet@gmail.com</td>
                                                <td>12421321</td>
                                                <td class="center">1.7</td>
                                               <td class="center"><a href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> <a href="#"><span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>8</td>
                                                <td>pet@gmail.com</td>
                                                <td>12421321</td>
                                                <td class="center">1.7</td>
                                               <td class="center"><a href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> <a href="#"><span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>9</td>
                                                <td>pet@gmail.com</td>
                                                <td>12421321</td>
                                                <td class="center">1.8</td>
                                               <td class="center"><a href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> <a href="#"><span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>2</td>
                                                <td>pet@gmail.com</td>
                                                <td>12421321</td>
                                                <td class="center">tài khoản giới hạn</td>
                                                <td class="center"><a href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> <a href="#"><span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>3</td>
                                                <td>pet@gmail.com</td>
                                                <td>12421321</td>
                                                <td class="center">tài khoản giới hạn</td>
                                                <td class="center"><a href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> <a href="#"><span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>4</td>
                                                <td>pet@gmail.com</td>
                                                <td>12421321</td>
                                                <td class="center">tài khoản giới hạn</td>
                                                <td class="center"><a href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> <a href="#"><span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>5</td>
                                               <td>pet@gmail.com</td>
                                                <td>12421321</td>
                                                <td class="center">tài khoản giới hạn</td>
                                              <td class="center"><a href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> <a href="#"><span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>6</td>
                                                <td>pet@gmail.com</td>
                                                <td>12421321</td>
                                                <td class="center">tài khoản giới hạn</td>
                                              <td class="center"><a href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> <a href="#"><span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> </td>                               </tr>
                                            <tr class="gradeA">
                                                <td>7</td>
                                                <td>pet@gmail.com</td>
                                                <td>12421321</td>
                                                <td class="center">tài khoản giới hạn</td>
                                               <td class="center"><a href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> <a href="#"><span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Mozilla 1.6</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">1.6</td>
                                               <td class="center"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> <span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span> </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Mozilla 1.7</td>
                                                <td>Win 98+ / OSX.1+</td>
                                                <td class="center">1.7</td>
                                                <td class="center"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> <span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span> </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Mozilla 1.8</td>
                                                <td>Win 98+ / OSX.1+</td>
                                                <td class="center">1.8</td>
                                                <td class="center"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> <span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span> </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Seamonkey 1.1</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td class="center">1.8</td>
                                                <td class="center"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> <span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span> </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Epiphany 2.20</td>
                                                <td>Gnome</td>
                                                <td class="center">1.8</td>
                                               <td class="center"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> <span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span> </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>Safari 1.2</td>
                                                <td>OSX.3</td>
                                                <td class="center">125.5</td>
                                               <td class="center"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> <span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span> </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>Safari 1.3</td>
                                                <td>OSX.3</td>
                                                <td class="center">312.8</td>
                                               <td class="center"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> <span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span> </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>Safari 2.0</td>
                                                <td>OSX.4+</td>
                                                <td class="center">419.3</td>
                                                <td class="center"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> <span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span> </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>Safari 3.0</td>
                                                <td>OSX.4+</td>
                                                <td class="center">522.1</td>
                                               <td class="center"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> <span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span> </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>OmniWeb 5.5</td>
                                                <td>OSX.4+</td>
                                                <td class="center">420</td>
                                                <td class="center"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> <span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span> </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>iPod Touch / iPhone</td>
                                                <td>iPod</td>
                                                <td class="center">420.1</td>
                                                <td class="center"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> <span style="margin-left: 5em;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span> </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>S60</td>
                                                <td>S60</td>
                                                <td class="center">413</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 7.0</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 7.5</td>
                                                <td>Win 95+ / OSX.2+</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 8.0</td>
                                                <td>Win 95+ / OSX.2+</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 8.5</td>
                                                <td>Win 95+ / OSX.2+</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 9.0</td>
                                                <td>Win 95+ / OSX.3+</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 9.2</td>
                                                <td>Win 88+ / OSX.3+</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 9.5</td>
                                                <td>Win 88+ / OSX.3+</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera for Wii</td>
                                                <td>Wii</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Nokia N800</td>
                                                <td>N800</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Nintendo DS browser</td>
                                                <td>Nintendo DS</td>
                                                <td class="center">8.5</td>
                                                <td class="center">C/A<sup>1</sup>
                                                </td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>KHTML</td>
                                                <td>Konqureror 3.1</td>
                                                <td>KDE 3.1</td>
                                                <td class="center">3.1</td>
                                                <td class="center">C</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>KHTML</td>
                                                <td>Konqureror 3.3</td>
                                                <td>KDE 3.3</td>
                                                <td class="center">3.3</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>KHTML</td>
                                                <td>Konqureror 3.5</td>
                                                <td>KDE 3.5</td>
                                                <td class="center">3.5</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td>Tasman</td>
                                                <td>Internet Explorer 4.5</td>
                                                <td>Mac OS 8-9</td>
                                                <td class="center">-</td>
                                                <td class="center">X</td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>Tasman</td>
                                                <td>Internet Explorer 5.1</td>
                                                <td>Mac OS 7.6-9</td>
                                                <td class="center">1</td>
                                                <td class="center">C</td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>Tasman</td>
                                                <td>Internet Explorer 5.2</td>
                                                <td>Mac OS 8-X</td>
                                                <td class="center">1</td>
                                                <td class="center">C</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Misc</td>
                                                <td>NetFront 3.1</td>
                                                <td>Embedded devices</td>
                                                <td class="center">-</td>
                                                <td class="center">C</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Misc</td>
                                                <td>NetFront 3.4</td>
                                                <td>Embedded devices</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td>Misc</td>
                                                <td>Dillo 0.8</td>
                                                <td>Embedded devices</td>
                                                <td class="center">-</td>
                                                <td class="center">X</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td>Misc</td>
                                                <td>Links</td>
                                                <td>Text only</td>
                                                <td class="center">-</td>
                                                <td class="center">X</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td>Misc</td>
                                                <td>Lynx</td>
                                                <td>Text only</td>
                                                <td class="center">-</td>
                                                <td class="center">X</td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>Misc</td>
                                                <td>IE Mobile</td>
                                                <td>Windows Mobile 6</td>
                                                <td class="center">-</td>
                                                <td class="center">C</td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>Misc</td>
                                                <td>PSP browser</td>
                                                <td>PSP</td>
                                                <td class="center">-</td>
                                                <td class="center">C</td>
                                            </tr>
                                            <tr class="gradeU">
                                                <td>Other browsers</td>
                                                <td>All others</td>
                                                <td>-</td>
                                                <td class="center">-</td>
                                                <td class="center">U</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                               
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
               

        <!-- jQuery -->
        <script src="resources/assets/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="resources/assets/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="resources/assets/js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="resources/assets/js/dataTables/jquery.dataTables.min.js"></script>
        <script src="resources/assets/js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="resources/assets/js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

    </body>
</html>
