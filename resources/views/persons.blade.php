@extends('layouts.header');
@section('content')
        <!-- Page Content -->
            <div class="row" ng-controller="personsjson" ng-init="personsjson.initialize()">
                <div class="col-lg-12">
                    <div class="chat-panel panel panel-default">
                        <div class="panel-heading" >
                        
                            <i class="fa fa-comments fa-fw" ></i>
                            
                            @if($uid==1)
                                Information about <%myData2.length%> people.
                            @else
                                Information about 1 person.
                            @endif
                            
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-refresh fa-fw"></i> Refresh
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-check-circle fa-fw"></i> Available
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-times fa-fw"></i> Busy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-clock-o fa-fw"></i> Away
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.panel-heading -->

                            
                        <div class="panel-body" >
                            <ul class="chat">                                     
                                    <li class="left clearfix" ng-if="<?php echo $uid; ?> == 1 ||<?php echo $uid; ?> == x.id" ng-repeat = "x in myData2">
                                    <span class="chat-img pull-left">
                                        <!--http://placehold.it/50/55C1E7/fff-->
                                        
                                        <img src="assests/img/user.png" alt="User Avatar" class="img-circle">
                                    </span>
                                    
                                    <div class="chat-body clearfix"  >
                                        <div class="header">
                                            <strong class="primary-font"><% x. firstname %></strong>
                                        </div>
                                        <table border="0"><tbody>
                                            <tr>
                                            <td><b>Name:</b></td>
                                            <td> <% x. firstname + ' ' + x.lastname %></td>
                                            </tr>
                                            <tr>
                                            <td><b>Location:</b></td>
                                            <td><% x.city %></td>
                                            </tr>
                                            <tr>
                                            <td><b>Telephone:</b></td>
                                            <td><% x.telephone %></td>
                                            </tr>
                                            <tr>
                                            <td><b>E-mail</b></td>
                                            <td><% x.email %></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </li>
                               
                                
                                </li>
                               
                                
                                </ul>
                        </div>
                        
                        <!-- /.panel-body -->
                        <div class="panel-footer">
                            <div class="input-group">
                                <p><em>Credit card owner information</em></p>
                            </div>
                        </div>
                        <!-- /.panel-footer -->
                    </div>
                </div>
                <!-- /.col-lg-12 -->    
            </div>
        </div>

    </div>
    <!-- /#wrapper -->
@endsection