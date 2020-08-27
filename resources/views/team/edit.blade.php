@extends('layouts.app')


@section('content')
<section class="wrapper">
    <h3><i class="fa fa-building"></i> <b> Edit Organization/Team</b> <i class="fa fa-angle-right"></i> <i class="fa fa-plus"></i> <b>@yield ('title')</b></h3>

    <div class="row mt">
        <div class="col-lg-12">
        <div class="form-panel">
        <br>
          @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
          @endif
            <h4 class="mb"><i class="fa fa-pencil-square-o"></i> <span> </span> <b>Organization/Team Details</b></h4>
            <form class="form-horizontal style-form" method="POST" action="{{ route('team.update',$team->id) }}" autocomplete="off" enctype="multipart/form-data">
            {{csrf_field()}}
            @method('patch')
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-building"></i><span> </span>Organization Name</label>
                <div class="col-sm-6">
                    <input type="text" name="organization" class="form-control round-form" value= "{{$team->organization}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-map-marker"></i><span> </span> Address</label>
                <div class="col-md-2">
                    <select class="form-control" name="country">
                        <option selected disabled>Country</option>
                        <option value="srilanka">Srilanka</option>
                        <option value="india">india</option>
                        <option value='canada'>Canada</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="form-control" name="province">
                        <option selected disabled>State/Province</option>
                        <option value='north'>North</option>
                        <option value="east">East</option>
                        <option value="west">West</option>
                        <option value='other'>other</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="form-control" name="city">
                        <option selected disabled>City</option>
                        <option value='hatton'>Hatton</option>
                        <option value="jaffna">Jaffna</option>
                        <option value="colombo">Colombo</option>
                        <option value='kandy'>Kandy</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <textarea name="line" class="form-control round-form"  value= "{{$team->line}}"></textarea>
                </div>
            </div>
            <div class="form-group">
                  <label class="control-label col-md-3"><i class="fa fa-clock-o"></i> <span> </span> Active From</label>
                  <div class="col-md-4">
                  <input type="date" name="startup" class="form-control round-form" value="{{$team->startup}}">
                  </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><b><i class="fa fa-code"></i></b><span> </span> Service Area(s)</label>

                <div class="col-md-3">
                <select class="form-control" name="area" multiple="">
                                  <option value="hatton">hatton</option>
                                  <option value="jaffna">jaffna</option>
                                  <option value="chavakachcheri">chavakachcheri</option>
                                  <option value="kokkuvil">kokkuvil</option>
                                  <option value="koppai">koppai</option>
                                  <option value="vasavilan">Vasavilan</option>
                                </select>
                </div>
                <!-- <div class="col-md-3">
                    <select multiple class="form-control" name="stateS">
                        <option selected disabled>Select from State/ Province</option>
                        <option value='1'>Student</option>
                        <option value="2">Coordinator</option>
                        <option value="3">Recruiter</option>
                        <option value='4'>Admin</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select multiple class="form-control" name="cityS">
                        <option selected disabled>Select from City</option>
                        <option value='1'>Student</option>
                        <option value="2">Coordinator</option>
                        <option value="3">Recruiter</option>
                        <option value='4'>Admin</option>
                    </select>
                </div> -->
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-trophy"></i><span> </span> Recent Services </label>
                <div class="col-sm-8">
                <textarea class="form-control round-form" id="focusedInput" type="text" name="achievement"  value="{{$team->achievement}}"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-phone"></i><span> </span> Contact No</label>
                <div class="col-sm-4">
                    <input type="text" name="phone" class="form-control round-form" placeholder="Phone" value="{{$team->phone}}">
                </div>
                <div class="col-sm-4">
                    <input type="text" name="moblie" class="form-control round-form" placeholder="Mobile" value="{{$team->moblie}}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-desktop"></i><span> </span> Official Website (if any)</label>
                <div class="col-sm-8">
                    <input type="text" name="website" class="form-control round-form" placeholder="www.example.com" value="{{$team->website}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-file"></i><span> </span> Certified copy of your registered team/organization</label>
                <div class="col-sm-8">
                    <input type="file" class="form-control round-form" name="proof" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-file"></i><span> </span> profile of  team/organization</label>
                <div class="col-sm-8">
                    <input type="file" class="form-control round-form" name="avatar" required="">
                </div>
            </div>


            <div class="form-send">
                <button type="submit" class="btn btn-large btn-danger" style="margin-left: 60%;">SUBMIT</button>
            </div>

              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>

            </form>
        </div>
        </div>
        <!-- col-lg-12-->
    </div>
    <!-- /row -->

</section>
@endsection
