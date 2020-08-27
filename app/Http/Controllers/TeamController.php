<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Team;
use Storage;
use App\State;
use App\City;

class TeamController extends Controller
{


    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    public function index(){


        $userId = (auth()->id());
        $team = Team::Where('user_id', $userId)->get();
        return view('team.index',compact('team'));
    }
    public function create(){
        $state = State::all();
        $city = City::all();
        return view('team.create',compact('state','city'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'organization'=> 'required|min:1|max:255',
            'phone' => 'required|min:11|numeric',
            'mobile'=>'nullable|min:11|numeric',
            'startup'=>'required|before:today',
            'achievement'=>'required|min:3|max:1000',
            'proof'=>'required | mimes:jpeg,jpg,png | max:1000',
            'lane'=>'required|min:2|max:255',
            'city'=>'required',
            'province'=>'required',
            'country'=>'required',
            'area'=>'required',
            'website'=>'required',
            'avatar'=> 'required | mimes:jpeg,jpg,png | max:1000',
        ],
        [

        'organzation.required'=>'please enter your organization name',
        'phone.min'=>'invaid phone number',
        'phone.numeric'=>'invalid phone number',
        'mobile.min'=>'invalid mobile number',
        'mobile.numeric'=>'invalid mobile number',
        'startup.before'=>'invalid date',
        'achievement.required'=>'please enter your achievements',
        'lane.required'=>'please enter your address',
        'lane.min'=>'invalid address',
        'lane.max'=>'invalid address',
        'city.required'=>'select your city',
        'province.required'=>'select your province',
        'country.required'=>'select your country'
]);

         $avatar = $request->file('avatar');

         $avatarSaveAsName = "team.".auth()->id() . $avatar->getClientOriginalExtension();
         $avatar_upload_path = 'avatarT/';
         $avatar_url = $avatar_upload_path . $avatarSaveAsName;
         $success = $avatar->move($avatar_upload_path, $avatarSaveAsName);

        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        $input['avatar'] = $avatar_url;
        Team::create($input);

        return redirect(route('team.index'));
    }

    public function edit( Team $team){

        return view('team.edit', compact('team'));
    }

    public function update(Request $request, Team $team){
        $request->validate([
            'organization'=> 'required|min:1|max:255',
            'phone' => 'required|min:11|numeric',
            'mobile'=>'nullable|min:11|numeric',
            'startup'=>'required|before:today',
            'achievement'=>'required|min:3|max:1000',
            'proof'=>'required | mimes:jpeg,jpg,png | max:1000',
            'lane'=>'required|min:2|max:255',
            'city'=>'required',
            'province'=>'required',
            'country'=>'required',
            'area'=>'required',
            'website'=>'required',
            'avatar'=> 'required | mimes:jpeg,jpg,png | max:1000',
        ],
        [

        'organzation.required'=>'please enter your organization name',
        'phone.min'=>'invaid phone number',
        'phone.numeric'=>'invalid phone number',
        'mobile.min'=>'invalid mobile number',
        'mobile.numeric'=>'invalid mobile number',
        'startup.before'=>'invalid date',
        'achievement.required'=>'please enter your achievements',
        'lane.required'=>'please enter your address',
        'lane.min'=>'invalid address',
        'lane.max'=>'invalid address',
        'city.required'=>'select your city',
        'province.required'=>'select your province',
        'country.required'=>'select your country'
]);
         if($request->hasFile('avatar'))
        {
              Storage::delete('avatar');
              $avatar = $request->file('avatar');
              $avatarSaveAsName = "team.".auth()->id(). $avatar->getClientOriginalExtension();
              $avatar_upload_path = 'avatarT/';
              $avatar_url = $avatar_upload_path . $avatarSaveAsName;
              $success = $avatar->move($avatar_upload_path, $avatarSaveAsName);
        }


             $update = $request->all();
             $update['avatar'] = $avatar_url;
             $team->update($update);

             return redirect(route('team.index'))->with('message','updated successfully!');

    }
}



