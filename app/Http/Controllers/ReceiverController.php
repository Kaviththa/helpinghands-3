<?php

namespace App\Http\Controllers;

use App\Receiver;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\State;
use App\City;
use App\Document;
use App\Issue;


class ReceiverController extends Controller
{
    public function index(Request $request)
    {
        $data = Receiver::where('user_id',Auth::user()->id)
                        ->orderBy('id','DESC')
                        ->get();

        $data1 = Document::where('user_id',Auth::user()->id)
                        ->orderBy('id','DESC')
                        ->get();

        $data2 = Issue::where('user_id',Auth::user()->id)
                        ->orderBy('id','DESC')
                        ->get();

        return view('receiver.index',compact('data','data1','data2'))
            ->with('i', ($request->input('page', 1) -1) *5);
    }

    public function create()
    {
        $state = State::all();
        $city = City::all();
        return view('receiver.create',compact('state','city'));
    }

    public function store(Request $request)
     {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required',
            'nic' => 'required',
            'job' => 'required',
            'avatar' => 'required',
            'mobile' => 'required',
            'phone' => 'required',
            'income' => 'required',
            'address' => 'required',
            'state' => 'required',
            'city' => 'required',
            'nic_copy' => 'required',
            'title' => 'required',
            'proof' => 'required',
            'video' => 'required',
            'type' => 'required',
            'reason' => 'required',
            'category_of_help' => 'required',
        ]
    );

        $avatar = $request->file('avatar');
        $avatarSaveAsName = time() . "-avatar." . $avatar->getClientOriginalExtension();

        $avatar_upload_path = 'avatarR/';
        $avatar_url = $avatar_upload_path . $avatarSaveAsName;
        $success = $avatar->move($avatar_upload_path, $avatarSaveAsName);

        $nic = $request->file('nic_copy');
        $nicSaveAsName = time() . "-nic_copy." . $nic->getClientOriginalExtension();

        $nic_upload_path = 'copy/';
        $nic_url = $nic_upload_path . $nicSaveAsName;
        $success = $nic->move($nic_upload_path, $nicSaveAsName);

        $proof = $request->file('proof');
        $proofSaveAsName = time() . "-proof." . $proof->getClientOriginalExtension();

        $proof_upload_path = 'document/proof';
        $proof_url = $proof_upload_path . $proofSaveAsName;
        $success = $proof->move($proof_upload_path, $proofSaveAsName);

        $video = $request->file('video');
        $videoSaveAsName = time() . "-video." . $video->getClientOriginalExtension();

        $video_upload_path = 'document/video';
        $video_url = $video_upload_path . $videoSaveAsName;
        $success = $video->move($video_upload_path, $videoSaveAsName);

        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        $input['avatar'] = $avatar_url;
        $input['nic_copy'] = $nic_url;
        $input['proof'] = $proof_url;
        $input['video'] = $video_url;
        $user = Receiver::create($input);
        $doc = Document::create($input);
        $issue = Issue::create($input);
        return redirect()->route('receiver.index')
                         ->with('success','Details updated successfully');
    }
    public function show(Receiver $receiver)
    {

    }

    public function edit($id)
    {
        $data = Receiver::find($id);
        return view('receiver.edit',compact('data'));
    }

    public function update(Request $request, Receiver $receiver)
    {

    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('welcome')
                        ->with('success','User deleted successfully');
    }
    public function view_proof($id){
        $file = Document::find($id)->proof;
        $pathToFile = public_path().'/document/proof/'.$file;
        return response()->file($pathToFile);
    }
    public function view_link($id){
        $file = Document::find($id)->link;
        $pathToFile = public_path().'/document/link/'.$file;
        return response()->file($pathToFile);
    }
}
