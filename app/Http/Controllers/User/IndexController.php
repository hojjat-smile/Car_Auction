<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use App\Models\Favorite;
use App\Models\Packages;
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
        $data['auction'] = Ads::where('type_sell', 'auction')->get();

        $data['ads'] = Ads::latest()->take(10)->get();
        $data['recentAuction'] = Ads::where('type_sell', 'auction')->latest()->take(10)->get();


        return view('user.dashboard',$data);
    }








}
