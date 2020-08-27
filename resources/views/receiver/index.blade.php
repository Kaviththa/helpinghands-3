@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Welcome To your Dashboard</p>
                    @foreach ($data as $key => $user)
                    <img src="{{$user->avatar}}" style="width: 150px; height: 150px; border-radius: 50%; overflow: hidden; margin:0px 200px;">
                    <br />
                    <br/>
                    <div class="row row-space">
                        <div class="col-3">Name :</div>
                        <div class="col-6">{{ $user->first_name }} {{ $user->last_name }}</div>
                    </div>
                    <div class="row row-space">
                        <div class="col-3">E-mail</div>
                        <div class="col-6">{{ Auth::user()->email }}</div>
                    </div>
                    <div class="row row-space">
                        <div class="col-3">Date of Birth:</div>
                        <div class="col-6">{{ $user->dob }}</div>
                    </div>
                    <div class="row row-space">
                        <div class="col-3">Mobile Number:</div>
                        <div class="col-6">{{ $user->mobile }}</div>
                    </div>
                    <div class="row row-space">
                        <div class="col-3">Phone Number:</div>
                        <div class="col-6">{{ $user->phone }}</div>
                    </div>
                    <div class="row row-space">
                        <div class="col-3">Job:</div>
                        <div class="col-6">{{ $user->job }}</div>
                    </div>
                    <div class="row row-space">
                        <div class="col-3">NIC Number:</div>
                        <div class="col-6">{{ $user->nic }}</div>
                    </div>
                    <div class="row row-space">
                        <div class="col-3">Salary:</div>
                        <div class="col-6">{{ $user->income }}</div>
                    </div>
                    <div class="row row-space">
                        <div class="col-3">Address:</div>
                        <div class="col-6">{{ $user->state }}, {{ $user->city }}, {{ $user->address }}</div>
                    </div>

                    @foreach($data2 as $key => $issue)
                    <br />
                    <br/>
                    <div class="row row-space">
                        <div class="col-3">Type of Issue :</div>
                        <div class="col-6">{{ $issue->type }}</div>
                    </div>
                    <div class="row row-space">
                        <div class="col-3">Reason for the Issue :</div>
                        <div class="col-6">{{ $issue->reason }}</div>
                    </div>
                    @endforeach
                    @foreach($data1 as $key => $doc)
                    <div class="row row-space">
                        <div class="col-3">Proof :</div>
                        <div class="col-6"><a href="{{route('proof.view',$doc->id)}}" target="_blank">view</a></div>
                    </div>
                    <div class="row row-space">
                        <div class="col-3">Detailed proof :</div>
                        <div class="col-6">
                        <audio controls>
                            <source src="{{$doc->link}}" type="audio/mpeg">
                        </audio>
                        </div>
                        <br/>
                    <br/>
                    </div>
                    @endforeach
                    <div class="d-flex justify-content-center">
                    <br/>
                    <br/>
                    <a class="btn btn-primary" href="{{ route('receiver.edit',$user->id) }}">Edit</a> &nbsp;&nbsp;&nbsp;
                    {!! Form::open(['method' => 'DELETE','route' => ['receiver.destroy', $user->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
