<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
    public function index()
    {

//        $products = Product::select(['product.*','category.title as category_title'])->leftJoin('category',function ($query){
//            $query->on('product.category_id','=','category.id');
//        })->paginate(6);
        $products=Product::with(['category'])->paginate(6);//get()
        return view('admin.product.index',compact('products'));
    }

    public function create()
    {
        $categories=Category::all();
        return view('admin.product.form',compact('categories'));
    }

    public function store(ProductRequest $request)
    {
        $data=$request->validated();
        $imageName=Str::uuid()->toString().'.'.$request->image->extension();
        $request->image->storeAs($imageName,['disk' => 'public_images']);
        $data['image']=$imageName;


        Product::create($data);

        return redirect()->route('product.index');
    }

    public function edit(Product $product)
    {
        $categories=Category::all();
//        dd([$categories,$product]);
        return view('admin.product.form',compact('product','categories'));
    }

    public function update(Product $product,ProductRequest $request)
    {
        $data=$request->validated();

        if($request->has('image')){
            $imageName=Str::uuid()->toString().'.'.$request->image->extension();
            $request->image->storeAs($imageName,['disk' => 'public_images']);//public/image

            $data['image']=$imageName;
            File::delete(public_path('storage/images/'.$product->image));
        }

        $product->update($data);

        return redirect()->back();
    }

    public function destroy(Product $product)
    {
        if(Storage::disk('public_images')->exists( $product->image))
            Storage::disk('public_images')->delete( $product->image);

        $product->delete();

        return redirect()->back();
    }
}
