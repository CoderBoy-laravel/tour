<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Uaetoursproduct;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class HomeController extends Controller
{
    public function redirect()
    {
        $users = User::paginate(5);
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return view('admin.home', compact('users'));
        } else {
            // return view('user.home');

            $uaetourdata = Uaetoursproduct::all();
            return view('user.home', compact('uaetourdata'));
        }
    }

    // public function users()
    // {
    //     $user = User::all();
    //     return
    // }


    public function index()
    {
        if (Auth::id()) {
            return redirect('admin');
        } else {
            $uaetourdata = Uaetoursproduct::paginate(6);
            return view('user.home', compact('uaetourdata'));
        };
    }

    public function uaevisa()
    {
        $data = product::paginate(6);
        return view('user.uaevisa', compact('data'));
    }

    public function allfixedtours()
    {
        $data = Uaetoursproduct::paginate(9);
        return view('user.allfixedtours', compact('data'));
    }

    public function contact()
    {
        return view('user.contact');
    }

    public function tours($id)
    {
        $data = Uaetoursproduct::find($id);
        return view('user.tours', compact('data'));
    }

    //Cart Page

    public function cartpage($id)
    {
        // if (Auth::id()) {
        //     return redirect()->back();
        // } else {
        //     return redirect('login');
        // }
        $data = Product::find($id);
        return view('user.cartpage', compact('data'));
    }

    public function visacheckout($id)
    {
        $data = Product::find($id);
        return view('user.visacheckout', compact('data'));
    }
}
