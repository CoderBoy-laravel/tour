<?php

namespace App\Http\Controllers;

use App\Models\inclusions;
use App\Models\itinery;
use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Uaetoursproduct;
use Carbon\Carbon;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class AdminController extends Controller
{
    public function uaetours()
    {
        return view('admin.uaetours');
    }

    public function uploaduaetours(Request $request)
    {
        //dd($request);
        // submit ok
        $data = new Uaetoursproduct; //

        $image = $request->file;

        $imagename = time() . '.' . $image->getClientOriginalExtension();

        $request->file->move('uaetoursimage', $imagename);
        // use intervension image framework.

        $data->image = $imagename;
        $data->title = $request->title;
        $data->slug = $request->slug;
        $data->days = $request->days;
        $data->price = $request->price;
        $data->desc = $request->desc;
        $data->ldesc = $request->ldesc;
        $data->status = $request->status;
        $data->date = $request->date;
        $data->save(); //this is also saving into the Tours tabele yeah
        $id = $data->id;
        foreach ($request->inclusion as $key => $inclusion) {
            $data1 = new inclusions;
            $data1->uaeproduct_id = $id;
            $data1->inclusion = $inclusion;
            $data1->save(); // this is sving all the above ti inclusion DB
        }

        foreach ($request->meetuptime as $key => $itinery) {
            $data2 = new itinery;
            $data2->uaeproduct_id = $id;
            $data2->meetuptime = $request->$itinery;
            $data2->meetupday = $request->meetupday[$key];
            $data2->tourday = $request->tourday[$key];
            $data2->itinerydesc = $request->itinerydesc[$key];
            $data2->save();
        } //i dont get the error typo?
        return redirect()->back()->with('message', 'Tour Added Succesfully '); // so i need to foreach now where i want to show ? yeah
    }

    public function indiatour()
    {
        return view('admin.uaetours');
    }

    public function viewuaetours()
    {
        $data = Uaetoursproduct::all();
        return view('admin.viewuaetours', compact('data'));
    }

    public function deleteuaeproduct($id)
    {
        $data = Uaetoursproduct::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Tour Deleted Successfully');
    }
    // now will u be able to show the data? im not very sure i want to try now . ok check how to show relation data u w
    public function viewproducts()
    {
        $data = Product::all();
        return view('admin.viewproducts', compact('data'));
    }
    public function deleteproduct($id)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'The Visa Posting Was Deleted Successfully');
    }
    //update the view
    public function updateproduct($id)
    {
        $data = Product::find($id);
        return view('admin.updateuaevisa', compact('data'));
    }
    //update the UAE VIsa product itself
    public function updatevisaproduct(Request $request, $id)
    {
        $data = Product::find($id);
        $image = $request->file;

        if ($image) {

            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->file->move('productimage', $imagename);

            $data->image = $imagename;
        }


        $data->vdays = $request->vdays;
        $data->price = $request->price;
        $data->desc = $request->desc;

        $data->save();

        return redirect()->back()->with('message', 'Visa Updated Successfully');
    }
    public function addusers()
    {
        return view('admin.adduser');
    }

    public function viewusers()
    {
        $users = User::paginate(10);
        return view('admin.viewalluser', compact('users'));
    }

    // UPDATE UAE TOURS VIEW
    public function updateuaetours($id)
    {
        $data = Uaetoursproduct::find($id);
        return view('admin.updateuaetours', compact('data'));
    }

    public function updateuaetoursproduct(Request $request, $id)
    {
        $data = Uaetoursproduct::find($id);

        $image = $request->file;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->file->move('uaetoursimage', $imagename);

            $data->image = $imagename;
        }
        $data->title = $request->title;
        $data->price = $request->price;
        $data->desc = $request->desc;
        $data->status = $request->status;
        $data->date = $request->date;

        $data->save();

        return redirect()->back()->with('message', 'Tour Updated Succesfully ');
    }

    public function cart(Request $request) {
        $seat_price = 400;
        $insurance_price = 100;
        $price = Uaetoursproduct::findOrFail($request->tour_id)->price;
        if ($request->persons_select != null) {
            $price = $price * $request->persons_select;
        }
        if ($request->seat_select != null) {
            $price = $price + ($seat_price * $request->seat_select);
        }
        if ($request->insurance_select != null) {
            $price = $price + ($insurance_price * $request->insurance_select);
        }
        $name = Uaetoursproduct::findOrFail($request->tour_id)->title;
        $image = Uaetoursproduct::findOrFail($request->tour_id)->image;

        $data = new cart;
        $data->tour_id = $request->tour_id;
        $data->user_ip = $request->ip();
        $data->name = $name;
        $data->image = $image;
        $data->persons_select = $request->persons_select;
        $data->insurance_select = $request->insurance_select;
        $data->addon_select1 = $request->addon_select1;
        $data->addon_select2 = $request->addon_select2;
        $data->price = $price;
        $data->created_at = Carbon::now();
        $data->save();

        //redirect to back page
        return back();

    }


    public function book(Request $request) {
        $seat_price = 400;
        $insurance_price = 100;
        $price = Uaetoursproduct::findOrFail($request->tour_id)->price;
        if ($request->persons_select != null) {
            $price = $price * $request->persons_select;
        }
        if ($request->seat_select != null) {
            $price = $price + ($seat_price * $request->seat_select);
        }
        if ($request->insurance_select != null) {
            $price = $price + ($insurance_price * $request->insurance_select);
        }
        $name = Uaetoursproduct::findOrFail($request->tour_id)->title;
        $image = Uaetoursproduct::findOrFail($request->tour_id)->image;

        $data = new cart;
        $data->tour_id = $request->tour_id;
        $data->user_ip = $request->ip();
        $data->name = $name;
        $data->image = $image;
        $data->persons_select = $request->persons_select;
        $data->insurance_select = $request->insurance_select;
        $data->addon_select1 = $request->addon_select1;
        $data->addon_select2 = $request->addon_select2;
        $data->price = $price;
        $data->created_at = Carbon::now();
       // $data->save();

        // redirect to checkout page
        // return back();

    }


    // public function search(Request $request)
    // {
    //     $search = $request->search;
    //     $data = User::where('email', 'Like', '%'
    //         . $search . '%')->get();

    //     return view('admin.viewalluser', compact('data'));
    // }
}
