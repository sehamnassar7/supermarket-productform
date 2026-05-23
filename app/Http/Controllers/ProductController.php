<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products= product::latest()->paginate(4);
        return view('product.index',compact('products'));
    }

 public function trashedProducts()
    {
        $products= product::onlyTrashed()-> latest()->paginate(4);
        return view('product.trash',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
            $request->validate(
                [
                    'product_name'=>'required',
                    'product_price'=>'required',
                    'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                    // 'detail'=>'required',
                ]

            );

        $product = product::create($request->all());
        return redirect ()->route('product.index')->with ('success', 'product added');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
         return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
          return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate(
                [
                    'product_name'=>'required',
                    'product_price'=>'required',
                    //'detail'=>'required',
                    'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                ]

            );
        $product->update($request->all());
        return redirect ()->route('product.index')->with ('success', 'product ubdated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        $product->delete();
        return redirect ()->route('product.index')->with ('success', 'product deleted');
    }

    public function softDelete($id)
    {
      $product = product::find($id)->delete();

        return redirect ()->route('product.index')->with ('success', 'product deleted');
    }

     public function backFromsoftDelete($id)
    {

        $products= product::onlyTrashed()-> where('id',$id)->first()->restore();

        return redirect ()->route('product.index')->with ('success', 'product restored');
    }

  public function deleteForEver($id)
    {

        $products= product::onlyTrashed()-> where('id',$id)->forceDelete();

        return redirect ()->route('product.index')->with ('success', 'product restored');
    }
}
