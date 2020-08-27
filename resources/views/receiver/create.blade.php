@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Receiver Dashboard</div>

                    <div class="card-body">
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                        please fill this form to join as a receiver with our helping hands site.
                        <form method="POST" action="{{ route('receiver.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row py-3">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="first_name" type="text" placeholder="First Name"
                                            class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                                            value="{{ old('first_name') }}"  autofocus>
                                        @error('dob')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="last_name" type="text" placeholder="Last Name"
                                            class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                            value="{{ old('last_name') }}"  autofocus>
                                        @error('dob')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">

                                        <input id="dob" type="date" placeholder="Date of Birth" data-date-format="yyyy-mm-dd"
                                            class="form-control @error('dob') is-invalid @enderror" name="dob"
                                            value="{{ old('dob') }}"  autofocus>
                                        @error('dob')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-8">
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

                                <div class="col-md-4">
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
                                        <input id="mobile" type="text" placeholder="Mobile Number"
                                            class="form-control @error('mobile') is-invalid @enderror" name="mobile"
                                            value="{{ old('mobile') }}" autofocus>
                                        @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input id="phone" type="text" placeholder="Tel-phone Number"
                                            class="form-control @error('phone') is-invalid @enderror" name="phone"
                                            value="{{ old('phone') }}" autofocus>
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input id="nic" type="text" placeholder="NIC Number"
                                            class="form-control @error('nic') is-invalid @enderror" name="nic"
                                            value="{{ old('nic') }}"  autofocus>
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
                                            class="col-md-4 col-form-label">{{ __('NIC copy') }}</label>
                                        <div class="col-md-8">
                                            <input type="file" class="form-control-file" name="nic_copy" id="nic_copy">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input id="address" type="text" placeholder="address line"
                                            class="form-control @error('address') is-invalid @enderror" name="address"
                                            value="{{ old('job') }}"  autofocus>
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
                                        <select class="form-control @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}">
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
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="form-control @error('type') is-invalid @enderror" name="type"  value="{{ old('type') }}">
                                            <option value="">Type of Issue</option>
                                            <option value="Disability">Disability</option>
                                            <option value="Widow">Widow</option>
                                            <option value="Loss of parents">Loss of parents</option>
                                            <option value="Diseases">Diseases</option>
                                            <option value="People under poverty line">People under poverty line</option>
                                            <option value="Damages">Damages</option>
                                        </select>
                                        @error('type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="form-control @error('reason') is-invalid @enderror" name="reason"  value="{{ old('reason') }}">
                                            <option value="">Reason for the Issue</option>
                                            <option value="Natural Disaster">Natural Disaster</option>
                                            <option value="Natural Disaster">Accident</option>
                                        </select>
                                        @error('type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="form-group">
                                        <select class="form-control @error('title') is-invalid @enderror" name="title"  value="{{ old('title') }}">
                                            <option value="">Type of proof</option>
                                            <option value="medical">Medical Report</option>
                                            <option value="proof" selected="selected">Proof Letter by GS/AGO</option>
                                        </select>
                                        @error('type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="form-group row">
                                        <label for="proof"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Document') }}</label>
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
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <select class="form-control @error('category_of_help') is-invalid @enderror" name="category_of_help"  value="{{ old('category_of_help') }}">
                                            <option value="">Select the type of help</option>
                                            <option value="Amount">Amount</option>
                                            <option value="Things" selected="selected">Things</option>
                                        </select>
                                        @error('category_of_help')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group row">
                                        <label for="video"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Video') }}</label>
                                        <div class="col-md-8">
                                            <input name="video" type="file" class="form-control @error('video') is-invalid @enderror">
                                            @error('video')
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
