<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
class ProductImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($product_id)
    {
        $product = Product::find($product_id);
        $productImages = $product->productImages;

        return view("admin.product.image.index",["product"=> $product,"productImages"=> $productImages]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Kiểm tra định dạng file
        ]);

        $product = Product::find($request->product_id);
        $productImages = $product->productImages;

        if ($request->hasFile('image')) {
            // Xóa ảnh cũ nếu tồn tại
            foreach($productImages as $productImage) {
                if ($productImage->path && Storage::exists('public/productImages/' . $productImage->path)) {
                    Storage::delete('public/productImages/' . $productImage->path);
                }
            }
            // Lưu ảnh mới
            $path = $request->file('image')->store('productImages', 'public');

            $productImage = ProductImage::create([
                'product_id'=> $request->product_id,
                'path'=> $path,
            ]);
        }

        return redirect('admin/product/'.$product->id.'/image')->with('success','Image added successfully !');
    }

    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($product_id,string $id)
    {
        $productImage = ProductImage::find($id);
        $productImage->delete();
        Storage::delete('public/productImages/' . $productImage->path);
        return redirect('admin/product/'.$product_id.'/image')->with('success','Image deleted successfully !');
    }
}

