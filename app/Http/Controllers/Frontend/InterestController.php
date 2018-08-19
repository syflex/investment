<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Investment;
use App\Interest;
use App\Models\Auth\User;
use Auth;

class InterestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $values = Investment::get();
        if ($values){
            foreach ($values as $value) {
                $data = new Interest;
                $data->user_id = $value->user_id;
                $data->investment_id = $value->investment_id;
                $data->interest_id = str_replace(".","",microtime(true)).rand(000,999);
                $data->amount = '73.97';
                $data->save();                
                User::where('id', $value->user_id)->increment('wallet','73.97');
                // $client = new Client();
                // $request = $client->get('https://www.bulksmsnigeria.com/api/v1/sms/create?api_token=yiNERTjxK8H75DITq2Auyrc2ML6faWtcLeGTxVxpkEDo2EtaUFyXaid4wjdA &from=Infinity&to='.Auth::user()->phone.'&body=Your account has been credited with 100,000');
                // $response = $request->getBody()->getContents();               
            } 
            return back()->withFlashSuccess(__('Your Daily Compute is successful'));
        }else{
            return back()->withFlashSuccess(__('No data'));
        }
       
        return back()->withFlashSuccess(__('No data'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd('hello');
        $values = Investment::get();
        if ($values){
            foreach ($values as $value) {
                $data = new Interest;
                $data->user_id = $value->user_id;
                $data->investment_id = $value->investment_id;
                $data->interest_id = str_replace(".","",microtime(true)).rand(000,999);
                $data->amount = '73.97';
                $data->save();                
                User::where('id', $value->user_id)->increment('wallet','73.97');
                // $client = new Client();
                // $request = $client->get('https://www.bulksmsnigeria.com/api/v1/sms/create?api_token=yiNERTjxK8H75DITq2Auyrc2ML6faWtcLeGTxVxpkEDo2EtaUFyXaid4wjdA &from=Infinity&to='.Auth::user()->phone.'&body=Your account has been credited with 100,000');
                // $response = $request->getBody()->getContents();               
            } 
            return back()->withFlashSuccess(__('Your Daily Compute is successful'));
        }else{
            return back()->withFlashSuccess(__('No data'));
        }
       
        return back()->withFlashSuccess(__('No data'));          

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
