@extends('layout')

@section('content')
    <div id="mechanics">
            <div class="row text-center">
                @foreach($mechanics as $mechanic)
                
                    <div class="col-md-4">
                        <a href="mechanic/{{$mechanic->id}}">
                            <div class="row">
                                    <div class="col-2">
                                            <img src="{{'../storage/'.Auth::user()->image}}" alt="{{Auth::user()->firstname}}" class="img" width="300" height="300">
                                    </div>
                        </a>
                    </div>
    ​​
                @endforeach
                
            </div>
        </div>
        
        @endsection