<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Heroi;

class HeroisController extends Controller
{
    public function index()
    {
        $heroi = Heroi::latest()->paginate(5);
        // dd($heroi);
        return view('herois.index',compact('heroi'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('herois.create');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'poderes' => 'required',
        ]);
  
        Heroi::create($request->all());
   
        return redirect()->route('index')->with('success','Heroi created successfully.');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Heroi $heroi)
    {
        return view('herois.show',compact('heroi'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Heroi $heroi)
    {
        return view('herois.edit',compact('heroi'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Heroi $heroi)
    {
        $request->validate([
            'name' => 'required',
            'poderes' => 'required',
        ]);
  
        $heroi->update($request->all());
  
        return redirect()->route('herois.index')
                        ->with('success','Product updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Heroi $heroi)
    {
        $heroi->delete();
  
        return redirect()->route('herois.index')
                        ->with('success','Product deleted successfully');
    }
}
