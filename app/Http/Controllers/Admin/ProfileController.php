<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\UpdateProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile');
    }

    public function update(UpdateProfile $request)
    {
        $user             = User::findOrFail(Auth::user()->id);
        $user->name       = $request->name;
        $user->email      = $request->email;

        if($request->file('image')){
            if(Auth::user()->image_path)
                Storage::delete(Auth::user()->image_path);
            
            $image_path = $request->file('image')->store(User::IMAGE_PATH);
            $user->image_path = $image_path;
        }

        $user->save();

        return redirect(route('admin.profile.index'));
    }
}
