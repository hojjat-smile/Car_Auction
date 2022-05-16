<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;

use App\Models\Image;
use Illuminate\Http\Request;

class IndexController extends Controller
{


    public function dashboard()
    {
        $data['auction'] = Ads::where('type_sell','auction')->get();
        $data['normal'] = Ads::where('type_sell','normal')->get();

        $data['ads'] = Ads::latest()->take(10)->get();

        return view('user.dashboard',$data);
    }

    public function myAds()
    {


        return view('user.my-ads');
    }

    public function editAds($adId)
    {

        $time = [];
        $date = Carbon::now();
        $i = 10;
        while ($i >= 0) {
            $num = (int)($date->format('Y')) - $i;
            array_push($time, $num);
            $i--;
        }

        $ads = Ads::find($adId);
        return view('user.edit-ads', compact('ads', 'time'));

    }

    public function editAdsUpdate(Request $request, $adsId)
    {


        $request->validate([
            'odometer' => 'required',
            'vrn' => 'required',
            'highlights' => 'required',
            'primary_damage_id' => 'required',
            'secondary_damage_id' => 'required',
            'additional_damage_id' => 'required',
            'est_retail_value' => 'required',
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
        ]);


        $userId = 1;

        $ads = Ads::find($adsId);


        $ads->update([
            'user_id' => $userId,
            'odometer' => $request['odometer'],
            'vrn' => $request['vrn'],
            'highlights' => $request['highlights'],
            'primary_damage_id' => $request['primary_damage_id'],
            'secondary_damage_id' => $request['secondary_damage_id'],
            'additional_damage_id' => $request['additional_damage_id'],
            'est_retail_value' => $request['est_retail_value'],
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
        ]);


        if ($request->has('image')) {
            $image_ads = Image::find($ads->image->id);
            $image_ads->update([

                'ads_id' => $ads->image->id,
                'image' => $this->uploadFile(3, $request->file('image')),
            ]);
        }


        return redirect(route('user.my-ads'));
    }


    public function myFavorite()
    {


        return view('user.my-favorite');
    }

    public function membership()
    {


        return view('user.membership');
    }

    public function profile()
    {

        $userId = 1;

        $user = User::find($userId);


        return view('user.profile', compact('user'));
    }

    public function profileUpdate(Request $request, $userId)
    {


        $request->validate([

            'firstname' => 'required',
            'lastname' => 'required',
            'mobile' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'companyname' => 'required',

        ]);


        $user = User::find($userId);
        $pass = bcrypt($request['password']);
        $user->update([
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'mobile' => $request['mobile'],
            'username' => 'required|unique:users',
            'email' => $request['email'],
            'companyname' => $request['companyname'],
            'password' => $pass,
        ]);


//        Image::create([
//
//            'ads_id' => 3,
//            'image' => $this->uploadFile(3, $request, 'image'),
//        ]);


        return view('user.profile', compact('user'));
    }


    // start add car
    public function addAdsPost(Request $request, $userId)
    {


        $request->validate([
            'odometer' => 'required',
            'vrn' => 'required',
            'highlights' => 'required',
            'primary_damage_id' => 'required',
            'secondary_damage_id' => 'required',
            'additional_damage_id' => 'required',
            'est_retail_value' => 'required',
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
        ]);


        Ads::Create([

            'user_id' => $userId,
            'odometer' => $request['odometer'],
            'vrn' => $request['vrn'],
            'highlights' => $request['highlights'],
            'primary_damage_id' => $request['primary_damage_id'],
            'secondary_damage_id' => $request['secondary_damage_id'],
            'additional_damage_id' => $request['additional_damage_id'],
            'est_retail_value' => $request['est_retail_value'],
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
        ]);

        if ($request->has('image')) {
            Image::create([

                'ads_id' => 3,
                'image' => $this->uploadFile(3, $request->file('image')),
            ]);
        }


        return redirect()->route('user.add-ads');
    }


    public function deleteAds($adsId)
    {


        $ads = Ads::find($adsId);


        $image = Image::find($ads->image->id);


        $image->delete();
        $ads->delete();

        return redirect()->route('admin.ad-management');
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


    public function addAds()
    {

        $userId = User::find(1);

        $time = [];
        $date = Carbon::now();
        $i = 10;
        while ($i >= 0) {
            $num = (int)($date->format('Y')) - $i;
            array_push($time, $num);
            $i--;
        }

        return view('user.add-ads', compact('userId', 'time'));
    }

    // end add car


    public function adList()
    {


        return view('user.ad-list');
    }


}
