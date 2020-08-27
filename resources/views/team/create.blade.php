

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Team Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        please fill this form to join as a team with our helping hands site.
                        <form method="POST" action="{{ route('team.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row py-3">

                            <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="organization" type="text" placeholder="organization/team name"
                                            class="form-control @error('organization') is-invalid @enderror" name="organization"
                                            value="{{ old('organization') }}" autofocus>
                                        @error('organization')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">

                                        <input id="startup" type="date" placeholder="Active From"
                                            class="form-control @error('startup') is-invalid @enderror" name="startup"
                                            value="{{ old('startup') }}"  autofocus>
                                        @error('startup')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <input id="phone" type="text" placeholder="phone"
                                            class="form-control @error('phone') is-invalid @enderror" name="phone"
                                            value="{{ old('phone') }}"  autofocus>
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <input id="mobile" type="text" placeholder="mobile"
                                            class="form-control @error('phone') is-invalid @enderror" name="mobile"
                                            value="{{ old('mobile') }}"  autofocus>
                                        @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input id="address" type="text" placeholder="address lane"
                                            class="form-control @error('lane') is-invalid @enderror" name="lane"
                                            value="{{ old('lane') }}"  autofocus>
                                        @error('line')
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
                                            <option value="jaffna">Jaffna</option>
                                            <option value="colombo">Colombo</option>
                                            <option value="kandy">Kandy</option>
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
                                        <select class="form-control @error('province') is-invalid @enderror" name="province" value="{{ old('State/Province') }}">
                                            <option value="">Province</option>
                                            <option value="nort">North</option>
                                            <option value="east">East</option>
                                            <option value="west">West</option>
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
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <input id="website" type="text" placeholder="website"
                                            class="form-control @error('website') is-invalid @enderror" name="website"
                                            value="{{ old('website') }}"  autofocus>
                                        @error('website')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <input id="achievment" type="text" placeholder="achievement"
                                            class="form-control @error('achievemnt') is-invalid @enderror" name="achievement"
                                            value="{{ old('achievement') }}"  autofocus>
                                        @error('achievement')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select class="form-control @error('city') is-invalid @enderror" name="area"  value="{{ old('city') }}">
                                            <option value="">service areas</option>
                                            <option value="jaffna">Jaffna</option>
                                            <option value="colombo">Colombo</option>
                                            <option value="kandy">Kandy</option>
                                        </select>
                                        @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="name"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Proof') }}</label>
                                        <div class="col-md-8">
                                            <input name="proof" type="file" class="form-control @error('proof') is-invalid @enderror">
                                            @error('proof')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        </div>

                                    </div>
                                </div>


                                 <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="name"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Profile') }}</label>
                                        <div class="col-md-8">
                                            <input name="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror">
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




