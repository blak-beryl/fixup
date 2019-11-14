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
                        <h3 class="my-3 text-center">list of specialized mechanics</h3>
                        @foreach($mechanics as $mechanic)

                        

                            <div class="card mb-3" style="">
                                <div class="row no-gutters">
                                  <div class="col-md-5 col-sm-5 col-xs-4">
                                    <a href="mechanic/{{$mechanic->id}}">
                                         <img src="{{'../storage/'.$mechanic->image}}" alt="{{$mechanic->firstname}}" class="img" width="350">        ​
                                    </a>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-8">
                                <div class="card-body text-left m-0 px-0">
                                        <p class=" card-text mx-2 "><strong>FirstName:</strong>  {{$mechanic->firstname}}</p>  
                                        <p class=" card-text mx-2 "><strong>LastName:</strong>  {{$mechanic->lastname}}</p>  
                                        <p class=" card-text mx-2 "><strong>Email:</strong>  {{$mechanic->email}}</p>  
                                        <p class=" card-text mx-2 "><strong>PhoneNumber:</strong>  {{$mechanic->phonenumber}}</p>  
                                        <p class=" card-text mx-2 "><strong>Address:</strong>  {{$mechanic->address}}</p> 
                                        <p class=" card-text mx-2 "><strong>About:</strong>  {{$mechanic->about}}</p> 


                              <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter{{$mechanic->id}}">
                                Request {{$mechanic->firstname}}
                              </button>


                              
                               </div>
                                </div>
                              </div>
                            </div>

                          @endforeach      

                          
                        </div>
        </div>

        @foreach($mechanics as $mechanic)
        
                              <!-- Modal -->
                              
                                  
      <div class="modal fade" id="exampleModalCenter{{$mechanic->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalCenterTitle">Make a request</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <div class="form-row">
                                              <form action="/request" method="post">
                                                @method('POST')
                                                
                                                <div class="col-md-12 form-group">
                                                        <label for="address">address:</label>
                                                    <input type="text" name="address" value="{{old('address') ?? $request->address}}" class="form-control">
                                                    <div>{{$errors->first('address')}}</div>
                                                </div>
    
                                                <div class="col-md-12 form-group" style="display:none;">
                                                  
                                                        <label for="mechanic_id">mechanic_id:</label>
                                                      
                                                    <input type="text" name="mechanic_id" value="{{$mechanic->id }}" class="form-control">
                                                    <div>{{$errors->first('mechanic_id')}}</div>
  
                                                </div>
                                        
                                                <div class="col-md-12 form-group">
                                                    <label for="phonenumber">phonenumber:</label>
                                                <input type="text" name="phonenumber" value="{{old('phonenumber') ?? $request->phonenumber}}" class="form-control">
                                                <div>{{$errors->first('phonenumber')}}</div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="request" aria-placeholder="further information of problam...">fault:</label>
                                              <textarea name="request" id="request" class="form-control" cols="20" rows="10">{{old('request') ?? $request->request}}</textarea>
                                              <div>{{$errors->first('request')}}</div>
                                          </div>
                                          <button type="submit" class="btn btn-primary form-control">Send request</button>
                                          @csrf
                                        </form>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary form-control" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
        @endforeach

    {{-- </div> --}}
        
        @endsection

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>