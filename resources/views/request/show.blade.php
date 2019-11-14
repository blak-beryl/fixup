@extends('layout')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/mechanic.css') }}" type="text/css" rel="stylesheet">
</head>
<body>

@section('content')

    {{-- <div class="container"> --}}

        <div class="row justify-content-center">
                <div id="mechanics" class="my-5 ">
                <h3 class="my-5 text-center">Request for {{Auth::user()->firstname}}</h3>
                <form action="http://maps.google.com/maps/value" method="GET" target="_blank">
                  <label for="sender">Enter Your Location</label>
                  <input type="text" name="sender"  value="">
              {{-- <input type="hidden" name="destination" value="{{mechanics->address}}"/>  --}}
                   <input type="submit" value="Get directions"/>
              </form> 
                        <a href="/mech" class="btn btn-outline-warning">back</a>
                        @foreach($makerequests as $makerequest)

                        <div class="card w-75">
                            <div class="card-body">
                            <h5 class="card-title">{{$makerequest->user->firstname}}</h5>
                          <p class="card-text">{{$makerequest->request}}</p>
                              
                         
                            </div>
                          </div>

                            
                      @endforeach    
              </div>
        </div>
        
        @endsection

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>