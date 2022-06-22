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

class IndexController extends Controller
{
    public function dashboard()
    {
        $data['auction'] = Ads::where('user_id',Auth::user()->id)->where('type_sell', 'auction')->get();
        $data['normal'] = Ads::where('user_id',Auth::user()->id)->where('type_sell', 'normal')->get();

        $data['ads'] = Ads::where('user_id',Auth::user()->id)->latest()->take(10)->get();


        return view('user.dashboard', $data);
    }








}
