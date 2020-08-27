@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card">
                <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
                <div class="wrapper wrapper--w790">
                    <div class="card card-5">
                        <div class="card-heading">
                            <h2 class="title">Details submission Form</h2>
                        </div>

                        <div class="card-body">

                        <form method="POST" action="{{ route('receiver.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="name">Profile picture</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <input class="input--style-5" type="file" name="avatar">
                                            </div>
                                            @if($errors->has('avatar'))
                                            {!! $errors->first('avatar', '<p class="text-danger">:message</p>') !!}
                                            @endif
                                        </div>

                                    </div>

                                    <div class="form-row m-b-55">
                                        <div class="name">Name</div>
                                        <div class="value">
                                            <div class="row row-space">
                                                <div class="col-6">
                                                    <div class="input-group-desc">
                                                        <input class="input--style-5" type="text" name="first_name" placeholder="First Name">
                                                    </div>
                                                    @if($errors->has('first_name'))
                                                        {!! $errors->first('first_name', '<p class="text-danger">:message</p>') !!}
                                                        @endif
                                                </div>
                                                <div class="col-6">
                                                    <div class="input-group-desc">
                                                        <input class="input--style-5" type="text" name="last_name" placeholder="Last Name">
                                                        @if($errors->has('last_name'))
                                                        {!! $errors->first('last_name', '<p class="text-danger">:message</p>') !!}
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="name">Date of Birth</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <input class="input--style-5" type="date" name="dob" placeholder="Date of Birth">
                                                @if($errors->has('dob'))
                                                        {!! $errors->first('dob', '<p class="text-danger">:message</p>') !!}
                                                        @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="name">NIC Number</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <input class="input--style-5" type="text" name="nic" placeholder="NIC Number">
                                                @if($errors->has('nic'))
                                                        {!! $errors->first('nic', '<p class="text-danger">:message</p>') !!}
                                                        @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="name">NIC Copy</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <input class="input--style-5" type="file" name="nic_copy">
                                                @if($errors->has('nic_copy'))
                                                        {!! $errors->first('nic_copy', '<p class="text-danger">:message</p>') !!}
                                                        @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row m-b-55">
                                        <div class="name">Contact</div>
                                        <div class="value">
                                            <div class="row row-space">
                                                <div class="col-6">
                                                    <div class="input-group-desc">
                                                        <input class="input--style-5" type="text" name="mobile" placeholder="Mobile Number">
                                                        @if($errors->has('mobile'))
                                                        {!! $errors->first('mobile', '<p class="text-danger">:message</p>') !!}
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="input-group-desc">
                                                        <input class="input--style-5" type="text" name="phone" placeholder="Telephone Number">
                                                        @if($errors->has('phone'))
                                                        {!! $errors->first('phone', '<p class="text-danger">:message</p>') !!}
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row m-b-55">
                                        <div class="name">Job Details</div>
                                        <div class="value">
                                            <div class="row row-space">
                                                <div class="col-6">
                                                    <div class="input-group-desc">
                                                        <input class="input--style-5" type="text" name="job" placeholder="Job">
                                                        @if($errors->has('job'))
                                                        {!! $errors->first('job', '<p class="text-danger">:message</p>') !!}
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="input-group-desc">
                                                        <input class="input--style-5" type="text" name="income" placeholder="Salary">
                                                        @if($errors->has('income'))
                                                        {!! $errors->first('income', '<p class="text-danger">:message</p>') !!}
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row m-b-55">
                                        <div class="name">Address</div>
                                        <div class="value">
                                            <div class="row row-space">
                                                <div class="col-6">
                                                    <div class="input-group-desc">
                                                        <div class="rs-select2 js-select-simple select--no-search">
                                                            <select name="state">
                                                                <option  selected="selected">State</option>
                                                                <?php foreach($state as $state): ?>
                                                                    <option value="{{$state->name}}">{{$state->name}}</option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                            <div class="select-dropdown"></div>
                                                            @if($errors->has('state'))
                                                            {!! $errors->first('state', '<p class="text-danger">:message</p>') !!}
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                <div class="input-group-desc">
                                                        <div class="rs-select2 js-select-simple select--no-search">
                                                            <select name="city">
                                                                <option  selected="selected">City</option>
                                                                <<?php foreach($city as $city): ?>
                                                                    <option value="{{$city->name}}">{{$city->name}}</option>
                                                                <?php endforeach; ?>
                                                            </select>

                                                            <div class="select-dropdown"></div>
                                                            @if($errors->has('city'))
                                                            {!! $errors->first('city', '<p class="text-danger">:message</p>') !!}
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="name">Line of Address</div>
                                        <div class="value">
                                            <div class="input-group-desc">
                                                <textarea style="height:60px width:800px;" class="input--style-5" type="text" name="address"></textarea>
                                                @if($errors->has('address'))
                                                {!! $errors->first('address', '<p class="text-danger">:message</p>') !!}
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="name">Type of Issue</div>
                                        <div class="value">
                                            <div class="input-group-desc">
                                                <div class="rs-select2 js-select-simple select--no-search">
                                                    <select name="type">
                                                        <option disabled="disabled" selected="selected">Type of Issue</option>
                                                        <option value="Disability">Disability</option>
                                                        <option value="Widow">Widow</option>
                                                        <option value="Loss of parents">Loss of parents</option>
                                                        <option value="Diseases">Diseases</option>
                                                        <option value="People under poverty line">People under poverty line</option>
                                                        <option value="Damages">Damages</option>
                                                    </select>
                                                    <div class="select-dropdown"></div>
                                                        @if($errors->has('type'))
                                                        {!! $errors->first('type', '<p class="text-danger">:message</p>') !!}
                                                        @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="name">Details</div>
                                        <div class="value">
                                            <div class="input-group-desc">
                                                <div class="rs-select2 js-select-simple select--no-search">
                                                    <select name="reason">
                                                        <option disabled="disabled" selected="selected">select reason</option>
                                                        <option value="Natural Disaster">Natural Disaster</option>
                                                        <option value="Natural Disaster">Accident</option>
                                                    </select>
                                                    <div class="select-dropdown"></div>
                                                    @if($errors->has('reason'))
                                                    {!! $errors->first('reason', '<p class="text-danger">:message</p>') !!}
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="name">Proof document</div>
                                        <div class="value">
                                        <div class="row row-space">
                                            <div class="col-6">
                                                <div class="input-group-desc">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="title" id="str">
                                                            <option value="medical">Medical Report</option>
                                                            <option value="proof" selected="selected">Proof Letter by GS/AGO</option>
                                                        </select>

                                                        <div class="select-dropdown"></div>
                                                        @if($errors->has('title'))
                                                        {!! $errors->first('title', '<p class="text-danger">:message</p>') !!}
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="input-group">
                                                    <input class="input--style-5" type="file" name="proof" id="medical">
                                                    @if($errors->has('proof'))
                                                    {!! $errors->first('proof', '<p class="text-danger">:message</p>') !!}
                                                   @endif
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="name">Category of help</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <input class="input--style-5" type="text" name="category_of_help">
                                                @if($errors->has('category_of_help'))
                                                {!! $errors->first('category_of_help', '<p class="text-danger">:message</p>') !!}
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                        <div class="form-row m-b-55">
                                        <div class="name">Document submission</div>
                                        <div class="value">
                                                    <div class="input-group-desc">
                                                    <input class="input--style-5" type="file" name="video" id="video">
                                                    @if($errors->has('video'))
                                                    {!! $errors->first('vidoe', '<p class="text-danger">:message</p>') !!}
                                                   @endif
                                                    </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn btn--radius-2 btn--red" type="submit">Submit</button>
                                    </div>
                                </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    $(document).ready(function () {
        $('#sel1').change(function () {
            switch (this.value) {
                case "blue":
                case "green":
                case "yellow":
                    $('#divElement').css('background-color', this.value); break;

                default: $('#divElement').css('background-color', '#FFF'); break;
            }
        });
    });
</script>

@endsection
