<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/css/style.css" media="screen" />
<script src="/js/jquery-2.1.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

<br>
<br>
<br>
<form class="form-horizontal" method = "POST" action = "<?php echo URL::to('auth/check'); ?>">
  <fieldset>
    <legend>Please input login and password</legend>
    <div class="form-group">
      <label for="inputLogin" class="col-lg-2 control-label">Login</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="username" name = "username" placeholder="Login">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        
      </div>
    </div>
 <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
