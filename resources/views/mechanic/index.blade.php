<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>List of mechanics</h1>
        <a href="/mechanic/view">create</a>
    </div>
​
    <div id="mechanics">
        <div class="row text-center">
            @foreach($mechanics as $mechanic)
            
                <div class="col-md-4">
                    <a href="mechanic/{{$mechanic->id}}">
                        <h3>{{$mechanic->firstname}}  {{$mechanic->lastname}} </h3>  
                    </a>
                </div>
​​
            @endforeach
            
        </div>
    </div>
    
</body>
</html>