<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Http\Requests\ContactRequest;
use App\Models\Page;
use App\Models\Product;
use App\Models\ContactForm;
use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $products8=Product::with(['category'])->limit(8)->get();
        return view('home',compact('products8'));
    }

    public function about()
    {
        $about=Page::where('slug','about')->firstOrFail();
        return view('about',compact('about'));
    }

    public function contact()
    {
        $contact=Contact::where('id',1)->firstOrFail();
        return view('contact',compact('contact'));
    }
    public function shop()
    {
        $products=Product::with(['category'])->paginate(9);
        return view('shop',compact('products'));
    }
    public function shopcategory($title)
    {
        $products = Product::with('category')->whereHas('category',function($q) use($title){
            return $q->where('category.title',$title);
        })->get();
//        $category = Category::where('title',$title)->with('products.category')->firstOrFail();
//        $products = $category->products;
//        dd($category);
//        $id=Category::where('title',$title)->firstOrFail()->id;
//        $products=Product::with('category')->where('category_id',$id)->get();
//            //->where('category.title',$title)->get();
//        dd($products);
        return view('shop',compact('products'));
    }



    public function page($slug)
    {
        $page=Page::where('slug',$slug)->firstOrFail();
        return view('page',compact('page'));
    }

    public function productdetail($id)
    {
        $product=Product::with('category')->with('images')->where('id',$id)->firstOrFail();
        return view('productdetail',compact('product'));
    }

    public function contactstore(ContactFormRequest $request)
    {
        $data=$request->validated();

        ContactForm::create($data);

        return redirect()->route('contact');
    }
}
