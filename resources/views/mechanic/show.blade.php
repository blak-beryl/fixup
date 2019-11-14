<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
    <div class="row">
        <div class="col-12">
            <h1>Welcome {{$mechanic->firstname}}</h1>
            <p><a href="{{$mechanic->id}}/edit">Edit</a></p>
​
            <form action="{{$mechanic->id}}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
​ @if($mechanic->image)
<div class="row">
    <div class="col-md-4">
        <img src="{{'../storage/'.$mechanic->image}}" alt="{{$mechanic->firstname}}" class="img" width="300" height="200">
    </div>
</div>
@endif
    <div>
        <p><strong>FirstName:</strong>  {{$mechanic->firstname}}</p>  
        <p><strong>LastName:</strong>  {{$mechanic->lastname}}</p>  
        <p><strong>Email:</strong>  {{$mechanic->email}}</p>  
        <p><strong>PhoneNumber:</strong>  {{$mechanic->phonenumber}}</p>  
        <p><strong>Address:</strong>  {{$mechanic->address}}</p> 
        <p><strong>About:</strong>  {{$mechanic->about}}</p> 
    </div>
​
   














    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>