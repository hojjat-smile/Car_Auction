<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ads;


use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use App\Models\Image;
use Illuminate\Http\Request;


class AdsController extends Controller
{

    public function adManagement()
    {
        $ads = Ads::where("type_sell", "normal")->get();
        return view('admin.ad-management', compact('ads'));
    }

    public function editAds($adId)
    {

        $ads = Ads::find($adId);

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

        $time = [];
        $date = Carbon::now();
        $i = 10;
        while ($i >= 0) {
            $num = (int)($date->format('Y')) - $i;
            array_push($time, $num);
            $i--;
        }
        return view('admin.add-ads', compact('time'));

    }

    public function addAdsUpdate(Request $request)
    {

        $request->validate([
            'car_type_id' => 'required',
            'maker_id' => 'required',
            'model_id' => 'required',
            'colour_id' => 'required',
            'category_id' => 'required',
            'condition_id' => 'required',
            'engine_type' => 'required',
            'year' => 'required',
            'country_id' => 'required',
            'city_id' => 'required',
            'damage_id' => 'required',
            'odometer' => 'required',
            'primary_damage_id' => 'required',
            'body_style' => 'required',
            'transmission' => 'required',
            'fuel' => 'required',
            'keys' => 'required',
            'v_five_notes' => 'required',
            'additional_info' => 'required',
            'mainImage' => 'required',
            'price' => 'required',
        ]);


        $ads = Ads::create([
            'user_id' => Auth::user()->id,
            'type_sell' => 'normal',
            'car_type_id' => $request->car_type_id,
            'maker_id' => $request->maker_id,
            'model_id' => $request->model_id,
            'colour_id' => $request->colour_id,
            'category_id' => $request->category_id,
            'condition_id' => $request->condition_id,
            'engine_type' => $request->engine_type,
            'year' => $request->year,
            'country_id' => $request->country_id,
            'city_id' => $request->city_id,
            'damage_id' => $request->damage_id,
            'odometer' => $request->odometer,
            'primary_damage_id' => $request->primary_damage_id,
            'body_style' => $request->body_style,
            'transmission' => $request->transmission,
            'fuel' => $request->fuel,
            'keys' => $request->keys,
            'v_five_notes' => $request->v_five_notes,
            'additional_info' => $request->additional_info,
            'price' => $request->price,
        ]);

        $path = 'uploads/images/ads/';
        File::exists($path) or File::makeDirectory($path . $ads->id, 0775, true, true);
        $imageName = 'uploads/images/ads/' . $ads->id . '/' . $request->mainImage->getClientOriginalName();
        $request->mainImage->move(('uploads/images/ads/' . $ads->id), $imageName);

        $image = new Image();
        $image->ads_id = $ads->id;
        $image->main = 0;
        $image->image = $imageName;
        $image->save();

        if ($request->has("ImageTwo")) {

            $path = 'uploads/images/ads/';
            File::exists($path) or File::makeDirectory($path . $ads->id, 0775, true, true);
            $imageName = 'uploads/images/ads/' . $ads->id . '/' . $request->ImageTwo->getClientOriginalName();
            $request->ImageTwo->move(('uploads/images/ads/' . $ads->id), $imageName);

            $image = new Image();
            $image->ads_id = $ads->id;
            $image->main = 0;
            $image->image = $imageName;
            $image->save();
        }

        if ($request->has("ImageThree")) {

            $path = 'uploads/images/ads/';
            File::exists($path) or File::makeDirectory($path . $ads->id, 0775, true, true);
            $imageName = 'uploads/images/ads/' . $ads->id . '/' . $request->ImageThree->getClientOriginalName();
            $request->ImageThree->move(('uploads/images/ads/' . $ads->id), $imageName);

            $image = new Image();
            $image->ads_id = $ads->id;
            $image->main = 0;
            $image->image = $imageName;
            $image->save();
        }

        if ($request->has("ImageFour")) {

            $path = 'uploads/images/ads/';
            File::exists($path) or File::makeDirectory($path . $ads->id, 0775, true, true);
            $imageName = 'uploads/images/ads/' . $ads->id . '/' . $request->ImageFour->getClientOriginalName();
            $request->ImageFour->move(('uploads/images/ads/' . $ads->id), $imageName);

            $image = new Image();
            $image->ads_id = $ads->id;
            $image->main = 0;
            $image->image = $imageName;
            $image->save();
        }

        if ($request->has("ImageFive")) {

            $path = 'uploads/images/ads/';
            File::exists($path) or File::makeDirectory($path . $ads->id, 0775, true, true);
            $imageName = 'uploads/images/ads/' . $ads->id . '/' . $request->ImageFive->getClientOriginalName();
            $request->ImageFive->move(('uploads/images/ads/' . $ads->id), $imageName);

            $image = new Image();
            $image->ads_id = $ads->id;
            $image->main = 0;
            $image->image = $imageName;
            $image->save();
        }

        session()->flash('Success', 'Ad Submitted Successfully.');

        return redirect()->route('admin.ad-management');
    }

    public function deleteAds($adsId)
    {

        $ads = Ads::find($adsId);

        $image = Image::find($ads->image->id);

        $image->delete();
        $ads->delete();

        session()->flash('Success', 'Ad Deleted.');

        return redirect()->route('admin.ad-management');
    }

    public function publishAds(Request $request, $adsId)
    {

        $ads = Ads::find($adsId);


        if ($ads->is_published == 1) {

            $ads->update([
                'is_published' => 0
            ]);
            session()->flash('Success', 'Ad Published.');
        } else if ($ads->is_published == 0) {

            $ads->update([
                'is_published' => 1
            ]);
            session()->flash('Success', 'Ad deactivated');

        }

        return redirect(route('admin.ad-management'));
    }

