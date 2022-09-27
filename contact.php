<?php include './header.php'; ?>
<!-- contact container -->
<div class="container contact_content py-5">
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

<div class="form-group mb-3">
<label for="message_id" class="my-2">Message</label>
<textarea id="message_id" class="form-control" name="message" placeholder="Message" rows="3"></textarea>
</div>

<button type="button" class=" text-capitalize btn btn-dark">Send</button>
</div>
</div>
<!-- contact container -->


<?php include './footer.php'; ?>