<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserOrganization;
use App\Http\Controllers\Controller;
use App\Models\UserOrganization;

class OrganizationController extends Controller
{
    public function store(StoreUserOrganization $request)
    {
        $data = $request->all();
        
        unset($data['_method']);

        UserOrganization::insert($data);

        return response()->json(['message' => 'User organization has been created'], 200);
    }

    public function destroy(UserOrganization $userOrganization)
    {
        $userOrganization->delete();

        return response()->json(['message' => 'User organization has been deleted'], 200);   
    }
}
