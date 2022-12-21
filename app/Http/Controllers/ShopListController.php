<?php

namespace App\Http\Controllers;

use App\Models\ShopList;
use Illuminate\Http\Request;

class ShopListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return ShopList::select('id', 'item', 'created_at', 'updated_at')->get();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'item' => 'required'

            ]
        );
        ShopList::create(
            [
                'item' => $request->item,

            ]
        );
        //return array("item created!", "be");
        return $request;
        //return "Message from backend: item created!";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShopList  $shopList
     * @return \Illuminate\Http\Response
     */
    public function show(ShopList $shopList)
    {
        return $shopList;
        //return response()->json();
    }
    // public function show($id)
    // {
    //     //dd($shopList['id']);
    //     $item = ShopList::findOrFail($id);
    //     return response()->json($item);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShopList  $shopList
     * @return \Illuminate\Http\Response
     */
    public function edit(ShopList $shopList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShopList  $shopList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShopList $shopList)
    {
        $shopList->update(
            [
                'item' => $request->item,

            ]
        );
        echo "Message from backend: updated";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShopList  $shopList
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShopList $shopList)
    //public function destroy($id)
    {
        //option one
        // $item = ShopList::findOrFail($id);
        // $item->delete();
        //dd($shopList);
        $shopList->delete();
        echo "Message from backend: deleted";
    }
}
