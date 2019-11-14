@extends('layout')

@section('content')

<div class="card ">
    <div class="card-header">Mechanic</div>
   
    <div class="card-body">
        <div class="row">
            <div class="col-2">
                    <img src="../storage/{{Auth::user()->image}}" alt="{{Auth::user()->firstname}}" class="img" width="300" height="300">
            </div>
            <div class="col-10 text-md-center">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <h1 class="p-5">Welcome back {{ Auth::user()->firstname }}</h1>
                <p>Nice to see you!</p>
                <a href="/requestall/{{Auth::user()->id}}" class="btn btn btn-outline-primary">View available request</a>
            </div>

        </div>
      
    </div>
</div>
@csrf



@endsection
