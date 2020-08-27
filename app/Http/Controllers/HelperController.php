<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Helper;
use Storage;
use Illuminate\Support\Facades\Auth;
use App\State;
use App\City;


class HelperController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }


    public function index(){
        $userId = (auth()->id());
        $helper = Helper::Where('user_id', $userId)->get();
        return view('helper.index',compact('helper'));
    }

    public function create(){
        $state = State::all();
        $city = City::all();
        return view('helper.create',compact('state','city'));
    }

    public function store(Request $request){
        $request->validate([
            // 'gander'=> 'required|in:male,female',
            'dob' => 'required|before:today',
            'job'=>'required|min:2|max:255',
            'income'=>'required|numeric|min:1000.00',
            // 'n/p'=> 'required|in:nic,passport',
            'nic'=>'nullable|regex:/^\d{9}V$/',
            'passport'=>'nullable|regex: /^[A-PR-WY][1-9]\d\s?\d{4}[1-9]$/',
            'copy'=>'required | mimes:jpeg,jpg,png | max:1000',
            'address'=>'required|min:2|max:255',
            'city'=>'required',
            'province'=>'required',
            'country'=>'required',
            'avatar'=> 'required | mimes:jpeg,jpg,png | max:1000',
        ],

        [ 'gender.required' => 'Please select your gender',
          'dob.required'=>'date of birth is required',
          'dob.before'=>'invalid date of birth',
          'job.required'=>'please enter your job',
          'job.min'=>'invalid input',
          'job.max'=>'invalid input',
          'nic.required'=>'please enter your nic number',
          'nic.regex'=>'invalid nic number',
          'copy.required'=>'nic/passport copy proof is required',
          'address.required'=>'please enter your address',
          'address.min'=>'invalid address',
          'address.max'=>'invalid address',
          'city.required'=>'select your city',
          'province.required'=>'select your province',
          'country.required'=>'select your country']
    );



        $avatar = $request->file('avatar');
        $avatarSaveAsName = auth()->id(). "-helper." . $avatar->getClientOriginalExtension();

        $avatar_upload_path = 'avatarH/';
        $avatar_url = $avatar_upload_path . $avatarSaveAsName;
        $success = $avatar->move($avatar_upload_path, $avatarSaveAsName);

        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        $input['avatar'] = $avatar_url;
        $user = Helper::create($input);

        return redirect(route('helper.index'))->with('status',' helper created successfully!');;

    }

     public function edit( Helper $helper){



        return view('helper.edit', compact('helper'));
    }

    public function update(Request $request, Helper $helper){
        $request->validate([
            'gander'=> 'required|in:male,female',
            'dob' => 'required|before:today',
            'job'=>'required|min:2|max:255',
            'income'=>'required|numeric|min:1000.00',
            'n/p'=> 'required|in:nic,passport',
            'nic'=>'nullable|regex:/^\d{9}V$/',
            'passport'=>'nullable|regex: /^[A-PR-WY][1-9]\d\s?\d{4}[1-9]$/',
            'copy'=>'required | mimes:jpeg,jpg,png | max:1000',
            'address'=>'required|min:2|max:255',
            'city'=>'required',
            'province'=>'required',
            'country'=>'required',
            'avatar'=> 'required | mimes:jpeg,jpg,png | max:1000',
        ],

        [ 'gender.required' => 'Please select your gender',
          'dob.required'=>'date of birth is required',
          'dob.before'=>'invalid date of birth',
          'job.required'=>'please enter your job',
          'job.min'=>'invalid input',
          'job.max'=>'invalid input',
          'nic.required'=>'please enter your nic number',
          'nic.regex'=>'invalid nic number',
          'address.required'=>'please enter your address',
          'address.min'=>'invalid address',
          'address.max'=>'invalid address',
          'city.required'=>'select your city',
          'province.required'=>'select your province',
          'country.required'=>'select your country']
    );



         if($request->hasFile('avatar'))
        {
              Storage::delete('avatar');
              $avatar = $request->file('avatar');

              $avatarSaveAsName = auth()->id(). "-helper." . $avatar->getClientOriginalExtension();

              $avatar_upload_path = 'avatarH/';
              $avatar_url = $avatar_upload_path . $avatarSaveAsName;
              $success = $avatar->move($avatar_upload_path, $avatarSaveAsName);
        }


             $update = $request->all();

             $update['avatar'] = $avatar_url;

             $helper->update($update);

        return redirect(route('helper.index'))->with('status','updated successfully!');

    }

}
