<?php

// Authentication
Route::auth();

Route::group(['middleware' => ['auth']], function () {
    //

//Cardinfo 2 route
    Route::get('/cardinfo2',function () {
    $uid =  Auth::user()->id;                    
    
    if (Auth::user()->admin){
        $query = App\personinfo::join('cardinfos','personinfos.id','=','cardinfos.uid')
                         ->select('personinfos.firstname','personinfos.lastname','personinfos.id','cardinfos.number','cardinfos.issuer','cardinfos.exp','cardinfos.limit','cardinfos.currency')
                         ->get();
    }else{
        $query = App\personinfo::join('cardinfos','personinfos.id','=','cardinfos.uid')
                         ->select('personinfos.firstname','personinfos.lastname','personinfos.id','cardinfos.number','cardinfos.issuer','cardinfos.exp','cardinfos.limit','cardinfos.currency')
                         ->where('id','=',$uid)
                         ->get();
    }
    return view('cardinfo2',$arrayName = array('query' => $query,'uid'=>Auth::user()->id, ));
});

//Cardinfo route
    Route::get('/cardinfo', function () {
   
    return view('cardinfo',$arrayName = array('uid' => Auth::user()->id, ));
});

//Return AJax call with database query result in json format

   Route::get('/cardinfojson', function () {
   
        $result = App\personinfo::join('cardinfos','personinfos.id','=','cardinfos.uid')
                         ->select('personinfos.firstname','personinfos.lastname','personinfos.id','cardinfos.number','cardinfos.issuer','cardinfos.exp','cardinfos.limit','cardinfos.currency')
                         ->get();

            echo json_encode($result);
        });

// Get transaction data from database and display in table
    Route::get('/transactions', function () {
    $uid = Auth::user()->id;

    if (Auth::user()->admin) {
            $data = App\cardstatement::all();
    }else{
            $data = App\cardstatement::where('uid','=',$uid)->get()->toArray();
    }
    
   
        return view('transactions',$arrayName = array('uid' => $uid,
                                                       'rows' => $data,
                                                     ));
        });

    Route::get('/transactionsajax', function () {
    $uid = Auth::user()->id;
    
    if (Auth::user()->admin) {
            $data = App\cardstatement::all();
    }else{
            $data = App\cardstatement::where('uid','=',$uid)->get()->toArray();
    }
            echo  json_encode($data);    
    });

    Route::get('/listtransactions', function () {
    $uid = Auth::user()->id;
            return view('listtransactions',$arrayName = array('uid' => $uid,));
    });

// User info
    Route::get('/persons', function () {
            return view('persons',$arrayName = array('uid' => Auth::user()->id,));
    });


// Unread Message
    Route::get('/unreadmsg',function(){

        $uid =  Auth::user()->id;                  
        
        if (Auth::user()->admin){
                $query = App\message::where('flag','=','0')->get()->toArray();
            }else{

                $query = App\message::where('flag','=','0')->where('uid','=',$uid)->get()->toArray();
            }

         echo json_encode($query);
});

    Route::get('/personsjson',function () {
                $data = App\personinfo::all();
                echo json_encode($data);
        });

    Route::get('/editemail',function(){
    $uid = Auth::user()->id;
            if (Auth::user()->admin) {
                $query = App\message::update(array('flag' => 1));
            }else
            $query = App\message::where('uid', $uid)
                                ->update(array('flag' => 1));    
    });


    Route::get('/cardstate',function(){
        return view('cardstate');
     });



});

Route::get('/', function () {
	return view('welcome',$arrayName = array('uid' => Auth::user()->id, ));
})->middleware('auth');


Route::get('/signout', function () {
    Auth::logout();
    return view('logout');

});

Route::get('/searchnews',['middleware' => 'isAdmin',function(){
    return view('searchnews');
}]);

Route::get('/livesearch/{way}',['middleware' => 'isAdmin',function($way){
     return view('livesearch',$row  = array('q' =>$way,));
}]);



