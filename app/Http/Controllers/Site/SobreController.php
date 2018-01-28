<?php

namespace App\Http\Controllers\Site;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SobreController extends Controller
{
    public function index(){
        return view('site.sobre');
    }
}
