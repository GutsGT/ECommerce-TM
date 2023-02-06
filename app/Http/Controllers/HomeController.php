<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        //Métodos para filtrar a pesquisa
            //Primeiro 
                //$products = Product::where('name', 'like', '%'.$request->search.'%')->get();

            //Segundo
                // $products = Product::query();
                // $products->when($request->search, function($query, $vl){
                //     $query->where('name', 'like', '%'.$vl.'%');
                // });
                // $products = $products->get();

            //Terceiro
                // $products = Product::query();
                // if($request->search){
                //     $query = $products->where('name', 'like', '%'.$request->search.'%')->get();
                // }
        //

        $products = Product::query();
        $products->when($request->search, function($query, $vl){
            $query->where('name', 'like', '%'.$vl.'%');
        });
        $products = $products->get();

        return view('home', [
            'products'=>$products
        ]);
    }
}
