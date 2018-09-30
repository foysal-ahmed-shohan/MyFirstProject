<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name='csrf-token' content='<?php echo e(csrf_token()); ?>'/>
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
              <?php if(Session::has('success')): ?>
              <div class="alert alert-success">
                  <?php echo e(Session::get('success')); ?>

              </div>
              <?php endif; ?>
  <form method="post" action="<?php echo e(route('post.create')); ?>">
 <?php echo e(csrf_field()); ?>

    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" value="<?php echo e(old('name')); ?>" name="name" id="inputEmail4" placeholder="Name">
      <?php if($errors->has('name')): ?>
      <span class="text-danger">
        <?php echo e($errors->first('name')); ?>

      </span>

      <?php endif; ?>
    </div>
     <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" value="<?php echo e(old('email')); ?> "name="email" id="inputEmail4" placeholder="Email">
       <?php if($errors->has('email')): ?>
      <span class="text-danger">
        <?php echo e($errors->first('email')); ?>

      </span>

      <?php endif; ?>
    </div>
   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password">
       <?php if($errors->has('password')): ?>
      <span class="text-danger">
        <?php echo e($errors->first('password')); ?>

      </span>

      <?php endif; ?>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Confirm Password</label>
      <input type="password" class="form-control" name="password_confirmation" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="address" value="<?php echo e(old('address')); ?>" id="inputAddress" placeholder="1234 Main St">
     <?php if($errors->has('address')): ?>
      <span class="text-danger">
        <?php echo e($errors->first('address')); ?>

      </span>

      <?php endif; ?>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="city" value="<?php echo e(old('city')); ?>"id="inputCity">
    </div>
     <?php if($errors->has('city')): ?>
      <span class="text-danger">
        <?php echo e($errors->first('city')); ?>

      </span>

      <?php endif; ?>
   
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