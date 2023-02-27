<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Listing;
use App\Models\Dashboard;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{


    public function dashboard()
    {

     $listing= Listing::count();
     $users = User::count();
     $adminCount = DB::table('users')->where('is_admin', '=', 1)->count();
     $forSale= DB::table('listings')->where('tags', 'LIKE', '%for_sale%')->count();

  
        return view('dashboards.dashboard', compact('listing','users','adminCount','forSale'),[
            'listings' => Listing::latest()->filter(request(['tag','search']))->paginate(9)
        ]);
    }

    public function table() {

        $listing= Listing::count();
        $users = User::count();

        return view('dashboards.table', compact('listing','users'),[
            'listings' => Listing::latest()->filter(request(['tag','search']))->where('tags', 'LIKE', '%for_sale%')->paginate(4)
        ]);
    }

    public function forrent() {

        $listing= Listing::count();
        $users = User::count();

        return view('dashboards.forrent', compact('listing','users'),[
            'listings' => Listing::latest()->filter(request(['tag','search']))->where('tags', 'LIKE', '%for_rent%')->paginate(4)
        ]);
    }

    public function sold() {

        $listing= Listing::count();
        $users = User::count();

        return view('dashboards.sold', compact('listing','users'),[
            'listings' => Listing::latest()->filter(request(['tag','search']))->where('tags', 'LIKE', '%sold%')->paginate(4)
        ]);
    }

    public function rented() {

        $listing= Listing::count();
        $users = User::count();

        return view('dashboards.rented', compact('listing','users'),[
            'listings' => Listing::latest()->filter(request(['tag','search']))->where('tags', 'LIKE', '%rented%')->paginate(4)
        ]);
    }
    
}
