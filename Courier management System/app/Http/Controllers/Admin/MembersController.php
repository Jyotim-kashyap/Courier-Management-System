<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Branch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MembersController extends Controller
{
    // public function index()
    // {
    //     $members = User::latest()->paginate(10);
    //     return view('admin.members.index',compact('members'));
    // }
    public function add()
    {
        $branches = Branch::latest()->get();
        return view('admin.members.add',compact('branches'));
    }
    
 
    
}
