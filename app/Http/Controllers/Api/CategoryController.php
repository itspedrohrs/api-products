<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use http\Env\Response;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $category = Category::create($dados);
        if ($category) {
            return response()->json(['data' => $category, 'status' => true, 'msg' => 'Product created success !'], 201);
        } else {
            return response()->json(['data' => $category, 'status' => false, 'msg' => 'Error for  created category ! '], 404);
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
        $category = Category::find($id);
        if ($category) {
            return response()->json(['data' => $category, 'status' => true, 'msg' => 'Category found with success !'], 200);
        } else {
            return response()->json(['data' => $category, 'status' => false, 'msg' => 'Not found category with $id ! '], 404);
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
        $category = Category::find($id);
        $dados = $request->all();
        $category->update($dados);
        if ($category) {
            return response()->json(['data' => $category, 'status' => true, 'msg' => 'Category updated success !'], 200);
        } else {
            return response()->json(['data' => $category, 'status' => false, 'msg' => 'Not found category to update with $id ! '], 404);
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
        $category = Category::find($id);
        $category->delete();

        if ($category) {
            return response()->json(['status' => true, 'msg' => 'Category deleted with success !!! '], 200);
        } else {
            return response()->json(['data' => $category, 'status' => false, 'msg' => 'Not found category to delete with $id ! '], 404);
        }

    }
}
