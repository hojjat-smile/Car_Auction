<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use Illuminate\Support\Facades\File;

use App\Models\Image;
use Illuminate\Http\Request;

class IndexController extends Controller
{


    public function dashboard()
    {


        return view('user.dashboard');
    }

    public function myAds()
    {


        return view('user.my-ads');
    }

    public function profile()
    {


        return view('user.profile');
    }

    public function addCarPost(Request $request)
    {

        $request->validate([
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
            'collection-city' => 'required',
            'mileage' => 'required',
            'image' => 'required',
            'collection-telephone' => 'required',
        ]);


        $ads = Ads::Create([
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
            'collection-city' => $request['collection-city'],
            'mileage' => $request['mileage'],
            'collection-telephone' => $request['collection-telephone'],
        ]);


        Image::create([

            'ads_id' => 3,
            'image' => $this->postFile(3,$request,'image'),
        ]);



        return redirect()->route('user.add-car');
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

    public function addCar()
    {


        return view('user.add-car');
    }

    public function adList()
    {


        return view('user.ad-list');
    }


}
