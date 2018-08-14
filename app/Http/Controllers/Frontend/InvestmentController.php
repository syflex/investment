<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Investment;
use Carbon\Carbon;
use Auth;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class InvestmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $data = new Investment;
        $data->user_id = Auth::user()->id;
        $data->investment_id = str_replace(".","",microtime(true)).rand(000,999);
        $data->amount = '100000';
        $data->start_date = Carbon::now();
        $data->end_date = Carbon::now()->addYear();
        $data->returns = 100000 + 27000;
        $data->save();
        // $client = new Client();
        // $request = $client->get('https://www.bulksmsnigeria.com/api/v1/sms/create?api_token=yiNERTjxK8H75DITq2Auyrc2ML6faWtcLeGTxVxpkEDo2EtaUFyXaid4wjdA &from=Infinity&to='.Auth::user()->phone.'&body=Your account has been credited with 100,000');
        // $response = $request->getBody()->getContents();
        return back()->withFlashSuccess(__('Your transaction is successful'));
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
