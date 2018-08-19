<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use Auth;
use App\Interest;
use App\Investment;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $allUsers = User::count();
        $allInvestement = Investment::count();
        $totalInvestement = Investment::sum('amount');
        $allInterest = Interest::count();
        $totalInterest = Interest::sum('amount');
        $totalAmount = User::sum('wallet');
        return view('backend.dashboard', compact('allUsers','allInvestement','totalInvestement','allInterest','totalInterest','totalAmount'));
    }
}
