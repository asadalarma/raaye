<?php

namespace App\Http\Controllers;

use App\Category;
use App\Currency;
use App\SubCategory;
use App\Title;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Storage;
use Session;
use Image;

class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $data = [];
    }

    public function index()
    {
        $subcat = SubCategory::orderBy('id', 'DESC')->paginate(10);
        $cats = Category::all();
        $curr = Currency::all();
        $currency = Currency::all();
        $data['site_title'] = Title::first();
        return view('subcategory.index', $data)->withSubcat($subcat)->withCats($cats)->withCurrency($currency)->withCurr($curr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->ajax()) {
            $category = SubCategory::create($request->input());

            return response()->json($category);
        } else {

            $scat = new SubCategory;
            $this->validate($request, [
                'name' => 'required',
                'price' => 'required',
                'currency' => 'required',
                'description' => 'required',
                'image' => 'required|mimes:jpeg,jpg,png'
            ]);
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path() . '/images/' . $filename;
                Image::make($image)->resize(350, 265)->save($location);
                $scat->image = $filename;

                $scat->name = $request->name;
                $scat->price = $request->price;
                $scat->currency = $request->currency;
                $scat->base_cat = $request->base_cat;
                $scat->description = $request->description;
                $scat->area = $request->area;
                $scat->city = $request->city;
                $scat->country = $request->country;
                $scat->gender = $request->gender;
                $scat->age = $request->age;
                $scat->save();
            }
            session()->flash('success', 'Subcategory Created Succesfully.');
            return redirect()->refresh();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategory = SubCategory::find($id);
        $catall = Category::all();
        $currency = Currency::all();
        $data['site_title'] = Title::first();
        return view('subcategory.edit', $data)->withSubcategory($subcategory)->withCatall($catall)->withCurrency($currency);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subcategory = SubCategory::find($id);
        $this->validate($request, [
            'name' => 'required',
            'base_cat' => 'required',
            'price' => 'required',
            'currency' => 'required',
            'image' => 'mimes:jpeg,jpg,png'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = 'extra-images/' . $filename;
            Image::make($image)->resize(350, 265)->save($location);
            $oldname = $subcategory->image;
            Storage::delete($oldname);
            $subcategory->image = $filename;

        }

        $subcategory->name = $request->input('name');
        $subcategory->base_cat = $request->input('base_cat');
        $subcategory->description = $request->input('description');
        $subcategory->price = $request->input('price');
        $subcategory->currency = $request->input('currency');
        $subcategory->area = $request->input('area');
        $subcategory->city = $request->input('city');
        $subcategory->country = $request->input('country');
        $subcategory->gender = $request->input('gender');
        $subcategory->age = $request->input('age');

        $subcategory->save();
        session()->flash('success', 'Subcategory Updated Succesfully.');
        return redirect()->route('subcategory.edit', $subcategory->id)->withSubcategory($subcategory);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = SubCategory::findOrFail($id);

        DB::table('questions')->where('question_cat_name', '=', $id)->delete();
        $category->delete();
        Storage::delete($category->image);
        session()->flash('success', 'Subcategory Deleted Succesfully.');
        return redirect()->route('subcategory.index');
    }

}
