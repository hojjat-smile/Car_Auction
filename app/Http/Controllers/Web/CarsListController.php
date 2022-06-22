<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use Illuminate\Http\Request;


class CarsListController extends Controller
{

    public function categoryList($itemId , $type)
    {

        if ($type == 'normal')
        {
            $ads = Ads::where(['category_id'=>$itemId,'type_sell'=> 'auction'])->get();
            $catId = Ads::where('category_id', $itemId)->get()->first();
            $name = $catId->category->title;
        }
        elseif ($type == 'auction')
        {
            $ads = Ads::where(['category_id'=>$itemId,'type_sell'=> 'normal'])->get();
            $catId = Ads::where('category_id', $itemId)->get()->first();
            $name = $catId->category->title . '    ' . 'Auction';

        }


        return view('web.cars-list', compact('ads', 'name'));
    }

    public function damageList($itemId , $type)
    {


        if ($type == 'normal')
        {
            $ads = Ads::where(['additional_damage_id'=>$itemId,'type_sell'=> 'normal'])->get();
            $catId = Ads::where('additional_damage_id', $itemId)->get()->first();
            $name = $catId->additionalDamage->title;
        }
        elseif ($type == 'auction')
        {
            $ads = Ads::where(['additional_damage_id'=>$itemId,'type_sell'=> 'auction'])->get();
            $catId = Ads::where('additional_damage_id', $itemId)->get()->first();
            $name = $catId->additionalDamage->title . '    ' . 'Auction';

        }


        return view('web.cars-list', compact('ads', 'name'));
    }

    public function carTypeList($itemId , $type)
    {
        if ($type == 'normal')
        {
            $ads = Ads::where(['car_type_id'=>$itemId,'type_sell'=> 'normal'])->get();
            $catId = Ads::where('car_type_id', $itemId)->get()->first();
            $name = $catId->carType->title;
        }
        elseif ($type == 'auction')
        {
            $ads = Ads::where(['car_type_id'=>$itemId,'type_sell'=> 'auction'])->get();
            $catId = Ads::where('car_type_id', $itemId)->get()->first();

            $name = $catId->carType->title . '    ' . 'Auction';

        }

        return view('web.cars-list', compact('ads', 'name'));
    }


}


