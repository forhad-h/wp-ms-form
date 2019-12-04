<?php defined('ABSPATH') or die("Prevent direct access!"); ?>

<div class="tab-pane fade" id="wpmsf-content-4" role="tabpanel" aria-labelledby="wpmsf-tab-4">
  <h2>Insurance Details for the Vehicle</h2>

  <div class="form-group">
    <label>Insurance Company Name: <span class="ms-required">*</span></label>
    <input type="text" class="form-control" data-validate="required" name="id_company_name" >
    <div class="ms-required-error">This field is required.</div>
  </div>

  <div class="form-group">
    <label>Type of Cover: <span class="ms-required">*</span></label>
    <select class="form-control" data-validate="required" name="id_cover_type" >
      <option>Comprehensive</option>
      <option>Third Party</option>
    </select>
    <div class="ms-required-error">This field is required.</div>
  </div>

  <div class="form-group">
    <label>Policy Number: <span class="ms-required">*</span></label>
    <input type="number" class="form-control" data-validate="required" name="id_policy_num" >
    <div class="ms-required-error">This field is required.</div>
  </div>

  <div class="form-group">
    <label>Claim Number: <span class="ms-required">*</span></label>
    <input type="number" class="form-control" data-validate="required"  name="id_claim_num" >
    <div class="ms-required-error">This field is required.</div>
  </div>

  <div class="form-group">
    <label>Registration Papers: (allowed file formats: docx, pdf)</label>
    <input type="file" name="id_reg_papers" >
  </div>

  <div class="form-group">
    <label>Driver's License Scan Number: (allowed file formats: docx, pdf)</label>
    <input type="file" name="id_licencse_scan" >
  </div>

</div>
