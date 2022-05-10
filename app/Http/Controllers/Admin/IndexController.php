<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{


    public function dashboard()
    {


        return view('admin.index');
    }

    public function userManagement()
    {

        // this is the part i have to work on
        $persons = User::all(); 
	    return view('admin.user-management')->with(compact('persons'));
    }


    public function adManagement()
    {


        return view('admin.ad-management');
    }

    public function packageManagement()
    {


        return view('admin.package-management');
    }

    public function settings()
    {


        return view('admin.settings');
    }
    public function edit(User $user)
    {
        
        return view('admin.user-edit', [
            'user' => $user,
            ]);

    }
    public function update(Request $request,$itemId)
    {
        
        $user =User::find($itemId);
        
        $user->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'companyname' => $request->companyname,
        ]);

        return redirect('admin-panel/user-management');
    }

}
