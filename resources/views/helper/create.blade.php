@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Helper Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        please fill this form to join as a helper with our helping hands site.
                        <form method="POST" action="{{ route('helper.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row py-3">

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label ">{{ __('Gender') }}</label>
                                        <div class="col-md-8">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender"
                                                    id="inlineRadio1" value="male">
                                                <label class="form-check-label" for="inlineRadio1">Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender"
                                                    id="inlineRadio2" value="female">
                                                <label class="form-check-label" for="inlineRadio2">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">

                                        <input id="DOB" type="date" placeholder="DOB" data-date-format="yyyy-mm-dd"
                                            class="form-control @error('dob') is-invalid @enderror" name="dob"
                                            value="{{ old('dob') }}"  autofocus>
                                        @error('dob')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="job" type="text" placeholder="job"
                                            class="form-control @error('job') is-invalid @enderror" name="job"
                                            value="{{ old('job') }}" autofocus>
                                        @error('job')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="income" type="text" placeholder="income"
                                            class="form-control @error('income') is-invalid @enderror" name="income"
                                            value="{{ old('income') }}" autofocus>
                                        @error('income')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="n/p"
                                                id="inlineRadio1" value="NIC">
                                            <label class="form-check-label" for="inlineRadio1">NIC</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="n/p"
                                                id="inlineRadio2" value="Passport">
                                            <label class="form-check-label" for="inlineRadio2">Passport</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input id="NIC" type="text" placeholder="NIC"
                                            class="form-control @error('nic') is-invalid @enderror" name="nic"
                                            value="{{ old('nic') }}"  autofocus>
                                        @error('nic')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input id="passport" type="text" placeholder="passport"
                                            class="form-control @error('passport') is-invalid @enderror" name="passport"
                                            value="{{ old('passport') }}"  autofocus>
                                        @error('passport')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="copy"
                                            class="col-md-4 col-form-label">{{ __('NIC copy') }}</label>
                                        <div class="col-md-8">
                                            <input type="file" class="form-control @error('copy') is-invalid @enderror" name="copy" id="copy" value="{{ old('copy') }}" >
                                            @error('copy')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        </div>


                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input id="address" type="text" placeholder="address line"
                                            class="form-control @error('address') is-invalid @enderror" name="address"
                                            value="{{ old('address') }}"  autofocus>
                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="form-control @error('city') is-invalid @enderror" name="city"  value="{{ old('city') }}">
                                            <option value="">City</option>
                                            <?php foreach($city as $city): ?>
                                                <option value="{{$city->name}}">{{$city->name}}</option>
                                            <?php endforeach; ?>
                                        </select>
                                        @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="form-control @error('state') is-invalid @enderror" name="province" value="{{ old('province') }}">
                                            <option value="">Province</option>
                                            <?php foreach($state as $state): ?>
                                                <option value="{{$state->name}}">{{$state->name}}</option>
                                            <?php endforeach; ?>
                                        </select>
                                        @error('province')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}">
                                            <option value="">Country</option>
                                            <option value="srilanka">Srilanka</option>
                                            <option value="canada">Canada</option>
                                            <option value="india">India</option>
                                        </select>
                                        @error('country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                 <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="name"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Profile') }}</label>
                                        <div class="col-md-8">
                                            <input name="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" value="{{ old('avatar') }}">
                                            @error('avatar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('submit') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
