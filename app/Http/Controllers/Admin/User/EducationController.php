<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserEducation;
use App\Http\Controllers\Controller;
use App\Models\UserEducation;
use App\Models\User;

class EducationController extends Controller
{
    public function store(StoreUserEducation $request)
    {
        $data = $request->all();
        
        unset($data['_method']);

        UserEducation::insert($data);

        return response()->json(['message' => 'User education has been created'], 200);
    }

    public function destroy(UserEducation $userEducation)
    {
        $userEducation->delete();

        return response()->json(['message' => 'User education has been deleted'], 200);   
    }
}

