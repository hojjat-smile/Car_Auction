<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Ads;
use App\Models\ContactUs;
use App\Models\InfoAboutUs;
use App\Models\Maker;
use App\Models\Packages;
use App\Models\Rules;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

class SinglePageController extends Controller
{


    public function singlePage($adsId)
    {


        $ads = Ads::find($adsId);
        $ads->update([
            'view' => $ads->view + 1,
        ]);

        $user = User::find($ads->user_id);
        if(Auth::check()){
            $userAds = User::find(Auth::user()->id);
        }else{
            $userAds = 0;
        }
        $nowDate = Carbon::now();

        return view('web.single-page', compact('ads', 'user', 'userAds', 'nowDate'));


    }
}
