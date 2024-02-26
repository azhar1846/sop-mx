<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class PanelController extends Controller
{
   public function index()
   {
    return Inertia::render('Panel/PanelList');
   }

   public function draft()
   {
    return Inertia::render('Panel/PanelDraft');
   }
}
