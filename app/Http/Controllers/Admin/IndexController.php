<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class IndexController extends Controller
{


    public function dashboard()
    {


        return view('admin.index');
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

    public function editAds( $adId)
    {

        $ads = Ads::find($adId);
        return view('admin.edit-ads', compact('ads'));
    }

    public function editAdsUpdate(Request $request, $adsId)
    {


        $request->validate([
            'first_name' => 'required',
            'sellertype' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'addressone' => 'required',
            'addresstwo' => 'required',
            'city' => 'required',
            'postcode' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'membernumber' => 'required',
            'sellercode' => 'required',
            'collectionaddress' => 'required',
            'collection_city' => 'required',
            'collection_telephone' => 'required',
            'mileage' => 'required',

        ]);

        $ads = Ads::find($adsId);


        $ads->update([

            'sellertype' => $request['sellertype'],
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'addressone' => $request['addressone'],
            'addresstwo' => $request['addresstwo'],
            'city' => $request['city'],
            'postcode' => $request['postcode'],
            'telephone' => $request['telephone'],
            'email' => $request['email'],
            'membernumber' => $request['membernumber'],
            'sellercode' => $request['sellercode'],
            'collectionaddress' => $request['collectionaddress'],
            'collection_city' => $request['collection_city'],
            'collection_telephone' => $request['collection_telephone'],
            '$mileage' => $request['$mileage'],

            ]);


        if ($request->has('image'))
        {
            $image_ads = Image::find($ads->image->id);
            $image_ads->update([

                'ads_id' =>  $ads->image->id,
                'image' => $this->postFile(3, $request, 'image'),
            ]);
        }


        return redirect(route('admin.ad-management'));
    }
    public function postFile($user_id, $request, $field_name)
    {

        $path = "uploads/images" . '/' . $user_id;

        if (file_exists($path)) {
            File::deleteDirectory(public_path($path));
        }

        File::exists($path) or File::makeDirectory($path, 0775, true, true);
        $document_name = $path . '/' . $request->file($field_name)->getClientOriginalName();
        $request->file($field_name)->move($path, $document_name);

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


    public function edit($userId)
    {

        $user=User::find($userId);

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

        if($request->has('password')){
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
