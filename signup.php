<?php include './header.php'; ?>
<!-- signup container -->
<div class="container signup_content py-5">
<img src="./cat.svg" height="60px" alt="">
<div class="col-12 col-sm-12 col-md-6 col-xl-5 col-xxl-5">

<div class="form-group">
<label for="name_id" class="my-2">Name</label>
<input type="text" id="name_id" class="form-control" name="name" placeholder="Name">
</div>

<div class="form-group">
<label for="email_id" class="my-2">Email</label>
<input type="text" id="email_id" class="form-control" name="email" placeholder="Email">
</div>

<div class="form-group">
<label for="mobile_number_id" class="my-2">Mobile Number</label>
<input type="text" id="mobile_number_id" class="form-control" name="mobile_number" placeholder="Mobile Number">
</div>

<div class="form-group">
<label for="password_id" class="my-2">Password</label>
<input type="password" id="password_id" class="form-control" name="password" placeholder="Password">
</div>

<div class="form-group mb-3">
<label for="confirm_password_id" class="my-2">Confirm Password</label>
<input type="confirm_password" id="confirm_password_id" class="form-control" name="confirm_password" placeholder="Confirm Password">
</div>


<button type="button" class=" text-capitalize btn btn-dark">Submit</button>
</div>
</div>
<!-- signup container -->


<?php include './footer.php'; ?>