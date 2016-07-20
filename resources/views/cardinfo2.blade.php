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
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
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
@for ($i = 0; $i < count($query); $i++)
        <tr><td> {{ $query[$i]['firstname']}}   {{ $query[$i]['lastname']}}</td><td> 
        {{$query[$i]['number'] }}</td><td> {{$query[$i]['issuer']}} </td><td> 
        {{$query[$i]['exp']}} </td><td> {{$query[$i]['limit'] }}</td><td>{{ $query[$i]['currency'] }}</td></tr>
@endfor


                                    </tbody>
                                </table>
                            </div>
@endsection