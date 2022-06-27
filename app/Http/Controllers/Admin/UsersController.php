<?php

namespace App\Http\Controllers\admin;

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

class UsersController extends Controller
{

    public function userManagement()
    {

        // this is the part i have to work on
        $users = User::all();
        return view('admin.user-management')->with(compact('users'));
    }

    public function userActive($userId)
    {

        $user = User::find($userId);

        if ($user->activity != 'deactivate') {

            $user->update([

                'activity' => 'deactivate'
            ]);
            session()->flash('Success', 'User deactivate');
        } else if ($user->activity != 'active') {

            $user->update([

                'activity' => 'active'
            ]);
            session()->flash('Success', 'User activated');
        }

        return redirect()->route('admin.user-management');
    }

    public function userDeleted(Request $request, $userId)
    {


        $user = User::find($userId);




            $user->update([

                'deleted' => 'died'
            ]);
        session()->flash('Success','User deleted.');

        return redirect()->route('admin.user-management');
    }

    public function editUser($userId)
    {

        $user = User::find($userId);

        return view('admin.user-edit', compact('user'));

    }

    public function update(Request $request, $itemId)
    {
        $user = User::find($itemId);


        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'mobile' => 'required',
            'username' => ['required',
                Rule::unique('users')->ignore($user->id),
            ],
            'email' => 'required',
        ]);


        $user->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'username' => $request->username,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'companyname' => $request->companyname,
        ]);


        if ($request->has('password')) {
            $pass = bcrypt($request['password']);
            $user->update([
                'password' => $pass,
            ]);
        }

        if ($request->has('image')) {

            $user->update([
                'image' => $this->uploadFile($user->id, $request->file('image')),
            ]);
        }
        session()->flash('Success','User Edited');
        return redirect()->route('admin.user-management');
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
