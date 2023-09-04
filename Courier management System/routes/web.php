<?php

if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Staff\StaffController;
use App\Http\Controllers\Admin\ParcelController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\MembersController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Staff\StaffParcelController;
use App\Http\Controllers\Admin\BranchMasterController;


Route::get('/', function () {
    return view('auth/login');
});
// new

Auth::routes();

Route::group(['as' => 'admin.','prefix' => 'admin','namespace' => 'Admin', 'middleware' => ['auth','admin']],function(){
   Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
   Route::get('branch-master', [BranchMasterController::class, 'index'])->name('branch.view');
   Route::get('branch-master/add', [BranchMasterController::class, 'add'])->name('branch.add');
   Route::get('branch-master/edit/{id}', [BranchMasterController::class, 'edit'])->name('branch.edit');
   Route::delete('branch-master/delete/{id}', [BranchMasterController::class, 'delete'])->name('branch.delete');
   Route::get('members', [MembersController::class, 'index'])->name('members.view');
   Route::get('members/add', [MembersController::class, 'add'])->name('members.add');
   Route::get('parcel', [ParcelController::class, 'index'])->name('parcel');
   Route::get('parcel/add', [ParcelController::class, 'add'])->name('parcel.add');
   Route::post('parcel/add/new', [ParcelController::class, 'new'])->name('parcel.add.new');
   Route::get('parcel/view/{id}', [ParcelController::class, 'view'])->name('parcel.view');
   Route::delete('parcel/delete/{id}', [ParcelController::class, 'delete'])->name('parcel.delete');
   Route::get('parcel/edit/{id}', [ParcelController::class, 'edit'])->name('parcel.edit');
   Route::get('parcel/track', [ParcelController::class, 'track'])->name('parcel.track');
   Route::post('parcel/track', [ParcelController::class, 'show'])->name('parcel.show');


});

Route::group(['as' => 'staff.','prefix' => 'staff','namespace' => 'Staff', 'middleware' => ['auth','staff']],function(){
    Route::get('dashboard', [StaffController::class, 'index'])->name('dashboard');
});


















































































































































































































































































Route::get('/home', 'HomeController@index')->name('home');
