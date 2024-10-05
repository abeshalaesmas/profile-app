<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function GetAllProfiles(){
        $profiles = Profile::all();
        return view('profiles', ['profiles'=>$profiles]);
    }

    public function GetOneProfile($id){ 
        $profile = Profile::findOrFail($id);
            return view('eachprofiles', ['profile' => $profile]);
    }
}
