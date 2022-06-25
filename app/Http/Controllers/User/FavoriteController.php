<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use App\Models\Auction;
use App\Models\Bids;
use App\Models\Favorite;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FavoriteController extends Controller
{
    public function myFavorite(Request $request)
    {

        $favorites = Favorite::where('user_id', $request->user()->id)->get();


        return view('user.my-favorite', compact('favorites'));
    }


    public function addFavorite(Request $request, $adsId)
    {

        $user = User::find(Auth::user()->id);


        $fav = Favorite::where('ads_id', $adsId)->where('user_id', $user->id)->get()->count();


        if ($fav == 0) {


            Favorite::create([

                'user_id' => $user->id,
                'ads_id' => $adsId,

            ]);
        }

        return redirect()->route('web.find-car');
    }

    public function deleteFavorite($itemId)
    {


        $fav = Favorite::find($itemId);

        $fav->delete();

        return redirect()->route('user.my-favorite');
    }

    public function bidNow(Request $request, $adsId)
    {

        $ads = Ads::find($adsId);


        return view('web.single-page', compact('ads'));

    }

    public function bidNowSubmit(Request $request, $adsId)
    {

        $ads = Ads::find($adsId);

        $userBid = Ads::where('type_sell', 'auction')
            ->with(['bid' => function ($query) use ($adsId) {
            $query->where('user_id', Auth::user()->id)->where('auction_id', $adsId);
        }])->first();

        



        if ($userBid == null) {
            Bids::create([
                'ads_id' => $adsId,
                'user_id' => Auth::user()->id,
                'price' => $request['price'],
                'auction_id' => $ads->auction->id,
            ]);

            session()->flash('successful', 'mission accomplished');

            return redirect()->route('web.index');

        }


        session()->flash('Unsuccessfully', 'You have already bid on this auction');


        return redirect()->route('web.index');


    }
}
