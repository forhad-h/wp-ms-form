<?php defined('ABSPATH') or die("Prevent direct access!"); ?>

<div class="tab-pane fade" id="wpmsf-content-6" role="tabpanel" aria-labelledby="wpmsf-tab-6">
  <h2>Vehicle Details</h2>
  <h6>At fault party</h6>

  <div class="form-group">
    <label>Make: <span class="ms-required">*</span></label>
    <input type="text" class="form-control" data-validate="required" name="fpvd_make" >
    <div class="ms-required-error">This field is required.</div>
  </div>

  <div class="form-group">
    <label>Model: <span class="ms-required">*</span></label>
    <input type="text" class="form-control" data-validate="required" name="fpvd_model" >
    <div class="ms-required-error">This field is required.</div>
  </div>

  <div class="form-group">
    <label>Registration Number: <span class="ms-required">*</span></label>
    <input type="text" class="form-control" data-validate="required" name="fpvd_reg_number" >
    <div class="ms-required-error">This field is required.</div>
  </div>

  <div class="form-group">
    <label>Year <span class="ms-required">*</span></label>
    <input type="text" class="form-control" data-validate="required" name="fpvd_year" >
    <div class="ms-required-error">This field is required.</div>
  </div>

  <div class="form-group">
    <label>Colour <span class="ms-required">*</span></label>
    <input type="text" class="form-control" data-validate="required" name="fpvd_colour" >
    <div class="ms-required-error">This field is required.</div>
  </div>

  <hr />

  <h2>Insurance Details for Vehicle at Fault</h2>

  <div class="form-group">
    <label>Insurance Company Name: <span class="ms-required">*</span></label>
    <input type="text" class="form-control" data-validate="required" name="fpvd_company_name" >
    <div class="ms-required-error">This field is required.</div>
  </div>

  <div class="form-group">
    <label>Type of Cover: <span class="ms-required">*</span></label>
    <select class="form-control" data-validate="required" name="fpvd_cover_type" >
      <option>Comprehensive</option>
      <option>Third Party</option>
    </select>
    <div class="ms-required-error">This field is required.</div>
  </div>

  <div class="form-group">
    <label>Policy Number: <span class="ms-required">*</span></label>
    <input type="number" class="form-control" data-validate="required" name="fpvd_policy_number" >
    <div class="ms-required-error">This field is required.</div>
  </div>

  <div class="form-group">
    <label>Claim Number: <span class="ms-required">*</span></label>
    <input type="number" class="form-control" data-validate="required" name="fpvd_claim_number" >
    <div class="ms-required-error">This field is required.</div>
  </div>

</div>
