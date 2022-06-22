<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory;

    protected $table = 'ads';

    protected $fillable = [
        'user_id',
        'odometer',
        'vrn',
        'primary_damage_id',
        'secondary_damage_id',
        'additional_damage_id',
        'vin',
        'body_style',
        'colour_id',
        'type_sell',
        'engine_type',
        'transmission',
        'drive',
        'fuel',
        'keys',
        'v_five_notes',
        'vat',  //VAT to be added to final sale price:
        'additional_info',
        'bid_status',
        'sale_status',
        'current_bid',
        'country_id',
        'city_id',
        'year',
        'damage_id',
        'maker_id',
        'model_id',
        'category_id',
        'condition_id',
        'is_published',
        'view',
        'car_type_id',
    ];


    public function image()
    {
        return $this->hasOne(Image::class, 'ads_id', 'id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function country()
    {
        return $this->hasOne(Country::class, 'id', 'country_id');
    }

    public function city()
    {
        return $this->hasOne(City::class, 'id', 'city_id');
    }


    public function condition()
    {
        return $this->hasOne(Condition::class, 'id', 'condition_id');
    }


    public function category()
    {
        return $this->hasOne(Categories::class, 'id', 'category_id');
    }


    public function damage()
    {
        return $this->hasOne(DamageType::class, 'id', 'damage_id');
    }


    public function colour()
    {
        return $this->hasOne(Colour::class, 'id', 'colour_id');
    }


    public function maker()
    {
        return $this->hasOne(Maker::class, 'id', 'maker_id');
    }


    public function model()
    {
        return $this->hasOne(ModelCar::class, 'id', 'model_id');
    }


    public function makers()
    {
        return $this->hasMany(Maker::class, 'id', 'maker_id');
    }


    public function models()
    {
        return $this->hasMany(ModelCar::class, 'id', 'model_id');
    }


    public function primaryDamage()
    {
        return $this->hasOne(PrimaryDamage::class, 'id', 'primary_damage_id');
    }


    public function additionalDamage()
    {
        return $this->hasOne(AdditionalDamage::class, 'id', 'additional_damage_id');
    }


    public function secondaryDamage()
    {
        return $this->hasOne(SecondaryDamage::class, 'id', 'secondary_damage_id');
    }

    public function auction()
    {
        return $this->hasOne(Auction::class, 'ads_id', 'id');
    }

    public function carType()
    {
        return $this->hasOne(CarType::class, 'id', 'car_type_id');
    }


}
