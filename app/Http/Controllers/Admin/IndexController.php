<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use App\Models\Packages;
use App\Models\Transactions;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class IndexController extends Controller
{

    public function dashboard()
    {

        $data['auction'] = Ads::where('type_sell', 'auction')->latest()->take(10)->get();
        $data['ads'] = Ads::where('type_sell', 'normal')->latest()->take(10)->get();


        return view('admin.index', $data);
    }

}
