<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserActivity;
use App\Http\Requests\StoreActivity;
use App\Http\Requests\UpdateActivity;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    public function index()
    {
        return view('admin.activity');
    }

    public function store(StoreActivity $request)
    {
        $activity                = new UserActivity();
        $activity->user_id       = Auth::user()->id;
        $activity->activity      = $request->activity;
        $activity->activity_role = $request->activity_role;
        $activity->description   = $request->description;
        $activity->held_at       = $request->held_at;
        
        $activity->save();
        return redirect()->back();
    }

    public function destroy(UserActivity $activity)
    {
        $activity->delete();
        return redirect()->back();
    }

    public function edit(UserActivity $activity)
    {
        return view('admin.activity.index', ['userActivity' => $activity]);
    }

    public function update(UpdateActivity $request, UserActivity $activity)
    {
        $activity->activity      = $request->activity;
        $activity->activity_role = $request->activity_role;
        $activity->description   = $request->description;
        $activity->held_at       = $request->held_at;

        $activity->save();
        return redirect(route('admin.activity.index'));
    }
}
