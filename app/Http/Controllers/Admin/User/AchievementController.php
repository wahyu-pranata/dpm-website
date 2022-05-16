<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserAchievement;
use App\Http\Controllers\Controller;
use App\Models\UserAchievement;

class AchievementController extends Controller
{
    public function store(StoreUserAchievement $request)
    {
        $data = $request->all();
        
        unset($data['_method']);

        UserAchievement::insert($data);

        return response()->json(['message' => 'User achievement has been created'], 200);
    }

    public function destroy(UserAchievement $userAchievement)
    {
        $userAchievement->delete();

        return response()->json(['message' => 'User achievement has been deleted'], 200);   
    }
}
