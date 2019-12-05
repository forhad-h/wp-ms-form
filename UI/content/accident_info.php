<?php defined('ABSPATH') or die("Prevent direct access!"); ?>

<div class="tab-pane fade" id="wpmsf-content-3" role="tabpanel" aria-labelledby="wpmsf-tab-3">
  <h2>Accident Information</h2>
  <p>Driver of Your Vehicle (if vehicle was being driven at the time of the incident):</p>

  <div class="ms_radio_btn_group">
    <div class="form-check">
      <input class="form-check-input ms_cond_hide_btn" type="radio" id="AIitWasMe" value="me" checked data-target="1" name="ai_me_or_not">
      <label class="form-check-label" for="AIitWasMe" data-target="1">
        It was me
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input ms_cond_show_btn" type="radio" id="AIitWasntMe" value="not-me" data-target="1" name="ai_me_or_not">
      <label class="form-check-label" for="AIitWasntMe">
        It wasn't me
      </label>
    </div>
  </div>


  <div class="ms_cond_content" id="ms-cond-content-1">
    <div class="form-group">
      <label>Title:</label>
      <select class="form-control" name="ai_title" >
        <option>Mr</option>
        <option>Mrs</option>
        <option>Ms</option>
        <option>Miss</option>
      </select>
    </div>

    <div class="form-group">
      <label>First name</label>
      <input type="text" class="form-control" name="ai_first_name" >
    </div>

    <div class="form-group">
      <label>Middle Name</label>
      <input type="text" class="form-control" name="ai_middle_name" >
    </div>

    <div class="form-group">
      <label>Last Name</label>
      <input type="text" class="form-control" name="ai_last_name" >
    </div>

    <div class="form-group">
      <label>Address</label>
      <input type="text" class="form-control" name="ai_address" >
    </div>

    <div class="form-group">
      <label>Postcode</label>
      <input type="number" class="form-control" name="ai_postcode" >
    </div>

    <div class="form-group">
      <label>Mobile</label>
      <input type="number" class="form-control" name="ai_mobile" >
    </div>

    <div class="form-group">
      <label>Home Phone</label>
      <input type="number" class="form-control" name="ai_home_phone" >
    </div>

    <div class="form-group">
      <label>Work Phone</label>
      <input type="number" class="form-control" name="ai_work_phone" >
    </div>

    <div class="form-group">
      <label>Email:</label>
      <input type="email" class="form-control" name="ai_email" >
    </div>

    <div class="form-group">
      <label>Drivers License Number and Type:</label>
      <input type="text" class="form-control" name="ai_driver_license" >
    </div>
  </div>

</div>
