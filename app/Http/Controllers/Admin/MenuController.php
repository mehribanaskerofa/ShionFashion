<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Validation\Validato;
class MenuController extends Controller
{
    public function index()
    {
//        $menuList = Menu::all();
        $menuList = Menu::paginate(2);
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
            'url' => 'required|url'
        ]);

        Menu::create([
            'title' => $request->title,
            'url' => $request->url
        ]);
        return redirect()->route('menu.index');
    }

    public function edit($id)
    {
        $menu = Menu::where('id',$id)->firstOrFail();
        return view('admin.menu.form',compact('menu'));
    }

    public function update($id,Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:3',
            'url' => 'required|url'
        ]);
        $menu = Menu::where('id',$id)->firstOrFail();
        $menu->title = $request->title;
        $menu->url = $request->url;
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
