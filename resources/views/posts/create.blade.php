<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name='csrf-token' content='{{csrf_token()}}'/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Create</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="card border-primary">
            <div class="card-header">
              Create
            </div>
            <div class="card-body ">
              @if(Session::has('success'))

              <div class="alert alert-success">

                  {{Session::get('success')}}

              </div>
              @endif
  <form method="post" action="{{route('post.create')}}">
 {{csrf_field()}}
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" value="{{old('name')}}" name="name" id="inputEmail4" placeholder="Name">
      @if($errors->has('name'))
      <span class="text-danger">
        {{$errors->first('name')}}
      </span>

      @endif
    </div>
     <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" value="{{old('email')}}" name="email" id="inputEmail4" placeholder="Email">
       @if($errors->has('email'))
      <span class="text-danger">
        {{$errors->first('email')}}
      </span>

      @endif
    </div>
   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password">
       @if($errors->has('password'))
      <span class="text-danger">
        {{$errors->first('password')}}
      </span>

      @endif
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Confirm Password</label>
      <input type="password" class="form-control" name="password_confirmation" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="address" value="{{old('address')}}" id="inputAddress" placeholder="1234 Main St">
     @if($errors->has('address'))
      <span class="text-danger">
        {{$errors->first('address')}}
      </span>

      @endif
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="city" value="{{old('city')}}"id="inputCity">
    </div>
     @if($errors->has('city'))
      <span class="text-danger">
        {{$errors->first('city')}}
      </span>

      @endif
   
  </div>
  
  <button type="submit" class="btn btn-primary">Create</button>
</form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>