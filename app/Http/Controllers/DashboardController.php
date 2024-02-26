<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Patient;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $patientCount = Patient::count();

        return Inertia::render('Dashboard/Index', [
            'menuDashboard' => 'active',
            'patientCount' => $patientCount,
        ]);
    }
}

