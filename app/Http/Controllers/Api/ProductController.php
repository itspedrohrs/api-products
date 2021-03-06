<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        if ($products) {
            return response()->json(['data' => $products, 'status' => true, 'msg' => 'Products all list success !'], 200);
        } else {
            return response()->json(['data' => $products, 'status' => false, 'msg' => 'Not found products'], 404);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        if ($products) {
            return response()->json(['data' => $products, 'status' => true, 'msg' => 'List found products with success !'], 200);
        } else {
            return response()->json(['data' => $products, 'status' => false, 'msg' => 'Not found products'], 404);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->all();
        $product = Product::create($dados);

        if ($product) {
            return response()->json(['data' => $product, 'status' => true, 'msg' => 'Products created with success !'], 200);
        } else {
            return response()->json(['data' => $product, 'status' => false, 'msg' => 'Not found products'], 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        if ($product) {
            return response()->json(['data' => $product, 'status' => true, 'msg' => 'Product found with success !'], 200);
        } else {
            return response()->json(['data' => $product, 'status' => false, 'msg' => 'Not found ! for specific product by id '], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $dados = $request->all();

        if ($product) {
            $product->update($dados);
            return response()->json(['data' => $product, 'status' => true, 'msg' => 'Update product with success !'], 200);
        } else {
            return response()->json(['data' => $product, 'status' => false, 'msg' => 'Not found ! for specific update product by id '], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        if ($product) {
            $product->delete();
            return response()->json(['data' => $product, 'status' => true, 'msg' => 'Product deleted with success !'], 200);
        } else {
            return response()->json(['data' => $product, 'status' => false, 'msg' => 'Not found ! for specific deleted product by id'], 404);
        }
    }
}
