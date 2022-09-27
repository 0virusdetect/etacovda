<?php include './header.php'; ?>
<!-- login container -->
<div class="container login_content py-5">
<img src="./cat.svg" height="60px" alt="">
<div class="col-12 col-sm-12 col-md-6 col-xl-5 col-xxl-5">

<div class="form-group">
<label for="email_id" class="my-2">Email</label>
<input type="text" id="email_id" class="form-control" name="email" placeholder="Email">
</div>

<div class="form-group mb-3">
<label for="password_id" class="my-2">Password</label>
<input type="password" id="password_id" class="form-control" name="password" placeholder="Password">
</div>


<button type="button" class=" text-capitalize btn btn-dark">Login</button>
</div>
</div>
<!-- login container -->


<?php include './footer.php'; ?>