<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Ads;
use App\Models\Bids;
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

        if (Auth::check()) {

            $ads = Ads::find($adsId);
            $ads->update(['view' => $ads->view + 1,]);
            $userAds = User::find($ads->user_id);
            $user = User::find(Auth::user()->id);
            $nowDate = Carbon::now();
            $bid = Bids::where('ads_id', $adsId)->max('price');

            return view('web.single-page', compact('ads', 'user', 'userAds', 'nowDate','bid'));

        } else {

            session()->flash('Error', 'To view information, first login to your account.');
            return redirect()->route('login');

        }

    }
}
