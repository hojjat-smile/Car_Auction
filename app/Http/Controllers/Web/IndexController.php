<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{


    public function index()
    {


        return view('web.index');
    }


    public function singlePage($adsId)
    {

        $ad = Ads::find($adsId);

        $user = User::find($ad->user_id);

        return view('web.single-page',compact('ad','user'));
    }



    public function aboutUs()
    {


        return view('web.about-us');
    }

    public function contact()
    {


        return view('web.contact');
    }

    public function roles()
    {


        return view('web.roles');
    }


    public function registerPage()
    {


        return view('web.register');
    }

    public function register(Request $request)
    {


//        $request->validate([
//            'first_name' => 'required',
//            'last_name' => 'required',
//            'mobile' => 'required',
//            'username' => 'required|unique:users',
//            'email' => 'required',
//            'password' => 'required',
//            'password_confirm' => 'required',
//
//        ]);

        $pass = bcrypt($request['password']);

        if ($request->has('company_name')) {
            User::Create([
                'firstname' => $request['first_name'],
                'lastname' => $request['last_name'],
                'mobile' => $request['mobile'],
                'companyname' => $request['company_name'],
                'username' => $request['username'],
                'email' => $request['email'],
                'country_id' => $request['country_id'],
                'state_id' => $request['state_id'],
                'city_id' => $request['city_id'],
                'password' => $pass,
                'usertype' => 'seller',

            ]);

        } elseif (!$request->has('company_name')) {
            User::Create([
                'firstname' => $request['first_name'],
                'lastname' => $request['last_name'],
                'mobile' => $request['mobile'],
                'companyname' => $request['company_name'],
                'username' => $request['username'],
                'email' => $request['email'],
                'password' => $pass,
                'usertype' => 'member',
            ]);
        }


        return redirect()->route('web.index');
    }


    public function loginPage()
    {

        return view('web.login');
    }

    public function login(Request $request)
    {

        return redirect()->route('web.login');
    }
    public function vehicle_search()
    {
        return view('web.vehicle_search');


    }


    public function findCar()
    {



        return view('web.find-car');


    }


}
