@extends('layouts.header')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <img src = "assests/img/MU.png"/>
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                    <form method='POST' action="{{ url('/login') }}">
                            <fieldset>
                                {{ csrf_field() }}
             <div class="form-group">
                                    <input id="email" type="email" class="form-control" name="email" placeholder="email" value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="password" placeholder="password" name="password" type="password" value="">
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <input class="btn btn-lg btn-success btn-block" type="submit" name="submit" value="Login" /> 
                               
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
@endsection

