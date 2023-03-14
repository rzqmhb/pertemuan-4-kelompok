<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function show ($slug){
        if ($slug == 'roziq-mahbubi') {
            return view('roziq', ['profile' => Profile::getBySlug($slug)]);
        } else if ($slug == 'devi-andini-febrianti') {
            return view('devi', ['profile' => Profile::getBySlug($slug)]);
        }
    }
}
