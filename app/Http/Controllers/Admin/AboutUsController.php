<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Ads;
use App\Models\ContactUs;
use App\Models\Image;
use App\Models\ReplyContactComments;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class AboutUsController extends Controller
{


    public function aboutUs()
    {


        $about = AboutUs::find(1);

        return view('admin.about-us',compact('about'));
    }





    public function aboutUsEdit(Request $request, $itemId)
    {


        $request->validate([

            'message' => 'required',
        ]);

        $about = AboutUs::find($itemId);

        $about->update([
            'message'=> $request['message'],

        ]);


        if($request->has('image'))
        {
            $about->update([
                'image' => $this->uploadFile(Auth::user()->id,$request->file('image')),
            ]);
        }

        session()->flash('Success','About us page edited.');

        return view('admin.about-us',compact('about'));
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
