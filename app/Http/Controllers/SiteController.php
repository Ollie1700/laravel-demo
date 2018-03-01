<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Paste;

class SiteController extends Controller
{

    public function showIndex()
    {
        return view('index')->with([
            'pastes' => Paste::all()
        ]);
    }

    public function showNewPaste()
    {
        return view('newpaste');
    }

    public function newPaste(Request $request)
    {
        $this->validate($request, [
            'content' => 'required'
        ]);

        $newPaste = new Paste;
        $newPaste->slug = str_random(5);
        $newPaste->content = $request->input('content');
        $newPaste->save();
        $newPaste->slug .= $newPaste->id;
        $newPaste->save();
        return redirect($newPaste->slug);
    }

    public function showPaste(Paste $paste)
    {
        return view('paste')->with([
            'paste' => $paste,
        ]);
    }

    public function showEditPaste(Paste $paste)
    {
        return view('editpaste');
    }

    public function editPaste(Request $request, Paste $paste)
    {
        dd('TODO implement editing');
    }

}
