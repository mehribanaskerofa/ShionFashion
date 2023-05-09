<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(5);
        return view('admin.category.index',compact('categories'));
    }

    public function create()
    {
        return view('admin.category.form');
    }

    public function store(CategoryRequest $request)
    {
        $data=$request->all();
        $data['slug']=Str::slug($request->slug);

        $imageName=Str::uuid()->toString().'.'.$request->image->extension();
        $request->image->storeAs($imageName,['disk' => 'public_images']);//public/image
        $data['image']=$imageName;


        Category::create($data);

        return redirect()->route('category.index');
    }

    public function edit(Category $category)
    {
        return view('admin.category.form',compact('category'));
    }

    public function update(Category $category,CategoryRequest $request)
    {
        $data=$request->validated();

        if($request->has('image')){
            $imageName=Str::uuid()->toString().'.'.$request->image->extension();
            $request->image->storeAs($imageName,['disk' => 'public_images']);//public/image

            $data['image']=$imageName;
            File::delete(public_path('storage/images/'.$category->image));
        }

        $category->update($data);

        return redirect()->back();
    }

    public function destroy(Category $category)
    {
        if(Storage::disk('public_images')->exists( $category->image))
            Storage::disk('public_images')->delete( $category->image);

        $category->delete();

        return redirect()->back();
    }
}
