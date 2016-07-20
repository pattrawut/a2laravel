    <script type="text/javascript">
        function showRSS(str)
        {
        if (str.length==0)
          {
          document.getElementById("rssOutput").innerHTML="";
          return;
          }
        if (window.XMLHttpRequest)
          {// code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp = new XMLHttpRequest();
          }
        else
          {// code for IE6, IE5
          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
          }
        xmlhttp.onreadystatechange=function()
          {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            document.getElementById("rssOutput").innerHTML=xmlhttp.responseText;
            }
          }
        xmlhttp.open("GET","livesearch/"+str,true);
        xmlhttp.send();
        }
    </script>



@extends('layouts.header');
@section('content')
        <!-- Page Content -->
        
            <div class="container-fluid">
             <div class="panel panel-info">
               <div class="panel-heading"> Search News</div>
                <div class="panel-body">


                <div class="row">
                    <div class="col-lg-12">
                        <h2>Search Links</h2>
                            <form>
                                <select onchange="showRSS(this.value)">
                                    <option value="">Select an RSS-feed:</option>
                                    <option value="Google">Google News</option>
                                    <option value="Sanook">Sanook IT News</option>
                                </select>
                            </form>
                            <br />
                            <div id="rssOutput">RSS-feed will be listed here...</div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

            </div>
            <!-- panel-body -->
            </div>
            <!-- panel -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
      
    <!-- /#wrapper -->
@endsection