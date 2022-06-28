<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Packages;
use App\Models\Transactions;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;


class OrdersController extends Controller
{


    public function orderNew($itemId)
    {


        $current = Carbon::now();
        $package = Packages::find($itemId);
        $user = User::find(Auth::user()->id);

        Transactions::create([
            'price' => $package->price ,
            'user_id' => $user->id,
            'card_id' => 1,
            'card_type' => 'perfectmoney',
            'Authority' => 'A000000000000123123',
            'pay' => 'pay',
            'code' => '0378559611747305',
            'status' => 'done',
        ]);


        $trialExpires = $current->addMonth($package->period);


        $user->update([
            'membership' => $trialExpires,
        ]);

        session()->flash('Success', 'New order submitted');

        return redirect()->route('user.membership');
    }

}
