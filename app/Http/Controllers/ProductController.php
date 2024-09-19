<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Brand;
use App\Models\Category;

class ProductController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $productList = Product::get();
        return view( 'admin.product.index', compact( 'productList' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        $categorys = Category::pluck( 'name', 'id' );
        $brands = Brand::pluck( 'name', 'id' );
        return view( 'admin.product.create', compact( 'categorys', 'brands' ) );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \App\Http\Requests\StoreProductRequest  $request
    * @return \Illuminate\Http\Response
    */

    public function store( StoreProductRequest $request ) {
        $imageName = time().'.'.$request->product_image->extension();
        $request->product_image->move( public_path( 'uploads/products_images' ), $imageName );
        $store = Product::create( [
            'name'=>$request->product_name,
            'product_image'=>$imageName,
            'price'=>$request->price,
            'quantity_type'=>$request->quantity_type,
            'quanty'=>$request->quanty,
            'u_id'=>$request->u_id,
            'cart_id'=>$request->cart_id,
            'b_id'=>$request->b_id
        ] );

        if ( $store ) {
            return redirect()->route( 'product.index' );
        }
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Product  $product
    * @return \Illuminate\Http\Response
    */

    public function show( Product $product ) {
        return view( 'admin.product.show' );
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Product  $product
    * @return \Illuminate\Http\Response
    */

    public function edit( Product $product ) {
        $categorys = Category::pluck( 'name', 'id' );
        $brands = Brand::pluck( 'name', 'id' );
        return view( 'admin.product.edit', compact( 'categorys', 'brands', 'product' ) );
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \App\Http\Requests\UpdateProductRequest  $request
    * @param  \App\Models\Product  $product
    * @return \Illuminate\Http\Response
    */

    public function update( UpdateProductRequest $request, Product $product ) {
        $updateProduct = Product::where( 'id', $product->id )->update( [
            'name'=>$request->product_name,
            'price'=>$request->price,
            'quantity_type'=>$request->quantity_type,
            'quanty'=>$request->quanty,
            'u_id'=>$request->u_id,
            'cart_id'=>$request->cart_id,
            'b_id'=>$request->b_id
        ] );
        if ( $updateProduct ) {
            return redirect()->route( 'product.index' );
        }
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Product  $product
    * @return \Illuminate\Http\Response
    */

    public function destroy( Product $product ) {
        //
    }
}