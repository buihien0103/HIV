<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Hệ thống quản lý theo dõi khám bệnh">
    <meta name="author" content="Bui Thi Thu Hien">
    <title>Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ url('public/admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ url('public/admin/bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ url('public/admin/dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ url('public/admin/bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="{{ url('public/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{ url('public/admin/bower_components/datatables-responsive/css/dataTables.responsive.css')}}" rel="stylesheet">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin Area</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{url('/')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="http://localhost/HIV/admin/home"><i class="fa fa-home"></i> Trang chủ<span class="fa arrow"></span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users"></i> Bệnh nhân<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::route('admin.benhnhan.list')!!}">Thông tin</a>
                                </li>
                                <li>
                                    <a href="{!!URL::route('admin.khambenh.list')!!}">Theo dõi khám bệnh</a>
                                </li>
                                <li>
                                    <a href="{!!URL::route('admin.nhatky.list')!!}">Nhật ký hằng ngày</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="{!!URL::route('admin.uongthuoc.list')!!}"><i class="fa fa-book"></i> Nhắc nhở<span class="fa arrow"></span></a>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-tasks"></i> Phản hồi<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::route('admin.tacdung.list')!!}">Tác dụng phụ</a>
                                </li>
                                <li>
                                    <a href="{!!URL::route('admin.dichvu.list')!!}">Dịch vụ</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{!!URL::route('admin.ketqua.list')!!}"><i class="fa fa-check"></i> Kết quả<span class="fa arrow"></span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-life-ring"></i> Quản trị<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::route('admin.dantoc.list')!!}">Dân tộc</a>
                                </li>
                                <li>
                                    <a href="{!!URL::route('admin.tongiao.list')!!}">Tôn giáo</a>
                                </li>
                                <li>
                                    <a href="{!!URL::route('admin.hocvan.list')!!}">Học Vấn</a>
                                </li>
                                <li>
                                    <a href="{!!URL::route('admin.nghenghiep.list')!!}">Nghề nghiệp</a>
                                </li>
                                <li>
                                    <a href="{!!URL::route('admin.user.list')!!}">Người dùng</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="{!!URL::route('admin.lienhe.list')!!}"><i class="fa fa-phone"></i> Liên hệ<span class="fa arrow"></span></a>
                        </li>
                        

                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"> @yield('controller')
                            <small>@yield('action')</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-12">
                    	@if(Session::has('flash_message'))
                        	<div class="alert alert-{!! Session::get('flash_level') !!}">
                            	{!! Session::get('flash_message')!!}
                            </div>
                        @endif
                    </div>
                    <!--Đây là nơi chứa nội dung-->
                    @yield('content')
                    
                    <!--End Đây là nơi chứa nội dung-->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ url('public/admin/bower_components/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ url('public/admin/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ url('public/admin/dist/js/sb-admin-2.js')}}"></script>

    <!-- DataTables JavaScript -->
    <script src="{{ url('public/admin/bower_components/DataTables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('public/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')}}"></script>
<script src="{{url('public/admin/js/myscript.js')}}"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
</body>

</html>
