<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use App\Models\ContactUs;
use App\Models\Image;
use App\Models\ReplyContactComments;
use App\Models\Rules;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class RulesController extends Controller
{

    public function rules()
    {

        $rules = Rules::find(1);


        return view('admin.rules',compact('rules'));
    }

    public function rulesPost(Request $request ,$itemId)
    {

        $request->validate([
            'title' => 'required',
            'text_rules' => 'required',
        ]);

        $rules = Rules::find($itemId);

        $rules->update([
            'title'=> $request['title'],
            'text_rules'=> $request['text_rules']
        ]);

        session()->flash('Success','Rules Submitted');

        return redirect()->route('admin.rules');
    }




}
