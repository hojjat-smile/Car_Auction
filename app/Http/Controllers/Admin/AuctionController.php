<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ads;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class AuctionController extends Controller
{


    public function myAuction()
    {

        $ads = Ads::where('type_sell', 'auction')->get();

        return view('admin.my-auction', compact('ads'));

    }

    public function addAuction()
    {

        $time = [];
        $date = Carbon::now();
        $i = 10;
        while ($i >= 0) {
            $num = (int)($date->format('Y')) - $i;
            array_push($time, $num);
            $i--;
        }
        return view('admin.add-auction', compact('time'));

    }

    public function addAuctionPost(Request $request)
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
            'base_price' => 'required',
            'rough_price' => 'required',
        ]);

        $ads = Ads::create([
            'user_id' => Auth::user()->id,
            'type_sell' => 'auction',
            'category' => $request->category,
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

            'base_price' => $request->base_price,
            'rough_price' => $request->rough_price,
        ]);

        $path = 'uploads/images/auction/';
        File::exists($path) or File::makeDirectory($path . $ads->id, 0775, true, true);
        $imageName = 'uploads/images/auction/' . $ads->id . '/' . $request->mainImage->getClientOriginalName();
        $request->mainImage->move(('uploads/images/auction/' . $ads->id), $imageName);

        $image = new Image();
        $image->ads_id = $ads->id;
        $image->main = 0;
        $image->image = $imageName;
        $image->save();

        if ($request->has("ImageTwo")) {

            $path = 'uploads/images/auction/';
            File::exists($path) or File::makeDirectory($path . $ads->id, 0775, true, true);
            $imageName = 'uploads/images/auction/' . $ads->id . '/' . $request->ImageTwo->getClientOriginalName();
            $request->ImageTwo->move(('uploads/images/auction/' . $ads->id), $imageName);

            $image = new Image();
            $image->ads_id = $ads->id;
            $image->main = 0;
            $image->image = $imageName;
            $image->save();
        }

        if ($request->has("ImageThree")) {

            $path = 'uploads/images/auction/';
            File::exists($path) or File::makeDirectory($path . $ads->id, 0775, true, true);
            $imageName = 'uploads/images/auction/' . $ads->id . '/' . $request->ImageThree->getClientOriginalName();
            $request->ImageThree->move(('uploads/images/auction/' . $ads->id), $imageName);

            $image = new Image();
            $image->ads_id = $ads->id;
            $image->main = 0;
            $image->image = $imageName;
            $image->save();
        }

        if ($request->has("ImageFour")) {

            $path = 'uploads/images/auction/';
            File::exists($path) or File::makeDirectory($path . $ads->id, 0775, true, true);
            $imageName = 'uploads/images/auction/' . $ads->id . '/' . $request->ImageFour->getClientOriginalName();
            $request->ImageFour->move(('uploads/images/auction/' . $ads->id), $imageName);

            $image = new Image();
            $image->ads_id = $ads->id;
            $image->main = 0;
            $image->image = $imageName;
            $image->save();
        }

        if ($request->has("ImageFive")) {

            $path = 'uploads/images/auction/';
            File::exists($path) or File::makeDirectory($path . $ads->id, 0775, true, true);
            $imageName = 'uploads/images/auction/' . $ads->id . '/' . $request->ImageFive->getClientOriginalName();
            $request->ImageFive->move(('uploads/images/auction/' . $ads->id), $imageName);

            $image = new Image();
            $image->ads_id = $ads->id;
            $image->main = 0;
            $image->image = $imageName;
            $image->save();
        }

        if ($ads == null) {
            session()->flash('Error', 'Auction error not Submitted.');
            return redirect()->route('admin.my-auction');

        }

        session()->flash('Success', 'Auction Submitted.');

        return redirect()->route('admin.my-auction');
    }

    public function editAuction($itemID)
    {

        $ads = Ads::find($itemID);
        $time = [];
        $date = Carbon::now();
        $i = 10;
        while ($i >= 0) {
            $num = (int)($date->format('Y')) - $i;
            array_push($time, $num);
            $i--;
        }

        return view('admin.edit-auction', compact('ads', 'time'));
    }

    public function editAuctionPost(Request $request, $itemID)
    {

        $request->validate([
            'base_price' => 'required',
            'rough_price' => 'required',
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


        ]);


        $ads = Ads::find($itemID);

        $ads->update([
            'user_id' => Auth::user()->id,
            'type_sell' => 'auction',
            'category' => $request->category,
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

            'base_price' => $request->base_price,
            'rough_price' => $request->rough_price,
        ]);



        if ($request->has("mainImage")) {

            $path = 'uploads/images/auction/';
            File::exists($path) or File::makeDirectory($path . $ads->id, 0775, true, true);
            $imageName = 'uploads/images/auction/' . $ads->id . '/' . $request->mainImage->getClientOriginalName();
            $request->mainImage->move(('uploads/images/auction/' . $ads->id), $imageName);

            $image = new Image();
            $image->ads_id = $ads->id;
            $image->main = 0;
            $image->image = $imageName;
            $image->save();
        }
        if ($request->has("ImageTwo")) {

            $path = 'uploads/images/auction/';
            File::exists($path) or File::makeDirectory($path . $ads->id, 0775, true, true);
            $imageName = 'uploads/images/auction/' . $ads->id . '/' . $request->ImageTwo->getClientOriginalName();
            $request->ImageTwo->move(('uploads/images/auction/' . $ads->id), $imageName);

            $image = new Image();
            $image->ads_id = $ads->id;
            $image->main = 0;
            $image->image = $imageName;
            $image->save();
        }

        if ($request->has("ImageThree")) {

            $path = 'uploads/images/auction/';
            File::exists($path) or File::makeDirectory($path . $ads->id, 0775, true, true);
            $imageName = 'uploads/images/auction/' . $ads->id . '/' . $request->ImageThree->getClientOriginalName();
            $request->ImageThree->move(('uploads/images/auction/' . $ads->id), $imageName);

            $image = new Image();
            $image->ads_id = $ads->id;
            $image->main = 0;
            $image->image = $imageName;
            $image->save();
        }

        if ($request->has("ImageFour")) {

            $path = 'uploads/images/auction/';
            File::exists($path) or File::makeDirectory($path . $ads->id, 0775, true, true);
            $imageName = 'uploads/images/auction/' . $ads->id . '/' . $request->ImageFour->getClientOriginalName();
            $request->ImageFour->move(('uploads/images/auction/' . $ads->id), $imageName);

            $image = new Image();
            $image->ads_id = $ads->id;
            $image->main = 0;
            $image->image = $imageName;
            $image->save();
        }

        if ($request->has("ImageFive")) {

            $path = 'uploads/images/auction/';
            File::exists($path) or File::makeDirectory($path . $ads->id, 0775, true, true);
            $imageName = 'uploads/images/auction/' . $ads->id . '/' . $request->ImageFive->getClientOriginalName();
            $request->ImageFive->move(('uploads/images/auction/' . $ads->id), $imageName);

            $image = new Image();
            $image->ads_id = $ads->id;
            $image->main = 0;
            $image->image = $imageName;
            $image->save();
        }

        if ($ads == null) {

            session()->flash('Error', 'Auction error could not be edited.');

            return redirect()->route('admin.my-auction');
        }

        session()->flash('Success', 'Auction Edited.');

        return redirect()->route('admin.my-auction');
    }

    public function publishAuction($adsId)
    {
        $ads = Ads::find($adsId);

        if ($ads->is_published == 1) {

            $ads->update([
                'is_published' => 0
            ]);
            session()->flash('Success', 'Auction Published.');

        } else if ($ads->is_published == 0) {

            $ads->update([
                'is_published' => 1
            ]);
            session()->flash('Success', 'Auction deactivated');

        }


        return redirect(route('admin.my-auction'));
    }

    public function viewAuction($adsId)

    {

        $time = [];
        $date = Carbon::now();
        $i = 10;
        while ($i >= 0) {
            $num = (int)($date->format('Y')) - $i;
            array_push($time, $num);
            $i--;
        }

        $auction = Ads::find($adsId);


        return view('admin.view-auction', compact('auction', 'time'));
    }

    public function deleteAuction($itemId)
    {
        $ads = Ads::find($itemId);

        $ads->delete();

        session()->flash('Success', 'Auction Deleted.');

        return redirect()->route('admin.my-auction');
    }

    public function auctionImageSetDefault($imageId, $adsId)
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
        return redirect()->route('admin.edit-auction', $adsId);

    }

    public function auctionImageDelete($imageId, $adsId)
    {
        $image = Image::find($imageId);

        $image->delete();

        session()->flash('Success', 'Image Deleted');
        return redirect()->route('admin.edit-auction', $adsId);

    }
}
