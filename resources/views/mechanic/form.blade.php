@csrf

<div class="container">
    

    <div class="form-row">
        <div class="col-md-6 form-group">
                <label for="firstname">FirstName:</label>
            <input type="text" name="firstname" value="{{old('firstname') ?? $mechanic->firstname}}" class="form-control">
            <div>{{$errors->first('firstname')}}</div>
        </div>

        <div class="col-md-6 form-group">
            <label for="lastname">LastName:</label>
        <input type="text" name="lastname" value="{{old('lastname') ?? $mechanic->lastname}}" class="form-control">
        <div>{{$errors->first('lastname')}}</div>
        </div>
    </div>


    <div class="form-row">

        <div class="col-md-6 form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" value="{{old('email') ?? $mechanic->email}}" class="form-control">
            <div>{{$errors->first('email')}}</div>
        </div>

        <div class="col-md-6 form-group">
            <label for="phonenumber">Number:</label>
            <input type="text" name="phonenumber" value="{{old('phonenumber') ?? $mechanic->phonenumber}}" class="form-control">
            <div>{{$errors->first('phonenumber')}}</div>
        </div>
​
    </div>
    
    
    
    <div class="form-row">
        
        <div class="col-md-6 form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" value="{{old('address') ?? $mechanic->address}}" class="form-control">
            <div>{{$errors->first('address')}}</div>
        </div>
        
        <div class="col-md-6 mt-2 form-group">
            <label for="image">Profile image:</label>
            <input type="file" class="p-1 form-control" name="image">
            <div>{{$errors->first('image')}}</div>
        </div>
        
    </div>
    
    ​
    <div class="form-group">
        <label for="about">About mechanic:</label>
        <textarea name="about" id="about" class="form-control" cols="20" rows="10">{{old('about') ?? $mechanic->about}}</textarea>
        <div>{{$errors->first('about')}}</div>
    </div>
    
    <div class="form-group" style="display:none;">
        <label for="validation">mechanic:</label>
        <select name="validation" class="form-control-sm">
            <option value="1"  selected>Yes</option>
        </select>
    </div>

    <div class="form-row">
<div class=" col-md-4 form-group">
    <label for="service_id">service:</label>
    <select name="service1" id="service1" class="form-control">
        <option value="" disabled>select a service</option>
        @foreach($services as $service)
        <option value="{{$service->id}}"{{$service->id ?'selected' : ''}}>{{$service->service}}</option>
        @endforeach
    </select>
    <div>{{$errors->first('service_id')}}</div>
</div>

<div class=" col-md-4 form-group">
    <label for="service_id">service:</label>
    <select name="service2" id="service2" class="form-control">
        <option value="" disabled>select a service</option>
        @foreach($services as $service)
        <option value="{{$service->id}}"{{$service->id ? 'selected' : ''}}>{{$service->service}}</option>
        @endforeach
    </select>
    <div>{{$errors->first('service_id')}}</div>
</div>

<div class=" col-md-4 form-group">
        <label for="service_id">service:</label>
        <select name="service3" id="service3" class="form-control">
            <option value="" disabled>select a service</option>
             @foreach($services as $service)
            <option value="{{$service->id}}"{{$service->id ? 'selected' : ''}}>{{$service->service}}</option>
            @endforeach
        </select>
        <div>{{$errors->first('service_id')}}</div>
    </div>

    </div>

                                    <div class="form-row">
                                            <div class="col-md-6 form-group">
                                                    <label for="password">{{ __('Password:') }}</label>
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                       
                                            <div class="col-md-6 form-group ">
                                                   
                                            <label for="password-confirm" >{{ __('Confirm Password:') }}</label>
                                
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-primary" value="REGISTER as a mechanic"/>
