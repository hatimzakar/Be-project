<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productController extends Controller
{
    public function all()
    {
        $products=product::all();

        return $products;
    }

    public function show($id)
    {
        $product=product::findOrFail($id);

        return $product;

    }

    public function add(Request $request,product $product)
    {
        $this->validation($request);
        
        $product=new product();
        
       $product->name=request('name');
       $product->price=request('price');
       $product->color=request('color');
       $product->save();
        


    }
    public function delete($id)
    {
        $product=product::findOrFail($id);
        $product->delete();

        return $product;
    }

    public function update(Request $request,product $product)
    {
        $this->validation($request);

        $product->update(['name'=>request('name'),'price'=>request('price'),'color'=>request('color')]);

        return $product ;
    }
    
    public function validation(Request $request )

        {
            $request->validate([
                'name' => 'required',
                'price' => 'required|digits_between:1,9999',
                'color'=>'required',
                
            ]);

        }


    

}
