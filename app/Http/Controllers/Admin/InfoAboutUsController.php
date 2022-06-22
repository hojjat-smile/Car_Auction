<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Ads;
use App\Models\ContactUs;
use App\Models\Image;
use App\Models\InfoAboutUs;
use App\Models\ReplyContactComments;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class InfoAboutUsController extends Controller
{


    public function info()
    {

        $info = InfoAboutUs::find(1);

        return view('admin.info-about-us',compact('info'));
    }


    public function InfoPost(Request $request, $itemId)
    {

        $request->validate([
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'web' => 'required',
        ]);

        $info = InfoAboutUs::find($itemId);

        $info->update([
            'phone'=> $request['phone'],
            'email'=> $request['email'],
            'address'=> $request['address'],
            'web'=> $request['web'],
        ]);





        return view('admin.info-about-us',compact('info'));
    }





}
