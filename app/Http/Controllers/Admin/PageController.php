<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Models\Page;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::paginate(2);
        return view('admin.page.index',compact('pages'));
    }

    public function create()
    {
        return view('admin.page.form');
    }

    public function store(PageRequest $request)
    {
        $data=$request->validated();
        $data['slug']=Str::slug($request->slug);

//        $data['image']=$request->image->store();//storage
        $imageName=Str::uuid()->toString().'.'.$request->image->extension();
        $request->image->storeAs($imageName,['disk' => 'public_images']);//public/image
        $data['image']=$imageName;


        Page::create($data);

        return redirect()->route('page.index');
    }

    public function edit(Page $page)
    {
        return view('admin.page.form',compact('page'));
    }

    public function update(Page $page,PageRequest $request)
    {
        $data=$request->validated();

//        if($request->filled('title'))
        if($request->has('image')){
            $imageName=Str::uuid()->toString().'.'.$request->image->extension();
            $request->image->storeAs($imageName,['disk' => 'public_images']);//public/image

            $data['image']=$imageName;
            File::delete(public_path('storage/images/'.$page->image));
        }

        $page->update($data);

        return redirect()->back();
    }

    public function destroy(Page $page)
    {
//        (File::exists(public_path('storage/images/' . $page->image)));
//            File::delete(public_path('storage/images/' . $page->image));

        if(Storage::disk('public_images')->exists( $page->image))
            Storage::disk('public_images')->delete( $page->image);

        $page->delete();

        return redirect()->back();
    }
}
