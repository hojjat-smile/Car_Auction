<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
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
        session()->flash('Success', 'Favorite Submitted');

        return redirect()->route('web.find-car');
    }

    public function deleteFavorite($itemId)
    {


        $fav = Favorite::find($itemId);

        $fav->delete();
        session()->flash('Success', 'Favorite deleted');

        return redirect()->route('user.my-favorite');
    }


    public function bidNowSubmit(Request $request, $adsId)
    {


        $count = Bids::where("user_id", Auth::user()->id)->where("ads_id", $adsId)->count();

        $bid = Bids::where('ads_id', $adsId)->max('price');


        if (!$count) {

            if ($bid > $request->price) {
                session()->flash('Error', 'Your bid is less than the last bid.');

                return redirect()->route('web.single-page',$adsId);
            }
            Bids::create([
                'ads_id' => $adsId,
                'user_id' => Auth::user()->id,
                'price' => $request['price'],
            ]);

            session()->flash('Success', 'Bid sent');

            return redirect()->route('web.index');

        }

        session()->flash('Error', 'You have already bid on this auction');

        return redirect()->route('web.index');


    }
}
