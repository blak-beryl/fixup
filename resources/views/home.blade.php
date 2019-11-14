@extends('layout')

@section('content')

            <div class="card ">
                <div class="card-header">Dashboard</div>
               
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                                <img src="images/avatar.jpg" class="card-img" alt="Avatar">
                        </div>
                        <div class="col-10 text-md-center">
                                @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
        
                            <h1 class="p-5">Welcome back {{ Auth::user()->firstname }}</h1>
                            <p>Nice to see you!</p>
                        </div>
                    </div>
                  
                </div>
            </div>

           
                    <h2>Services</h2>
        ​
                    @if(count($services) > 0)
                        <?php
                            $servicecount = count($services);
                            $i = 1;
                        ?>
        ​
                        <div class="box-fill row">
                            <div class="col-lg-6 col-md-6">
                                <ul>
                                @foreach($services as $service)
                                    <li>
                                @if($i === $servicecount)
                                            <a href="/service/{{$service->id}}">{{$service->service}}</a>     
                                @else
                                            <a href="/service/{{$service->id}}">{{$service->service}}</a>
                                @endif
        ​
                                @if($i%8 == 0)
        ​
                                    </li></ul><div class="col-lg-6 col-md-6"><ul>
                                @else
        ​                          </li> 
        ​
                                @endif
        ​
                                <?php 
                                    $i++;
                                ?>
        ​
                                @endforeach
                                </ul>
                            </div>
                        </div>
                        @else
                        <p>No service to display</p>
                        @endif
        ​

          
    
     

@endsection
