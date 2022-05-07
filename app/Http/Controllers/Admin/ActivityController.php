<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserActivity;
use App\Models\User;
use App\Http\Requests\StoreActivity;
use App\Http\Requests\UpdateActivity;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    public function index(User $user = null)
    {
        $user = (isset($user) && 
                ($user->id != Auth::user()->id && Auth::user()->role == 'SUPER_ADMIN')) 
                ? $user
                : Auth::user();

        return view('admin.activity', compact('user'));
    }

    public function store(StoreActivity $request)
    {
        $activity                = new UserActivity();
        $activity->user_id       = ($request->id != Auth::user()->id) 
                                    ? $request->id 
                                    : Auth::user()->id;
        $activity->activity      = $request->activity;
        $activity->activity_role = $request->activity_role;
        $activity->description   = $request->description;
        $activity->held_at       = $request->held_at;
        
        $activity->save();

        return response()->json(['message' => 'Activity has been added'], 200);
    }

    public function destroy(UserActivity $activity)
    {
        $activity->delete();

        return response()->json(['message' => 'Activity has been deleted'], 200);
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
