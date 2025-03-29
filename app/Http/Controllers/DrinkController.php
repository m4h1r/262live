<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreDrinkRequest;
use App\Http\Requests\UpdateDrinkRequest;

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
            $filename = "p".time().'.'.$ext;
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
    public function edit($id)
    {
        $drink = Drink::where('id', $id)->first();

        return view('drink.update', compact('drink'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $drink = Drink::where('id', $id)->first();
        
        $drink->name = $request->input('name');
        $drink->price = $request->input('price');
        $drink->brand = $request->input('brand');
        $drink->type = $request->input('type');
        $drink->stock = $request->input('stock');
        $drink->description = $request->input('description');
        
        if($request->hasFile('picture'))
        {
            $path = 'assets/img/'.$drink->picture;
            if (File::exists($path))
            {
                File::delete($path);
            }

            $file = $request->file('picture');
            $ext = $file->getClientOriginalExtension();
            $filename = "p".time().'.'.$ext;
            $file->move('assets/img',$filename);
            $drink->picture = $filename;
        }

        $drink->save();

        return redirect()->route('drinks')
                        ->with('success','Ürün başarıyla güncellendi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Drink $drink)
    {
        $drink->delete();
        return redirect()->route('drinks')
                        ->with('success','Ürün başarıyla silindi.');
    }
}
