<?php defined('ABSPATH') or die("Prevent direct access!"); ?>

<div class="tab-pane fade" id="wpmsf-content-5" role="tabpanel" aria-labelledby="wpmsf-tab-5">

    <h2>At Fault Party’s Details</h2>
    <h6>Details of vehicle that collided with your car:</h6>

    <hr />

    <h2>Driver of the Vehicle</h2>

    <div class="form-group">
      <label>Title: <span class="ms-required">*</span></label>
      <select class="form-control" data-validate="required" name="fp_title" >
        <option>Mr</option>
        <option>Mrs</option>
        <option>Ms</option>
        <option>Miss</option>
      </select>
      <div class="ms-required-error">This field is required.</div>
    </div>

    <div class="form-group">
      <label>First name <span class="ms-required">*</span></label>
      <input type="text" class="form-control" data-validate="required" name="fp_first_name" >
      <div class="ms-required-error">This field is required.</div>
    </div>

    <div class="form-group">
      <label>Middle Name</label>
      <input type="text" class="form-control" name="fp_middle_name" >
    </div>

    <div class="form-group">
      <label>Last Name <span class="ms-required">*</span></label>
      <input type="text" class="form-control" data-validate="required" name="fp_last_name" >
      <div class="ms-required-error">This field is required.</div>
    </div>

    <div class="form-group">
      <label>Address <span class="ms-required">*</span></label>
      <input type="text" class="form-control" data-validate="required" name="fp_address" >
      <div class="ms-required-error">This field is required.</div>
    </div>

    <div class="form-group">
      <label>Postcode <span class="ms-required">*</span></label>
      <input type="number" class="form-control" data-validate="required" name="fp_postcode" >
      <div class="ms-required-error">This field is required.</div>
    </div>

    <div class="form-group">
      <label>Mobile <span class="ms-required">*</span></label>
      <input type="number" class="form-control" data-validate="required" name="fp_mobile" >
      <div class="ms-required-error">This field is required.</div>
    </div>

    <div class="form-group">
      <label>Home Phone <span class="ms-required">*</span></label>
      <input type="number" class="form-control" data-validate="required" name="fp_home_phone" >
      <div class="ms-required-error">This field is required.</div>
    </div>

    <div class="form-group">
      <label>Work Phone</label>
      <input type="number" class="form-control" name="fp_work_phone" >
    </div>

    <div class="form-group">
      <label>Email: <span class="ms-required">*</span></label>
      <input type="email" class="form-control" data-validate="required" name="fp_email" >
      <div class="ms-required-error">This field is required.</div>
    </div>

    <div class="form-group">
      <label>Drivers License Number and Type: <span class="ms-required">*</span></label>
      <input type="text" class="form-control" data-validate="required"  name="fp_driver_license" >
      <div class="ms-required-error">This field is required.</div>
    </div>
</div>