    public function viewAds($adsId)

    {
        $time = [];
        $date = Carbon::now();
        $i = 10;
        while ($i >= 0) {
            $num = (int)($date->format('Y')) - $i;
            array_push($time, $num);
            $i--;
        }

        $ads = Ads::find($adsId);
        return view('admin.view-ads', compact('ads', 'time'));
    }

    public function editAdsUpdate(Request $request, $adsId)

    {
        $request->validate([
            'car_type_id' => 'required',
            'maker_id' => 'required',
            'model_id' => 'required',
            'colour_id' => 'required',
            'category_id' => 'required',
            'condition_id' => 'required',
            'engine_type' => 'required',
            'year' => 'required',
            'country_id' => 'required',
            'city_id' => 'required',
            'damage_id' => 'required',
            'odometer' => 'required',
            'primary_damage_id' => 'required',
            'body_style' => 'required',
            'transmission' => 'required',
            'fuel' => 'required',
            'keys' => 'required',
            'v_five_notes' => 'required',
            'additional_info' => 'required',
            'price' => 'required',
        ]);

        $ads = Ads::find($adsId);

        $ads->update([
            'user_id' => Auth::user()->id,
            'type_sell' => 'normal',
            'car_type_id' => $request->car_type_id,
            'maker_id' => $request->maker_id,
            'model_id' => $request->model_id,
            'colour_id' => $request->colour_id,
            'category_id' => $request->category_id,
            'condition_id' => $request->condition_id,
            'engine_type' => $request->engine_type,
            'year' => $request->year,
            'country_id' => $request->country_id,
            'city_id' => $request->city_id,
            'damage_id' => $request->damage_id,
            'odometer' => $request->odometer,
            'primary_damage_id' => $request->primary_damage_id,
            'body_style' => $request->body_style,
            'transmission' => $request->transmission,
            'fuel' => $request->fuel,
            'keys' => $request->keys,
            'v_five_notes' => $request->v_five_notes,
            'additional_info' => $request->additional_info,
            'price' => $request->price,
        ]);
        if ($request->has("mainImage")) {

            $path = 'uploads/images/ads';
            File::exists($path) or File::makeDirectory($path . $ads->id, 0775, true, true);
            $imageName = 'uploads/images/ads' . $ads->id . '/' . $request->mainImage->getClientOriginalName();
            $request->mainImage->move(('uploads/images/ads' . $ads->id), $imageName);

            $image = new Image();
            $image->ads_id = $ads->id;
            $image->main = 0;
            $image->image = $imageName;
            $image->save();
        }
        if ($request->has("ImageTwo")) {

            $path = 'uploads/images/ads';
            File::exists($path) or File::makeDirectory($path . $ads->id, 0775, true, true);
            $imageName = 'uploads/images/ads' . $ads->id . '/' . $request->ImageTwo->getClientOriginalName();
            $request->ImageTwo->move(('uploads/images/ads' . $ads->id), $imageName);

            $image = new Image();
            $image->ads_id = $ads->id;
            $image->main = 0;
            $image->image = $imageName;
            $image->save();
        }

        if ($request->has("ImageThree")) {

            $path = 'uploads/images/ads';
            File::exists($path) or File::makeDirectory($path . $ads->id, 0775, true, true);
            $imageName = 'uploads/images/ads' . $ads->id . '/' . $request->ImageThree->getClientOriginalName();
            $request->ImageThree->move(('uploads/images/ads' . $ads->id), $imageName);

            $image = new Image();
            $image->ads_id = $ads->id;
            $image->main = 0;
            $image->image = $imageName;
            $image->save();
        }

        if ($request->has("ImageFour")) {

            $path = 'uploads/images/ads';
            File::exists($path) or File::makeDirectory($path . $ads->id, 0775, true, true);
            $imageName = 'uploads/images/ads' . $ads->id . '/' . $request->ImageFour->getClientOriginalName();
            $request->ImageFour->move(('uploads/images/ads' . $ads->id), $imageName);

            $image = new Image();
            $image->ads_id = $ads->id;
            $image->main = 0;
            $image->image = $imageName;
            $image->save();
        }

        if ($request->has("ImageFive")) {

            $path = 'uploads/images/ads';
            File::exists($path) or File::makeDirectory($path . $ads->id, 0775, true, true);
            $imageName = 'uploads/images/ads' . $ads->id . '/' . $request->ImageFive->getClientOriginalName();
            $request->ImageFive->move(('uploads/images/ads' . $ads->id), $imageName);

            $image = new Image();
            $image->ads_id = $ads->id;
            $image->main = 0;
            $image->image = $imageName;
            $image->save();
        }

        if ($ads == null) {

            session()->flash('Error', 'Ads error could not be edited.');

            return redirect()->route('admin.ad-management');
        }
        session()->flash('Success', 'Ad Edited.');

        return redirect(route('admin.ad-management'));
    }

    public function adsImageSetDefault($imageId, $adsId)
    {
        $images = Image::where('main', 1)->get();

        foreach ($images as $image) {
            $image->main = 0;
            $image->save();

        }

        $newImage = Image::find($imageId);
        $newImage->main = 1;
        $newImage->save();


        session()->flash('Success', 'Set as Default.');
        return redirect()->route('admin.edit-ads', $adsId);

    }

    public function adsImageDelete($imageId, $adsId)
    {
        $image = Image::find($imageId);

        $image->delete();


        session()->flash('Success', 'Image Deleted');
        return redirect()->route('admin.edit-ads', $adsId);

    }

}
