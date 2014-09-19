<div class="col-md-10 col-md-offset-1">
  <?php
  if(is_object($user)){
    ?>
    <script>
      $(function() {
        $( "#datepicker" ).datepicker({ 
          maxDate: "-18y",
          changeMonth: true,
          changeYear: true
        });
      });
    </script>

    <?php
      $update_user_response = $this->session->flashdata('update_user_response');
      echo $update_user_response;
      echo form_open('users/update_user/'.$user->user_id, array('class'=>'form-horizontal', 'role'=>'form'));
    ?>
        <legend>Update User</legend>
        <div class="form-group">
          <label for="surname" class="col-sm-2 control-label">Surname</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="surname" value="<?php echo $user->surname; ?>" placeholder="Enter Surname">
            <?php echo form_error('surname'); ?>
          </div>
        </div>
        <div class="form-group">
          <label for="other_names" class="col-sm-2 control-label">Other Names</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="other_names" value="<?php echo $user->other_names; ?>" placeholder="Enter Other Names">
            <?php echo form_error('other_names'); ?>
          </div>
        </div>
        <div class="form-group">
          <label for="gender" class="col-sm-2 control-label">Gender</label>
          <div class="col-sm-10">
            <select name="gender" class="form-control">
              <option value="">Select Gender</option>
              <option value="1" <?php if($user->gender === '1'){ echo 'selected'; } ?>>Male</option>
              <option value="2" <?php if($user->gender === '2'){ echo 'selected'; } ?>>Female</option>
            </select>
            <?php echo form_error('gender'); ?>
          </div>
        </div>
        <div class="form-group">
          <label for="birthday" class="col-sm-2 control-label">Birthday</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="datepicker" name="birthday" value="<?php echo $user->birthday; ?>" placeholder="Select Birthday">
            <?php echo form_error('birthday'); ?>
          </div>
        </div>
        <div class="form-group">
          <label for="sub_county" class="col-sm-2 control-label">Locale</label>
          <div class="col-sm-10">
            <select name="sub_county" class="form-control">
              <option value="">Select Sub County</option>
              <option value="1" <?php if($user->sub_county_id === '1'){ echo 'selected'; } ?>>Test</option>
            </select>
            <?php echo form_error('sub_county'); ?>
          </div>
        </div>
        <div class="form-group">
          <label for="phone" class="col-sm-2 control-label">Phone</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="phone" value="<?php echo $user->phone; ?>" placeholder="Enter Phone Number">
            <?php echo form_error('phone'); ?>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" name="update_user_btn" value="Update User" class="btn btn-primary">
          </div>
        </div>
      <?php 
      echo form_close();
   }else{
    echo '<p class="text-danger">User not found!</p>';
   }
  ?>
  </div>
</div>
  