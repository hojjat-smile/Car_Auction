<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use App\Models\Auction;
use App\Models\Favorite;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AdsController extends Controller
{

    public function adManagement()
    {


        return view('admin.ad-management');
    }

    public function editAds($adId)
    {

        $ads = Ads::find($adId);

        $time = [];
        $date = Carbon::now();
        $i = 10;
        while ($i >= 0) {
            $num = (int)($date->format('Y')) - $i;
            array_push($time, $num);
            $i--;
        }

        return view('admin.edit-ads', compact('ads', 'time'));
    }

    public function addAdsView()
    {

        $time = [];
        $date = Carbon::now();
        $i = 10;
        while ($i >= 0) {
            $num = (int)($date->format('Y')) - $i;
            array_push($time, $num);
            $i--;
        }
        return view('admin.add-ads', compact('time'));

    }

    public function addAdsUpdate(Request $request)
    {

        $user = Auth::user();

        $request->validate([
            'odometer' => 'required',
            'vrn' => 'required',

            'primary_damage_id' => 'required',
            'secondary_damage_id' => 'required',
            'additional_damage_id' => 'required',
            'vin' => 'required',
            'body_style' => 'required',
            'colour_id' => 'required',
            'type_sell' => 'required',
            'engine_type' => 'required',
            'transmission' => 'required',
            'drive' => 'required',
            'fuel' => 'required',
            'keys' => 'required',
            'v_five_notes' => 'required',
            'additional_info' => 'required',
            'vat' => 'required',
            'country_id' => 'required',
            'city_id' => 'required',
            'year' => 'required',
            'damage_id' => 'required',
            'maker_id' => 'required',
            'model_id' => 'required',
            'category_id' => 'required',
            'condition_id' => 'required',
            'car_type_id' => 'required',

            'sale_date' => 'required',
            'base_price' => 'required',
            'rough_price' => 'required',
            'buy_now' => 'required',
        ]);


        $ads = Ads::Create([
            'user_id' => $user->id,
            'odometer' => $request['odometer'],
            'vrn' => $request['vrn'],
            'primary_damage_id' => $request['primary_damage_id'],
            'secondary_damage_id' => $request['secondary_damage_id'],
            'additional_damage_id' => $request['additional_damage_id'],
            'vin' => $request['vin'],
            'body_style' => $request['body_style'],
            'colour_id' => $request['colour_id'],
            'type_sell' => $request['type_sell'],
            'engine_type' => $request['engine_type'],
            'transmission' => $request['transmission'],
            'drive' => $request['drive'],
            'fuel' => $request['fuel'],
            'keys' => $request['keys'],
            'v_five_notes' => $request['v_five_notes'],
            'additional_info' => $request['additional_info'],
            'vat' => $request['vat'],
            'bid_status' => $request['bid_status'],
            'sale_status' => $request['sale_status'],
            'current_bid' => $request['current_bid'],
            'country_id' => $request['country_id'],
            'city_id' => $request['city_id'],
            'year' => $request['year'],
            'damage_id' => $request['damage_id'],
            'maker_id' => $request['maker_id'],
            'model_id' => $request['model_id'],
            'category_id' => $request['category_id'],
            'condition_id' => $request['condition_id'],
            'car_type_id' => $request['car_type_id'],
            'is_published' => 0,
        ]);

        Auction::create([
            'ads_id' => $ads->id,
            'sale_date' => $request['sale_date'],
            'base_price' => $request['base_price'],
            'rough_price' => $request['rough_price'],
            'buy_now' => $request['buy_now'],
        ]);
        if ($request->has('image')) {
            Image::create([

                'ads_id' => $ads->id,
                'image' => $this->uploadFile($user->id, $request->file('image')),
            ]);
        }


        return redirect()->route('admin.dashboard');
    }

    public function deleteAds($adsId)
    {

        $ads = Ads::find($adsId);

        $image = Image::find($ads->image->id);

        $image->delete();
        $ads->delete();

        return redirect()->route('admin.ad-management');
    }

    public function publishAds(Request $request, $adsId)
    {

        $ads = Ads::find($adsId);


        if ($ads->is_published == 1) {

            $ads->update([
                'is_published' => 0
            ]);
        } else if ($ads->is_published == 0) {

            $ads->update([
                'is_published' => 1
            ]);

        }

        return redirect(route('admin.ad-management'));
    }

    public function viewAds($adsId)

    {


        $userId = Auth::user()->id;


        $time = [];
        $date = Carbon::now();
        $i = 10;
        while ($i >= 0) {
            $num = (int)($date->format('Y')) - $i;
            array_push($time, $num);
            $i--;
        }

        $ads = Ads::find($adsId);
        return view('admin.view-ads', compact('userId', 'ads', 'time'));
    }

    public function editAdsUpdate(Request $request, $adsId)

    {

        $request->validate([
            'odometer' => 'required',
            'vrn' => 'required',
            'primary_damage_id' => 'required',
            'secondary_damage_id' => 'required',
            'additional_damage_id' => 'required',
            'vin' => 'required',
            'body_style' => 'required',
            'colour_id' => 'required',
            'type_sell' => 'required',
            'engine_type' => 'required',
            'transmission' => 'required',
            'drive' => 'required',
            'fuel' => 'required',
            'keys' => 'required',
            'v_five_notes' => 'required',
            'additional_info' => 'required',
            'vat' => 'required',
            'country_id' => 'required',
            'city_id' => 'required',
            'year' => 'required',
            'damage_id' => 'required',
            'maker_id' => 'required',
            'model_id' => 'required',
            'category_id' => 'required',
            'condition_id' => 'required',

            'sale_date' => 'required',
            'base_price' => 'required',
            'rough_price' => 'required',
            'buy_now' => 'required',
            'car_type_id' => 'required',
        ]);


        $user = Auth::user();

        $ads = Ads::find($adsId);


        $ads->update([
            'odometer' => $request['odometer'],
            'vrn' => $request['vrn'],
            'primary_damage_id' => $request['primary_damage_id'],
            'secondary_damage_id' => $request['secondary_damage_id'],
            'additional_damage_id' => $request['additional_damage_id'],
            'vin' => $request['vin'],
            'body_style' => $request['body_style'],
            'colour_id' => $request['colour_id'],
            'type_sell' => $request['type_sell'],
            'engine_type' => $request['engine_type'],
            'transmission' => $request['transmission'],
            'drive' => $request['drive'],
            'fuel' => $request['fuel'],
            'keys' => $request['keys'],
            'v_five_notes' => $request['v_five_notes'],
            'additional_info' => $request['additional_info'],
            'vat' => $request['vat'],
            'bid_status' => $request['bid_status'],
            'sale_status' => $request['sale_status'],
            'current_bid' => $request['current_bid'],
            'country_id' => $request['country_id'],
            'city_id' => $request['city_id'],
            'year' => $request['year'],
            'damage_id' => $request['damage_id'],
            'maker_id' => $request['maker_id'],
            'model_id' => $request['model_id'],
            'category_id' => $request['category_id'],
            'condition_id' => $request['condition_id'],
            'car_type_id' => $request['car_type_id'],
        ]);

        $auction = Auction::find($ads->auction->id);

        $auction->update([
            'ads_id' => $adsId,
            'sale_date' => $request['sale_date'],
            'base_price' => $request['base_price'],
            'rough_price' => $request['rough_price'],
            'buy_now' => $request['buy_now'],
        ]);

        if ($request->has('image')) {

            if ($ads->image != null) {

                $image_ads = Image::find($ads->image->id);

                $image_ads->update([
                    'ads_id' => $ads->id,
                    'image' => $this->uploadFile($user->id, $request->file('image')),
                ]);

            } elseif ($ads->image == null) {

                Image::create([
                    'ads_id' => $ads->id,
                    'image' => $this->uploadFile($user->id, $request->file('image')),
                ]);
            }

        }


        return redirect(route('admin.ad-management'));
    }

    public function uploadFile($user_id, $file, $oldDir = false)
    {


        $path = "uploads/images" . '/' . $user_id;

        if ($oldDir) {
            if (file_exists($path)) {
                File::deleteDirectory(public_path($path));
            }
        }

        File::exists($path) or File::makeDirectory($path, 0775, true, true);
        $document_name = $path . '/' . $file->getClientOriginalName();
        $file->move($path, $document_name);

        return $document_name;

    }

}
