<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDrinkRequest;
use App\Http\Requests\UpdateDrinkRequest;
use Illuminate\Http\Request;
use App\Models\Drink;

class DrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drinks = Drink::paginate(20)->sortByDesc('created_at');
        return view('drink.index', compact('drinks'));
    }

    public function menu()
    {
        $drinks = Drink::all();
        return view('welcome', compact('drinks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('drink.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $drink = new Drink();

        $drink->name = $request->input('name');
        $drink->price = $request->input('price');
        $drink->brand = $request->input('brand');
        $drink->type = $request->input('type');
        $drink->stock = $request->input('stock');
        $drink->description = $request->input('description');
        
        if($request->hasFile('picture'))
        {
            $file = $request->file('picture');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/img',$filename);
            $drink->picture = $filename;
        }

        $drink->save();
   
        return redirect()->route('drinks')
                        ->with('success','Ürün başarıyla eklendi.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Drink $drink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Drink $drink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDrinkRequest $request, Drink $drink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Drink $drink)
    {
        //
    }
}
