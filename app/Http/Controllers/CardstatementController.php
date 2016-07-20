<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cardstatement as Cardstatement;
use App\User as User;
use Session;
use Auth;
use View;

class CardstatementController extends Controller
{
    //
    public function show($id){

        $uid = Auth::user()->getId();
        $matchThese = ['id' => $id, 'uid' => $uid];
        if($uid==1){
        	$cardstatement = Cardstatement::where('id', '=', $id)->first();
            //Get Next Transaction
        $nextTransaction = Cardstatement::where('id', '>', $id)->min('id');

        //Get Previous Transaction
        $prevTransaction = Cardstatement::where('id', '<', $id)->max('id');
        }
        else{

            $cardstatement = Cardstatement::where('uid', '=', $uid)->where('id', '=', $id)->first();
            //Get Next Transaction
        $nextTransaction = Cardstatement::where('uid', '=', $uid)->where('id', '>', $id)->min('id');

        //Get Previous Transaction
        $prevTransaction = Cardstatement::where('uid', '=', $uid)->where('id', '<', $id)->max('id'); 
        }
        //dd($nextTransaction);
        
        
    	return view('Cardstatement', array('show' => $cardstatement ))->with('prevTransaction', $prevTransaction)->with('nextTransaction', $nextTransaction);
    }

    public function edittrans($id){
        
        $uid = Auth::user()->getId();

        $cardstatement = Cardstatement::where('id', '=', $id)->first();
        if($uid!=1){
            if($cardstatement->uid != $uid)
            {
                return redirect('cardstatement/');
            }
        }

        return view('Editstatement', array('record' => $cardstatement ));

    }


    public function index(){
        $uid = Auth::user()->getId();
        $matchThese = ['uid' => $uid];

        if($uid==1){
            $transaction = Cardstatement::all() -> first();
        }
        else{
            $transaction = Cardstatement::where($matchThese) -> first();
        }
        return redirect('/cardstatement/'.$transaction->id);
    }


    public function store(Request $request)
    {
        $uid = $request->user()->id;
        
        $cardstatement= new Cardstatement;

        $cardstatement->date = $request->date;
        $cardstatement->sellerno = $request->sellerno;
        $cardstatement->product = $request->product;
        $cardstatement->price = $request->price;
        $cardstatement->number = $request->number;
        $cardstatement->uid = $uid;
        $cardstatement->id = '';

        $cardstatement->save();

        $transaction = Cardstatement::all() -> last();
        
        Session::flash('flash_message', 'Transaction successfully added!');

        return redirect('/cardstatement/'.$transaction->id);

    }

    public function update(Request $request)
    {

        $cardstatement = Cardstatement::where('id', '=', $request->id)->first();

        $cardstatement->sellerno = $request->sellerno;
        $cardstatement->product = $request->product;
        $cardstatement->price = $request->price;
        $cardstatement->save();

        
        return redirect('/cardstatement/'.$request->id);

    }


 
    public function destroy(Request $request, Cardstatement $cardstatement)
    {
        //$this->authorize('destroy', $cardstatement);
        
        //Delete Transaction
        //(optional) Cardstatement::where('id', '=', $request->id)->delete();
        $cardstatement->where('id', $request->id)->delete();
        
        //Redirect to previous record
        $prevTransaction = Cardstatement::where('id', '<', $request->id)->max('id');
        return redirect('/cardstatement/'.$prevTransaction);
    }

}