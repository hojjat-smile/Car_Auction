<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Ads;
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
use MongoDB\Driver\Query;

class IndexController extends Controller
{
    public function index()
    {

        $ads = Ads::orderBy('view', 'desc')->get();
        $packages = Packages::all();

        return view('web.index', compact('ads', 'packages'));
    }

    public function search(Request $request)
    {


//        $maker = Maker::where('title', 'LIKE', '%' . $request->search . '%')->get();


        $search = $request->search;


        $maker = Ads::whereHas(
            'makers', function (Builder $query, $search) {
            $query->where('title', 'LIKE', '%' . $search . '%');
        }

        )->orWhereHas(
            'models', function (Builder $query, $search) {
            $query->where('title', 'LIKE', '%' . $search . '%');

        })->get();


        return view('web.find-car', compact('maker'));
    }

    public function aboutUs()
    {
        $about = AboutUs::find(1);

        return view('web.about-us', compact('about'));
    }

    public function contactSendMessage(Request $request)
    {

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);


        ContactUs::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'subject' => $request['subject'],
            'message' => $request['message'],
        ]);


        return redirect()->route('web.contact');
    }

    public function contact(Request $request)
    {


        $info = InfoAboutUs::find(1);

        return view('web.contact', compact('info'));
    }

    public function rules()
    {

        $rules = Rules::find(1);


        return view('web.rules', compact('rules'));
    }

    public function vehicle_search()
    {
        return view('web.vehicle_search');


    }

    public function workings()
    {


        return view('web.how-works');
    }

    public function findCar()
    {
        $time = [];
        $date = Carbon::now();
        $i = 10;
        while ($i >= 0) {
            $num = (int)($date->format('Y')) - $i;
            array_push($time, $num);
            $i--;
        }
        $maker = null;
        $search = Ads::where("is_published",1)->paginate(30);
        return view('web.find-car', compact('time', 'maker','search'));
    }

    public function searchCar(Request $request)
    {

        $query = Ads::query();
        $query->where("is_published",1);

        if($request->input("fromYear")!=0 && $request->input("toYear")!=0){
            $query->where("year",">=",$request->input("fromYear"))->where("year","<=", $request->input("toYear"));
        }

        $query->where("condition_id",$request->input("condition_type"));

        if($request->input("country")!=0){
            $query->where("country",$request->input("country"));
        }

        if($request->input("city")!=0){
            $query->where("city",$request->input("city"));
        }

        if($request->input("damage")!=0){
            $query->where("damage_id",$request->input("damage"));
        }

        if($request->input("maker")!=0){
            $query->where("maker_id",$request->input("maker"));
        }

        if($request->input("category")!=0){
            $query->where("category_id",$request->input("category"));
        }


        $search = $query->paginate(30);


        $time = [];
        $date = Carbon::now();
        $i = 10;
        while ($i >= 0) {
            $num = (int)($date->format('Y')) - $i;
            array_push($time, $num);
            $i--;
        }

        $maker = null;

        return view('web.find-car', compact('time', 'search','maker'));


    }

}
