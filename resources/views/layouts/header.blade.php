<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <link rel="stylesheet" href="">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EGCO423: Dashboard</title>


     <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="assests/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="assests/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="assests/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assests/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="assests/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assests/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <style>
        .msg-alert{
            display: block;
            height: 15px;
            width: 15px;
            line-height: 15px;

            -webkit-border-radius: 50%;
            border-radius: 50%;

            background-color: grey;
            color: white;
            text-align: center;
            font-size: 4px; 
        }

    </style>


</head>

<body ng-app= "myApp" >

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
                <a class="navbar-brand" href="<% url('/') %>"><img src = "assests/img/MU2.png"  width='30%' height='180%' / ></a>
            </div>



@if(!Auth::guest())
            
            <ul class="nav navbar-top-links navbar-right" ng-controller="customerCtrl2" ng-init="customerCtrl2.initialize()">
        
          <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        {{Auth::user()->name}}<i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li><a href="{{ url('/signout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                
    </ul>
 <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="{{ url('/') }}"><i class="fa fa-dashboard fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="{{ url('/persons') }}"><i class="fa fa-bar-chart-o fa-fw"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Card Info<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('/cardinfo2') }}">Card Info</a>
                                </li>    
                                <li>
                                    <a href="{{ url('/cardinfo') }}">Card Info(Angular)</a>
                                </li>                              
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('/cardstate') }}"><i class="fa fa-edit fa-fw"></i> Card Statement</a>
                        </li>
                        <li>
                            <a href="{{ url('/listtransactions') }}"><i class="fa fa-wrench fa-fw"></i> Transactions</a>
                        </li>
                        
                        
                        @if(Auth::user()->admin)
                        <li>
                                <a href="{{ url('/searchnews') }}"><i class="fa fa-sitemap fa-fw"></i> Search News</a>
                        </li>                   
                        @endif
                        


                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
</div>

</nav>


            </div>

           <div id="page-wrapper">
                <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">EGCO427: DBProject</h3>
                </div>                
                <!-- /.col-lg-12 -->
            </div>

@else
    <ul class="nav navbar-top-links navbar-right">
                  
                    <a class="" href="{{ url('/login') }}">
                       Login                       
                    </a>
                    
        
                        <li><a href="{{ url('/register') }}"><i class="fa fa-sign-out fa-fw"></i> Register</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                
    </ul>
            
@endif

         
            @yield('content')



<script src="assests/bower_components/jquery/dist/jquery.min.js"></script>
<script src="assests/js/jquery-2.1.3.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
<script src="assests/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
<script src="assests/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
<script src="assests/bower_components/raphael/raphael-min.js"></script>
<script src="assests/bower_components/morrisjs/morris.min.js"></script>
<script src="assests/js/morris-data.js"></script>


<script src="assests/js/angularjs.js"></script>
<script src="assests/js/flot-data.js"></script>
<script src="assests/js/xml2json.js"></script>

    <!-- Custom Theme JavaScript -->
<script src="assests/dist/js/sb-admin-2.js"></script>

</body>

</html>
