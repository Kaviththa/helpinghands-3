<?php

namespace App\Http\Controllers;
use App\Document;
use App\User;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index (Request $request) {
        $data = Document::where('user_id',Auth::user()->id)
                        ->orderBy('id','DESC')
                        ->get();
        return view('backend.receiver.index',compact('data'))
            ->with('i', ($request->input('page', 1) -1) * 5);
    }

    public function create()
    {
        return view ('backend.receiver.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'proof' => 'required',
            'video' => 'required'
        ]);

        $link = $request->file('link');
        $linkSaveAsName = time() . "-link." . $link->getClientOriginalExtension();
 
        $link_upload_path = 'document/';
        $link_url = $link_upload_path . $linkSaveAsName;
        $success = $link->move($link_upload_path, $linkSaveAsName);

        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        $input['link'] = $link_url;
        return redirect()->route('receiver.index')
                        ->with('success', 'Details updated Successfully');
    }
}
