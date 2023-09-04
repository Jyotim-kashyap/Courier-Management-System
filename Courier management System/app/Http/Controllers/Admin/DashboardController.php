<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Branch;
use App\Tracks;
use App\Parcels;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index(){
        $branches = Branch::all();
        $parcels = Parcels::all();
        $users = User::all();
        $collected = Parcels::where('status', 'like', 'Collected')->get();
        $shipped = Parcels::where('status', 'like', 'Shipped')->get();
        $transit = Parcels::where('status', 'like', 'In Transit')->get();
        $destination = Parcels::where('status', 'like', 'Arrived at Destination')->get();
        $delivery = Parcels::where('status', 'like', 'Out for Delivery')->get();
        $pickup = Parcels::where('status', 'like', 'Ready to Pickup')->get();
        $delivered = Parcels::where('status', 'like', 'Delivered')->get();
        $failed = Parcels::where('status', 'like', 'Unsuccessfull Delivery Attempt')->get();
       
        return view('admin.dashboard',compact('branches','parcels','users','collected','shipped','transit',
    'destination','delivery','pickup','delivered','failed'));
    }
    
}
