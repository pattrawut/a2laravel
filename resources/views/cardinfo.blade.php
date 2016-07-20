@extends('layouts.header');
@section('content')

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Credit Card Information
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example" ng-controller="cardinfojson" ng-init="cardinfojson.initialize()" >
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Number</th>
                                            <th>Issuer</th>
                                            <th>Expire</th>
                                            <th>Limit</th>
                                            <th>Currency</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                       <tr ng-if="<?php echo $uid; ?> == 1 ||<?php echo $uid; ?> == x.id" ng-repeat = "x in myData3">
                                            <td >
                                                <% x. firstname + ' ' + x.lastname%>
                                            </td>
                                            <td>
                                                <% x. number %>
                                            </td>
                                            <td>
                                                <% x. issuer %>
                                            </td>  
                                            <td>
                                                <% x. exp %>
                                            </td>   
                                            <td>
                                                <% x. limit %>
                                            </td>
                                            <td>
                                                <% x. currency %>
                                            </td>              
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
@endsection