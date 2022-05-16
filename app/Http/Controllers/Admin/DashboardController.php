<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Notification;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $notifications = Notification::orderBy('id', 'desc')->get();
        return view('admin.dashboard', compact('notifications'));
    }
}
