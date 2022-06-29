<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Ads;
use App\Models\ContactUs;
use App\Models\InfoAboutUs;
use App\Models\Packages;
use App\Models\Rules;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;


class FilterSearchController extends Controller
{


    public function findCarView()
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

        return view('web.find-car',compact('maker','time'));


    }
    public function findCar(Request $request)
    {

        $query = Ads::query();
        $query->where("is_published", 1);

        if ($request->input("fromYear") != 0 && $request->input("toYear") != 0) {
            $query->where("year", ">=", $request->input("fromYear"))->where("year", "<=", $request->input("toYear"));
        }

        $query->where("condition_id", $request->input("condition_type"));

        if ($request->input("country") != 0) {
            $query->where("country_id", $request->input("country"));
        }

        if ($request->input("city") != 0) {
            $query->where("city_id", $request->input("city"));
        }

        if ($request->input("damage") != 0) {
            $query->where("damage_id", $request->input("damage"));
        }

        if ($request->input("maker") != 0) {
            $query->where("maker_id", $request->input("maker"));
        }

        if ($request->input("category") != 0) {
            $query->where("category_id", $request->input("category"));
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

        $maker = true;

        return view('web.find-car', compact('time', 'search', 'maker'));


    }
}
