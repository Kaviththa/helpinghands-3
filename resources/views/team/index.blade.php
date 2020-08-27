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

                         <h1 class="text-center"> welcome to helping hands</h1>
                         <h2>{{ Auth::user()->name }}</h2>
                         @foreach ($team as $object)
                         <div class="text-center mb-5">
                         <img src="{{ $object->avatar}}" alt="avatar"/>
                         </div>
                         <p> organization- {{ $object->organization}}</p>
                         <p>Address</p>
                         <p>lane-{{ $object->lane}}</p>
                         <p>city-{{ $object->city}}</p>
                         <p>province-{{ $object->province }}</p>
                         <p>country-{{ $object->country }}</p>
                         <p>start-up-{{ $object->startup }}</p>
                         <p>phone-{{ $object->phone}}</p>
                         <p>mobile{{ $object->mobile }}</p>
                         <p>service-areas-{{ $object->area }}</p>
                         <p>our website-{{ $object->website}}</p>
                         <p>our achievement-{{ $object->achievement}}</p>

                         @endforeach
                        <div class="text-center">
                          @foreach ($team as $object)
                         <a class=" btn btn-primary my-2 " role="button" href="{{ route('team.edit',$object->id) }}">update</a>
                         <a class=" btn btn-danger my-2 " role="button" href="{{ route('team.create') }}">delete</a>
                         @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

