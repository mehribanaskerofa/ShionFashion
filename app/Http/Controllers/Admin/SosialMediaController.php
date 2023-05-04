<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SosialMediaRequest;
use App\Models\SosialMedia;

class SosialMediaController extends Controller
{
    public function index()
    {
        $sosialmedia = SosialMedia::all();
        return view('admin.sosialmedia.index',compact('sosialmedia'));
    }

    public function create()
    {
        return view('admin.sosialmedia.form');
    }

    public function store(SosialMediaRequest $request)
    {
        $data=$request->validated();
        SosialMedia::create($data);

        return redirect()->route('sosialmedia.index');
    }

    public function edit(SosialMedia $sosialmedia)
    {
        return view('admin.sosialmedia.form',compact('sosialmedia'));
    }

    public function update(SosialMedia $sosialmedia,SosialMediaRequest $request)
    {
        $data=$request->validated();

        $sosialmedia->update($data);

        return redirect()->back();
    }

    public function destroy(SosialMedia $sosialmedia)
    {
        $sosialmedia->delete();

        return redirect()->back();
    }
}
