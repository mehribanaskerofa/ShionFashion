<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductImageRequest;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductImageController extends Controller
{
    public function index()
    {
        $productImages=ProductImage::with(['product'])->paginate(5);
        return view('admin.productimage.index',compact('productImages'));
    }

    public function create()
    {
        $products=Product::all();
        return view('admin.productimage.form',compact('products'));
    }

    public function store(ProductImageRequest $request)
    {
        $data=$request->validated();

        $imageName=Str::uuid()->toString().'.'.$request->image->extension();
        $request->image->storeAs($imageName,['disk' => 'public_images']);
        $data['image']=$imageName;


        ProductImage::create($data);

        return redirect()->route('productimage.index');
    }

    public function edit(ProductImage $productImage)
    {
        $products=Product::all();
        return view('admin.productimage.form',compact('productImage','products' ));
    }

    public function update(ProductImage $productImage,ProductImageRequest $request)
    {
        $data=$request->validated();

        if($request->has('image')){
            $imageName=Str::uuid()->toString().'.'.$request->image->extension();
            $request->image->storeAs($imageName,['disk' => 'public_images']);

            $data['image']=$imageName;
            File::delete(public_path('storage/images/'.$productImage->image));
        }

        $productImage->update($data);

        return redirect()->back();
    }

    public function destroy(ProductImage $productImage)
    {
        if(Storage::disk('public_images')->exists( $productImage->image))
            Storage::disk('public_images')->delete( $productImage->image);

        $productImage->delete();

        return redirect()->back();
    }
}
