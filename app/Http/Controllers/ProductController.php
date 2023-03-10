<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
 function index(){
   $data=Product::all();
   return view('product',['products'=>$data]);
 }
 function detail($id){
    $data= Product::find($id);
    return view('detail',['product'=>$data]);
 }
 function search(Request $req){
    // return $req->input();
    $data =Product::where('name','like','%'.$req->input('query').'%')->get();
    return view('search',['products'=>$data]);
 }
 function addToCart(Request $req){
    // return "hello";
    if($req->session()->has('user'))
    {
        // return "hello"; 
        $cart=new Cart;
        $cart->user_id=$req->session()->get('user')['id'];
        $cart->product_id=$req->product_id;
        $cart->save();
        return redirect('/');
    }
    else{
        return redirect('/login');
    }
 }
  static function cartItem(){
   $userId=Session::get('user')['id'];
   return Cart::where('user_id',$userId)->count();
 }
 function cartList(){
    $userId= Session::get('user')['id'];
   $data =  DB::table('carts')
  ->join('products','carts.product_id','products.id')
  ->select('products.*','carts.id as carts_id')
  ->where('carts.user_id',$userId)
  ->get();
  return view('cartlist',['products'=>$data]);
   
 }
 function removeCart($id){
   Cart::destroy($id);
    return view('cartlist');
 }
 function orderNow(){
    $userId= Session::get('user')['id'];
    $total =  DB::table('carts')
   ->join('products','carts.product_id','products.id')
   ->where('carts.user_id',$userId)
   ->sum('products.price');
   return view('ordernow',['total'=>$total]);
 }
}