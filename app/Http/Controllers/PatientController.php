<?php

namespace App\Http\Controllers;

use App\Http\Resources\PatientResource;
use Inertia\Inertia;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('Patient/PatientIndex', [
            'menuPatientIndex' => 'active',
            'patients' => PatientResource::collection(
                Patient::with(['rank', 'unit'])->when($request->q, function($query, $q) {
                    $query->where(function($subQuery) use ($q) {
                        $subQuery->where('Name', 'like', '%' . $q . '%')
                            ->orWhere('ArmyID', 'like', '%' . $q . '%');
                    });

                })->paginate(10)
            ),
            'search' => $request->only('q'),
        ]);
    }

    public function landingPage(Request $request, $id)
    {
        return Inertia::render('Patient/PatientLandingPage');
    }
}
