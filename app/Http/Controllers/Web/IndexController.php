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


class IndexController extends Controller
{
    public function index()
    {

        $ads = Ads::orderBy('view', 'desc')->where("is_published", 1)->where("type_sell", 'normal')->get();
        $auction = Ads::orderBy('view', 'desc')->where("is_published", 1)->where("type_sell", 'auction')->get();

        $packages = Packages::all();

        return view('web.index', compact('ads', 'auction', 'packages'));
    }

    public function search(Request $request)
    {

        $ads = Ads::where('is_published', 1)->where(function ($q) use ($request) {
            $q->where('maker', 'like', "%$request->search%")
                ->orWhereRaw("concat(maker, ' ', model) like '%$request->search%'")
                ->orWhere('model', 'like', "$request->search");
        })->get();


        return view('web.vehicle_search', compact('ads'));
    }

    public function aboutUs()
    {
        $about = AboutUs::find(1);

        return view('web.about-us', compact('about'));
    }

    public function contact()
    {

        $info = InfoAboutUs::find(1);

        return view('web.contact', compact('info'));
    }

    public function rules()
    {

        $rules = Rules::find(1);


        return view('web.rules', compact('rules'));
    }

    public function workings()
    {


        return view('web.how-works');
    }

}
