  <form action="<?php echo base_url(); ?>home/sms" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="mobile" aria-describedby="emailHelp" placeholder="Enter email">
  <span class="error"><?php echo form_error("mobile"); ?></span>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Message</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="message" placeholder="Password"><span class="error"><?php echo form_error("message"); ?></span>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>