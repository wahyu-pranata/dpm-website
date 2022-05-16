<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserMovement;
use App\Http\Controllers\Controller;
use App\Models\UserMovement;

class MovementController extends Controller
{
    public function store(StoreUserMovement $request)
    {
        $data = $request->all();
        
        unset($data['_method']);

        UserMovement::insert($data);

        return response()->json(['message' => 'User movement has been created'], 200);
    }

    public function destroy(UserMovement $userMovement)
    {
        $userMovement->delete();

        return response()->json(['message' => 'User movement has been deleted'], 200);   
    }
}
