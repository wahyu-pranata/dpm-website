<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\User;
use App\Models\UserDetail;
use App\Models\UserContact;
use App\Models\UserRole;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateUserDetail;

class DetailController extends Controller
{
    public function index(User $user = null)
    {
        $user = (isset($user) && 
                ($user->id != Auth::user()->id && Auth::user()->role == 'SUPER_ADMIN')) 
                ? $user
                : Auth::user();
        $roles = UserRole::all();

        return view('admin.user.detail', [
            'user' => $user,
            'roles' => $roles,
        ]);
    }

    public function update(UpdateUserDetail $request, User $user)
    {
        UserDetail::updateOrCreate(
            ['user_id' => $user->id],
            [
                'faculity'      => $request->faculity,
                'study_program' => $request->study_program,
                'role_id'       => $request->role_id,
                'religion'      => $request->religion,
                'birthplace'    => $request->birthplace,
                'birthdate'     => $request->birthdate,
                'generation'    => $request->generation,
                'address'       => $request->address
            ]
        );

        UserContact::updateOrCreate(
            ['user_id' => $user->id],
            [
                'instagram' => $request->instagram,
                'phone'     => $request->phone
            ]
        );

        return response()->json(['message' => 'User detail has been updated'], 200);
    }
}