<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;

class ProductController extends Controller
{
    public function createProduct(Request $request){
        $incomingFields = $request->validate([
            'name'           => ['required'],
            'description'    => ['nullable'],
            'sku'            => ['required'],
            'price'          => ['required'],
            'compare_price'  => ['nullable'],
            'stock_quantity' => ['required'],
        ]);
        $incomingFields['slug']      = Str::slug($incomingFields['name']) . '-' . Str::random(5);
        $incomingFields['is_active'] = $request->has('is_active') ? 1 : 0;
        Product::create($incomingFields);
        return redirect('/products');
    }

    public function showEditScreen(Product $product){
        return view('edit-product', ['product' => $product]);
    }

    public function updateProduct(Request $request, Product $product){
        $incomingFields = $request->validate([
            'name'           => ['required'],
            'description'    => ['nullable'],
            'sku'            => ['required'],
            'price'          => ['required'],
            'compare_price'  => ['nullable'],
            'stock_quantity' => ['required'],
        ]);
        $incomingFields['slug']      = Str::slug($incomingFields['name']) . '-' . Str::random(5);
        $incomingFields['is_active'] = $request->has('is_active') ? 1 : 0;
        $product->update($incomingFields);
        return redirect('/products');
    }

    public function deleteProduct(Product $product){
        $product->delete();
        return redirect('/products');
    }
}