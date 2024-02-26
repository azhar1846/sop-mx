<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginUser()
    {
        // Fetch the user with related models
        $user = User::with(['unitHealth', 'rank'])->where('Userid', auth()->user()->Userid)->first();

        // Check if user exists
        if ($user) {
            // Return a single UserResource instance for the user
            return new UserResource($user);
        }

        // Optionally, handle the case where the user is not found
        return response()->json(['error' => 'User not found'], 404);
    }
}



// 'patients' => PatientResource::collection(
//     Patient::with(['rank', 'unit'])->when($request->q, function($query, $q) {
//         $query->where(function($subQuery) use ($q) {
//             $subQuery->where('Name', 'like', '%' . $q . '%')
//                 ->orWhere('ArmyID', 'like', '%' . $q . '%');
//         });

//     })->paginate(10)
// ),
