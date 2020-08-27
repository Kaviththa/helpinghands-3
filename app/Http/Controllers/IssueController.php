<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Issue;

class IssueController extends Controller
{
    public function index()
    {
        $data = Issue::where('user_id',Auth::user()->id)
                    ->orderBy('id','DESC')
                    ->get();

        return view('backend.receiver.index',compact('data'))
                ->with('i', ($request->input('page', 1) -1) * 5);
    }
    public function create(Reques $request)
    {
        $this->validate($request, [
            'type' => 'required',
            'reason' => 'required',
            'category_of_help' => 'required'
        ]);

        $input = $request->all();
        $input['user_id'] = Auth::user()->id;

        return redirect()->route('receiver.index')
                        ->with('success', 'Updated Successfully');
    }
}
