<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class IndexController extends Controller
{


    public function dashboard()
    {

        $data['auction'] = Ads::where('type_sell', 'auction')->get();
        $data['normal'] = Ads::where('type_sell', 'normal')->get();
        $data['ads'] = Ads::latest()->take(10)->get();


        return view('admin.index', $data);
    }

    public function userManagement()
    {

        // this is the part i have to work on
        $persons = User::all();
        return view('admin.user-management')->with(compact('persons'));
    }


    public function adManagement()
    {


        return view('admin.ad-management');
    }

    public function editAds($adId)
    {

        $ads = Ads::find($adId);
        $userId = User::find(1);
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
        $userId = User::find(5);

        $time = [];
        $date = Carbon::now();
        $i = 10;
        while ($i >= 0) {
            $num = (int)($date->format('Y')) - $i;
            array_push($time, $num);
            $i--;
        }
        return view('admin.add-ads', compact('userId', 'time'));

    }


    public function addAdsUpdate(Request $request, $userId)
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


        $userId = User::find(5);

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

    public function packageManagement()
    {


        return view('admin.package-management');
    }

    public function settings()
    {


        return view('admin.settings');
    }


    public function membership()
    {


        return view('admin.membership');
    }

    public function transManage()
    {


        return view('admin.trans-manage');
    }


    public function userActive($userId)
    {

        $user = User::find($userId);

        if ($user->activity !='deactivate' ){

        $user->update([

            'activity' => 'deactivate'
        ]);
        }
        else if ($user->activity !='active' ){

        $user->update([

            'activity' => 'active'
        ]);
        }

        return redirect()->route('admin.user-management');
    }

    public function userDeleted($userId)
    {

        $user = User::find($userId);

        if ($user->deleted =='alive' ){

        $user->update([

            'deleted' => 'died'
        ]);
        }
        else if ($user->deleted =='died' ){

        $user->update([

            'deleted' => 'alive'
        ]);
        }

        return redirect()->route('admin.user-management');
    }

    public function edit($userId)
    {

        $user = User::find($userId);

        return view('admin.user-edit', compact('user'));

    }

    public function update(Request $request, $itemId)
    {

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'mobile' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required',

        ]);


        $user = User::find($itemId);


        $user->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'username' => $request->username,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'companyname' => $request->companyname,

        ]);

        if ($request->has('password')) {
            $pass = bcrypt($request['password']);
            $user->update([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'username' => $request->username,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'companyname' => $request->companyname,
                'password' => $pass,
            ]);
        }

        return redirect('admin-panel/user-management');
    }

}
