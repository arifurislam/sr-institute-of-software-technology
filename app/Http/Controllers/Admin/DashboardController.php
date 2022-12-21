<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        //   today
        $todayC = Contact::whereDate('created_at', date('Y-m-d'))->get()->count();
       
        // yesterday
        $date = date('Y-m-d', strtotime('-1 days'));
        $yesterdayC = Contact::whereDate('created_at', $date )->get()->count();

        //  7days
        $date2 = date('Y-m-d', strtotime('-7 days'));
        $sevenC = Contact::whereDate('created_at', '>=', $date2 )->get()->count();

        // this month
         $monthC = Contact::whereMonth('created_at', date('m'))->get()->count();

        //  last 10 contacts
        $lastTen = Contact::orderBy('id','DESC')->take(10)->get();

        return view('admin.dashboard.index',compact('todayC','yesterdayC','sevenC','monthC','lastTen'));
    }
    public function today(){
        $date = Carbon::now();
        $today = Contact::whereDate('created_at', date('Y-m-d'))->get();
        $todayC = Contact::whereDate('created_at', date('Y-m-d'))->get()->count();
        return view('admin.dashboard.days.today',compact('today','todayC','date'));
    }

    public function yesterday(){
        $date = date('Y-m-d', strtotime('-1 days'));
        $yesterday = Contact::whereDate('created_at', $date )->get();
        $yesterdayC = Contact::whereDate('created_at', $date )->get()->count();
        return view('admin.dashboard.days.yesterday',compact('yesterday','yesterdayC','date'));
    }
    public function seven(){
        $date = Carbon::now();
        $date2 = date('Y-m-d', strtotime('-7 days'));
        $seven= Contact::whereDate('created_at', '>=', $date2 )->get();
        $sevenC = Contact::whereDate('created_at', '>=', $date2 )->get()->count();
        return view('admin.dashboard.days.seven',compact('date','date2','seven','sevenC'));
    }

    public function month(){
        $currentM = Carbon::now()->format('F');
        $month = Contact::whereMonth('created_at', date('m'))->get();
        $monthC = Contact::whereMonth('created_at', date('m'))->get()->count();
        return view('admin.dashboard.days.month',compact('month','monthC','currentM'));
    }

}
