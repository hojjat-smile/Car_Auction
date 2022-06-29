<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\InfoAboutUs;


class AboutUsController extends Controller
{


    public function aboutUs()
    {
        $about = AboutUs::find(1);
        $infoAbout = InfoAboutUs::find(1);

        return view('web.about-us', compact('about','infoAbout'));
    }


}
