<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Validation\Validato;
use Symfony\Component\Mailer\Messenger\MessageHandler;

class MenuController extends Controller
{
    public function index()
    {
//        $menuList = Menu::all();
        $menuList = Menu::paginate(5);
        return view('admin.menu.index',compact('menuList'));
    }

    public function create()
    {
        return view('admin.menu.form');
    }

    public function store(Request $request)
    {
       // $request->all(); validasiyali ve validasizyasiz butun datalar
        //$request->validate(); yalniz validasiyali
        $validated = $request->validate([
            'title' => 'required|min:3',
            'url' => 'required|url',
            'is_active'=>'boolean',
            'parent_id'=>'exists:menu,id'
        ]);

        Menu::create([
            'title' => $request->title,
            'url' => $request->url,
            'is_active'=>$request->is_active ?? false,
            'parent_id'=>$request->parent_id
        ]);
        $menus=Menu::all();
        return redirect()->route('menu.index',compact('menus'));
    }

    public function edit($id)
    {
        $menu = Menu::where('id',$id)->firstOrFail();
        $menus=Menu::all();
        return view('admin.menu.form',compact('menu','menus'));
    }

    public function update($id,Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:3',
            'url' => 'required|url',
            'is_active'=>'boolean',
            'parent_id'=>'exists:menu,id'
        ],[
            'title.required'=>'dont require'
        ]);
        $menu = Menu::where('id',$id)->firstOrFail();
        $menu->title = $request->title;
        $menu->url = $request->url;
        $menu->is_active = $request->is_active ?? false;
        $menu->parent_id=$request->parent_id;

        $menu->save();

//        Menu::updated([
//            'title' => $request->title,
//            'url' => $request->url
//        ]);
        return redirect()->back();
    }

    public function delete($id)
    {
        $menu = Menu::where('id',$id)->firstOrFail();
        $menu->delete();

        return redirect()->back();
    }
}
