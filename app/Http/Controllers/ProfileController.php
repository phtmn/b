<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Profile;
use App\Models\User;

class ProfileController extends Controller
{

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function edit(){
        $user = User::all();
        $profile = Profile::all();
   
        $user->update();
        $profile->update();
   
        return view('profile.edit', ['user' => $user, 'profile' => $profile]);
    }
   
    public function update(Request $request, $id){
    
        $user = User::findOrFail($id);
        $profile = Profile::findOrFail($id);
      
        $user->name = $request->name;
        $user->email = $request->email;
        $profile->bio = $request->email;
   
        return view('profile.edit', ['user' => $user, 'profile' => $profile]);
    }
   
}
