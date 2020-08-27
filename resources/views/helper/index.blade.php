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

                         <h1 class="text-center"> welcome to helping hands</h1>
                         <h2>{{ Auth::user()->name }}</h2>
                         @foreach ($helper as $object)
                         <div class="text-center mb-5">
                         <img src="{{ $object->avatar}}"  alt="avatar">
                         </div>
                         <p> gender- {{ $object->gender}}</p>

                         <p>dob- {{ $object->dob}}</p>
                         <p>job- {{ $object->job}}</p>
                         <p>salary- {{ $object->income}}</p>
                         <p>NIC-{{ $object->nic}}</p>
                         <p>Passport-{{ $object->passport}}</p>
                         <p>address-{{ $object->address}}</p>
                         <p>city-{{ $object->city}}</p>
                         <p>province-{{ $object->province }}</p>
                         <p>country-{{ $object->country }}</p>


                         @endforeach
                        <div class="text-center">
                        @foreach ($helper as $object)
                        <a class=" btn btn-primary my-2 " role="button" href="{{ route('helper.edit',$object->id) }}">update</a>
                         <a class=" btn btn-danger my-2 " role="button" href="{{ route('helper.create') }}">delete</a>
                         @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

