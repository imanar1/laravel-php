<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductDetails;
use App\Models\Cart;
use App\Models\Invoice;
use App\Models\user;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\DB;


class Dashboard extends Controller
{
    //
    public function __construct()
    {
    $this->middleware('auth');

    }

    public function Index()
    {
return view('dashbaord.index');   
 
    }

    public function createProducts(Request $request)
    {
    $products=Product::create([
      'Productname'=>$request->Prouductname

    ]);

    $products->save();

    return redirect('/dashbaord/products');

    }

    public function delete($id){
      $products=Product::where('id',$id); 
      $products->delete();
      return redirect('/dashbaord/products');
      }
    
    


    public function GetProducts()
    {
      $products=Product::all();
      return view('dashbaord.products',['proudcts'=>$products]);
    }

    public function EditProducts($Productname)
    {
    $products=Product::where('Productname',$Productname);

    return view('dashbaord.edit',['proudcts'=>$products]);


}

public function update(Request $request)
{
$items=Product::where('id',$request->id)->update([
  'Productname'=>$request->Productname,

]);
return redirect('dashbaord.products');
}

public function search($name)
{
$products=Product::wherewhere('Productname',$name);
return view('dashbaord.products',['proudcts'=>$products]);


return redirect('dashbaord.products');
}



public function detail(Request $request)
{
    $data = $request->validate([
        'color' => 'required|string',
        'price' => 'required|numeric',
        'qty' => 'required|numeric',
        'description' => 'required|string',
        'product_id' => 'required|string',
    ]);

    DB::table('products')->insert([
        'color' => $data['color'],
        'price' => $data['price'],
        'qty' => $data['qty'],
        'description' => $data['description'],
        'product_id' => $data['product_id'],
    ]);

    return redirect('dashbaord.ProductDetails');

  }

  
    public function show()
    {
        $cartItems = Cart::all();
        return view('dashbaord.cart', ['cartItems' => $cartItems]);
    }
    public function showin()
    {
        $invoices = Invoice::all(); 
        return view('dashbaord.invoice', ['invoices' => $invoices]); 
   
}
}