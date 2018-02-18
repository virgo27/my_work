<!DOCTYPE HTML>
<html>
    <head>
        <title>{{$page_title}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Bootstrap Core CSS -->
        <link href="{{url('css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
        <!-- Custom CSS -->
        <link href="{{url('css/style.css')}}" rel='stylesheet' type='text/css' />
        <!-- Graph CSS -->
        <link href="css/lines.css" rel='stylesheet' type='text/css' />
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <!----webfonts--->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
        <!---//webfonts--->  
        <!-- Nav CSS -->
        <link href="<?php echo(url("css/custom.css")); ?>" rel="stylesheet">
        <link href="{{url("css/custom.css")}}" rel="stylesheet">
        @yield('header-styles')

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>
        <script src="js/custom.js"></script>
        <!-- Graph JavaScript -->
        <script src="js/d3.v3.js"></script>
        <script src="js/rickshaw.js"></script>
        @yield('header-scripts')
    </head>
    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Modern</a>
                </div>
                <!-- /.navbar-header -->
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge">4</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-menu-header">
                                <strong>Messages</strong>
                                <div class="progress thin">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </li>
                            <li class="avatar">
                                <a href="#">
                                    <img src="images/1.png" alt=""/>
                                    <div>New message</div>
                                    <small>1 minute ago</small>
                                    <span class="label label-info">NEW</span>
                                </a>
                            </li>
                            <li class="avatar">
                                <a href="#">
                                    <img src="images/2.png" alt=""/>
                                    <div>New message</div>
                                    <small>1 minute ago</small>
                                    <span class="label label-info">NEW</span>
                                </a>
                            </li>
                            <li class="avatar">
                                <a href="#">
                                    <img src="images/3.png" alt=""/>
                                    <div>New message</div>
                                    <small>1 minute ago</small>
                                </a>
                            </li>
                            <li class="avatar">
                                <a href="#">
                                    <img src="images/4.png" alt=""/>
                                    <div>New message</div>
                                    <small>1 minute ago</small>
                                </a>
                            </li>
                            <li class="avatar">
                                <a href="#">
                                    <img src="images/5.png" alt=""/>
                                    <div>New message</div>
                                    <small>1 minute ago</small>
                                </a>
                            </li>
                            <li class="avatar">
                                <a href="#">
                                    <img src="images/pic1.png" alt=""/>
                                    <div>New message</div>
                                    <small>1 minute ago</small>
                                </a>
                            </li>
                            <li class="dropdown-menu-footer text-center">
                                <a href="#">View all messages</a>
                            </li>	
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/1.png"><span class="badge">9</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-menu-header text-center">
                                <strong>Account</strong>
                            </li>
                            <li class="m_2"><a href="#"><i class="fa fa-bell-o"></i> Updates <span class="label label-info">42</span></a></li>
                            <li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> Messages <span class="label label-success">42</span></a></li>
                            <li class="m_2"><a href="#"><i class="fa fa-tasks"></i> Tasks <span class="label label-danger">42</span></a></li>
                            <li><a href="#"><i class="fa fa-comments"></i> Comments <span class="label label-warning">42</span></a></li>
                            <li class="dropdown-menu-header text-center">
                                <strong>Settings</strong>
                            </li>
                            <li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                            <li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>
                            <li class="m_2"><a href="#"><i class="fa fa-usd"></i> Payments <span class="label label-default">42</span></a></li>
                            <li class="m_2"><a href="#"><i class="fa fa-file"></i> Projects <span class="label label-primary">42</span></a></li>
                            <li class="divider"></li>
                            <li class="m_2"><a href="#"><i class="fa fa-shield"></i> Lock Profile</a></li>
                            <li class="m_2"><a href="#"><i class="fa fa-lock"></i> Logout</a></li>	
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-right">
                    <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {
                        this.value = 'Search...';
                    }">
                </form>
@include('common.sidebar')                
                <!-- /.navbar-static-side -->
            </nav>
            <div id="page-wrapper">
                <div class="graphs">
                    <h3>{{$page_heading}}</h3>
                    <div class="col-xs-12">
@yield('main-section')
                    </div>
                    <div class="clearfix"></div>
                    <div class="copy">
                        <p>Copyright &copy; 2015 Modern. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
                    </div>
                </div>
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        @yield('footer-scripts')
    </body>
</html>
