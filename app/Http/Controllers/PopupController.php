<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Popup;

class PopupController extends Controller
{
    public function add()
    {
        return view('modal/add');
    }

    public function store(Request $request)
    {
        $popup=Popup::create([
            'content'=>$request->content,
            'show'=>$request->has('show') ? 'on' : 'off'
        ]);
        return redirect(route('home'));
    }

    public function delete($id)
    {
        $popup=Popup::findOrFail($id);
        $popup->delete();
        return redirect(route('home'));
    }

    public function edit($id)
    {
        return view("modal/edit")->with('popups',Popup::find($id));
    }

    public function update(Request $request, $id)
    {
        $popup=Popup::findOrFail($id);
        $popup->content=$request->content;
        $popup->save();
        return redirect('home');
    }

    public function index()
    {
        return view('welcome')->with('popups',Popup::all());
    }
}
