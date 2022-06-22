<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use App\Models\Favorite;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{

    public function profile()
    {


        $user = User::find(Auth::user()->id);


        return view('user.profile', compact('user'));
    }

    public function profileUpdate(Request $request)
    {


        $request->validate([

            'firstname' => 'required',
            'lastname' => 'required',
            'mobile' => 'required',
            'username' => ['required',
                Rule::unique('users')->ignore(Auth::user()->id),
            ],
            'email' => 'required',


        ]);


        $user = User::find(Auth::user()->id);

        $user->update([
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'mobile' => $request['mobile'],
            'username' => $request['username'],
            'email' => $request['email'],
            'companyname' => $request['companyname'],

        ]);

        $pass = Hash::make($request['password']);

        if($request->filled('password')){

            $user->update([
                'password' => $pass,
            ]);
        }



        if ($request->has('image')) {
            $user->update([

                'image' => $this->uploadFile($user->id, $request->file('image'))
            ]);

        }

        return redirect()->route('user.dashboard');
    }

    public function uploadFile($user_id, $file, $oldDir = false)
    {


        $path = "uploads/images" . '/' . $user_id;

        if ($oldDir) {
            if (file_exists($path)) {
                File::deleteDirectory(public_path($path));
            }
        }

        File::exists($path) or File::makeDirectory($path, 0775, true, true);
        $document_name = $path . '/' . $file->getClientOriginalName();
        $file->move($path, $document_name);

        return $document_name;

    }
}
