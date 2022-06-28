<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Ads;
use App\Models\ContactUs;
use App\Models\InfoAboutUs;
use App\Models\Packages;
use App\Models\Rules;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;


class ContactUsController extends Controller
{


    public function contactSendMessage(Request $request)
    {

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);


        ContactUs::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'subject' => $request['subject'],
            'message' => $request['message'],
        ]);


        return redirect()->route('web.contact');
    }

}
