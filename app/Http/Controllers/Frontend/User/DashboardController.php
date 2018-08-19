<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Investment;
use App\Interest;
use Auth;
use Khill\Lavacharts\Lavacharts;

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
        $invest = Investment::where('user_id', Auth::user()->id)->count();

        $lava = new Lavacharts; // See note below for Laravel
        $votes  = $lava->DataTable();

        $votes->addStringColumn('Investment Progress chart')
            ->addNumberColumn('Investments');

        // Random Data For Example
        for ($a = 1; $a <= $invest ; $a++) {
            $votes->addRow([
            'Investment-' . $a, rand(100,365)
            ]);
        };

        $lava->BarChart('Investments', $votes);

        $investments = Investment::where('user_id',Auth::user()->id)->get();
        $interests = Interest::where('user_id',Auth::user()->id)->get();
        $totalInvestment = Investment::where('user_id', Auth::user()->id)->sum('amount');
        return view('frontend.user.dashboard', compact('investments','interests','totalInvestment','lava'));
    }
}
