<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Ads;
use App\Models\ContactUs;
use App\Models\Image;
use App\Models\InfoAboutUs;
use App\Models\Packages;
use App\Models\ReplyContactComments;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class MembershipController extends Controller
{
    public function membership()
    {

        $packages = Packages::all();


        return view('admin.membership', compact('packages'));
    }


    public function membershipsAdd()
    {


        return view('admin.membership-add');
    }


    public function membershipsAddPost(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'period' => 'required',
            'price' => 'required',
        ]);

        Packages::create([
            'title' => $request->title,
            'description' => $request->description,
            'period' => $request->period,
            'price' => $request->price,
        ]);


        return redirect()->route('admin.membership');
    }

    public function membershipsEdit($itemId)
    {

        $membership = Packages::find($itemId);

        return view('admin.membership-edit',compact('membership'));
    }



    public function membershipsEditPost(Request $request, $itemId)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'period' => 'required',
            'price' => 'required',
        ]);

        $packages = Packages::find($itemId);

        $packages->update([
            'title' => $request->title,
            'description' => $request->description,
            'period' => $request->period,
            'price' => $request->price,
        ]);


        return redirect()->route('admin.membership');
    }

    public function membershipsDelete($itemId){

        $membership = Packages::find($itemId);
        $membership->delete();
        return redirect()->route('admin.membership');
    }


}
