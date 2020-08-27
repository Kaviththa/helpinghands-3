@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Edit Helper Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        please fill this form to join as a helper with our helping hands site.
                        <form method="POST" action="{{ route('helper.update',$helper->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="row py-3">

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label ">{{ __('Gender') }}</label>
                                        <div class="col-md-8">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="inlineRadio1" value="male">
                                                <label class="form-check-label" for="inlineRadio1">Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="inlineRadio2" value="female">
                                                <label class="form-check-label" for="inlineRadio2">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="DOB" type="date" placeholder="DOB"
                                            class="form-control @error('date') is-invalid @enderror" name="dob"
                                            value="{{$helper->dob}}" required autofocus>
                                        @error('job')
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
                                            value="{{$helper->job}}" required autofocus>
                                        @error('job')
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

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input id="NIC" type="text" placeholder="NIC/Password"
                                            class="form-control @error('nic') is-invalid @enderror" name="nic"
                                            value="{{$helper->nic }}" required autofocus>
                                        @error('nic')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="copy"
                                            class="col-md-4 col-form-label">{{ __('NIC/Password copy') }}</label>
                                        <div class="col-md-6">
                                            <input type="file" class="form-control-file" name="inpFile" id="inpFile">
                                        </div>
                                        <div class="col-6">
                                            <div style="display: none;" class="image-preview" id="imagePreview">
                                                <img src="" alt="Image Preview" class="image-preview__image">
                                                <span class="image-preview__default-text"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input id="address" type="text" placeholder="address line"
                                            class="form-control @error('address') is-invalid @enderror" name="address"
                                            value="{{$helper->address }}" required autofocus>
                                        @error('adrress')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="form-control" name="city" value="{{$helper->city }}">
                                            <option selected>City</option>
                                            <option value="jaffna">Jaffna</option>
                                            <option value="colombo">Colombo</option>
                                            <option value="kandy">Kandy</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="form-control" name="province" value="{{ old('State/Province') }}">
                                            <option selected>Province</option>
                                            <option value="nort">North</option>
                                            <option value="east">East</option>
                                            <option value="west">West</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="form-control" name="country" value="{{ old('country') }}">
                                            <option selected>Country</option>
                                            <option value="srilanka">Srilanka</option>
                                            <option value="canada">Canada</option>
                                            <option value="india">India</option>
                                        </select>
                                    </div>
                                </div>

                                 <div class="col-md-4">
                                    <div class="form-group row">
                                        <label for="name"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Profile') }}</label>
                                        <div class="col-md-6">
                                            <input name="avatar" type="file" value="{{$helper->avatar}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('update') }}
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
