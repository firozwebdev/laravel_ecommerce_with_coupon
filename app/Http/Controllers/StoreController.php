<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::inRandomOrder()->take(12)->get();
        return view('front-end.pages.shop-page.shop-page')->with('products',$products);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug',$slug)->firstOrFail();
        $similarProducts = Product::where('slug','!=',$slug)->inRandomOrder()->take(3)->get();
        

        return view('front-end.pages.product-detail-page.product-detail-page')
                ->with([
                    'product'=>$product,
                    'similarProducts' => $similarProducts
                ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
 
   
   public function short_by_price_with_category(Request $request){

   
    $category_id = Session::get('category_id');
        if($category_id){
            $min_price = $request->min;
            $max_price = $request->max;
            $products = Eproduct::where('ecategory_id',$category_id)->whereBetween('product_price', [$min_price, $max_price])
                ->get();


                return $products;

        } 

        //$min_price = $request->min;
        $min_price= $request->min;
        $max_price= $request->max;
        

        
        
        //$products = Product::whereBetween('price', [$min_price, $max_price])->get();
        $products = DB::table('products')
        ->whereBetween('price', [$min_price, $max_price])->get();


        return response()->json([
            'result'=>'Saved',
            'min_price'=> $request->min,
            'max_price'=> $request->max,
            'products'=> $products,
            'message'=>'Task has been updated successfully.'
        ]);
      

    } 
    

}
