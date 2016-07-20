<!-- Page Content -->
@extends('layouts.header')
@section('content')
       
            <div class="container-fluid">
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
                                <div>
                            

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example" ng-controller="xmltransactions" ng-init="xmltransactions.initialize()">
                                    
                                    <thead>
                                        <tr>
                                            <th>Transaction No.</th>
                                            <th>User Id</th>
                                            <th>Date</th>
                                            <th>Seller No.</th>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Credit Card No.</th>
                                        </tr>
                                    </thead>

                                  <tr ng-repeat = "x in myData5">
                                        <td>
                                          <%x.transno%>
                                        </td>
                                        <td>
                                           <%x.uid%>
                                        </td>
                                        <td>
                                           <%x.date%>
                                        </td>
                                        <td>
                                           <%x.sellerno%>
                                        </td>
                                        <td>
                                           <%x.product%>
                                        </td>
                                        <td>
                                           <%x.price%>
                                        </td>
                                        <td>
                                           <%x.number%>
                                        </td>
                                                     
                                    </tr>
                                    
                                </table>
                                </div>
                            </div>
                        </div>

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
@endsection