<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Investment;
use App\Interest;
use Auth;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $investments = Investment::where('user_id',Auth::user()->id)->get();
        $interests = Interest::where('user_id',Auth::user()->id)->get();
        $totalInvestment = Investment::sum('amount');
        return view('frontend.user.dashboard', compact('investments','interests','totalInvestment'));
    }
}
