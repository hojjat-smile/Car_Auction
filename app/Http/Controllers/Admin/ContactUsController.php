<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

class ContactUsController extends Controller
{




    public function contactUs()
    {


        return view('admin.contact-us');
    }


    public function contactUsReply($itemId)
    {


        $contact = ContactUs::find($itemId);



        return view('admin.contact-us-reply', compact('contact'));
    }


    public function reply(Request $request, $itemId)
    {

        $request->validate([
            'reply' => 'required'
        ]);



        ReplyContactComments::create([
            'contact_us_id' => $itemId,
            'reply' => $request['reply'],
        ]);



        return redirect()->route('admin.contact-us');
    }

}
