<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\message as m;
class messageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function unreadmsg(){
        
        $uid =  Auth::user()->id;
               
        
         if ($uid == 1){
                $query = m::where('flag','=','0')->get()->toArray();
            }

        else{
                $query = m::where('flag','=','0')->where('id','=',$uid)->get()->toArray();
            }

         echo json_encode($query);
    }

}