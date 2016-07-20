
var app = angular.module('myApp', [],function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });

app.controller('customerCtrl2', function($scope, $http){
    $http.get("unreadmsg").then(function(respond){
        $scope.myData = respond.data;
        $scope.count = respond.data.length;     
    });   

    $scope.clearEmail = function(){
        $scope.count = 0;

        $http.get("editemail").then(function(output){
                        console.log(output);
                        console.log(output.data);
        });
    }

}); 
app.controller('personsjson', function($scope, $http){
    console.log(1);
    $http.get("personsjson").then(function(respond){
        $scope.myData2 = respond.data; 
        console.log($scope.myData2);   
    });   
}); 

app.controller('cardinfojson', function($scope, $http){
    $http.get("cardinfojson").then(function(respond){
        $scope.myData3 = respond.data;   
        console.log($scope.myData3);    
     });  
});  

/*app.controller('xmltransactions', function($scope, $http){
    $http.get("transactions.php",
       {
            transformResponse: function(cnv){
                var x2js = new X2JS();
                var aftCnv = x2js.xml_str2json(cnv);
                return aftCnv;
            }
       })
    .success(function(response){
        $scope.details = response.response.transactions.transaction;
        console.log(response.response.transactions.transaction);
    });   

});  */


  app.controller('xmltransactions', function($scope, $http){
      $http.get("transactionsajax").then(function(respond){
        console.log(respond.data);
         $scope.myData5 =  respond.data;
        console.log($scope.myData5);     
        });
});

