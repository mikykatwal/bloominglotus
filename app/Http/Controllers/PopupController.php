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
            'show'=>$request->show
        ]);
        return redirect(route('home'));
    }
}
