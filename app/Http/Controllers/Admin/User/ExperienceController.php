<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserExperience;
use App\Http\Controllers\Controller;
use App\Models\UserExperience;
use App\Models\User;

class ExperienceController extends Controller
{
    public function store(StoreUserExperience $request)
    {
        $data = $request->all();
        
        unset($data['_method']);

        UserExperience::insert($data);

        return response()->json(['message' => 'User experience has been created'], 200);
    }

    public function destroy(UserExperience $userExperience)
    {
        $userExperience->delete();

        return response()->json(['message' => 'User experience has been deleted'], 200);   
    }
}
