<?php defined('ABSPATH') or die("Prevent direct access!"); ?>

<div class="tab-pane fade show active" id="wpmsf-content-1" role="tabpanel" aria-labelledby="wpmsf-tab-1">

  <h2>Your Contact Details</h2>

  <div class="form-group">
    <label>Title: <span class="ms-required">*</span></label>
    <select class="form-control" data-validate="required" name="cd_title" >
      <option>Mr</option>
      <option>Mrs</option>
      <option>Ms</option>
      <option>Miss</option>
    </select>
    <div class="ms-required-error">This field is required.</div>
  </div>

  <div class="form-group">
    <label>First name <span class="ms-required">*</span></label>
    <input type="text" class="form-control" data-validate="required" name="cd_first_name" >
    <div class="ms-required-error">This field is required.</div>
  </div>

  <div class="form-group">
    <label>Middle Name</label>
    <input type="text" class="form-control" name="cd_middle_name" >
  </div>

  <div class="form-group">
    <label>Last Name <span class="ms-required">*</span></label>
    <input type="text" class="form-control" data-validate="required" name="cd_last_name" >
    <div class="ms-required-error">This field is required.</div>
  </div>

  <div class="form-group">
    <label>Home Address <span class="ms-required">*</span></label>
    <input type="text" class="form-control" data-validate="required" name="cd_home_address" >
    <div class="ms-required-error">This field is required.</div>
  </div>

  <div class="form-group">
    <label>State <span class="ms-required">*</span></label>
    <input type="text" class="form-control" data-validate="required" name="cd_state" >
    <div class="ms-required-error">This field is required.</div>
  </div>

  <div class="form-group">
    <label>Postcode <span class="ms-required">*</span></label>
    <input type="number" class="form-control" data-validate="required" name="cd_postcode" >
    <div class="ms-required-error">This field is required.</div>
  </div>

  <div class="form-group">
    <label>Mobile Phone <span class="ms-required">*</span></label>
    <input type="number" class="form-control" data-validate="required" name="cd_mobile_phone" >
    <div class="ms-required-error">This field is required.</div>
  </div>

  <div class="form-group">
    <label>Home Phone <span class="ms-required">*</span></label>
    <input type="number" class="form-control" data-validate="required" name="cd_home_phone" >
    <div class="ms-required-error">This field is required.</div>
  </div>

  <div class="form-group">
    <label>Work Phone <span class="ms-required">*</span></label>
    <input type="number" class="form-control" data-validate="required" name="cd_work_phone" >
    <div class="ms-required-error">This field is required.</div>
  </div>

  <div class="form-group">
    <label>Email: <span class="ms-required">*</span></label>
    <input type="email" class="form-control" data-validate="required" name="cd_email" >
    <div class="ms-required-error">This field is required.</div>
  </div>

  <div class="form-group">
    <label>Drivers License Number and Type: <span class="ms-required">*</span></label>
    <input type="text" class="form-control" data-validate="required" name="cd_driver_license" >
    <div class="ms-required-error">This field is required.</div>
  </div>

  <hr />

  <h2>Time of Accident</h2>

  <div class="form-group">
    <label>Date of Accident: <span class="ms-required">*</span></label>
    <div class="input-group date" id="dateOfAccident" data-target-input="nearest">
      <input type="text" class="form-control datetimepicker-input ms_date_input" data-target="#dateOfAccident"  data-validate="required" name="cd_accident_date" />
      <div class="input-group-append" data-target="#dateOfAccident" data-toggle="datetimepicker">
        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Day of Accident: <span class="ms-required">*</span></label>
    <select class="form-control" data-validate="required" name="cd_accident_day" >
      <option value="Monday" <?= date('w') == 1 ? 'selected' : ''; ?>>Monday</option>
      <option value="Tuesday" <?= date('w') == 2 ? 'selected' : ''; ?>>Tuesday</option>
      <option value="Wednesday" <?= date('w') == 3 ? 'selected' : ''; ?>>Wednesday</option>
      <option value="Thursday" <?= date('w') == 4 ? 'selected' : ''; ?>>Thursday</option>
      <option value="Friday" <?= date('w') == 5 ? 'selected' : ''; ?>>Friday</option>
      <option value="Saturday" <?= date('w') == 6 ? 'selected' : ''; ?>>Saturday</option>
      <option value="Sunday" <?= date('w') == 0 ? 'selected' : ''; ?>>Sunday</option>
    </select>
    <div class="ms-required-error">This field is required.</div>
  </div>

  <div class="form-group">
    <label>Approximate Time of Accident: <span class="ms-required">*</span></label>
    <div class="input-group date" id="timeOfAccident" data-target-input="nearest">
        <input type="text" class="form-control datetimepicker-input ms_time_input" data-target="#timeOfAccident"  data-validate="required" name="cd_accident_time" />
        <div class="input-group-append" data-target="#timeOfAccident" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
        </div>
    </div>
  </div>
</div>
