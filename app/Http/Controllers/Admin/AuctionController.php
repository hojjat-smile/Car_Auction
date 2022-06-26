<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ads;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;


class AuctionController extends Controller
{


    public function myAuction()
    {

        $ads = Ads::where('type_sell', 'auction')->get();
        return view('admin.my-auction', compact('ads'));

    }

    public function addAuction()
    {

        $time = [];
        $date = Carbon::now();
        $i = 10;
        while ($i >= 0) {
            $num = (int)($date->format('Y')) - $i;
            array_push($time, $num);
            $i--;
        }
        return view('admin.add-auction', compact('time'));

    }

    public function addAuctionPost(Request $request)
    {

        $request->validate([
            'car_type_id' => 'required',
            'maker_id' => 'required',
            'model_id' => 'required',
            'colour_id' => 'required',
            'category_id' => 'required',
            'condition_id' => 'required',
            'engine_type' => 'required',
            'year' => 'required',
            'country_id' => 'required',
            'city_id' => 'required',
            'damage_id' => 'required',
            'odometer' => 'required',
            'primary_damage_id' => 'required',
            'body_style' => 'required',
            'transmission' => 'required',
            'fuel' => 'required',
            'keys' => 'required',
            'v_five_notes' => 'required',
            'additional_info' => 'required',
            'current_bid' => 'required',
            'mainImage' => 'required',
        ]);


         Ads::create([
            'user_id' => Auth::user()->id,
            'type_sell' => 'auction',
            'category' => $request->category,
            'car_type_id' => $request->car_type_id,
            'maker_id' => $request->maker_id,
            'model_id' => $request->model_id,
            'colour_id' => $request->colour_id,
            'category_id' => $request->category_id,
            'condition_id' => $request->condition_id,
            'engine_type' => $request->engine_type,
            'year' => $request->year,
            'country_id' => $request->country_id,
            'city_id' => $request->city_id,
            'damage_id' => $request->damage_id,
            'odometer' => $request->odometer,
            'primary_damage_id' => $request->primary_damage_id,
            'body_style' => $request->body_style,
            'transmission' => $request->transmission,
            'fuel' => $request->fuel,
            'keys' => $request->keys,
            'v_five_notes' => $request->v_five_notes,
            'additional_info' => $request->additional_info,
            'current_bid' => $request->current_bid,
        ]);

        session()->flash('Success','Auction Submitted.');

        return redirect()->route('admin.my-auction');
    }


    public function deleteAuction($itemId)
    {
        $ads = Ads::find($itemId);

        $ads->deleted();

        session()->flash('successfully', 'Auction Deleted.');

        return redirect()->route('admin.my-auction');
    }

    public function editAuction($itemID)
    {

        $ads = Ads::find($itemID);
        $time = [];
        $date = Carbon::now();
        $i = 10;
        while ($i >= 0) {
            $num = (int)($date->format('Y')) - $i;
            array_push($time, $num);
            $i--;
        }

        return view('admin.edit-auction', compact('ads', 'time'));
    }

    public function editAuctionPost(Request $request, $itemID)
    {
        $request->validate([
            'base_price' => 'required',
            'rough_price' => 'required',
            'car_type_id' => 'required',
            'maker_id' => 'required',
            'model_id' => 'required',
            'colour_id' => 'required',
            'category_id' => 'required',
            'condition_id' => 'required',
            'engine_type' => 'required',
            'year' => 'required',
            'country_id' => 'required',
            'city_id' => 'required',
            'damage_id' => 'required',
            'odometer' => 'required',
            'primary_damage_id' => 'required',
            'body_style' => 'required',
            'transmission' => 'required',
            'fuel' => 'required',
            'keys' => 'required',
            'v_five_notes' => 'required',
            'additional_info' => 'required',
            'current_bid' => 'required',
        ]);


        $ads = Ads::find($itemID);

        $ads->update([
            'user_id' => Auth::user()->id,
            'type_sell' => 'auction',
            'category' => $request->category,
            'car_type_id' => $request->car_type_id,
            'maker_id' => $request->maker_id,
            'model_id' => $request->model_id,
            'colour_id' => $request->colour_id,
            'category_id' => $request->category_id,
            'condition_id' => $request->condition_id,
            'engine_type' => $request->engine_type,
            'year' => $request->year,
            'country_id' => $request->country_id,
            'city_id' => $request->city_id,
            'damage_id' => $request->damage_id,
            'odometer' => $request->odometer,
            'primary_damage_id' => $request->primary_damage_id,
            'body_style' => $request->body_style,
            'transmission' => $request->transmission,
            'fuel' => $request->fuel,
            'keys' => $request->keys,
            'v_five_notes' => $request->v_five_notes,
            'additional_info' => $request->additional_info,
            'current_bid' => $request->current_bid,
        ]);

        $ads->auction->update([
            'ads_id' => $ads->id,
            'base_price' => $request['base_price'],
            'rough_price' => $request['rough_price'],
        ]);

        session()->flash('successfully', 'Auction Edited.');

        return redirect()->route('admin.my-auction');
    }

    public function publishAuction($adsId)
    {
        $ads = Ads::find($adsId);

        if ($ads->is_published == 1) {

            $ads->update([
                'is_published' => 0
            ]);
            session()->flash('Success', 'Auction Published.');

        } else if ($ads->is_published == 0) {

            $ads->update([
                'is_published' => 1
            ]);
            session()->flash('Success', 'Auction deactivated');

        }


        return redirect(route('admin.my-auction'));
    }

    public function viewAuction($adsId)

    {

        $time = [];
        $date = Carbon::now();
        $i = 10;
        while ($i >= 0) {
            $num = (int)($date->format('Y')) - $i;
            array_push($time, $num);
            $i--;
        }

        $auction = Ads::find($adsId);


        return view('admin.view-auction', compact('auction', 'time'));
    }

}
